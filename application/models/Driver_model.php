<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_driver($data)
    {
        return $this->db->insert('driver', $data);
    }

    public function driver_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('driver');
        return $query->num_rows() > 0;
    }

    public function get_driver_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('driver');
        return $query->row_array();
    }
}
