<?php
include_once APPPATH . "/controllers/Guide.php";


class KTP_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_ktp_handler");
    }

    // KTP PEMULA
    public function ktp_pemula()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/ktp/ktp_pemula/');


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/ktp/ktp_pemula/');

        // do Upload file_form
        $namaSementara = $_FILES['file_form']['tmp_name'];
        $temp = explode(".", $_FILES["file_form"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_form_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_form']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/ktp/ktp_pemula/');
        $datapost['file_form'] = $newfileupload;

        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;


        if ($this->Tbl_ktp_handler->insert_ktp_pemula($datapost) == 1) {
            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    public function ktp_kehilangan()
    {
        $datapost = $this->input->post('input');
        $datapost['tanggal_antrian'] = date('Y-m-d');

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/ktp/ktp_hilang/');

        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/ktp/ktp_hilang/');

        // do Upload Surat Hilang
        $namaSementara = $_FILES['surat_kehilangan']['tmp_name'];
        $temp = explode(".", $_FILES["surat_kehilangan"]["name"]);
        $newfilesuratkehilangan = $datapost['nama'] . '_surat_hilang_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['surat_kehilangan']['type'];
        $this->upload_file($namaSementara, $newfilesuratkehilangan, $file_type, './file_upload/ktp/ktp_hilang/');

        // do Upload file_form
        $namaSementara = $_FILES['file_form']['tmp_name'];
        $temp = explode(".", $_FILES["file_form"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_form_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_form']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/ktp/ktp_hilang/');
        $datapost['file_form'] = $newfileupload;


        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;
        $datapost['file_surat_hilang'] = $newfilesuratkehilangan;


        if ($this->Tbl_ktp_handler->insert_ktp_kehilangan($datapost) == 1) {
            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    public function ktp_rusak()
    {
        $datapost = $this->input->post('input');
        $datapost['tanggal_antrian'] = date('Y-m-d');

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/ktp/ktp_rusak/');


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/ktp/ktp_rusak/');

        // do Upload KTP Lama
        $namaSementara = $_FILES['ktp_lama']['tmp_name'];
        $temp = explode(".", $_FILES["ktp_lama"]["name"]);
        $newfilektplama = $datapost['nama'] . '_ktp_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['ktp_lama']['type'];
        $this->upload_file($namaSementara, $newfilektplama, $file_type, './file_upload/ktp/ktp_rusak/');

        // do Upload file_form
        $namaSementara = $_FILES['file_form']['tmp_name'];
        $temp = explode(".", $_FILES["file_form"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_form_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_form']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/ktp/ktp_rusak/');
        $datapost['file_form'] = $newfileupload;


        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;
        $datapost['file_ktp_lama'] = $newfilektplama;

        if ($this->Tbl_ktp_handler->insert_ktp_rusak($datapost) == 1) {
            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    function upload_file($namaSementara, $newfilename, $file_type, $dirUpload)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    // Get Form File
    public function formKTP()
    {
        echo json_encode($this->db->query("SELECT file FROM form_pengajuan WHERE nama_form LIKE '%ktp%'")->result_array());
    }
}
