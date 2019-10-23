<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        /*
        $query = $this->db->get('student');
        return $query->result_array(); */
        
        //method chaining 
        return $this->db->get('student')->result_array();
    }
}