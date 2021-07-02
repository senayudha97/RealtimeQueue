<?php
include_once APPPATH . "/controllers/Guide.php";


class Realtime_counter extends Guide
{
    public function __construct()
    {
        parent::__construct();
    }

    public function jam($param = 0, $mode = 0) //jika mode 0 maka kembalikan denganv ariable message dan jika 1 maka hanya mengembalikan nilai waktu saja 
    {
        $data = array();
        $date = date('Y-m-d');
        $antrianMax = $this->db->query("SELECT maksimal_antrian AS 'nilai' FROM antrian_bulanan WHERE tanggal_antrian = '$date' AND islibur = 0")->row_array()['nilai'];
        $arr_jam = [
            '08:00-09:00',
            '09:00-10:00',
            '10:00-11:00',
            '11:00-12:00',
            '13:00-14:00',
        ];
        $divider = count($arr_jam);
        $modular = $antrianMax % $divider;
        $message = '| ';
        $cluster = array();

        if ($modular > 0) { // jika terdapat sisa dari pembagian antrian
            $antrianPerjam = ($antrianMax - $modular) / $divider;
            $tempSisa = array();

            for ($i = 1; $i <= $modular; $i++) { // memilah sisa
                array_push($tempSisa, 1);
            }

            for ($i = 0; $i < $divider; $i++) {
                if (array_key_exists($i, $tempSisa)) {
                    $antrian = $antrianPerjam + $tempSisa[$i];
                } else {
                    $antrian = $antrianPerjam;
                }
                $message .= "Jam $arr_jam[$i] memiliki maksimal kuota maksimal <b>" . $antrian . "</b> | ";
                // echo "Jam $arr_jam[$i] memiliki maksimal kuota maksimal " . $antrian;
                // echo '<br>';
            }
        } else {
            $clusterVal = 0;
            for ($i = 0; $i < $divider; $i++) {
                $antrianPerjam = $antrianMax / $divider;
                $clusterVal += $antrianPerjam;
                $cluster[$i + 1]['nilai'] = $clusterVal;
                $cluster[$i + 1]['jam'] =  $arr_jam[$i];

                $message .= "Jam $arr_jam[$i] memiliki kuota maksimal <b> $antrianPerjam </b> | ";
                // echo "Jam $arr_jam[$i] memiliki kuota maksimal " . $antrianPerjam;
                // echo '<br>';
            }
        }
        // echo '<br>';
        // print_r($cluster);
        // echo '<br>';
        // echo '<br>';

        $cluster[0]['nilai'] = 0;
        $i = 0;
        $max = $cluster[count($cluster) - 1]['nilai'];
        foreach ($cluster as $row) {
            if ($param >= $max) { //jika antrian sudah max
                $data['jadwal'] = $cluster[count($cluster) - 1]['jam'];
                break;
            }

            if ($param >= $cluster[$i]['nilai'] && $param < $cluster[$i + 1]['nilai']) {
                $data['jadwal'] = $cluster[$i + 1]['jam'];
            } else if ($param >= $cluster[count($cluster) - 1]['nilai']) {
                $data['jadwal'] = $cluster[count($cluster) - 1]['jam'];
            }
            $i++;
        }

        $data['message'] = $message;
        if ($mode == 0) {
            echo json_encode($data);
        } else if ($mode == 1) {
            return $data['jadwal'];
        }
    }

