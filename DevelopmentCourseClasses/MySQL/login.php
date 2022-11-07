<?php

    /*
        STEPS TO TAKE
        1. Build login HTML Form
        2. Check if form has been submitted
        3. Validate form data
        4. Add form data to variables
        5. Connect to database
        6. Query the database for username submitted in the form;
            * if no entries, show error message
        7. Store basic user data from database in variables
        8. Verify stored hashed password with the one submitted in the form
            * if invalid, show error message
        9. Start a session and create session variables
        10. Redirect to a profile page
            * Provide link to a logout page
            * Add cookie clear to logout page
            * Provide link to log back include
        11. Close the MySQL connection*/
    if(isset($_POST['login'])) {
        
        //build a function to validate data
        function validateFormData($formData) {
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        //create variables
        //wrap the data with our function
        $formUser = validateFormData($_POST['username']);
        $formPass = validateFormData($_POST['password']);
        
        //connect to database
        include('connection.php');
        
        //created SQL query
        $query = "SELECT username, email, password FROM users WHERE username='$formUser'";
        
        //store the result
        $result = mysqli_query($connection, $query);
        
        //verify if result is returned
        if (mysqli_num_rows($result) > 0) {
            
            //store basic user data in variables
            while($row = mysqli_fetch_assoc($result)) {
                $user = $row['username'];
                $email = $row['email'];
                $hashedPass = $row['password'];
            }
            
            //verify hashed password with the typed password
            if (password_verity($formPass, $hashedPass)) {
                //Correct login; Start session
                session_start();
                
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;
                
                header("Location: profile.php");
            } else {
                //error message
                $loginError = "<div class='alert alert-danger'>Wrong username/password combination. Try again.</div>";
            }
        } else {
            //There are no results in database
            $loginError = "<div class='alert alert-danger'>No such user in database. Try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
        }
        
        mysqli_close($connection);
    }

?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
             <h1>Login</h1>
            <p class="lead">Use this form to log in to your account</p>
            
            <?php echo $loginError; ?>
            
            <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    <label for="login-username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="login-username" placeholder="username" name="username">
                </div>
                <div>
                    <label for="login-password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
                </div>
                <button type="submit" class="btn btn-default" name="login">Login</button>
            </form>
            
            <?php
            
                if (mysqli_num_rows($result) > 0) {
                    //We have data!
                    //output the data

                    echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";

                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["email"] ."</td></tr>";
                    }

                    echo "</table>";

                } else {
                    echo "Whoops! No results.";
                }

                mysqli_close($connection);

            
            ?>
             
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>