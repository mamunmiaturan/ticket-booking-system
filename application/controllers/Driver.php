<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('driver/index');
    }
    public function form()
    {
        $this->load->view('driver/form');
    }
    public function edit()
    {
        $this->load->view('driver/edit');
    }
}
