<?php
	class Posts extends CI_Controller {
		public function index() {
			$data['title'] = "Najnowsze posty";

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL) {
			//$this->load->helper('url');
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])) {
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
	}
