<?php 
   $fnm_err=$lnm_err=$email_err=$mno_err=$country_err=$website_err=$address_err="";
   $firstname=$lastname=$email=$mobilenumber=$country=$website=$webaddress=$comment=" ";
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
	   
	  if (empty($_POST["firstname"])){
		  $fnm_err="First name is required ";
	  }
	  else{
	    $firstname=input($_POST["firstname"]);
		if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
			$fnm_err="Only letters and white spaces are allowed";
		}
	  }
	  
	  
	  if(empty ($_POST["lastname"])){
		  $lnm_err="";
	  }
	  else {
		$lastname=input($_POST["lastname"]);
		if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
			$lnm_err="Only letters and white spaces are allowed";
	  }
	  
	  
     if (empty($_POST["email"])){
	    $email_err="email is required";
     }
     else{
	 	$email=input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL){
			$email_err="invalid email format";
		}
     }
	 
	 
   
     if(empty($_POST["mobilenumber")
        $mno_err=" mobilenumber is required";
     else{
		$mobilenumber=input($_POST["mobilenumber"]);
     }
	 
	 
     if(empty($_POST["country"])){
		country_err="country is required";
	 }
	 else{
		$country=input($_POST["country"]);
	 }
	 
	 if (empty($POST["website"])){
		 $website_err="option required";
	 }
	 else {
		$website=input($_POST["website"]);
	    if($website=='Yes'){
			if(empty($POST["webaddress"])){
				address_err="Web Address is required";
			}
	        else{
				$webaddress=input($POST["webaddress"]);
			    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$webaddress)) { 
	                $address_err = "Invalid URL"; ;
	            }
			}
		}
	 }
    
	$comment=input($_POST["comment"]);
		
		
		
   }
   function input($data){
	   $data=trim($data);
	   $data=stripslashes($data);
	   $data=htmlspecialchars($data);
	   return $data;
  }
  
  ?>
		
   