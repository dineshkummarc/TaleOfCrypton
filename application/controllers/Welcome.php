<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
function __construct() {
        parent::__construct();
        $this->load->model('Questions');
        $this->load->model('Leaderboard');
        $this->load->model('UserData');


    }
    public function contact(){
    $this->load->helper('url');
     $this->load->view('contact');
    }
    public function userBanPanel(){
     $this->load->helper('url');
     $this->load->view('userBanPanel');

     if(isset($_POST['login'])){
        $name = $_POST['username'];
        $password = $_POST['password'];
        if($this->UserData->adminCredentialVerification($name,$password)){
           $session_data = array( 'name' => $name,
                       'session_logged_in' => 1);
           $this->session->set_userdata($session_data);
           redirect(base_url('Welcome/userBanPanel'));
        }
    }
    if(isset($_POST['ban'])){
       $user = array( 'email' => $_POST['banUser']);
       $this->UserData->banUser($user);

    }
    if(isset($_POST['unban'])){
       $user = $_POST['unbanUser'];
       $this->UserData->unbanUser($user);
    }
}

	public function loggedIn(){
	 $this->load->helper('url');
	 $this->load->view('loggedIn');

    }
    public function rules(){
	 $this->load->helper('url');
	 $this->load->view('rules');

    }
    public function leaderboard(){
    $this->Leaderboard->totalUserEntryToRankDB();
    $this->Leaderboard->updateQuestionIDInRankDB();
    $sortedRank['rank'] = $this->Leaderboard->sortedRankList();
    $this->load->helper('url');
    $this->load->view('leaderboard', $sortedRank);
}

    public function startGame(){
     $var = $_SESSION['user_id'];
     $email = $_SESSION['email'];
     $greater = $this->Questions->currentQuestionID($var);
     if(isset($_POST['answer'])){
         $answer = $_POST['answer'];
         $changedToLowerCaseAnswer = strtolower($answer);
         if($this->Questions->checkAnswer($greater,$changedToLowerCaseAnswer)){
            $greater = $greater+1;
                $data = array(
                'user_id'=>$var,
                'question_id'=>$greater
                );
            if($greater <= 31){
               $this->Questions->updateLeaderDB($data);
            }
        }
        else{
              echo "<div style='color:red;' align='center'>Wrong Answer</div>";
            }
    }
    if($greater <=30 && ($this->UserData->checkForBannedEmail($email))){
     $get_result = $this->Questions->questionFromDatabase($greater);
     $this->Leaderboard->totalUserEntryToRankDB();
     $this->Leaderboard->updateQuestionIDInRankDB();
     $this->load->helper('url');
     $this->load->view('questions',$get_result);
    }else{
    $this->load->helper('url');
    redirect(base_url('Welcome/loggedIn'));
    }
    }



}