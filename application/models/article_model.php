<?php

	class Article_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_article($page=0) {
			$query=$this->db->query(sprintf('select * from article ORDER BY id DESC limit %d,%d',
			$page*10,10));
			return $query->result();
		}

		public function get_jswz($page=0) {
        			$query=$this->db->query(sprintf('select * from article where groups="%s" ORDER
        			 BY
        			id DESC limit %d,%d',
        			'jswz',$page*10,10));
        			return $query->result();
        		}
        public function get_sbzt($page=0) {
        			$query=$this->db->query(sprintf('select * from article where groups="%s" ORDER
        			 BY
        			id DESC limit %d,%d',
        			'sbzt',$page*10,10));
        			return $query->result();
        		}
        public function get_title_by_tag($tag,$page=0) {
                			$query = $this->db->query(sprintf("select * from article where tag
                			like '%s' ORDER BY id DESC limit %d,%d ", '%' . $tag . '%',$page*10,10));
                			return $query->result();
         }

		public function get_paper($id){
			$query=$this->db->query(sprintf('select * from article where id=%d',$id));
			return $query->result();
		}




	}


?> 