<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class leaderboard extends CI_Model {

 function totalUserEntryToRankDB(){
 	$query = $this->db->query('SELECT user_id, name FROM users');
 	foreach ($query->result_array() as $row) {
 	$this->load->model('userData');
 	if($this->userData->userIDNonAvailabilityCheckInRankDB($row['user_id'])){
 	$this->load->model('Questions');
 	$questionID = $this->Questions->currentQuestionID($row['user_id']);
 	$data = array( 
 		'question_id' => $questionID,
 		'name'=>$row['name'],
		'user_id'=>$row['user_id']
	);
	$this->db->insert('rank',$data);
 	}
 }
 }

 function updateQuestionIDInRankDB(){
   $query = $this->db->query('SELECT user_id, question_id FROM rank');
   foreach ($query->result_array() as $row) {
   	$currentQuesID = $this->Questions->currentQuestionID($row['user_id']);
   	if($currentQuesID != $row['question_id'])
   	{
   		$data=array('question_id'=> $currentQuesID );
        $this->db->set('question_id','question_id',false);
        $this->db->where('user_id',$row['user_id']);
        $this->db->update('rank',$data);
   	}
   }
 }

 function sortedRankList(){
 	$this->db->select('name, question_id');
    $this->db->order_by("question_id", "desc");
    $query = $this->db->get('rank');
    return $query->result_array();
 }
 



} ?>