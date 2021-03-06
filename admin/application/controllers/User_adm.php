<?php
include_once APPPATH . "/controllers/Guide.php";

class User_adm extends Guide
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user_adm/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Menu Added
            </div>');
            redirect('user_adm');
        }
    }

    public function verif($param)
    {
        $this->db->where('id', $param);
        $this->db->set('is_active', 1);
        $this->db->update('user');

        $this->flash_success('Verifikasi User');
        redirect('user_adm');
    }

    public function ban($param)
    {
        $this->db->where('id', $param);
        $this->db->set('is_active', 0);
        $this->db->update('user');

        $this->flash_success('Nonaktifkan User');
        redirect('user_adm');
    }

    public function delete($param)
    {
        $this->db->where('id', $param);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Menghapus User
            </div>');
        redirect('user_adm');
    }
}
