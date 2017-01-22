<?php
   class Applicant_info extends CI_Controller
   {
   	    function __construct()
		 {
		 	 parent::__construct();
		 	 $this->load->helper('form');
             $this->load->helper('url');
             $this->load->helper('html');
		 }
		 function index()
		 {
		 	$this->load->view('job_form');
		 }
		 function get_form()
		 {
		 	if(isset($_POST['submit']))
		 	{
		 	//	echo "khzxhjj";
		 		$data['firstname']=$this->input->post('firstname');
		 		$data['middlename']=$this->input->post('middlename');
		 		$data['lastname']=$this->input->post('lastname');
		 		$data['inputEmail']=$this->input->post('inputEmail');
		 		$data['inputaltEmail']=$this->input->post('inputaltEmail');
		 		$data['dob']=$this->input->post('dob');
		 		$data['age']=$this->input->post('age');
		 		$data['gender']=$this->input->post('gender');
		 		$data['category']=$this->input->post('category');
		 		$data['nationality']=$this->input->post('nationality');
		 		$data['maritalstatus']=$this->input->post('maritalstatus');
		 		$data['phone1']=$this->input->post('phone1');
		 		$data['phone2']=$this->input->post('phone2');
		 		$data['mailingaddress']=$this->input->post('mailingaddress');
		 		$data['permanentaddress']=$this->input->post('permanentaddress');
		 		$data['position']=$this->input->post('position');
		 		$data['otherposition']=$this->input->post('otherposition');
		 		$data['discipline']=$this->input->post('discipline');
		 		$data['otherdiscipline1']=$this->input->post('otherdiscipline1');
		 		$data['secdiscipline']=$this->input->post('secdiscipline');
		 		$data['otherdiscipline2']=$this->input->post('otherdiscipline2');
		 		$data['specialization']=$this->input->post('specialization');
		 		$data['researchinterests']=$this->input->post('researchinterests');

                $this->load->model('collect_data');
                $res=$this->collect_data->collect_info($data);
                if($res)
                	echo "Your form has been submitted successfully";
                else
                	echo "Sorry,Your request can't be processed.Resubmit";
		 	}
		 }
   }
?>
