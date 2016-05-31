<?php

$name=@trim(stripslashes($_POST['name']));
$email=@trim(stripslashes($_POST['email']));
$comments=@trim(stripslashes($_POST['comments']));

    $subject='Feedback';
    $email_from = 'Feedback - SSV INFOTECH';
    $email_to = 'dineshssv91@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Comments: ' . $comments;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    echo "<script>";
    echo "window.alert('Thank You for contacting me.')";
    echo "</script>";
    echo "<script>";
    echo"self.location='index.html'";
    echo"</script>";


    ?>