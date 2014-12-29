<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Login extends CI_Controller
{
	public function index( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
		if ( $is_logged_in == 'true' ) {
			redirect( base_url() . 'index.php/site', 'refresh' );
		} //$is_logged_in == 'true'
		$data[ 'page' ] = 'login';
		$data[ 'title' ]     = 'Login Page';
		$this->load->view( 'templatelogin', $data );
	}
	public function validate( )
	{
		$this->load->model('user_model');
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$validate = $this->user_model->validate($username,$password);
		if ( $validate ) {
			redirect( base_url() . 'index.php/site', 'refresh' );
		} //$validate
		else {
			$data[ 'alerterror' ] = 'Username or Password Incorrect';
			$data[ 'page' ]  = 'login';
			$data[ 'title' ]      = 'Login Page';
			$this->load->view( 'templatelogin', $data );
		}
	}
	public function logout( )
	{
		$this->session->sess_destroy();
		redirect( base_url() . 'index.php/login', 'refresh' );
	}
	/*public function signup( )
	{
		$data[ 'page' ] = 'signup';
		$data[ 'title' ]     = 'Sign Up Page';
		$this->load->view( 'templatelogin', $data );
	}
	public function signupsubmit( )
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if($this->form_validation->run() == FALSE)	
		{
			$data['alerterror'] = validation_errors();
			$data[ 'page' ] = 'signup';
			$data[ 'title' ]     = 'Sign Up Page';
			$this->load->view( 'templatelogin', $data );
		}
		else
		{
			$name        = $this->input->post( 'name' );
			$username    = $this->input->post( 'username' );
			$password    = $this->input->post( 'password' );
			$email     = $this->input->post( 'email' );
			$this->user_model->create($name,$username,$password,$email);
			$data['alertsuccess'] = "Your account has been created.";
			$data[ 'page' ] = 'login';
			$data[ 'title' ]     = 'Login Page';
			$this->load->view( 'templatelogin', $data );
		}
	}*/
}
