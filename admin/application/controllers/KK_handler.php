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
        $allowed = array("image/jpeg", "image/gif");
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
