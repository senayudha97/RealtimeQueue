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
        if ($this->Tbl_ktp_handler->insert_ktp_pemula($datapost) == 1) {
            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    public function ktp_kehilangan()
    {
        $datapost = $this->input->post('input');
        if ($this->Tbl_ktp_handler->insert_ktp_kehilangan($datapost) == 1) {
            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    public function ktp_rusak()
    {
        $datapost = $this->input->post('input');
        if ($this->Tbl_ktp_handler->insert_ktp_rusak($datapost) == 1) {
            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
            exit;
        }
    }

    //KTP Baru
    public function ktp_baru()
    {
        $datapost = $this->input->post('input');


        if (empty($datapost['tanggal_antrian'])) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga1']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga1"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga1']['type'];
        $this->upload_kk1($namaSementara, $newfilenamekk, $file_type);


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran1']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran1"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran1']['type'];
        $this->upload_akta1($namaSementara, $newfilenameakta, $file_type);

        // Input Nama Baru File ke List $datapost
        // $datapost['tanggal_antrian'] = date('Y-m-d');
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;


        if ($this->Tbl_ktp_handler->insert_ktp_baru($datapost) == 1) {
            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    function upload_kk1($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KK yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    function upload_akta1($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File Akata yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }


    //KTP Perubahan
    public function ktp_perubahan()
    {
        $datapost = $this->input->post('input');

        if (empty($datapost['tanggal_antrian'])) {
            $datapost['tanggal_antrian'] = date('Y-d-m');
        }

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga1']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga1"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga1']['type'];
        $this->upload_kk2($namaSementara, $newfilenamekk, $file_type);


        // do Upload KTP Lama
        $namaSementara = $_FILES['ktp_lama']['tmp_name'];
        $temp = explode(".", $_FILES["ktp_lama"]["name"]);
        $newfilenamektplama = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['ktp_lama']['type'];
        $this->upload_ktp_lama($namaSementara, $newfilenamektplama, $file_type);

        // Input Nama Baru File ke List $datapost
        // $datapost['tanggal_antrian'] = date('Y-m-d');
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_ktp_lama'] = $newfilenamektplama;


        if ($this->Tbl_ktp_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    function upload_kk2($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KK yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_perubahan/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    function upload_ktp_lama($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KTP Lama yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_perubahan/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }
}
