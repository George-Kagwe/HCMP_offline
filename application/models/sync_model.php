<?php
class Sync_model extends Doctrine_Record {
	public function get_latest_timestamp(){
		$query = $this->db->query("SELECT * FROM sync_data WHERE last_sync_date=(SELECT MAX(last_sync_date) FROM sync_data)");
		$result = $query->result_array();
		return $result;
	}

	// public static function get_new_data($table_name) {
	// 	$data = $this->db->query("SELECT * FROM '$table_name' WHERE last_updated < NOW()")
	// 	$result = $query->result_array();
	// 	return $result;
	// }

	public static function update_last_sync($facility_code){
		$query = $this->db->query("UPDATE sync_data SET last_sync_date = NOW() WHERE facility_code = '$facility_code'")
		$run_result = $query->result_array();
		if($run_result) return true;
		else return false;
	}	
}
?>