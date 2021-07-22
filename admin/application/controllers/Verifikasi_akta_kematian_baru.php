<?php
include_once APPPATH . "/controllers/Guide.php";


class Verifikasi_akta_kematian_baru extends Guide
{
    var $controller_dir = 'verifikasi_akta_kematian_baru';

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_verifikasi_ktp");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('status ', 0);
        $this->db->where('tanggal_antrian ', date('Y-m-d'));
        $data['data'] = $this->db->get('akta_kematian_baru')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/verifikasi_akta_kematian_baru_view', $data);
        $this->load->view('templates/footer');
    }

    public function proses($param = "")
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('id', $param);
        $data['data'] = $this->db->get('akta_kematian_baru')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/verifikasi_akta_kematian_baru_proses', $data);
        $this->load->view('templates/footer');
    }

    public function verif($id = "")
    {
        $this->db->where('id', $id);
        $this->db->set('status', 2);
        if ($this->db->update('akta_kematian_baru')) {
            $this->db->where('id', $id);
            $user = $this->db->get('akta_kematian_baru')->row_array();
            $qrval = $user['nama'] . ',' . $user['email'] . ',' . $user['nohp'] . ',' . 'sa7d4c44a3ajads6ddd445ca0d1b65ca' . ',' . 'Akta' . ',' . $id . ',' . 'akta_kematian_baru';


            $this->sendEmail(['email' => $user['email'], 'message' => "Pengajuan antrian Akta Kematian Baru anda telah diverifikasi oleh petugas, Simpan QR Code lalu datang ke kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Mojokerto untuk scan dan mendapat antrian anda.", 'qrval' => $qrval, 'istolak' => false]);
            $this->flash_success("Proses Verifikasi Akta Berhasil");
            redirect('verifikasi_akta_kematian_baru');
        }
    }
    public function tolak()
    {
        $id = $_POST['id'];
        $catatan = (!empty($_POST['catatan'])) ? $_POST['catatan'] : "Pengajuan anda di tolak";

        $catatan = urldecode($catatan);
        $this->db->where('id', $id);
        $this->db->set('status', 1);
        $this->db->set('catatan_penolakan', $catatan);
        if ($this->db->update('akta_kematian_baru')) {
            $user = $this->db->get('akta_kematian_baru')->row_array();
            $this->sendEmail(['email' => $user['email'], 'message' => $catatan, 'istolak' => true]);
            $this->flash_success("Proses Tolak Akta Berhasil");
            redirect('verifikasi_akta_kematian_baru');
        }
    }
}
