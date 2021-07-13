<?php
include_once APPPATH . "/controllers/Guide.php";


class Form_kia extends Guide
{
    var $controller_dir = 'form_kia';

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM form_pengajuan WHERE nama_form LIKE '%kia%'")->result_array();

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
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kia/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kia_pemula']['tmp_name'];
                $temp = explode(".", $_FILES["kia_pemula"]["name"]);
                $newnamefile = 'kia_pemula_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kia_pemula']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kia/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kia/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kia_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["kia_hilang"]["name"]);
                $newnamefile = 'kia_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kia_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kia/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kia/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kia_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["kia_rusak"]["name"]);
                $newnamefile = 'kia_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kia_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kia/');
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
