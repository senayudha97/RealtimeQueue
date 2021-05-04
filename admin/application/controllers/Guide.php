<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Guide extends CI_Controller
{
    var    $is_delete = 0;
    public function __constructor()
    {
        parent::__construct();
        $data_post  = $this->input->post();
    }

    public function flash_success($message)
    {
        $this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong> $message
            </div>");
    }

    public function flash_fail($message)
    {
        $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Gagal!</strong> $message
            </div>");
    }

    public function PHPExcelinit()
    {
        require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php');
        require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

        // Instansiasi and config
        $xl = new PHPExcel();
        return $xl;
    }

    public function runExcel()
    {
        require(APPPATH . 'excel/niigata_engine_excel.php');
    }

    public function cellRange($end_column = '', $first_letters = '')
    {
        $columns = array();
        $length = strlen($end_column);
        $letters = range('A', 'Z');

        // Iterate over 26 letters.
        foreach ($letters as $letter) {
            // Paste the $first_letters before the next.
            $column = $first_letters . $letter;
            // Add the column to the final array.
            $columns[] = $column;
            // If it was the end column that was added, return the columns.
            if ($column == $end_column)
                return $columns;
        }

        // Add the column children.
        foreach ($columns as $column) {
            // Don't itterate if the $end_column was already set in a previous itteration.
            // Stop iterating if you've reached the maximum character length.
            if (!in_array($end_column, $columns) && strlen($column) < $length) {
                $new_columns = myRange($end_column, $column);
                // Merge the new columns which were created with the final columns array.
                $columns = array_merge($columns, $new_columns);
            }
        }

        return $columns;
    }

    public function dayRange($early, $later)
    {
        $first_date = strtotime($early);
        $second_date = strtotime($later);
        $offset = $second_date - $first_date;
        return floor($offset / 60 / 60 / 24);
    }

    public function generateqr($filename = "qrcodefaultname.png", $value)
    {
        require_once('./application/third_party/phpqrcode/qrlib.php');

        $dir = './application/template_email/qrcodeholder/' . $filename;
        QRcode::png($value, $dir, 'XL', 8, 8);

        return $dir;
    }

    function sendEmail($env = array())
    {
        $email_sender = "chickchipsgame@gmail.com";
        $pasword_email_sender = "kmzwa88saa";

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

        if ($env['istolak'] == false) {
            $filename = explode($env['email'], '@');
            $mail->AddEmbeddedImage($this->generateqr($filename[0] . date('dmy') . 'png', $env['qrval']), 'coba');
        }


        $mail->setFrom('info@example.com', 'Siantrian');
        $mail->addReplyTo('info@example.com', 'Siantrian');

        // Add a recipient
        $mail->addAddress($env['email']);

        // Email subject
        $mail->Subject = 'Siantrian - Pengajuan Online';

        // Set email format to HTML
        $mail->isHTML(true);

        $swap_arr = array(
            "{JUDUL}" => "SIANTRIAN",
            "{PENERIMA}" => $env['email'],
            "{MESSAGE}" => $env['message'],
        );

        // Email body content
        $template = "./application/template_email/template.php";
        if (file_exists($template)) {
            $mailContent = file_get_contents($template);
        } else {
            die("File template tidak ditemukan!");
        }

        foreach (array_keys($swap_arr) as $key) {
            if (strlen($key) > 2 && trim($key) != "") {
                $mailContent = str_replace($key, $swap_arr[$key], $mailContent);
            }
        }

        // echo $mailContent;
        if (DEMO) {
            die("No email was sent on purpose");
        }

        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            exit;
        }
    }
}
