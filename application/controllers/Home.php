<?php

	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title'] = 'Home';

			$this->load->view('templates/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer', $data);
		}
	}