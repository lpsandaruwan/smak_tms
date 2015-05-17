<?php
    class AddVehC extends CI_Model{
    	function addvehiclec($vdata, $hdata){
    		$this->db->insert('vehicle', $vdata);
    		$this->db->insert('companyvehicle', $hdata);
    	}
    }
?>