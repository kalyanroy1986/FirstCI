<?php
	class MStudent extends CI_Model {
		
		//Create student record in database 
		function addStudent( $data )
		{
			$this->db->insert( 'student', $data );
		}
	}
	
	/* End of file mstudent.php */
	/* Location: .system/application/models/mstudent.php */