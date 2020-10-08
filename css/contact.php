<?php
//variable setting
$email = $_REQUEST['email'];
$message = $_REQUEST['msg1'];
//check input fields

if (empty($email)||empty($message))
{
    echo "please fill all the fields ";
}

else
{
    mail("cs.uvce.ieee@gmail.com", "CodeFury Website Response", $message ,"From:<$email>");
    echo "your message sent successfully";
}
?>