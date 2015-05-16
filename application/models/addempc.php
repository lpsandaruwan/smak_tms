<?php
    class AddEmpC extends CI_Model{
    	function addcleaner($data){
    		$this->db->insert('employee', $data);
    	}
    }
?>