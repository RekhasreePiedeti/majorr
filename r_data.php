<?php defined('BASEPATH') or exit('No direct script access allowed');
class r_data extends CI_Model
{
    public function show_data()
    {
        return $this->db->get('users');
    }  
}
