<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); // Always call parent constructor
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Users_model');
	}

	// Login function (shows login form)
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			// Handle POST request here, such as logging the user in
			echo "Turan";
		} else {
			// If not POST, simply load the login page
			$this->load->view('auth/login');
		}
	}

	// Registration function
	public function register()
	{
		// Check if form is submitted via POST
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			// Form validation rules
			$this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
				'is_unique' => 'This email is already registered.'
			]);
			$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|min_length[11]|max_length[14]|numeric');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password]');

			// Run the validation
			if ($this->form_validation->run() === FALSE) {
				// If validation fails, reload the registration form with error messages
				$this->load->view('auth/register');
			} else {
				// If validation passes, prepare user data
				$data = [
					'full_name'    => $this->input->post('full_name'),
					'email'        => $this->input->post('email'),
					'phone_number' => $this->input->post('phone_number'),
					'password'     => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
					'created_at'   => date('Y-m-d H:i:s'),
				];

				// Insert user into the database
				if ($this->Users_model->insert_user($data)) {
					// On success, set a success message and redirect to login page
					$this->session->set_flashdata('success', 'Your account has been created successfully!');
					redirect('auth/index');
				} else {
					// On failure, set an error message and reload the registration form
					$this->session->set_flashdata('error', 'Failed to create account. Please try again.');
					$this->load->view('auth/register');
				}
			}
		} else {
			// If not a POST request, simply show the registration form
			$this->load->view('auth/register');
		}
	}
	public function dashboard()
	{
		$this->load->view('dashboard/dashboard');
	}
}
