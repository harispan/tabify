<?php 
if(isset($_POST['submit'])){
    $to = "info@tabify.gr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
   
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
  

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	header('Location: emailsend.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>