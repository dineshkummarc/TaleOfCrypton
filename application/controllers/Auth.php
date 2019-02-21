<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->library('google');
        $this->load->model('UserData');
        $this->load->model('Questions');
    }

	public function index(){
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('home',$data);
	}
    
	public function oauth2callback(){
		$google_data=$this->google->validate();
			//Checking if user is already registered or not
            $email_data = array('email' => $google_data['email']);
			$get_result = $this->UserData->check_email_availability($email_data);
            // Storing Data of new user
			if($get_result){
			$data = array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email']
			);
			$this->UserData->index($data);
		}
		$userID = $this->Questions->userIDSet($email_data);
		$leaderDBData = array(
		 'user_id' => $userID['user_id'],
		  'question_id' => 1
		);
		$this->UserData->defaultUserQuestionID($leaderDBData);
		//Setting session data
		$session_data=array(
			    'user_id' => $userID['user_id'],
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'source'=>'google',
				'profile_pic'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
		$this->session->set_userdata($session_data);
		
        redirect(base_url());
	}
	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'sess_logged_in'=>0);
		$this->session->set_userdata($session_data);
		redirect(base_url());
	}
}
