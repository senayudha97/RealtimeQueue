<?php
include_once APPPATH . "/controllers/Guide.php";


class KIA_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_KIA_handler");
    }

    public function KIA_pemula()
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
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/kia/kia_pemula/');


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/kia/kia_pemula/');

        // do Upload Pasfoto
        $namaSementara = $_FILES['pasfoto']['tmp_name'];
        $temp = explode(".", $_FILES["pasfoto"]["name"]);
        $newfilenamepasfoto = $datapost['nama'] . '_pasfoto_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['pasfoto']['type'];
        $this->upload_file($namaSementara, $newfilenamepasfoto, $file_type, './file_upload/kia/kia_pemula/');

        // do Upload Pasfoto
        $namaSementara = $_FILES['surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["surat_nikah"]["name"]);
        $newfilenamesurat_nikah = $datapost['nama'] . '_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfilenamesurat_nikah, $file_type, './file_upload/kia/kia_pemula/');

        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_pasfoto'] = $newfilenamepasfoto;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;
        $datapost['file_surat_nikah'] = $newfilenamesurat_nikah;

        if ($this->Tbl_KIA_handler->insert_KIA_pemula($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function KIA_kehilangan()
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
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/kia_hilang/');

        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/kia_hilang/');

        // do Upload Surat Hilang
        $namaSementara = $_FILES['surat_kehilangan']['tmp_name'];
        $temp = explode(".", $_FILES["surat_kehilangan"]["name"]);
        $newfilesuratkehilangan = $datapost['nama'] . '_surat_hilang_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['surat_kehilangan']['type'];
        $this->upload_file($namaSementara, $newfilesuratkehilangan, $file_type, './file_upload/kia_hilang/');

        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;
        $datapost['file_surat_hilang'] = $newfilesuratkehilangan;


        if ($this->Tbl_KIA_handler->insert_KIA_kehilangan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function KIA_rusak()
    {
        $datapost = $this->input->post('input');
        $datapost['tanggal_antrian'] = date('Y-m-d');

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfilenamekk, $file_type, './file_upload/kia_hilang/');


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfilenameakta, $file_type, './file_upload/kia_hilang/');

        // do Upload kia Lama
        $namaSementara = $_FILES['kia_lama']['tmp_name'];
        $temp = explode(".", $_FILES["kia_lama"]["name"]);
        $newfilekialama = $datapost['nama'] . '_kia_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kia_lama']['type'];
        $this->upload_file($namaSementara, $newfilekialama, $file_type, './file_upload/kia_hilang/');

        // Input Nama Baru File ke List $datapost
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;
        $datapost['file_kia_lama'] = $newfilekialama;


        if ($this->Tbl_KIA_handler->insert_KIA_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
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
}
