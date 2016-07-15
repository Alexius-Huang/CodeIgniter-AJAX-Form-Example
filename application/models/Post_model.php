<?php

	class Post_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function create_post($data)
		{
			$create_data = array(
				'title'      => $data['title'],
				'content'    => $data['content'],
				'created_at' => $data['created_at'],
				'updated_at' => $data['updated_at']
			);

			return $this->db->insert('post', $create_data);
		}

		public function get_post($id = NULL)
		{
			if ($id == NULL) {
				$SQLquery = $this->db->get('post');
				return $SQLquery->result_array();
			}

			$SQLquery = $this->db->get_where('post', array('id' => $id));
			return $SQLquery->row_array();
		}
	}