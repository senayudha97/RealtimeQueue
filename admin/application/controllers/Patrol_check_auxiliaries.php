<?php
include_once APPPATH . "/controllers/Guide.php";

class Patrol_check_auxiliaries extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_ampenan");
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_input', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->select('*');
        $this->db->from('patrol_check_auxiliaries');
        $this->db->join('user', 'user.id = patrol_check_auxiliaries.insert_by');
        $data['data'] = $this->db->get('')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ampenan/patrol_check_auxiliaries_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ampenan/patrol_check_auxiliaries_add', $data);
            $this->load->view('templates/footer');
        } else {
            $arr_data = $this->input->post('input');
            $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);

            $this->Tbl_ampenan->insert_patrol_check_auxiliaries($arr_data);
            $this->flash_success('Menambah Patrol Check Auxiliaries');
            redirect('patrol_check_auxiliaries');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('pk_patrol_check_auxiliaries', $param);
        $data['edit'] = $this->db->get('patrol_check_auxiliaries')->row_array();
        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ampenan/patrol_check_auxiliaries_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_ampenan->update_patrol_check_auxiliaries($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('patrol_check_auxiliaries');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_ampenan->delete_patrol_check_auxiliaries($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('patrol_check_auxiliaries');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('patrol_check_auxiliaries');
        }
    }

    public function ajax()
    {
        $id = $_GET['data'];


        $result = $this->db->get_where("patrol_check_auxiliaries", ['pk_patrol_check_auxiliaries' => $id])->row_array();

        echo json_encode($result);
    }

    public function report()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $datapost    = $this->input->post('tgl');
        // Queries
        $awal = date_to_db($datapost['awal']);
        // $akhir = date_to_db($datapost['akhir']);
        $param['log'] = $this->db->query("SELECT * FROM patrol_check_auxiliaries WHERE tanggal_input = '$awal' AND patrol_check_auxiliaries.is_delete = $this->is_delete ORDER BY tanggal_input ASC")->result_array();
        $param['awal']  = $awal;
        // $param['akhir'] = $akhir;
        $param['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST['excel'])) {
            $xl = $this->PHPExcelinit();

            $xl->getProperties()->setCreator("E-Logsheet PLN");
            $xl->getProperties()->setLastModifiedBy($user['name']);
            $xl->getProperties()->setTitle("Laporan Excel");

            // Load Excel 
            require(APPPATH . 'excel/patrol_check_auxiliaries.php');

            // Execute to download the file
            $xl->getActiveSheet()->setTitle("Laporan Excel");

            $filename = "patrol_check_auxiliaries " . date('d-m-Y') . '.xlsx';
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = PHPExcel_IOFactory::createWriter($xl, 'Excel2007');
            $writer->save('php://output');
        } else {
            // Page Config
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $mpdf->setFooter('{PAGENO}');

            // Printout
            $filename = 'Log Beban Penyulang' . date('d-m-Y');
            $data = $this->load->view('ampenan/patrol_check_auxiliaries', $param, TRUE);
            $mpdf->WriteHTML($data);
            $mpdf->Output($filename, 'I');
        }
    }
}
