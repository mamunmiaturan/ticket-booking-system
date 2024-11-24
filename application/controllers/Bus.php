<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Bus_model');
    }

    public function index()
    {
        $this->load->view('bus/index');
    }
    public function form()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Get form data
            $bus_data = [
                'bus_number'    => $this->input->post('bus_number'),
                'origin'        => $this->input->post('origin'),
                'destination'   => $this->input->post('destination'),
                'departure_time' => $this->input->post('departure_time'),
                'arrival_time'   => $this->input->post('arrival_time'),
                'total_seat_no' => $this->input->post('total_seat_no'),
                'driver_id' => 1,
            ];

            // Insert data into the database
            if ($this->Bus_model->insert_bus($bus_data)) {
                $this->session->set_flashdata('success', 'Bus added successfully!');
                redirect('bus/index'); // Redirect back to the form or another page
            } else {
                $this->session->set_flashdata('error', 'Failed to add bus. Please try again.');
            }
        } else {
            // Load the form view
            $this->load->view('bus/form');
        }
    }
    public function edit()
    {
        $this->load->view('bus/edit');
    }
}
