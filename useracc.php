<?php include('inc/connection.php'); ?>
<?php include_once('inc/processind.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User_acc</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/site-logo1.gif" />
</head>
<body background ="img\website-background-images-house-building-colorful-window-pictures-wallpapers-photos.jpg">
    <div class="login">
        <form action="useracc.php" method="post">
            
            <fieldset>

                <legend><img src="img\2-512.png" alt=""></legend>

                <p>
                    <label for="">User name :</label>
                    <input type="text" name="email" id="" placeholder="Enter your e-mail address here">

                </p>

                <p>
                    <label for="">password :</label>
                    <input type="password" name="passowrd" id="" placeholder="Enter your password">
                </p>

                

                <p>
                    <button type="submit" name="submit" > Submit</button>
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