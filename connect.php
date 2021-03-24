<?php
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phoneNumber=$_POST['phoneNumber'];
  $confirmPass=$_POST['confirmPass'];
  $city=$_POST['city'];
  $state=$_POST['state'];
 
  function function_alert($message){

    echo "<script> alert(`$message`);</script>";
   
  }

  //Database Connection
  $conn=new mysqli('localhost','root','','task');

  if($conn->connect_error){
      die("Connection Failed : ".$conn->connect_error);
  }
  else{
   

      $stmt=$conn->prepare("insert into registration (email,phoneno,passW,confirmpassW,states,city)
      values (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sissss", $email, $phoneNumber, $password, $confirmPass, $state, $city);
      $stmt->execute();
    
      function_alert("Registration Successfuly Done...."); 
      $stmt->close();
      $conn->close();
    
    
  }

if(isset($_POST['submit'])){
  $email1=$_POST['email'];
  $phone1=$_POST['phoneNumber'];

  $to="darshanagrawal007@gmail.com";
  $subject="Form Submission";
  $message="Email : ".$email1."\n"."Phone : ".$phone1." ";
  $headers="From: $email1";
  
  if(mail($to,$subject,$message,$headers))
  {
      echo "<h1>Sent Successfully! "." ".$email1."Thank You, For Registering with us. ";
  }
  else
  {
      echo "Something went Wrong! ";
  }
  
}  

 
?>