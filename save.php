<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$message=$_POST['message'];

$to="pushpendrasingh85793@gmail.com";
$subject="Response from Portfolio";

$body =
" Name: $name
  Email: $email
  Contact No: $contact
  Message: $message  ";

  $headers= "from: $email";

  if(mail($to,$subject,$body,$headers)){
    echo "<script>
    window.location.href='index.html';
    </script>";
  } else{
    echo "<script>
    alert('failed to send message');
    history.back();
    </script> ";
  }

?>