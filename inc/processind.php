<?php
//submit button
if(isset($_POST['submit'])){
    //enter the password and email
    
    $errors = array();
    
    if(!isset($_POST['email']) || strlen(trim($_POST['email'] < 1))){
        $errors[] = 'user name is miissing or invalid';

    }

    if(!isset($_POST['password']) || strlen(trim($_POST['password'] < 1))){
        $errors[] = 'enter the password or invalid your password..';

    }

    //check the errors in the form
    if(empty($errors)){
       //save the passsword and email to variables
       
       //$email = $_POST['email'];
       //$password = $_POST['password'];

       $email = mysqli_real_escape_string($connection, $_POST['email']);
       $password = mysqli_real_escape_string($connection, $_POST['password']);

        //prepare the query
        $query = "SELECT * FROM pro_user WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        //if does have any errors display the errors
        if($result_set){
            //echo("query is okay..");

            if(mysqli_num_rows($result_set)){
                //echo("query is valid");

                //go to the home page
                header('Location:CHEZ Home.html');
            }else{
                $errors[] = 'invalid username or password';
            }


        }else{
            $errors[] ='query is invalid';
        }
    }

}








?>