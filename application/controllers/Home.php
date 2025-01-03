<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Home';
        $this->load->view('templates/header', $data);

        $this->load->model('Products_model');
        $query['categories'] = $this->db->get('categories')->result_array();
        $query['recent_products'] = $this->Products_model->get_recent_products(4);

        $this->load->view('pages/home/index', $query);

        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');

        // ngambil data products dari database
        // $this->load->model('Products_model');
        // $data['products'] = $this->Products_model->get_products();
        // $this->load->view('pages/home/index', $data);
    }
}
