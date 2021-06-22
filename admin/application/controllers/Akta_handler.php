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
        if ($this->Tbl_akta_handler->insert_akta_kelahiran_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
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
        if ($this->Tbl_akta_handler->insert_akta_kelahiran_hilang($datapost) == 1) {

            header("Location: http://localhost/siantrian");
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
        if ($this->Tbl_akta_handler->insert_akta_kelahiran_rusak($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }
}
