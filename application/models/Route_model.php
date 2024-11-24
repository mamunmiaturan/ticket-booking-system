<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Route_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_route($data)
    {
        return $this->db->insert('route', $data);
    }

    public function route_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('route');
        return $query->num_rows() > 0;
    }

    public function get_route_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('route');
        return $query->row_array();
    }
}
