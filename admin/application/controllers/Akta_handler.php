<?php
include_once APPPATH . "/controllers/Guide.php";


class Akta_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_akta_handler");
    }

    public function akta_kelahiran_baru()
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
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_surat_kelahiran'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_ktp_ortu
        $namaSementara = $_FILES['file_ktp_ortu']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_ortu"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_ortu_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_ortu']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_ktp_ortu'] = $newfileupload;

        // do Upload file_ktp_saksi
        $namaSementara = $_FILES['file_ktp_saksi']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_saksi"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_saksi_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_saksi']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_ktp_saksi'] = $newfileupload;

        // do Upload file_form
        $namaSementara = $_FILES['file_form']['tmp_name'];
        $temp = explode(".", $_FILES["file_form"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_form_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_form']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_baru/');
        $datapost['file_form'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kelahiran_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_kelahiran_hilang()
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
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_surat_kelahiran'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_ktp_ortu
        $namaSementara = $_FILES['file_ktp_ortu']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_ortu"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_ortu_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_ortu']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_ktp_ortu'] = $newfileupload;

        // do Upload file_surat_kehilangan
        $namaSementara = $_FILES['file_surat_kehilangan']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_kehilangan"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_kehilangan_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_kehilangan']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_hilang/');
        $datapost['file_surat_kehilangan'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kelahiran_hilang($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_kelahiran_rusak()
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
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_surat_kelahiran'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_ktp_ortu
        $namaSementara = $_FILES['file_ktp_ortu']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_ortu"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_ortu_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_ortu']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_ktp_ortu'] = $newfileupload;

        // do Upload file_akta_lama
        $namaSementara = $_FILES['file_akta_lama']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_lama"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_lama']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_rusak/');
        $datapost['file_akta_lama'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kelahiran_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_kelahiran_pembaruan()
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
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_surat_kelahiran'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ijazah
        $namaSementara = $_FILES['file_ijazah']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_ijazah'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_ktp_ortu
        $namaSementara = $_FILES['file_ktp_ortu']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_ortu"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_ortu_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_ortu']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_ktp_ortu'] = $newfileupload;

        // do Upload file_akta_lama
        $namaSementara = $_FILES['file_akta_lama']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_lama"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_lama']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kelahiran_pembaruan/');
        $datapost['file_akta_lama'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kelahiran_pembaruan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    // AKTA PERKAWINAN

    public function akta_perkawinan_baru()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_surat_keterangan_perkawinan_agama";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_akta_kelahiran";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_keterangan_perkawinan_desa";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_nikah_ortu_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_nikah_ortu_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_ayah_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_ibu_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_ayah_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_ibu_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_ayah_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_ibu_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_ayah_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_ibu_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_saksi1";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_saksi2";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_foto_berdampingan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_keterangan_sehat_suami";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_keterangan_sehat_istri";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_rekomendasi";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_komandan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_baru/');
        $datapost[$key] = $newfileupload;




        if ($this->Tbl_akta_handler->insert_akta_perkawinan_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_perkawinan_hilang()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_surat_kehilangan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_nikah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;


        $key = "file_ijazah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;


        $key = "file_kk";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;


        $key = "file_ktp";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;


        $key = "file_foto_berdampingan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_hilang/');
        $datapost[$key] = $newfileupload;



        if ($this->Tbl_akta_handler->insert_akta_perkawinan_hilang($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_perkawinan_rusak()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_akta_lama";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_nikah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;


        $key = "file_ijazah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;


        $key = "file_kk";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;


        $key = "file_ktp";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;


        $key = "file_foto_berdampingan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_rusak/');
        $datapost[$key] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_perkawinan_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_perkawinan_pembaruan()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_akta_lama";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;

        $key = "file_surat_nikah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;


        $key = "file_ijazah";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;


        $key = "file_kk";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;


        $key = "file_ktp";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;


        $key = "file_foto_berdampingan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perkawinan_pembaruan/');
        $datapost[$key] = $newfileupload;

        if ($this->Tbl_akta_handler->insert_akta_perkawinan_pembaruan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    // AKTA KEMATIAN

    public function akta_kematian_baru()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_surat_keterangan_kematian
        $namaSementara = $_FILES['file_surat_keterangan_kematian']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_keterangan_kematian"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_keterangan_kematian_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_keterangan_kematian']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_surat_keterangan_kematian'] = $newfileupload;

        // do Upload file_kartu_keluarga_asli
        $namaSementara = $_FILES['file_kartu_keluarga_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_kartu_keluarga_asli'] = $newfileupload;

        // do Upload file_ktp_asli
        $namaSementara = $_FILES['file_ktp_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_ktp_asli'] = $newfileupload;

        // do Upload file_surat_nikah
        $namaSementara = $_FILES['file_surat_nikah']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_nikah"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_nikah_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_nikah']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_surat_nikah'] = $newfileupload;

        // do Upload file_ktp_saksi1
        $namaSementara = $_FILES['file_ktp_saksi1']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_saksi1"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_saksi1_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_saksi1']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_ktp_saksi1'] = $newfileupload;

        // do Upload file_ktp_saksi2
        $namaSementara = $_FILES['file_ktp_saksi2']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_saksi2"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_saksi2_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_saksi2']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_baru/');
        $datapost['file_ktp_saksi2'] = $newfileupload;

        if ($this->Tbl_akta_handler->insert_akta_kematian_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_kematian_hilang()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_surat_kehilangan";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_hilang/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_hilang/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_hilang/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_hilang/');
        $datapost[$key] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kematian_hilang($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_kematian_rusak()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_akta_lama";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_rusak/');
        $datapost[$key] = $newfileupload;

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_rusak/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_rusak/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_rusak/');
        $datapost[$key] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kematian_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_kematian_pembaruan()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        $key = "file_form";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_pembaruan/');
        $datapost[$key] = $newfileupload;

        $key = "file_kk_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_pembaruan/');
        $datapost[$key] = $newfileupload;

        $key = "file_ktp_pelapor";
        $namaSementara = $_FILES[$key]['tmp_name'];
        $temp = explode(".", $_FILES[$key]["name"]);
        $newfileupload = $datapost['nohp'] . '_' . $key . '_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES[$key]['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_kematian_pembaruan/');
        $datapost[$key] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_kematian_pembaruan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    // AKTA PERCERAIAN

    public function akta_perceraian_baru()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kutipan_perceraian_asli
        $namaSementara = $_FILES['file_kutipan_perceraian_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_kutipan_perceraian_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kutipan_perceraian_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kutipan_perceraian_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_kutipan_perceraian_asli'] = $newfileupload;

        // do Upload file_surat_keputusan_perceraian
        $namaSementara = $_FILES['file_surat_keputusan_perceraian']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_keputusan_perceraian"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_keputusan_perceraian_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_keputusan_perceraian']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_surat_keputusan_perceraian'] = $newfileupload;

        // do Upload file_ktp_pihak_pria
        $namaSementara = $_FILES['file_ktp_pihak_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_pihak_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_pihak_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_pihak_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_ktp_pihak_pria'] = $newfileupload;

        // do Upload file_ktp_pihak_wanita
        $namaSementara = $_FILES['file_ktp_pihak_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_ktp_pihak_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ktp_pihak_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ktp_pihak_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_ktp_pihak_wanita'] = $newfileupload;

        // do Upload file_pasfoto_pria
        $namaSementara = $_FILES['file_pasfoto_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_pasfoto_pria'] = $newfileupload;

        // do Upload file_pasfoto_wanita
        $namaSementara = $_FILES['file_pasfoto_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_pasfoto_wanita'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_baru/');
        $datapost['file_kartu_keluarga'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_perceraian_baru($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_perceraian_hilang()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kutipan_perceraian_asli
        $namaSementara = $_FILES['file_kutipan_perceraian_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_kutipan_perceraian_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kutipan_perceraian_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kutipan_perceraian_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_kutipan_perceraian_asli'] = $newfileupload;

        // do Upload file_surat_keputusan_perceraian
        $namaSementara = $_FILES['file_surat_keputusan_perceraian']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_keputusan_perceraian"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_keputusan_perceraian_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_keputusan_perceraian']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_surat_keputusan_perceraian'] = $newfileupload;

        // do Upload file_ijazah_pihak_pria
        $namaSementara = $_FILES['file_ijazah_pihak_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_ijazah_pihak_pria'] = $newfileupload;

        // do Upload file_ijazah_pihak_wanita
        $namaSementara = $_FILES['file_ijazah_pihak_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_ijazah_pihak_wanita'] = $newfileupload;

        // do Upload file_pasfoto_pria
        $namaSementara = $_FILES['file_pasfoto_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_pasfoto_pria'] = $newfileupload;

        // do Upload file_pasfoto_wanita
        $namaSementara = $_FILES['file_pasfoto_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_pasfoto_wanita'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_surat_kehilangan
        $namaSementara = $_FILES['file_surat_kehilangan']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_kehilangan"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_kehilangan_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_kehilangan']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_hilang/');
        $datapost['file_surat_kehilangan'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_perceraian_hilang($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_perceraian_rusak()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kutipan_perceraian_asli
        $namaSementara = $_FILES['file_kutipan_perceraian_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_kutipan_perceraian_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kutipan_perceraian_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kutipan_perceraian_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_kutipan_perceraian_asli'] = $newfileupload;

        // do Upload file_surat_keputusan_perceraian
        $namaSementara = $_FILES['file_surat_keputusan_perceraian']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_keputusan_perceraian"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_keputusan_perceraian_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_keputusan_perceraian']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_surat_keputusan_perceraian'] = $newfileupload;

        // do Upload file_ijazah_pihak_pria
        $namaSementara = $_FILES['file_ijazah_pihak_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_ijazah_pihak_pria'] = $newfileupload;

        // do Upload file_ijazah_pihak_wanita
        $namaSementara = $_FILES['file_ijazah_pihak_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_ijazah_pihak_wanita'] = $newfileupload;

        // do Upload file_pasfoto_pria
        $namaSementara = $_FILES['file_pasfoto_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_pasfoto_pria'] = $newfileupload;

        // do Upload file_pasfoto_wanita
        $namaSementara = $_FILES['file_pasfoto_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_pasfoto_wanita'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_akta_lama
        $namaSementara = $_FILES['file_akta_lama']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_lama"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_lama']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_rusak/');
        $datapost['file_akta_lama'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_perceraian_rusak($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    public function akta_perceraian_pembaruan()
    {
        $datapost = $this->input->post('input');
        if ($datapost['tanggal_antrian'] == null) {
            $datapost['tanggal_antrian'] = date('Y-m-d');
        }

        // do Upload file_kutipan_perceraian_asli
        $namaSementara = $_FILES['file_kutipan_perceraian_asli']['tmp_name'];
        $temp = explode(".", $_FILES["file_kutipan_perceraian_asli"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kutipan_perceraian_asli_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kutipan_perceraian_asli']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_kutipan_perceraian_asli'] = $newfileupload;

        // do Upload file_surat_keputusan_perceraian
        $namaSementara = $_FILES['file_surat_keputusan_perceraian']['tmp_name'];
        $temp = explode(".", $_FILES["file_surat_keputusan_perceraian"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_surat_keputusan_perceraian_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_surat_keputusan_perceraian']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_surat_keputusan_perceraian'] = $newfileupload;

        // do Upload file_ijazah_pihak_pria
        $namaSementara = $_FILES['file_ijazah_pihak_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_ijazah_pihak_pria'] = $newfileupload;

        // do Upload file_ijazah_pihak_wanita
        $namaSementara = $_FILES['file_ijazah_pihak_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_ijazah_pihak_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_ijazah_pihak_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_ijazah_pihak_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_ijazah_pihak_wanita'] = $newfileupload;

        // do Upload file_pasfoto_pria
        $namaSementara = $_FILES['file_pasfoto_pria']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_pria"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_pria_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_pria']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_pasfoto_pria'] = $newfileupload;

        // do Upload file_pasfoto_wanita
        $namaSementara = $_FILES['file_pasfoto_wanita']['tmp_name'];
        $temp = explode(".", $_FILES["file_pasfoto_wanita"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_pasfoto_wanita_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_pasfoto_wanita']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_pasfoto_wanita'] = $newfileupload;

        // do Upload file_kartu_keluarga
        $namaSementara = $_FILES['file_kartu_keluarga']['tmp_name'];
        $temp = explode(".", $_FILES["file_kartu_keluarga"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_kartu_keluarga_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_kartu_keluarga']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_kartu_keluarga'] = $newfileupload;

        // do Upload file_akta_lama
        $namaSementara = $_FILES['file_akta_lama']['tmp_name'];
        $temp = explode(".", $_FILES["file_akta_lama"]["name"]);
        $newfileupload = $datapost['nohp'] . '_file_akta_lama_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['file_akta_lama']['type'];
        $this->upload_file($namaSementara, $newfileupload, $file_type, './file_upload/akta/akta_perceraian_pembaruan/');
        $datapost['file_akta_lama'] = $newfileupload;


        if ($this->Tbl_akta_handler->insert_akta_perceraian_pembaruan($datapost) == 1) {

            header("Location: http://localhost:8080/siantrian");
        } else {
            echo 'fail';
        }
        exit;
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
    public function formAkta()
    {
        echo json_encode($this->db->query("SELECT file FROM form_pengajuan WHERE nama_form LIKE '%akta%'")->result_array());
    }
}
