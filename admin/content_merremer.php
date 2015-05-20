<?php 
 
  
$this->load->database();
$this->db->select('*');
$this->db->from('login');
$this->db->join('personal_data', 'login.id = personal_data.id_login');
$this->db->where('login.name',$nam);
$query = $this->db->get();
$this->load->helper('csv');

 echo query_to_csv($query, TRUE, 'lista.csv')?>