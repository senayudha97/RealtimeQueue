<?php
include_once APPPATH . "/controllers/Guide.php";


class Akta_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_akta_handler");
    }

    public function akta_baru()
    {
        $datapost = $this->input->post('input');

        if ($this->Tbl_akta_handler->insert_akta_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_rusak()
    {
        $datapost = $this->input->post('input');

        if ($this->Tbl_akta_handler->insert_akta_rusak($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function akta_hilang()
    {
        $datapost = $this->input->post('input');

        if ($this->Tbl_akta_handler->insert_akta_hilang($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }
}
