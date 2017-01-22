<?php
     class Get_data extends CI_model
     {
     	function __construct()
		 {
		 	parent::__construct();
		 }

         function get_details($data)
         {
         	$user=$data['user'];
         	$pass=$data['pass'];
         	$query="SELECT `user`, `passwords` FROM `users` WHERE user='$user' AND passwords='$pass' LIMIT 1";
            $res=$this->db->query($query);
            echo count($res);
            if($res)
            	return count($res);

         }
     }