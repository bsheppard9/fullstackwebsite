<?php 

include('connection.php'); 

?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MySQL Select</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
             <h1>Password Hashing</h1>
            
            <?php
            
                //$password = password_hash("mypassword", PASSWORD_DEFAULT);
                //echo $password;
            
                $hashedPassword = '$2y$10$psl9u/iz729XGXQ0e3SAXOG6UuUAlv5u.5WC81qyExXoGZ9NF/joe';
            
                
            
                if (isset($_POST['login'])) {
                    if (password_verify($_POST['password'], $hashedPassword)) {
                        echo "Password is correct.";
                    } else {
                        echo "Incorrect password.";
                    }
                }

            
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label>* Password</label>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="submit" name="login" value="Log in" class="btn btn-default">
            </form>
             
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>