<?php
    $url='localhost';
    $username='root';
    $password='';
    $dbname='login_db';
    // $port='3307';
    $conn=mysqli_connect($url,$username,$password,$dbname);
    // $conn=mysqli_connect($url,$username,$password,$dbname,$port);
    if(!$conn){
        die('Could not Connect to Database. Following error occured:' .mysqli_error());
    }