    public function counter()
    {
        $date = $_GET['tanggal_antrian'];

        // Realtime Counter KTP
        $ktp_pemula = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM ktp_pemula JOIN antrian_bulanan ON ktp_pemula.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND ktp_pemula.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $data['ktp']['nilai'] = $ktp_pemula;

        // Realtime Counter KIA
        $kia_pemula = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM kia_pemula JOIN antrian_bulanan ON kia_pemula.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND kia_pemula.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $data['kia']['nilai'] = $kia_pemula;

        // Realtime Counter KK
        $data['kk'] = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM antrian_kk JOIN antrian_bulanan ON antrian_kk.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND antrian_kk.tanggal_antrian = '$date' ")->row_array();

        // Realtime Counter Akta
        $akta_kelahiran_baru = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kelahiran_baru JOIN antrian_bulanan ON akta_kelahiran_baru.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kelahiran_baru.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kelahiran_hilang = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kelahiran_hilang JOIN antrian_bulanan ON akta_kelahiran_hilang.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kelahiran_hilang.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kelahiran_rusak = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kelahiran_rusak JOIN antrian_bulanan ON akta_kelahiran_rusak.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kelahiran_rusak.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kelahiran_pembaruan = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kelahiran_pembaruan JOIN antrian_bulanan ON akta_kelahiran_pembaruan.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kelahiran_pembaruan.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $akta_kematian_baru = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kematian_baru JOIN antrian_bulanan ON akta_kematian_baru.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kematian_baru.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kematian_hilang = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kematian_hilang JOIN antrian_bulanan ON akta_kematian_hilang.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kematian_hilang.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kematian_rusak = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kematian_rusak JOIN antrian_bulanan ON akta_kematian_rusak.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kematian_rusak.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_kematian_pembaruan = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_kematian_pembaruan JOIN antrian_bulanan ON akta_kematian_pembaruan.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_kematian_pembaruan.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $akta_perceraian_baru = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perceraian_baru JOIN antrian_bulanan ON akta_perceraian_baru.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perceraian_baru.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perceraian_hilang = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perceraian_hilang JOIN antrian_bulanan ON akta_perceraian_hilang.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perceraian_hilang.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perceraian_rusak = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perceraian_rusak JOIN antrian_bulanan ON akta_perceraian_rusak.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perceraian_rusak.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perceraian_pembaruan = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perceraian_pembaruan JOIN antrian_bulanan ON akta_perceraian_pembaruan.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perceraian_pembaruan.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $akta_perkawinan_baru = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perkawinan_baru JOIN antrian_bulanan ON akta_perkawinan_baru.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perkawinan_baru.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perkawinan_hilang = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perkawinan_hilang JOIN antrian_bulanan ON akta_perkawinan_hilang.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perkawinan_hilang.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perkawinan_rusak = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perkawinan_rusak JOIN antrian_bulanan ON akta_perkawinan_rusak.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perkawinan_rusak.tanggal_antrian = '$date' ")->row_array()['nilai'];
        $akta_perkawinan_pembaruan = $this->db->query("SELECT COUNT(*) AS 'nilai' FROM akta_perkawinan_pembaruan JOIN antrian_bulanan ON akta_perkawinan_pembaruan.tanggal_antrian = antrian_bulanan.tanggal_antrian WHERE  antrian_bulanan.islibur = 0 AND akta_perkawinan_pembaruan.tanggal_antrian = '$date' ")->row_array()['nilai'];

        $data['akta']['nilai'] = $akta_kelahiran_baru + $akta_kelahiran_hilang + $akta_kelahiran_rusak + $akta_kelahiran_pembaruan + $akta_kematian_baru
            + $akta_kematian_hilang
            + $akta_kematian_rusak
            + $akta_kematian_pembaruan
            + $akta_perceraian_baru
            + $akta_perceraian_hilang
            + $akta_perceraian_rusak
            + $akta_perceraian_pembaruan
            + $akta_perkawinan_baru
            + $akta_perkawinan_hilang
            + $akta_perkawinan_rusak
            + $akta_perkawinan_pembaruan;

        $data['maxAntrian'] = $this->db->query("SELECT maksimal_antrian AS 'nilai' FROM antrian_bulanan WHERE tanggal_antrian = '$date' AND islibur = 0")->row_array();


        $data['jamKK'] = $this->jam($data['kk']['nilai'], 1);
        $data['jamKTP'] = $this->jam($data['ktp']['nilai'], 1);
        $data['jamAkta'] = $this->jam($data['akta']['nilai'], 1);
        $data['jamKIA'] = $this->jam($data['kia']['nilai'], 1);


        if ($data['maxAntrian'] == NULL || strtotime($date) < strtotime(date('Y-m-d'))) {
            $data['maxAntrian'] = 0;
            $data['jamKK'] = 0;
            $data['jamKTP'] = 0;
            $data['jamAkta'] = 0;
            $data['jamKIA'] = 0;
        }

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
