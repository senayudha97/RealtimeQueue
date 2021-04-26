<?php
include_once APPPATH . "/controllers/Guide.php";


class KK_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_kk_handler");
    }

    //KK Baru
    public function kk_baru()
    {
        $datapost = $this->input->post('input');

        if ($datapost['pengurusan'] == 1) { // KK Pasangan baru

            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Buku Nikah
            $namaSementara = $_FILES['file_buku_nikah']['tmp_name'];
            $temp = explode(".", $_FILES["file_buku_nikah"]["name"]);
            $newfilenamebunik = $datapost['nama'] . '_buku_nikah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_buku_nikah']['type'];
            $this->do_upload($namaSementara, $newfilenamebunik, $file_type);

            // do Upload Surat Pindah
            $namaSementara = $_FILES['file_surat_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pindah"]["name"]);
            $newfilenamesupin = $datapost['nama'] . '_surat_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenamesupin, $file_type);

            // Input Nama Baru File ke List $datapost
            $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_buku_nikah'] = $newfilenamebunik;
            $datapost['file_surat_pindah'] = $newfilenamesupin;
        } else if ($datapost['pengurusan'] == 2) { // Surat Pengantar Rusak
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Surat Keterangan Hilang
            $namaSementara = $_FILES['file_surat_keterangan_hilang']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_hilang"]["name"]);
            $newfilenamesuhil = $datapost['nama'] . '_surat_keterangan_hilang_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_hilang']['type'];
            $this->do_upload($namaSementara, $newfilenamesuhil, $file_type);

            // Input Nama Baru File ke List $datapost
            $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_hilang'] = $newfilenamesuhil;
        }

        if ($this->Tbl_kk_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    //KK Perubahan
    public function kk_perubahan()
    {
        $datapost = $this->input->post('input');
        // print_r($_FILES['file_surat_pengantar']);
        // echo '<br>';
        // print_r($_FILES['file_surat_keterangan_pindah']);
        // echo '<br>';
        // print_r($_FILES['file_surat_keterangan_datang_dari_luar_negri']);
        // echo '<br>';
        // print_r($_FILES['file_paspor_tinggal_tetap']);
        // echo '<br>';
        // exit;


        if ($datapost['pengurusan'] == 1) { // KK Menambah anggota kelahiran
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Kelahiran
            $namaSementara = $_FILES['file_keterangan_kelahiran']['tmp_name'];
            $temp = explode(".", $_FILES["file_keterangan_kelahiran"]["name"]);
            $newfilenameketlahir = $datapost['nama'] . '_surat_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_keterangan_kelahiran']['type'];
            $this->do_upload($namaSementara, $newfilenameketlahir, $file_type);

            // Input Nama Baru File ke List $datapost
            $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_keterangan_kelahiran'] = $newfilenameketlahir;
        } else if ($datapost['pengurusan'] == 2) { // KK Menumpang
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Keterangan Pindah
            $namaSementara = $_FILES['file_surat_keterangan_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_pindah"]["name"]);
            $newfilenameketpin = $datapost['nama'] . '_keterangan_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenameketpin, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Datang dari Luar Negeri
            if ($_FILES['file_surat_keterangan_datang_dari_luar_negri']['size'] == 0) {
                echo 'berhasil skip';
            } else {
                $namaSementara = $_FILES['file_surat_keterangan_datang_dari_luar_negri']['tmp_name'];
                $temp = explode(".", $_FILES["file_surat_keterangan_datang_dari_luar_negri"]["name"]);
                $newfilenameketluneg = $datapost['nama'] . '_keterangan_dari_luar_negeri_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['file_surat_keterangan_datang_dari_luar_negri']['type'];
                $this->do_upload($namaSementara, $newfilenameketluneg, $file_type);
            }

            // do Upload Paspor
            if ($_FILES['file_paspor_tinggal_tetap']['size'] == 0) {
                echo 'berhasil skip';
            } else {
                $namaSementara = $_FILES['file_paspor_tinggal_tetap']['tmp_name'];
                $temp = explode(".", $_FILES["file_paspor_tinggal_tetap"]["name"]);
                $newfilenamepaspor = $datapost['nama'] . '_paspor_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['file_paspor_tinggal_tetap']['type'];
                $this->do_upload($namaSementara, $newfilenamepaspor, $file_type);
            }

            // Input Nama Baru File ke List $datapost
            $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_pindah'] = $newfilenameketpin;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_surat_keterangan_datang_dari_luar_negri'] = $newfilenamekklama;
            $datapost['file_paspor_tinggal_tetap'] = $newfilenamepaspor;
        } else if ($datapost['pengurusan'] == 3) { // KK Pengurangan anggota keluarga
            // do Upload Surat Pengantar
            $namaSementara = $_FILES['file_surat_pengantar']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_pengantar"]["name"]);
            $newfilenamesupeng = $datapost['nama'] . '_surat_pengantar_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_pengantar']['type'];
            $this->do_upload($namaSementara, $newfilenamesupeng, $file_type);

            // do Upload Keterangan Pindah
            $namaSementara = $_FILES['file_surat_keterangan_pindah']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_pindah"]["name"]);
            $newfilenameketpin = $datapost['nama'] . '_keterangan_pindah_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_pindah']['type'];
            $this->do_upload($namaSementara, $newfilenameketpin, $file_type);

            // do Upload KK Lama
            $namaSementara = $_FILES['file_kk_lama']['tmp_name'];
            $temp = explode(".", $_FILES["file_kk_lama"]["name"]);
            $newfilenamekklama = $datapost['nama'] . '_kk_lama_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_kk_lama']['type'];
            $this->do_upload($namaSementara, $newfilenamekklama, $file_type);

            // do Upload Keterangan Kematian
            $namaSementara = $_FILES['file_surat_keterangan_kematian']['tmp_name'];
            $temp = explode(".", $_FILES["file_surat_keterangan_kematian"]["name"]);
            $newfilenameketmat = $datapost['nama'] . '_keterangan_kematian_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['file_surat_keterangan_kematian']['type'];
            $this->do_upload($namaSementara, $newfilenameketmat, $file_type);

            // Input Nama Baru File ke List $datapost
            $datapost['tanggal_antrian'] = date('Y-m-d');
            $datapost['file_surat_pengantar'] = $newfilenamesupeng;
            $datapost['file_surat_keterangan_pindah'] = $newfilenameketpin;
            $datapost['file_kk_lama'] = $newfilenamekklama;
            $datapost['file_surat_keterangan_kematian'] = $newfilenameketmat;
        }

        if ($this->Tbl_kk_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    function do_upload($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif", "image/png");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/kk_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }
}
