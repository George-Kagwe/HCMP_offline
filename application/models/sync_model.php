<?php
class Sync_model extends Doctrine_Record {
	public function get_latest_timestamp(){
		$query = $this->db->query("SELECT * FROM sync_data WHERE last_sync_date=(SELECT MAX(last_sync_date) FROM sync_data)");
		$result = $query->result_array();
		return $result;
	}

	public function get_new_data($table_name){
		$query = $this->db->query("SELECT * FROM '$table_name' WHERE last_updated < now();");
		$result = $query->result_array();
		return $result;
	}

	public function get_new_data_seth($table_name, $last_sync_time){
		$query = $this->db->query("SELECT * FROM '$table_name' WHERE added_on > '$last_sync_time'; ");
		$result = $query->result_array();
		return $result;
	}
}
?>