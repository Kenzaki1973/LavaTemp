<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->view('index');
	}

	public function contact() {
		$this->call->view('contact');
	}

	public function about() {
		$this->call->view('about');
	}

	public function job_list() {
		$this->call->view('job_list');
	}

	public function job_detail() {
		$this->call->view('job_detail');
	}

	public function category() {
		$this->call->view('category');
	}

	public function testimonial() {
		$this->call->view('testimonial');
	}

	public function e404() {
		$this->call->view('e404');
	}

}
?>