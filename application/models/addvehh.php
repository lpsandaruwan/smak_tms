<?php
    class AddVehH extends CI_Model{
    	function addvehicleh($vdata, $hdata, $odata){
                $this->db->insert('vehicle', $vdata);
    		$this->db->insert('hiredvehicle', $hdata);
    		$this->db->insert('hiredvehicleowner', $odata);
    	}
    }
?>