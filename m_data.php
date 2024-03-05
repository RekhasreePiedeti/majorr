<?php defined('BASEPATH') or exit('No direct script access allowed');
class m_data extends CI_Model
{
   
	  public function show_data2019()
    {
        return $this->db->query("select* from mahasiswa where semester = 1");
    }
	 public function show_data2018()
    {
        return $this->db->query("select* from mahasiswa where semester = 3");
    }
	 public function show_data2017()
    {
        return $this->db->query("select* from mahasiswa where semester = 5");
    }
	 public function show_data2016()
    {
        return $this->db->query("select* from mahasiswa where semester = 7");
    }
}
