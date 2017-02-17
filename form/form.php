<DOCTYPE! html>
<html>

<head>
<style>
.err{color : #FF0000;}
</style>
<title>Contact US </title>
</head>


<body>
    <img src="contactus1.jpg">
  <?php 
    
   $fname=$lname=$email=$mnumber=$country=$website=$address=$comment="";
   $fname_err=$lname_err=$email_err=$mno_err=$country_err=$website_err=$address_err="";
   
   

   
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	  if(empty($_POST["fname"])){
	       $fname_err="first name is required";
	  }
      else{ 
         $fname=input($_POST["fname"]);	
         if(!preg_match("/^[a-zA-Z]*$/",$fname)){
              $fname_err="Only letters and white spaces are allowed"; 
         }			  
      }
	  
	  
	  if(empty($_POST["lname"])){
	       $lname_err=" ";
	  }
      else{ 
         $lname=input($_POST["lname"]);	
         if(!preg_match("/^[a-zA-Z]*$/",$lname)){
              $lname_err="Only letters and white spaces are allowed"; 
         }			  
      }
   
    
	if(empty($_POST["email"])){
	       $email_err="Email is required ";
	   }
    else{ 
         $email=input($_POST["email"]);	
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $email_err="email invalid fromat"; 
            }
       }	  


	if(empty($_POST["mnumber"])){
	       $mno_err="Mobile Number is required ";
	   }
    else{ 
         $mnumber=input($_POST["mnumber"]);	
       }	  	   


	if(empty($_POST["country"])){
	       $country_err="Country  is required ";
	   }
    else{ 
         $country=input($_POST["country"]);	
       }	  	   
	   
	 
	if(empty($_POST["website"])){
	   $website_err="Option is requiresd";
	}
	else{
       $website=input($_POST["website"]);
	   if($website=="yes"){
		  if(empty($_POST["address"])){
		      $address_err="address is required";
		  }
		  else{
			 $address=input($_POST["address"]);
			 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$address)) { 
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
 
 <br>Submitting  on <?php echo date("d-m-y"); ?><br>
 <p> Fields marked <span class='err'>*</span>are mandatory </p>
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
 
  First Name : <span class='err'>*</span><br>
  <input type="text" name="fname" value="<?php echo $fname;?>" >
  <span class="err"><?php echo $fname_err ;?></span><br>
  
  
  Last Name : <span class='err'>*</span><br>
  <input type="text" name="lname" value="<?php echo $lname;?>" >
  <span class="err"><?php echo $lname_err ;?></span><br>
  
  
  Email Id : <span class='err'>*</span><br>
  <input type="email" name="email" value="<?php echo $email;?>" >
  <span class="err"><?php echo $email_err ;?></span><br>
 
 
  Mobile No. : <span class='err'>*</span><br>
  <input type="number" name="mnumber" value="<?php echo $mnumber;?>" >
  <span class="err"><?php echo $mno_err ;?></span><br>
   
 
  Select your country : <span class="err">*</span><br>
  
    <select name="country" value="<?php echo $country;?>" >
	   <option value="">Please Select</option>
     <?php 
	 
	 $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        foreach($countries as $count){
           echo " <option ";if( isset($country) && ($country==$count)) echo "selected"; echo "value=".$count.">".$count."</option>";
		}
     
	 ?>		   

	 
    </select>
	<span calss="err"><?php echo $country_err;?></span><br>
	
	
	Do you have website presently ? <span class="err">*</span><br>
	<select name="website" value="<?php  echo $website;?>">
	   <option value="">Please select</option>
	   <option <?php if( isset($website) && ($website=="yes")) echo "selected"; ?> value="yes">Yes</option>
       <option <?php if( isset($website) && ($website=="no")) echo "selected"; ?> value="no">No</option>	   
	
	</select><br>
	
	<?php 
    if( $website=='yes'){ ?> 
    	 Enter the webaddress:<br>
          <input type="url" name="webaddress" value="<?php echo $webaddress;?>" ><br>
          <span class='error'><?php echo $address_err; ?> </span>
 <?php
    }  
     ?>
	 
	 
	 Any additional information you like to add.<br>
	 <textarea name="comment" placeholder="Write here !"><?php echo $comment ; ?></textarea><br>
	 
	 
	 <input type="submit" name="submit" value="submit">
	 <input type="reset" name="reset" value="Reset">
	 
	 
	
 </form>
  


</body>



</html>