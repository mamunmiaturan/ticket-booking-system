<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bus_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_bus($data)
    {
        return $this->db->insert('bus', $data);
    }

    public function bus_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('bus');
        return $query->num_rows() > 0;
    }

    public function get_bus_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('bus');
        return $query->row_array();
    }
}
