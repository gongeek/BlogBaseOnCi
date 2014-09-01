<?php

	class Comment_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_comment($id) {
			$query = $this->db->query(sprintf('select * from comment where articleid=%d ORDER BY id DESC', $id));
			return $query->result();
		}
	}

?>