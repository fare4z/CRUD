<?php
class Home_model extends MY_Model {

	protected $_table = 'tb_news';
	protected $primary_key = 'news_id';

	function sort_date()
	{
		$this->db->order_by('news_date','desc');
		return $this;
	}
  
  
  function get_info_multiple_cond($table, $where = 0) {
		$this->db->select('*');
		$this->db->from($table);
		if ($where != 0) {
			foreach ($where as $key => $val) {
				$this->db->where($key, $val);
			}
		}
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>
