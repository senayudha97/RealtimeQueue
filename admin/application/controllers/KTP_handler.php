<?php
include_once APPPATH . "/controllers/Guide.php";


class KTP_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_verifikasi_kk");
    }

    public function ktp_baru()
    {
        $datapost = $this->input->post();

        print_r($datapost);
        exit;
    }
}
