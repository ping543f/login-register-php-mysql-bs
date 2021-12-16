<?php
    $url='localhost';
    $username='root';
    $password='';
    $dbname='login_db';
    $conn=mysqli_connect($url,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect to Database. Following error occured:' .mysql_error());
    }
