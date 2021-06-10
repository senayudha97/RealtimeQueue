<?php
include_once APPPATH . "/controllers/Guide.php";


class Log_email extends Guide
{
    var $controller_dir = 'Log_email';

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->join('user', 'user.id = email_sender.user_input');
        $data['data'] = $this->db->get('email_sender')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('email_sender/Log_email_view', $data);
        $this->load->view('templates/footer');
    }

    public function send()
    {
        $dataPost = $this->input->post('input');

        $this->db->insert('email_sender', $dataPost);
        $this->sendEmail(['email' => "senayudha97@gmail.com", 'message' => $dataPost['mail'], 'istolak' => true]);

        $this->flash_success("Pengiriman Email Berhasil");
        redirect('Email_sender');
    }
}
