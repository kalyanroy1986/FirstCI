<?php 
class Student extends CI_Controller {
	function Student()
	{
		parent::__construct(); 
		
		// load helpers
    	$this->load->helper('url');
		//$this->load->view('student_add',$data);
	}
	
	public function index()
	{
		//Display information for the view
		$data['title'] = "Classroom: Home Page";
		$data['headline'] = "Welcome to the Classroom Management System";
		$data['include'] = 'student_index';
		
		$this->load->view( 'template', $data );
		
	}
	
	//The add() function for the Student controller
	function add()
	{
		$this->load->helper( 'form' );
		
		//Display information for the view
		$data['title'] = "Classroom: Add Student";
		$data['headline'] = "Add a New Student";
		$data['include'] = 'student_add';
		
		$this->load->view( 'template', $data );
	}
	
	//The create() function for the Student controller
	function create()
	{
		$this->load->helper( 'url' );
		
		//$this->load->model('MStudent','',TRUE );
		$this->load->model('MStudent');
		$this->MStudent->addStudent($_POST);
		redirect( 'student/add', 'refresh' );
	}
}

/* End of file student.php */
/* Location: ./application/controllers/student.php */