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
        $date = date('Y-m-d');
        $data['kk'] = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_kk  WHERE tanggal_antrian = '$date' ")->row_array();
        $data['ktp'] = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_ktp  WHERE tanggal_antrian = '$date' ")->row_array();
        $data['maxAntrian'] = $this->db->query("SELECT maksimal_antrian AS 'nilai' FROM antrian_bulanan WHERE tanggal_antrian = '$date'")->row_array();
        echo json_encode($data);
    }
    public function getMaxantrian()
    {
        $data = $this->db->query("SELECT maksimal_antrian AS 'nilai' FROM antrian_bulanan")->row_array();
        echo $data['nilai'];
    }
}
