<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserData extends CI_Model {
	function _construct(){
		parent::_construct();
	}

	
	public function index($data){
     $this->db->insert('users',$data);
	}
	public function defaultUserQuestionID($data){
     $this->db->insert('leader',$data);
	}
	
	function check_email_availability($google_data){
		foreach ($google_data as $key => $value) {
		$email = trim($value);
		}
		$query = $this->db->query('SELECT * FROM users where email ="'.$email.'"');
		if($query->num_rows()>0)
			return false;
		else
			return true;
	}

	function userIDNonAvailabilityCheckInRankDB($user_id){
		$query = $this->db->query('SELECT * FROM rank where user_id = "'.$user_id.'"');
		if($query->num_rows()>0)
			return false;
		else
			return true;
	}
	function adminCredentialVerification($name,$password){
	   $enpassword = md5($password);
       $query = $this->db->query("SELECT * FROM administrator WHERE name='$name' AND password='$enpassword'");
       if($query->num_rows()>0)
       	return TRUE;
       else
       	return FALSE;
       
	}

	function checkForBannedEmail($email){
		$query = $this->db->query("SELECT * FROM bannedUser WHERE email='$email'");
		if($query->num_rows()>0)
			return FALSE;
		else
			return TRUE;
	}

   function banUser($user){
   	$this->db->insert('bannedUser',$user);
   }
   function unbanUser($user){
   $this->db->where('email', $user);
   $this->db->delete('bannedUser');
   }
}
?>