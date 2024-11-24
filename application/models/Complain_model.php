<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complain_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_complain($data)
    {
        return $this->db->insert('complain', $data);
    }

    public function complain_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('complain');
        return $query->num_rows() > 0;
    }

    public function get_complain_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('complain');
        return $query->row_array();
    }
}
