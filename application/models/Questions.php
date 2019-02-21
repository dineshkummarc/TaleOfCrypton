<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class questions extends CI_Model {
	function _construct(){
		parent::_construct();
		$this->load->library('google');
	}
 //FUNCTION: To set UserID in SESSION variable
	function userIDSet($data){
		foreach ($data as $key => $value) {
		$email = trim($value);
		}
		$query = $this->db->query('SELECT user_id FROM users where email ="'.$email.'"');
		foreach ($query->result_array() as $row) {
			$data = array(
			'user_id' =>$row['user_id']
		);
		}
		return $data;
	}
//Function: Calculate current question ID of an individual user
	function currentQuestionID($var){
        $query = $this->db->query('SELECT question_id FROM leader WHERE user_id ="'.$var.'"');
        $greater = 0;
        foreach ($query->result_array() as $row) {
        	if($row['question_id'] > $greater)
        		$greater = $row['question_id'];
        }
        return $greater;
    }
//FUNCTION : Question Display according to user clearance level.
    function questionFromDatabase($greater){
        $query = $this->db->query('SELECT * FROM questions WHERE question_id ="'.$greater.'"');
		foreach ($query->result_array() as $row)
        {
         $data = array(
        'question' => $row["question"],
        'path' => $row["path"],
        'question_id' => $row['question_id']
      	);
        }
        return $data;
	}

	function updateLeaderDB($data){
		$this->db->insert('leader',$data);
	}

	function checkAnswer($greater,$answer){
		$query = $this->db->query('SELECT answer FROM questions WHERE question_id ="'.$greater.'"');
		foreach ($query->result_array() as $row) {
             if($row['answer'] == preg_replace('/\s+/', ' ', trim($answer))){
             	return true;
             }
             else{
             	return false;
             }
		}
		
	}
     

	
} ?>