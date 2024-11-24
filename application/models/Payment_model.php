<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_payment($data)
    {
        return $this->db->insert('payment', $data);
    }

    public function payment_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('payment');
        return $query->num_rows() > 0;
    }

    public function get_payment_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('payment');
        return $query->row_array();
    }
}
