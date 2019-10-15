<?php include('inc/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index_log_in</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/site-logo1.gif" />
</head>
<body background ="img\website-background-images-house-building-colorful-window-pictures-wallpapers-photos.jpg">
    <div class="login">
        <form action="index.php" method="post">
            
            <fieldset>

                <legend><img src="img\2-512.png" alt=""></legend>

                <p>
                    <h3>Create a new account here</h3>
                </p>

                <?php
                    if(isset($errors) && !empty($errors)){
                        echo '<p class="error">Invalid username or password</p>';
                    }
                ?>


                <p>
                    <label for="">User name :</label>
                    <input type="text" name="" id="email" placeholder="Enter your e-mail address here">

                </p>

                <p>
                    <label for="">password :</label>
                    <input type="password" name="password" id="" placeholder="Enter your password here">
                </p>

                <p>
                    <label for="">Confirm the password :</label>
                    <input type="password" name="password" id="" placeholder="Enter your password here">
                </p>

                <p>
                    <button type="submit" name="submit">Submit</button>
                </p>

                </form>
                
                <form action="useracc.php" method="post">
                    <p>
                        <button type="useracc" name="LogIn">LogIn</button>
                    </p>

                </form>

            </fieldset>

        
    </div>

    <footer>
        <center>

            <img src="img\logome.png" alt="">
        </center>
        
    </footer>
    
</body>
</html>
<?php mysqli_close($connection); ?>