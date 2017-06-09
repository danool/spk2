<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');	
class Auth_m extends CI_Model
{	
	 private $table_name = 'user';	
	 function __construct()	
	 {	
	 	 parent :: __construct();	
	 	 $this->load->model(array('Encrypt_m'));	
	 }	
	 function process_login($login_array_input = NULL)	{	
	 	 if(!isset($login_array_input) OR count($login_array_input) != 2)	
	 	 	 return	false;
	 	 	 //set	its	variable	
	 	 	 $email = $login_array_input[0];	
	 	 	 $password = $login_array_input[1];	
	 	 	 //	select	data	from	database	to	check	user	exist	or	not?	
	 	 	 $this->db->where('email', $email);	
	 	 	 $this->db->limit(1);
	 	 	 $query = $this->db->get('user');	
	 	 	 if	($query->num_rows() > 0) {	
	 	 	 	 $row = $query->row();	
	 	 	 	 $id_ktp = $row->id_ktp;
	 	 	 	 $email = $row->email ;
	 	 	 	 $password = $row->password;	
	 	 	 	 $user_salt = $row->salt;		
	 	 	 	 if($this->Encrypt_m->encryptUserPwd($password, $user_salt) === $user_pass)	{	
		 	 	 	 $this->session->set_userdata('logged_user', $id_ktp);	
	 	 	 	 	 //$this->session->set_userdata('nama', $nama);	
	 	 	 	 	 // $this->session->set_userdata('email', $email);
	 	 	 	 	 // $this->session->set_userdata('username', $username);
	 	 	 	 	 // $this->session->set_userdata('alamat', $alamat);
	 	 	 	 	 //$this->session->set_userdata('alamat', $alamat);
	 	 	 	 	 // $this->session->set_userdata('gender', $gender);
	 	 	 	 	 //$this->session->set_userdata('level', $level);	
	 	 	 	 	 return	true;	
	 	 	 	 }	
	 	 	 	 return	false;	
	 	 	 }	
	 	 return	false;	
	 }	
	 function check_logged(){	
	 	 return	($this->session->userdata('logged_user'))? TRUE:FALSE;	
	 }	
	 function logged_id(){
		 return	($this->check_logged())? $this->session->userdata('logged_user'):'';	
	 }	
}	