<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Route extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('route/index');
    }
    public function form()
    {
        $this->load->view('route/form');
    }
    public function edit()
    {
        $this->load->view('route/edit');
    }
}
