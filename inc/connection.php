<?php
    $dbhost ='localhost';
    $dbuser = 'user';
    $dbpass = '';
    $dbname = 'pro_db';

    $connection = mysqli_connect('localhost', 'root', '', 'pro_db');
    //conection with databse
    if(mysqli_connect_errno()){
        echo("database is not connected" .mysqli_connect_error());
    }else{
        //echo("database is connected");
    }
?>

<?php
    $first_name = "Kusal";
    $last_name = "Mendis";
    $email = "km@gmail.com";
    $password = "km123";
    $is_deleted = "0";

    $hashed_password = sha1($password);
    //echo $hashed_password ."<br>";
    
    $query = "INSERT INTO pro_user(first_name, last_name, email, password, is_deleted) VALUES('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', $is_deleted)";

    $result = mysqli_query($connection, $query);

    if($result){
        //echo("query is recorded.. .");
    }else{
        echo("query is not recorded .<br>");
    }
?>

<?php

?>