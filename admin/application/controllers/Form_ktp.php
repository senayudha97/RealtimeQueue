<?php
include_once APPPATH . "/controllers/Guide.php";


class Form_ktp extends Guide
{
    var $controller_dir = 'form_ktp';

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_verifikasi_ktp");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM form_pengajuan WHERE nama_form LIKE '%ktp%'")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('proses_antrian/' . $this->controller_dir . '_view', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $tipe = $_POST['upload'];
        $id = $_POST['key'];
        $file_lama = $_POST['file_lama'];



        switch ($tipe) {
            case "pemula":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/ktp/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['ktp_pemula']['tmp_name'];
                $temp = explode(".", $_FILES["ktp_pemula"]["name"]);
                $newnamefile = 'ktp_pemula_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['ktp_pemula']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/ktp/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/ktp/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['ktp_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["ktp_hilang"]["name"]);
                $newnamefile = 'ktp_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['ktp_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/ktp/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/ktp/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['ktp_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["ktp_rusak"]["name"]);
                $newnamefile = 'ktp_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['ktp_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/ktp/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            default:
                $this->flash_fail("Perintah Salah!");
                redirect($this->controller_dir);
        }
    }

    function upload_file($namaSementara, $newfilename, $file_type, $dirUpload)
    {
        $allowed = array("image/jpeg", "image/gif", "application/pdf");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }
}
