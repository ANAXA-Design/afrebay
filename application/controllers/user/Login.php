<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Mymodel');
	}

	public function reg() {
	 	$validate=$this->Crud_model->get_single('users',"mobile='".$_POST['mobile']."'");
	    if(!empty($validate)) {
			$data=array('result'=>0,'data'=>'phone');
		} else {
			$validate=$this->Crud_model->get_single('users',"email='".$_POST['email']."'");
			if(!empty($validate)) {
				$data=array('result'=>0,'data'=>'email');
			}
		}
		if(empty($validate)) {
			$data=array(
				'username' =>$_POST['username'],
				'userType' =>$_POST['user_type'],
				'email' =>$_POST['email'],
				'mobile' =>$_POST['mobile'],
				'serviceType' => implode(", ", $_POST['service']),
				'password' => md5($_POST['password']),
				'created'=>date('Y-m-d H:i:s'),
				'status'=>1
			);
			if($this->Mymodel->insert('users',$data)) {
				$email=$_POST['email'];
			    $this->load->library('email');
				$data=array('email'=>$email,'password'=>$_POST['password']);
				$htmlContent = $this->load->view('email_template/signup',$data,TRUE);
				$config = array(
					'protocol' => 'ssmtp',
					'smtp_host' => 'ssl://ssmtp.googlemail.com',
					'smtp_port' => 587,
					'smtp_user' => 'mediaadgroup',
					'smtp_pass' => 'Kade2000',
					'smtp_crypto' => 'security',
					'mailtype' => 'html',
					'smtp_timeout' => '4',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
				);
				$this->email->initialize($config);
				$this->email->from('info@afrebay.pro','AFREBAY PRO');
				$this->email->to($email);
				$this->email->subject('Registration Confirmation message from AFREBAY PRO');
				$this->email->message($htmlContent);
				$this->email->send();
				$this->session->set_flashdata('success', 'Registration Successfull !');
				$data=array('result'=>1,'data'=>1);
			} else {
				$this->session->set_flashdata('error', 'Failed to Register !');
				$data=array('result'=>2,'data'=>2);
			}
		}
		echo json_encode($data); exit;
    }

	public function validate_user($pId = null) {
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		} else {
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			if($this->Mymodel->check_record($email, $password)) {
				$this->session->set_flashdata('message', 'Logged in successfully !');
				redirect('home');
			} else {
				$this->session->set_flashdata('error', 'Invalid Email or Password !');
				redirect('login');
			}
		}
	}

	public function logout() {
	    unset($_SESSION['afrebay']);
			$this->session->set_flashdata('msg', 'You have logged out.');
			redirect('login');
	    }

    function forgot_password() {
   	   	$this->load->view('header');
		$this->load->view('forgot_password');
		$this->load->view('footer');
   	}

	function send_forget_password() {
		//print_r($this->input->post('email')); die();
    	if(!empty($this->input->post('email',TRUE))) {
     		$get_email = $this->Crud_model->get_single('users',"email='".$_POST['email']."'");
         	if(!empty($get_email)) {
             	$data=array(
					'email'=>$get_email->email
				);
				$htmlContent = $this->load->view('email_template/forgot_password',$data,TRUE);
				$config = array(
					'protocol' => 'ssmtp',
					'smtp_host' => 'ssl://ssmtp.googlemail.com',
					'smtp_port' => 587,
					'smtp_user' => 'mediaadgroup',
					'smtp_pass' => 'Kade2000',
					'smtp_crypto' => 'security',
					'mailtype' => 'html',
					'smtp_timeout' => '4',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
				);
				$this->email->initialize($config);
				$this->email->from('info@afrebay.pro','AFREBAY PRO');
				$this->email->to($get_email->email);
				$this->email->subject('Forgot Password Confirmation message from AFREBAY PRO');
				$this->email->message($htmlContent);
				$this->email->send();
				print_r($this->email->send());
				//$msg = 'pass';
         	} else {
   				//$msg = 'fail';
   			}
			//echo
      	}

	}


	function new_password() {
	    $data['title']='Forget Password';
		$this->load->view('header',$data);
		$this->load->view('new_password');
		$this->load->view('footer');
	}

	public function setnew_password() {
		if($this->input->post('email',TRUE)){
		 	$get_email = $this->Crud_model->GetData('users','',"email='".$_POST['email']."'",'','','','1');
			if(!empty($get_email)) {
				$data = array('password' =>md5($_POST['password']));
			 	$con="userId='".$get_email->userId."'";
			 	$this->Crud_model->SaveData('users',$data, $con);
			 	$this->session->set_flashdata('message', 'New password successfully !');
	           	echo "1";
            } else {
            	$this->session->set_flashdata('error', 'Error');
            }
        }
	}

}//end controller
