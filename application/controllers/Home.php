<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mymodel');
		$this->load->model('post_job_model');
		$this->load->model('Users_model');
	}

	public function index() {
		$data['get_post'] = $this->Crud_model->GetData('postjob', 'id,post_title,description', "is_delete='0'", '', '(id)desc', '3');
		$data['get_freelancerspost'] = $this->Crud_model->GetData('postjob', '', "is_delete='0'", '', '', '4');
		$data['get_career'] = $this->Crud_model->GetData('career_tips', '', "status='Active'", '', '', '3');
		$data['get_company'] = $this->Crud_model->GetData('company_logo', '', "status='Active'", '', '', '');
		$data['get_users'] = $this->Users_model->get_users();
		$data['get_ourservice'] = $this->Crud_model->GetData('our_service', '', "status='Active'", '', '', '');
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='1'");
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function signup() {
		$data['get_category'] = $this->Crud_model->GetData('category');
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='10'");
		$this->load->view('header');
		$this->load->view('register', $data);
		$this->load->view('footer');
	}

	public function login_page() {
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='9'");
		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	public function about() {
		$data['get_cms'] = $this->Crud_model->get_single('manage_cms', "id='2'");
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='3'");
		$data['get_employer'] = $this->Crud_model->GetData('users', '', "userType='2'", '', '(userId)desc', '4');
		$this->load->view('header');
		$this->load->view('frontend/about_us', $data);
		$this->load->view('footer');
	}

	public function contact() {
		$data['get_data'] = $this->Crud_model->get_single('setting');
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='4'");
		$this->load->view('header');
		$this->load->view('frontend/contact_us', $data);
		$this->load->view('footer');
	}

	function save_contact() {
		$data = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'subject' => $_POST['subject'],
			'message' => $_POST['message'],
		);
		if ($this->Mymodel->insert('contact_us', $data)) {
			$this->session->set_flashdata('success', 'Contact Detail Successfull !');
			redirect('contact-us');
		} else {
			$this->session->set_flashdata('error', 'Error!');
			redirect('contact-us');
		}
	}

	public function privacy() {
		$data['get_cms'] = $this->Crud_model->get_single('manage_cms', "id='3'");
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='12'");
		$this->load->view('header');
		$this->load->view('frontend/privacy_policy', $data);
		$this->load->view('footer');
	}

	public function term_and_conditions() {
		$data['get_cms'] = $this->Crud_model->get_single('manage_cms', "id='1'");
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='13'");
		$this->load->view('header');
		$this->load->view('frontend/term_and_conditions', $data);
		$this->load->view('footer');
	}

	function pricing() {
		$data['get_subscription'] = $this->Crud_model->GetData('subscription');
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='11'");
		$this->load->view('header');
		$this->load->view('frontend/pricing', $data);
		$this->load->view('footer');
	}

	function our_jobs() {
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='7'");
		$this->load->view('header');
		$this->load->view('frontend/post_jobslist', $data);
		$this->load->view('footer');
	}

	function ourjob_fetchdata() {
		sleep(1);
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = count($this->post_job_model->getcount());
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'product_list'   => $this->post_job_model->fetchdata($config["per_page"], $start)
		);
		echo json_encode($output);
	}

	function post_bidding($postid) {
		$con = "postjob.id='" . base64_decode($postid) . "'";
		$data['post_data'] = $this->post_job_model->viewdata($con);
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='14'");
		$this->load->view('header');
		$this->load->view('frontend/post_detail', $data);
		$this->load->view('footer');
	}

	function workers_list() {
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='6'");
		$this->load->view('header');
		$this->load->view('frontend/workers_list', $data);
		$this->load->view('footer');
	}

	function workerlist_fetchdata() {
		sleep(1);
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = count($this->Users_model->getcount());
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'product_list'   => $this->Users_model->fetchdata($config["per_page"], $start)
		);
		echo json_encode($output);
	}

	public function worker_detail($user_id) {
		$cond = "users.userType='1' and users.userId='" . base64_decode($user_id) . "'";
		$data['user_detail'] = $this->Users_model->users_detail($cond);
		$data['user_education'] = $this->Crud_model->GetData('user_education', '', "user_id='" . base64_decode($user_id) . "'", '', '(id)desc');
		$data['user_work'] = $this->Crud_model->GetData('user_workexperience', '', "user_id='" . base64_decode($user_id) . "'", '', '(id)desc');
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='16'");
		$this->load->view('header');
		$this->load->view('frontend/worker_profile', $data);
		$this->load->view('footer');
	}

	function employer_list() {
		$data['get_banner'] = $this->Crud_model->get_single('banner', "id='5'");
		$this->load->view('header');
		$this->load->view('frontend/employer_list', $data);
		$this->load->view('footer');
	}

	function employerlist_fetchdata() {
		sleep(1);
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = count($this->Users_model->get_employercount());
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'employer_list'   => $this->Users_model->employer_fetchdata($config["per_page"], $start)
		);
		echo json_encode($output);
	}

	function career_tip($id) {
		$data['get_career'] = $this->Crud_model->get_single('career_tips', "id='" . base64_decode($id) . "'");
		$this->load->view('header');
		$this->load->view('frontend/career_tip', $data);
		$this->load->view('footer');
	}
}
