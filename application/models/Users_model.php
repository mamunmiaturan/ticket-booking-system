<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Insert a new user into the database.
     * 
     * @param array $data User data to insert.
     * @return bool True on success, false on failure.
     */
    public function insert_user($data)
    {
        return $this->db->insert('users', $data);
    }

    /**
     * Check if a user exists by email or username.
     * 
     * @param string $field The field to check ('email' or 'username').
     * @param string $value The value of the field.
     * @return bool True if exists, false otherwise.
     */
    public function user_exists($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }

    /**
     * Fetch a user by email or username.
     * 
     * @param string $field The field to search by ('email' or 'username').
     * @param string $value The value of the field.
     * @return array|null The user data or null if not found.
     */
    public function get_user_by($field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('users');
        return $query->row_array();
    }
}
