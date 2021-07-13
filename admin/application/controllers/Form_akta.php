<?php
include_once APPPATH . "/controllers/Guide.php";


class Form_akta extends Guide
{
    var $controller_dir = 'form_akta';

    public function __construct()
    {
        parent::__construct();
        // $this->load->model("Tbl_verifikasi_akta");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM form_pengajuan WHERE nama_form LIKE '%akta%'")->result_array();

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
            case "akta_kelahiran_baru":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kelahiran_baru']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kelahiran_baru"]["name"]);
                $newnamefile = 'akta_kelahiran_baru_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kelahiran_baru']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kelahiran_hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kelahiran_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kelahiran_hilang"]["name"]);
                $newnamefile = 'akta_kelahiran_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kelahiran_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kelahiran_rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kelahiran_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kelahiran_rusak"]["name"]);
                $newnamefile = 'akta_kelahiran_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kelahiran_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kelahiran_pembaruan":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kelahiran_pembaruan']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kelahiran_pembaruan"]["name"]);
                $newnamefile = 'akta_kelahiran_pembaruan_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kelahiran_pembaruan']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kematian_baru":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kematian_baru']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kematian_baru"]["name"]);
                $newnamefile = 'akta_kematian_baru_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kematian_baru']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kematian_hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kematian_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kematian_hilang"]["name"]);
                $newnamefile = 'akta_kematian_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kematian_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kematian_rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kematian_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kematian_rusak"]["name"]);
                $newnamefile = 'akta_kematian_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kematian_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_kematian_pembaruan":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_kematian_pembaruan']['tmp_name'];
                $temp = explode(".", $_FILES["akta_kematian_pembaruan"]["name"]);
                $newnamefile = 'akta_kematian_pembaruan_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_kematian_pembaruan']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perkawinan_baru":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perkawinan_baru']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perkawinan_baru"]["name"]);
                $newnamefile = 'akta_perkawinan_baru_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perkawinan_baru']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perkawinan_hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perkawinan_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perkawinan_hilang"]["name"]);
                $newnamefile = 'akta_perkawinan_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perkawinan_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perkawinan_rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perkawinan_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perkawinan_rusak"]["name"]);
                $newnamefile = 'akta_perkawinan_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perkawinan_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perkawinan_pembaruan":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perkawinan_pembaruan']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perkawinan_pembaruan"]["name"]);
                $newnamefile = 'akta_perkawinan_pembaruan_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perkawinan_pembaruan']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perceraian_baru":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perceraian_baru']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perceraian_baru"]["name"]);
                $newnamefile = 'akta_perceraian_baru_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perceraian_baru']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perceraian_hilang":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perceraian_hilang']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perceraian_hilang"]["name"]);
                $newnamefile = 'akta_perceraian_hilang_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perceraian_hilang']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perceraian_rusak":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perceraian_rusak']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perceraian_rusak"]["name"]);
                $newnamefile = 'akta_perceraian_rusak_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perceraian_rusak']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
                $this->db->set('file', $newnamefile);
                $this->db->where('id', $id);
                if ($this->db->update('form_pengajuan')) {
                    $this->flash_success("Proses Upload File Berhasil");
                    redirect($this->controller_dir);
                }


                break;
            case "akta_perceraian_pembaruan":
                if ($file_lama != '') {
                    if (unlink(FCPATH . '/file_upload/form_pengajuan/akta/' . $file_lama)) {
                    } else {
                        $this->flash_fail("Proses Gagal");
                        redirect($this->controller_dir);
                    }
                }

                $namaSementara = $_FILES['akta_perceraian_pembaruan']['tmp_name'];
                $temp = explode(".", $_FILES["akta_perceraian_pembaruan"]["name"]);
                $newnamefile = 'akta_perceraian_pembaruan_' . round(microtime(true)) . '.' . end($temp);
                $file_type = $_FILES['akta_perceraian_pembaruan']['type'];
                $this->upload_file($namaSementara, $newnamefile, $file_type, './file_upload/form_pengajuan/akta/');
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
