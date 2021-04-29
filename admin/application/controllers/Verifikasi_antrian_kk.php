<?php
include_once APPPATH . "/controllers/Guide.php";


class Verifikasi_antrian_kk extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_verifikasi_kk");
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('status ', 0);
        $data['data'] = $this->db->get('antrian_kk')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/Verifikasi_antrian_kk_view', $data);
        $this->load->view('templates/footer');
    }

    public function proses($param = "")
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('id', $param);
        $data['data'] = $this->db->get('antrian_kk')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/Verifikasi_antrian_kk_proses', $data);
        $this->load->view('templates/footer');
    }

    public function verif($id = "")
    {
        $this->db->where('id', $id);
        $this->db->set('status', 2);
        if ($this->db->update('antrian_kk')) {
            $this->flash_success("Proses Verifikasi KK Berhasil");
            redirect('verifikasi_antrian_kk');
        }
    }
    public function tolak($id = "", $catatan = "tidak ada catatan dari petugas dispenduk.")
    {
        // $catatan = str_replace('%', ' ', $catatan);
        $this->db->where('id', $id);
        $this->db->set('status', 1);
        $this->db->set('catatan_penolakan', $catatan);
        if ($this->db->update('antrian_kk')) {
            $this->flash_success("Proses Tolak KK Berhasil");
            redirect('verifikasi_antrian_kk');
        }
    }
}
