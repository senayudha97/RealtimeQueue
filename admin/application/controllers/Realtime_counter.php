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

    public function newAntrian()
    {
        $fk_antrian = $_POST['id'];
        $newAntrian = 1;
        $jenisAntrian = ($_POST['jenis_antrian'] == 'KTP') ? 1 : 2;
        $date = date('Y-m-d');
        $data = $this->db->query("SELECT nomor_antrian FROM log_antrian WHERE tanggal_antrian = '$date' ORDER BY nomor_antrian DESC")->row_array();
        $komparasi = $this->db->query("SELECT COUNT(*) 'val' FROM log_antrian WHERE fk_antrian = $fk_antrian")->row_array();


        if ($komparasi['val'] > 0) { //Check apakah qr code sudah di masukan ke log sebelumnya 
            echo "gagal";
            exit;
        } else {
            if (empty($data['nomor_antrian'])) {
                $this->db->insert('log_antrian', ['fk_antrian' => $fk_antrian, 'jenis_antrian' => $jenisAntrian, 'nomor_antrian' => $newAntrian, 'tanggal_antrian' => $date]);

                // Send Email
                $this->db->where('id', $fk_antrian);
                if ($jenisAntrian == 1) {
                    $wargaDic = $this->db->get('antrian_ktp')->row_array();
                } else if ($jenisAntrian == 2) {
                    $wargaDic = $this->db->get('antrian_kk')->row_array();
                }
                $kepengurusan =  [1 => 'KTP', '2' => 'KK'];
                $this->sendEmailNomorAntrian(['email' => $wargaDic['email'], 'nama' => $wargaDic['nama'], 'kepengurusan' => $kepengurusan[$jenisAntrian], 'nomor_urut' => $newAntrian]);

                echo 'berhasil';
            } else {
                $newAntrian += $data['nomor_antrian'];

                // Send Email
                $this->db->where('id', $fk_antrian);
                if ($jenisAntrian == 1) {
                    $wargaDic = $this->db->get('antrian_ktp')->row_array();
                } else if ($jenisAntrian == 2) {
                    $wargaDic = $this->db->get('antrian_kk')->row_array();
                }
                $kepengurusan =  [1 => 'KTP', '2' => 'KK'];
                $this->sendEmailNomorAntrian(['email' => $wargaDic['email'], 'nama' => $wargaDic['nama'], 'kepengurusan' => $kepengurusan[$jenisAntrian], 'nomor_urut' => $newAntrian]);

                $this->db->insert('log_antrian', ['fk_antrian' => $fk_antrian, 'jenis_antrian' => $jenisAntrian, 'nomor_antrian' => $newAntrian, 'tanggal_antrian' => $date]);
                echo 'berhasil';
            }
        }
    }
}
