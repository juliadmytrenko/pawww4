<?php
	class Posts extends CI_Controller {
		public function index() {
			$data['title'] = "Najnowsze posty";

			$data['posts'] = $this->post_model->get_posts();
			print_r($data['posts']);


			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
	}
