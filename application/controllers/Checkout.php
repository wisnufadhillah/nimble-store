<?php
class Checkout extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Checkout';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/checkout/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}