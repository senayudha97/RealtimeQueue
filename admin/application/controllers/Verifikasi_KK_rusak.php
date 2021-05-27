<?php
include_once APPPATH . "/controllers/Guide.php";


class Verifikasi_KK_rusak extends Guide
{
    var $controller_dir = 'verifikasi_KK_rusak';

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
        $data['data'] = $this->db->get('antrian_ktp')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/verifikasi_KK_rusak_view', $data);
        $this->load->view('templates/footer');
    }

    public function proses($param = "")
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('id', $param);
        $data['data'] = $this->db->get('antrian_ktp')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/verifikasi_KK_rusak_proses', $data);
        $this->load->view('templates/footer');
    }

    public function verif($id = "")
    {
        $this->db->where('id', $id);
        $this->db->set('status', 2);
        if ($this->db->update('antrian_ktp')) {
            $this->db->where('id', $id);
            $user = $this->db->get('antrian_ktp')->row_array();
            $qrval = $user['nama'] . ',' . $user['email'] . ',' . $user['nohp'] . ',' . 'sa7d4c44a3ajads6ddd445ca0d1b65ca' . ',' . 'ktp' . ',' . $id;
            $this->sendEmail(['email' => $user['email'], 'message' => "Pengajuan antrian anda telah diverifikasi oleh petugas, Simpan QR Code lalu datang ke kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Mojokerto untuk scan dan mendapat antrian anda.", 'qrval' => $qrval, 'istolak' => false]);
            $this->flash_success("Proses Verifikasi KTP Berhasil");
            redirect('verifikasi_KK_rusak');
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
        if ($this->db->update('antrian_ktp')) {
            $user = $this->db->get('antrian_ktp')->row_array();
            $this->sendEmail(['email' => $user['email'], 'message' => $catatan, 'istolak' => true]);
            $this->flash_success("Proses Tolak KTP Berhasil");
            redirect('verifikasi_KK_rusak');
        }
    }
}
