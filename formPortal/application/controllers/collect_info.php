<?php
   class Collect_info extends CI_Controller
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
   	   	     $this->load->view('loginp');
   	   	    // echo "gAGHHGJd";
   	   	      //$this->get_info();
   	   }
   	   function get_info()
   	   {
   	   	   // echo "gAGHHGJd";

   	   	    if(isset($_POST['login']))
   	   	    {
   	   	    	//echo "gAGHHGJd";
	   	   	      $data['user']=$this->input->post('user');
	   	   	      $data['pass']=$this->input->post('pass');
	   	   	      $this->load->model('get_data');
	   	   	      $res=$this->get_data->get_details($data);
	   	   	      if($res)
	   	   	      {
	   	   	      	echo "success";
	   	   	      }
	   	   	      else
	   	   	      	echo "failure";
   	   	    }
   	   }
   }