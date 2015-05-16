<?php
    class AddEmpA extends CI_Model{
    	function addassistant($data){
    		$this->db->insert('employee', $data);
    	}
    }
?>