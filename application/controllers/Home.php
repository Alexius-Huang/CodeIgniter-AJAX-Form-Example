<?php

	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('post_model');
		}

		public function index()
		{
			$data['title'] = 'Home';
			$data['posts'] = $this->post_model->get_post();

			$this->load->view('templates/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer', $data);

		}

		public function submit()
		{
			date_default_timezone_set('Asia/Taipei');

			if ($this->input->post('title')) {
				// Form Validation
				$this->form_validation->set_rules('title', 'Post Title', 'required');
				$this->form_validation->set_rules('content', 'Post Content', 'required');

				if ($this->form_validation->run() === FALSE) {
					exit($data['error_message'] = 'There is an error!');
				}

				$data = array(
					'title'      => $this->input->post('title'),
					'content'    => $this->input->post('content'),
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H:i:s")
				);

				$this->post_model->create_post($data);
				echo json_encode($data); // Response
			}
		}
	}