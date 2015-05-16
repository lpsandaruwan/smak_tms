<?php
    class AddEmpD extends CI_Model{
    	function adddriver($data){
    		$this->db->insert('employee', $data);
    	}
    }
?>