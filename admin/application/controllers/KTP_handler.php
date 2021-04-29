<?php
include_once APPPATH . "/controllers/Guide.php";


class KTP_handler extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_ktp_handler");
    }

    //KTP Baru
    public function ktp_baru()
    {
        $datapost = $this->input->post('input');

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga1']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga1"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga1']['type'];
        $this->upload_kk1($namaSementara, $newfilenamekk, $file_type);


        // do Upload Akta
        $namaSementara = $_FILES['akta_kelahiran1']['tmp_name'];
        $temp = explode(".", $_FILES["akta_kelahiran1"]["name"]);
        $newfilenameakta = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['akta_kelahiran1']['type'];
        $this->upload_akta1($namaSementara, $newfilenameakta, $file_type);

        // Input Nama Baru File ke List $datapost
        $datapost['tanggal_antrian'] = date('Y-m-d');
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_akta_kelahiran'] = $newfilenameakta;


        if ($this->Tbl_ktp_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }


    function upload_kk1($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KK yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    function upload_akta1($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File Akata yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_baru/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }


    //KTP Perubahan
    public function ktp_perubahan()
    {
        $datapost = $this->input->post('input');

        // do Upload KK
        $namaSementara = $_FILES['kartu_keluarga1']['tmp_name'];
        $temp = explode(".", $_FILES["kartu_keluarga1"]["name"]);
        $newfilenamekk = $datapost['nama'] . '_kk_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['kartu_keluarga1']['type'];
        $this->upload_kk2($namaSementara, $newfilenamekk, $file_type);


        // do Upload KTP Lama
        $namaSementara = $_FILES['ktp_lama']['tmp_name'];
        $temp = explode(".", $_FILES["ktp_lama"]["name"]);
        $newfilenamektplama = $datapost['nama'] . '_akta_' . round(microtime(true)) . '.' . end($temp);
        $file_type = $_FILES['ktp_lama']['type'];
        $this->upload_ktp_lama($namaSementara, $newfilenamektplama, $file_type);

        // Input Nama Baru File ke List $datapost
        $datapost['tanggal_antrian'] = date('Y-m-d');
        $datapost['file_kk'] = $newfilenamekk;
        $datapost['file_ktp_lama'] = $newfilenamektplama;


        if ($this->Tbl_ktp_handler->insert_ktp_baru($datapost) == 1) {

            header("Location: http://localhost/siantrian");
        } else {
            echo 'fail';
        }
        exit;
    }

    function upload_kk2($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KK yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_perubahan/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    function upload_ktp_lama($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File KTP Lama yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/ktp_perubahan/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }

    public function generateqr($filename = "qrcodedefaultname.png")
    {
        require_once('./application/third_party/phpqrcode/qrlib.php');

        $dir = './application/template_email/qrcodeholder/' . $filename;
        QRcode::png('PHP QR Code :)', $dir, 'XL', 8, 8);

        return $dir;
    }

    function send($email_receiver = "senayudha97@outlook.com")
    {
        $email_sender = "chickchipsgame@gmail.com";
        $pasword_email_sender = "kmzwa88saa";
        // $email_receiver = "senayudha97@outlook.com";

        define("DEMO", false);
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $email_sender;
        $mail->Password = $pasword_email_sender;
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        $mail->AddEmbeddedImage($this->generateqr("coba.png"), 'coba');
        $mail->setFrom('info@example.com', 'Siantrian');
        $mail->addReplyTo('info@example.com', 'Siantrian');

        // Add a recipient
        $mail->addAddress($email_receiver);

        // Email subject
        $mail->Subject = 'Siantrian - Pengajuan Online';

        // Set email format to HTML
        $mail->isHTML(true);

        // Swab Var 
        $swap_arr = array(
            "{JUDUL}" => "SIANTRIAN",
            "{PENERIMA}" => $email_receiver,
        );

        // Email body content
        $template = "./application/template_email/template.php";
        if (file_exists($template)) {
            $mailContent = file_get_contents($template);
            // $mailContent = "test<br>";
        } else {
            die("File template tidak ditemukan!");
        }

        foreach (array_keys($swap_arr) as $key) {
            if (strlen($key) > 2 && trim($key) != "") {
                $mailContent = str_replace($key, $swap_arr[$key], $mailContent);
            }
        }

        echo $mailContent;
        if (DEMO) {
            die("No email was sent on purpose");
        }

        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            // echo 'Message has been sent';
            echo '<a href="http://localhost/masteritn/index.php/sos/kepegawaian/proses_validasi">Kembali ke Menu</a>';
        }
    }
}
