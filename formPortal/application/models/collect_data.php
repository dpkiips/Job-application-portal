<?php
  class Collect_data extends CI_model
  {
     function __construct()
	 {
	    parent::__construct();
     }

     function collect_info($data)
     {
     	$firstname=$data['firstname'];
     	$middlename=$data['middlename'];
     	$lastname=$data['lastname'];
     	$inputEmail=$data['inputEmail'];
     	$inputaltEmail=$data['inputaltEmail'];
     	$dob=$data['dob'];
     	$age=$data['age'];
     	$gender=$data['gender'];
     	$category=$data['category'];
     	$nationality=$data['nationality'];
     	$maritalstatus=$data['maritalstatus'];
     	$phone1=$data['phone1'];
     	$phone2=$data['phone2'];
     	$mailingaddress=$data['mailingaddress'];
     	$permanentaddress=$data['permanentaddress'];
     	$position=$data['position'];
     	$otherposition=$data['otherposition'];
     	$discipline=$data['discipline'];
     	$otherdiscipline1=$data['otherdiscipline1'];
     	$secdiscipline=$data['secdiscipline'];
     	$otherdiscipline2=$data['otherdiscipline2'];
     	$specialization=$data['specialization'];
     	$researchinterests=$data['researchinterests'];

     	$query="INSERT INTO `applications`(`firstname`, `middlename`, `lastname`, `inputEmail`, `inputaltEmail`, `dob`, `age`, `gender`, `category`, `nationality`, `maritalstatus`, `phone1`, `phone2`, `mailingaddress`, `permanentaddress`, `position`, `otherposition`, `discipline`, `otherdiscipline1`, `secdiscipline`, `otherdiscipline2`, `specialization`, `researchinterests`) VALUES ('$firstname','$middlename','$lastname','$inputEmail','$inputaltEmail','$dob','$age','$gender','$category','$nationality','$maritalstatus','$phone1','$phone2','$mailingaddress','$permanentaddress','$position','$otherposition','$discipline','$otherdiscipline1','$secdiscipline','$otherdiscipline2','$specialization','$researchinterests')";

     	$res=$this->db->query($query);

        if($res)
        	return 1;
        else
        	return 0;
     }
 }
?>
