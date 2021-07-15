<?php
include_once APPPATH . "/controllers/Guide.php";


class Form_kk extends Guide
{
    var $controller_dir = 'form_kk';

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_verifikasi_kk");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_antrian', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->where('status ', 0);
        $this->db->where('tanggal_antrian ', date('Y-m-d'));
        $data['data'] = $this->db->get('kk_perubahan_data')->result_array();
        $data['data'] = $this->db->query("SELECT * FROM form_pengajuan WHERE nama_form LIKE '%kk%'")->result_array();


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
            case "kkhilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kkhilang']['tmp_name'];
                $temp = explode(".", $_FILES["kkhilang"]["name"]);
                $newnamefile = 'kkhilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kkhilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "kkrusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kkrusak']['tmp_name'];
                $temp = explode(".", $_FILES["kkrusak"]["name"]);
                $newnamefile = 'kkrusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kkrusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "perubahandata":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['perubahandata']['tmp_name'];
                $temp = explode(".", $_FILES["perubahandata"]["name"]);
                $newnamefile = 'perubahandata_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['ktp_pemulaperubahandatatype'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "pecah1desa":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['pecah1desa']['tmp_name'];
                $temp = explode(".", $_FILES["pecah1desa"]["name"]);
                $newnamefile = 'pecah1desa_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['pecah1desa']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "pindahdesa":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['pindahdesa']['tmp_name'];
                $temp = explode(".", $_FILES["pindahdesa"]["name"]);
                $newnamefile = 'pindahdesa_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['pindahdesa']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "pindahkota":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['pindahkota']['tmp_name'];
                $temp = explode(".", $_FILES["pindahkota"]["name"]);
                $newnamefile = 'pindahkota_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['pindahkota']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }

                break;
            case "kedatangan":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/kk/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['kedatangan']['tmp_name'];
                $temp = explode(".", $_FILES["kedatangan"]["name"]);
                $newnamefile = 'kedatangan_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['kedatangan']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/kk/');
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
