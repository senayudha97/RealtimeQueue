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

        if ($this->Tbl_KIA_handler->insert_KIA_pemula($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function KIA_rusak()
    {
        $datapost = $this->input->post('input');

        if ($this->Tbl_KIA_handler->insert_KIA_rusak($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    public function KIA_kehilangan()
    {
        $datapost = $this->input->post('input');

        if ($this->Tbl_KIA_handler->insert_KIA_kehilangan($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }
}
