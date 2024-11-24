<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('payment/index');
    }
    public function form()
    {
        $this->load->view('payment/form');
    }
    public function edit()
    {
        $this->load->view('payment/edit');
    }
}
