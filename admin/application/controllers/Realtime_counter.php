<?php
include_once APPPATH . "/controllers/Guide.php";


class Realtime_counter extends Guide
{
    public function __construct()
    {
        parent::__construct();
    }

    public function counter()
    {
        $data['kk'] = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_kk")->row_array();
        $data['ktp'] = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_ktp")->row_array();
        echo json_encode($data);
    }
    public function counterKTP()
    {
        $data = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_kk")->row_array();
        echo $data['nilai'];
    }
}
