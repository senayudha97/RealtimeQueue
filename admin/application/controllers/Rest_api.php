<?php
include_once APPPATH . "/controllers/Guide.php";

class Rest_api extends Guide
{
    public function __construct()
    {
        // Token 2a734c44a3a1cd46dd54450a0dab6ecc
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        echo "Berhasil";
    }

    public function statusAntrian($token = '')
    {
        $status = $this->db->get_where('core_status', ['app' => 'app_antrian'])->row_array();

        if ($token == $status['token']) {
            echo $status['status'];
        } else {
            echo "Token Salah";
            exit;
        }
    }
}
