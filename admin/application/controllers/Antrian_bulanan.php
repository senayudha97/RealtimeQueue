
<?php
include_once APPPATH . "/controllers/Guide.php";

class Antrian_bulanan extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_antrian_bulanan");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $data['data'] = $this->db->get('antrian_bulanan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('antrian_bulanan/Antrian_bulanan_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('isSubmit', 'isSubmit', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('antrian_bulanan/Antrian_bulanan_add', $data);
            $this->load->view('templates/footer');
        } else {
            $arr_data = $this->input->post('input');
            $this->Tbl_antrian_bulanan->insert_antrian_bulanan($arr_data);
            $this->flash_success('Menambah Shift Meeting');
            redirect('antrian_bulanan');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('pk_antrian_bulanan', $param);
        $data['edit'] = $this->db->get('antrian_bulanan')->row_array();
        $this->form_validation->set_rules('input[tanggal_antrian]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('antrian_bulanan/antrian_bulanan_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_antrian'] = date_to_db($input['tanggal_antrian']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_antrian_bulanan->update_antrian_bulanan($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('antrian_bulanan');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_antrian_bulanan->delete_antrian_bulanan($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('antrian_bulanan');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('antrian_bulanan');
        }
    }

    public function runApp_antrian()
    {
        $thisMonth = date('Y-m');
        $thisMonth = $this->db->query("SELECT tanggal_antrian FROM antrian_bulanan WHERE tanggal_antrian LIKE '%$thisMonth%'")->num_rows() + 1;

        $countDayinmonth = cal_days_in_month(CAL_GREGORIAN, 3, 2021);

        $isSetup = $thisMonth == $countDayinmonth ? 1 : 0;

        if ($isSetup == 1) {
            $this->db->set('status', 1);
            $this->db->where('id', 1);
            if ($this->db->update('core_status')) {
                echo 1;
            }
        } else {
            echo 0;
        }
    }

    public function stopApp_antrian()
    {
        $thisMonth = date('Y-m');

        $thisMonth = $this->db->query("SELECT tanggal_antrian FROM antrian_bulanan WHERE tanggal_antrian LIKE '%$thisMonth%'")->num_rows() + 1;

        $countDayinmonth = cal_days_in_month(CAL_GREGORIAN, 3, 2021);

        $isSetup = $thisMonth == $countDayinmonth ? 1 : 0;

        if ($isSetup == 1) {
            $this->db->set('status', 0);
            $this->db->where('id', 1);
            if ($this->db->update('core_status')) {
                echo 1;
            }
        } else {
            echo 0;
        }
    }
}
