//PLEASE NOTE: THIS IS A TEMPLATE THAT IS CURRENTLY NOT IN USE
//THIS FILE WILL ONLY BE USED IN CASE WE SET UP OUR OWN SERVER FOR EMAIL
//RIGHT NOW WE ARE USING A 3RD PARTY REDIRECTION SERVER TO FORWARD OUR EMAILS AND DON'T NEED THIS FILE

<?php
if(isset($_POST['submit'])){
    $to = "thelaxenader@gmail.com"; // this is my email
    $from = "alexvetushko@icloud.com"; // this is also my email
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $first_name . " " . $last_name . ", " . $email " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>