<?php
include_once APPPATH . "/controllers/Guide.php";


class KK_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_kk_handler");
        date_default_timezone_set("Asia/Bangkok");
    }

    public function kk_kehilangan() // POS
    {
        $datapost = $this->input->post('input');
        $datapost['tanggal_antrian'] = date('Y-m-d');

        // do Upload Surat Hilang
        $namaSementara = $_FILES['surat_kehilangan']['tmp_name'];
        $temp = explode(".", $_FILES["surat_kehilangan"]["name"]);
        $newfilesuratkehilangan = $datapost['nohp'] . '_surat_hilang_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['surat_kehilangan']['type'];
        $this->upload_file($namaSementara, $newfilesuratkehilangan, $file_type, './file_upload/kk/kk_hilang/');
        $datapost['file_surat_hilang'] = $newfilesuratkehilangan;

        // do Upload Fotocopy KK
        $namaSementara = $_FILES['fotocopy_kk']['tmp_name'];
        $temp = explode(".", $_FILES["fotocopy_kk"]["name"]);
        $newfileftckk = $datapost['nohp'] . '_ftcpp_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['fotocopy_kk']['type'];
        $this->upload_file($namaSementara, $newfileftckk, $file_type, './file_upload/kk/kk_hilang/');
        $datapost['file_fotocopy_kk'] = $newfileftckk;

        // do Upload KTP Asli
        $namaSementara = $_FILES['ktp_asli']['tmp_name'];
        $temp = explode(".", $_FILES["ktp_asli"]["name"]);
        $newfilektpasli = $datapost['nohp'] . '_ktp_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['ktp_asli']['type'];
        $this->upload_file($namaSementara, $newfilektpasli, $file_type, './file_upload/kk/kk_hilang/');
        $datapost['file_ktp_asli'] = $newfilektpasli;

        // do Upload Surat 3
        $namaSementara = $_FILES['surat_3']['tmp_name'];
        $temp = explode(".", $_FILES["surat_3"]["name"]);
        $newfilesurat3 = $datapost['nohp'] . '_surat_3_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['surat_3']['type'];
        $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_hilang/');
        $datapost['file_surat_3'] = $newfilesurat3;

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfilesurat3 = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_hilang/');
        $datapost['file_sptjm'] = $newfilesurat3;

        // // do Upload ijazah
        // $namaSementara = $_FILES['ijazah']['tmp_name'];
        // $temp = explode(".", $_FILES["ijazah"]["name"]);
        // $newfilesurat3 = $datapost['nohp'] . '_ijazah_' . round(microtime(true)) . '.' . end($temp);
        // $file_type = $_FILES['ijazah']['type'];
        // $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_hilang/');
        // $datapost['file_ijazah'] = $newfilesurat3;



        if ($this->Tbl_kk_handler->insert_kk_kehilangan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_rusak() // POS
    {
        $datapost = $this->input->post('input');
        $datapost['tanggal_antrian'] = date('Y-m-d');

        // do Upload file_kk_rusak
        $namaSementara = $_FILES['file_kk_rusak']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk_rusak"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_rusak_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk_rusak']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_kk_rusak'] = $newfileupload;

        // do Upload file_surat3
        $namaSementara = $_FILES['file_surat3']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat3"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat3_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat3']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_surat3'] = $newfileupload;

        // do Upload file_surat3
        $namaSementara = $_FILES['file_surat3']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat3"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat3_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat3']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_surat3'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_akta_kelahiran
        $namaSementara = $_FILES['file_akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_kelahiran"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_kelahiran_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_akta_kelahiran'] = $newfileupload;

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfilesurat3 = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_rusak/');
        $datapost['file_sptjm'] = $newfilesurat3;



        if ($this->Tbl_kk_handler->insert_kk_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_perubahan_data()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kk
        $namaSementara = $_FILES['file_kk']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
        $datapost['file_kk'] = $newfileupload;

        // do Upload file_ktp
        $namaSementara = $_FILES['file_ktp']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
        $datapost['file_ktp'] = $newfileupload;

        // do Upload file_akta_kelahiran
        $namaSementara = $_FILES['file_akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_kelahiran"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_kelahiran_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
        $datapost['file_akta_kelahiran'] = $newfileupload;

        // do Upload file_surat3
        $namaSementara = $_FILES['file_surat3']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat3"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat3_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat3']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
        $datapost['file_surat3'] = $newfileupload;

        // do Upload file_surat_pindah_agama
        if ($_FILES['file_surat_pindah_agama']['tmp_name'] != "") {
            $namaSementara = $_FILES['file_surat_pindah_agama']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pindah_agama"]["name"]);
            $newfileupload = $datapost['nohp'] . '_surat_pindah_agama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pindah_agama']['type'];
            $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
            $datapost['file_surat_pindah_agama'] = $newfileupload;
        }

        // do Upload file_ijazah
        if ($_FILES['file_ijazah']['tmp_name'] != "") {
            $namaSementara = $_FILES['file_ijazah']['tmp_name'];
            $temp = explode(".", $_FILES["file_ijazah"]["name"]);
            $newfileupload = $datapost['nohp'] . '_surat_pindah_agama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_ijazah']['type'];
            $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_perubahan_data/');
            $datapost['file_ijazah'] = $newfileupload;
        }

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfilesurat3 = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_perubahan_data/');
        $datapost['file_sptjm'] = $newfilesurat3;


        if ($this->Tbl_kk_handler->insert_kk_perubahan_data($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_pecah_1desa()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kk_suami
        $namaSementara = $_FILES['file_kk_suami']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk_suami"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_suami_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk_suami']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_kk_suami'] = $newfileupload;

        // do Upload file_kk_istri
        $namaSementara = $_FILES['file_kk_istri']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk_istri"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_istri_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk_istri']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_kk_istri'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah_suami
        $namaSementara = $_FILES['file_ijazah_suami']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_suami"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_suami_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_suami']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_ijazah_suami'] = $newfileupload;

        // do Upload file_ijazah_istri
        $namaSementara = $_FILES['file_ijazah_istri']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_istri"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_istri_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_istri']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_ijazah_istri'] = $newfileupload;

        // do Upload file_akta
        $namaSementara = $_FILES['file_akta']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_akta'] = $newfileupload;

        // do Upload file_surat_nikah_ortu_suami
        $namaSementara = $_FILES['file_surat_nikah_ortu_suami']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah_ortu_suami"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_ortu_suami_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah_ortu_suami']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_surat_nikah_ortu_suami'] = $newfileupload;

        // do Upload file_surat_nikah_ortu_istri
        $namaSementara = $_FILES['file_surat_nikah_ortu_istri']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah_ortu_istri"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_ortu_istri_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah_ortu_istri']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_surat_nikah_ortu_istri'] = $newfileupload;

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfilesurat3 = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfilesurat3, $file_type, './file_upload/kk/kk_pecah1desa/');
        $datapost['file_sptjm'] = $newfilesurat3;




        if ($this->Tbl_kk_handler->insert_kk_pecah_1desa($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_pindah_kecamatan()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kk_daerah_asal
        $namaSementara = $_FILES['file_kk_daerah_asal']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk_daerah_asal"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_daerah_asal_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk_daerah_asal']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_kk_daerah_asal'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ktp
        $namaSementara = $_FILES['file_ktp']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_ktp'] = $newfileupload;

        // do Upload file_selfie_ktp
        $namaSementara = $_FILES['file_selfie_ktp']['tmp_name'];
        $temp = explode(".", $_FILES["file_selfie_ktp"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_selfie_ktp_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_selfie_ktp']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_selfie_ktp'] = $newfileupload;

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_sptjm'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kk_daerah_tujuan
        $namaSementara = $_FILES['file_kk_daerah_tujuan']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk_daerah_tujuan"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_daerah_tujuan_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk_daerah_tujuan']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_desa/');
        $datapost['file_kk_daerah_tujuan'] = $newfileupload;



        if ($this->Tbl_kk_handler->insert_kk_pindah_kecamatan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_pindah_keluar_kota()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_ktp
        $namaSementara = $_FILES['file_ktp']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_kota/');
        $datapost['file_ktp'] = $newfileupload;

        // do Upload file_kk
        $namaSementara = $_FILES['file_kk']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_kota/');
        $datapost['file_kk'] = $newfileupload;

        // do Upload file_ktp_selfie
        $namaSementara = $_FILES['file_ktp_selfie']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_selfie"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_selfie_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_selfie']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_kota/');
        $datapost['file_ktp_selfie'] = $newfileupload;

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_pindah_kota/');
        $datapost['file_sptjm'] = $newfileupload;


        if ($this->Tbl_kk_handler->insert_kk_pindah_keluar_kota($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_pengurangan_kematian()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }


        if ($this->Tbl_kk_handler->insert_kk_pengurangan_kematian($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_penambahan_kedatangan()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_sptjm
        $namaSementara = $_FILES['file_sptjm']['tmp_name'];
        $temp = explode(".", $_FILES["file_sptjm"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_sptjm_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sptjm']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_sptjm'] = $newfileupload;


        // do Upload file_surat_pindah
        $namaSementara = $_FILES['file_surat_pindah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_pindah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_pindah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_pindah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_surat_pindah'] = $newfileupload;

        // do Upload file_kk
        $namaSementara = $_FILES['file_kk']['tmp_name'];
        $temp = explode(".", $_FILES["file_kk"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kk']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_kk'] = $newfileupload;


        // do Upload file_ktp
        $namaSementara = $_FILES['file_ktp']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_ktp'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        if ($_FILES['file_ijazah']['size'] == 0) {
            echo 'berhasil skip';
        } else {
            $namaSementara = $_FILES['file_ijazah']['tmp_name'];
            $temp = explode(".", $_FILES["file_ijazah"]["name"]);
            $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_ijazah']['type'];
            $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
            $datapost['file_ijazah'] = $newfileupload;
        }

        // do Upload file_akta_kelahiran
        $namaSementara = $_FILES['file_akta_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_kelahiran"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_kelahiran_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_akta_kelahiran'] = $newfileupload;

        // do Upload file_sk
        $namaSementara = $_FILES['file_sk']['tmp_name'];
        $temp = explode(".", $_FILES["file_sk"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_sk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_sk']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_kedatangan/');
        $datapost['file_sk'] = $newfileupload;





        if ($this->Tbl_kk_handler->insert_kk_penambahan_kedatangan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function kk_penambahan_kelahiran()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_surat_kelahiran
        $namaSementara = $_FILES['file_surat_kelahiran']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_kelahiran"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_kelahiran_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_kelahiran']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_penambahan_kelahiran/');
        $datapost['file_surat_kelahiran'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_penambahan_kelahiran/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_penambahan_kelahiran/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/file_kartu_keluargakk_penambahan_kelahiran/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_ktp_ortu
        $namaSementara = $_FILES['file_ktp_ortu']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_ortu"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_ortu_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_ortu']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/kk/kk_penambahan_kelahiran/');
        $datapost['file_ktp_ortu'] = $newfileupload;


        if ($this->Tbl_kk_handler->insert_kk_penambahan_kelahiran($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }




    //KK Baru
    public function kk_baru()
    {
        $datapost = $this->input->post('input');

        if (empty($datapost['tanggal_antrian'])) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }


        if ($datapost['pengurusan'] == 1) { // KK Pasangan baru

            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Buku Nikah
            $namaSementara = $_FILES['file_buku_nikah']['tmp_name'];
            $temp = explode(".", $_FILES["file_buku_nikah"]["name"]);
            $newfilenamebunik = $datapost['nama'] . '_buku_nikah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_buku_nikah']['type'];
            $this->do_upload($namaSementara, $newfilenamebunik, $file_type);

            // do Upload Surat Pindah
            $namaSementara = $_FILES['file_surat_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pindah"]["name"]);
            $newfilenamesupin = $datapost['nama'] . '_surat_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenamesupin, $file_type);

            // Input Nama Baru File ke List $datapost
            // $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_buku_nikah'] = $newfilenamebunik;
            $datapost['file_surat_pindah'] = $newfilenamesupin;
        } else if ($datapost['pengurusan'] == 2) { // Surat Pengantar Rusak
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Surat Keterangan Hilang
            $namaSementara = $_FILES['file_surat_keterangan_hilang']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_hilang"]["name"]);
            $newfilenamesuhil = $datapost['nama'] . '_surat_keterangan_hilang_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_hilang']['type'];
            $this->do_upload($namaSementara, $newfilenamesuhil, $file_type);

            // Input Nama Baru File ke List $datapost
            // $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_hilang'] = $newfilenamesuhil;
        }

        if ($this->Tbl_kk_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    //KK Perubahan
    public function kk_perubahan()
    {
        $datapost = $this->input->post('input');
        // print_r($_FILES['file_surat_pengantar']);
        // echo '<br>';
        // print_r($_FILES['file_surat_keterangan_pindah']);
        // echo '<br>';
        // print_r($_FILES['file_surat_keterangan_datang_dari_luar_negri']);
        // echo '<br>';
        // print_r($_FILES['file_paspor_tinggal_tetap']);
        // echo '<br>';
        // exit;

        if (empty($datapost['tanggal_antrian'])) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }




        if ($datapost['pengurusan'] == 1) { // KK Menambah anggota kelahiran
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Kelahiran
            $namaSementara = $_FILES['file_keterangan_kelahiran']['tmp_name'];
            $temp = explode(".", $_FILES["file_keterangan_kelahiran"]["name"]);
            $newfilenameketlahir = $datapost['nama'] . '_surat_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_keterangan_kelahiran']['type'];
            $this->do_upload($namaSementara, $newfilenameketlahir, $file_type);

            // Input Nama Baru File ke List $datapost
            // $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_keterangan_kelahiran'] = $newfilenameketlahir;
        } else if ($datapost['pengurusan'] == 2) { // KK Menumpang
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Keterangan Pindah
            $namaSementara = $_FILES['file_surat_keterangan_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_pindah"]["name"]);
            $newfilenameketpin = $datapost['nama'] . '_keterangan_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenameketpin, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Datang dari Luar Negeri
            if ($_FILES['file_surat_keterangan_datang_dari_luar_negri']['size'] == 0) {
                echo 'berhasil skip';
            } else {
                $namaSementara = $_FILES['file_surat_keterangan_datang_dari_luar_negri']['tmp_name'];
                $temp = explode(".", $_FILES["file_surat_keterangan_datang_dari_luar_negri"]["name"]);
                $newfilenameketluneg = $datapost['nama'] . '_keterangan_dari_luar_negeri_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['file_surat_keterangan_datang_dari_luar_negri']['type'];
                $this->do_upload($namaSementara, $newfilenameketluneg, $file_type);
            }

            // do Upload Paspor
            if ($_FILES['file_paspor_tinggal_tetap']['size'] == 0) {
                echo 'berhasil skip';
            } else {
                $namaSementara = $_FILES['file_paspor_tinggal_tetap']['tmp_name'];
                $temp = explode(".", $_FILES["file_paspor_tinggal_tetap"]["name"]);
                $newfilenamepaspor = $datapost['nama'] . '_paspor_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['file_paspor_tinggal_tetap']['type'];
                $this->do_upload($namaSementara, $newfilenamepaspor, $file_type);
            }

            // Input Nama Baru File ke List $datapost
            // $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_pindah'] = $newfilenameketpin;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_surat_keterangan_datang_dari_luar_negri'] = $newfilenamekklama;
            $datapost['file_paspor_tinggal_tetap'] = $newfilenamepaspor;
        } else if ($datapost['pengurusan'] == 3) { // KK Pengurangan anggota keluarga
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Keterangan Pindah
            $namaSementara = $_FILES['file_surat_keterangan_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_pindah"]["name"]);
            $newfilenameketpin = $datapost['nama'] . '_keterangan_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenameketpin, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Kematian
            $namaSementara = $_FILES['file_surat_keterangan_kematian']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_kematian"]["name"]);
            $newfilenameketmat = $datapost['nama'] . '_keterangan_kematian_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_kematian']['type'];
            $this->do_upload($namaSementara, $newfilenameketmat, $file_type);

            // Input Nama Baru File ke List $datapost
            // $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_pindah'] = $newfilenameketpin;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_surat_keterangan_kematian'] = $newfilenameketmat;
        }


        if ($this->Tbl_kk_handler->insert_kk_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    function do_upload($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif", "image/png");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/kk/kk_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    function upload_file($namaSementara, $newfilename, $file_type, $dirUpload)
    {
        $allowed = array("image/jpeg", "image/gif", "image/png");
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


    // KK Form File
    public function formKK()
    {
        echo json_encode($this->db->query("SELECT file FROM form_pengajuan WHERE nama_form LIKE '%kk%'")->result_array());
    }
}
