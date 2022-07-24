<?php 
if(isset($_POST['submit'])){
    $to = "gk544729@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "New Contact!!! | Job New Reach Available!! ";
    $subject2 = "Recoded Response Gokul kushwaha| contact from";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message']."\n\n"."Mail Sent. Thank you " . $name . ", we will contact you shortly.";;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
    header('Location:index.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
