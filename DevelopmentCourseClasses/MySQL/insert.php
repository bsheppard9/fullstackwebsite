<?php 

include('connection.php');

if(isset($_POST["add"])) {
        //Checks to see that the form is submitted
        //Then builds a function that validates     data
        function validateFormData($formData) {
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        //check to see if inputs are empty
        //Create variables with form data
        //wrap the data with our function
    
        $username = $email = $password = "";
        
        if(!$_POST["username"]) { //Checks to see if the form is empty
            $nameError = "Please enter your username <br>";
        } else {
            $name = validateFormData($_POST["username"]);        
        }
        
        if(!$_POST["email"]) { //Checks to see if the form is empty
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData($_POST["email"]);        
        }
    
        if(!$_POST["password"]) { //Checks to see if the form is empty
            $passwordError = "Please enter your password <br>";
        } else {
            $password = validateFormData($_POST["password"]);        
        }
    
        if($username && $email && $password) {
            $query = "INSERT INTO users (id, username, password, email, signup_date, biography)
VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, 'Hello! I\'m Jackson. This is my bio.')";
    
            if (mysqli_query($connection, $query)) {
                echo "<div class='alert alert-success'>New record in database!</div>";
            } else {
                echo "Error: ". $query . "<br>" .  mysqli_error($connection);
            }
        }
    
        
    }



/* 
MYSQL INSERT QUERY

INSERT INTO users (id, username, password, email, signup_date, biography)
VALUES (NULL, 'jacksonsmith', 'abc123', 'jack@son.com', CURRENT_TIMESTAMP, 'Hello! I'm Jackson. This is my bio.');

*/
mysqli_close($connection);

?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MySQL Insert</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
             <h1>MySQL Insert</h1>
            
            <p class="text-danger">* Required fields</p>
           
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Username" name="username"><br><br>
                
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="email"><br><br>
                
                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" placeholder="Password" name="password"><br><br>
                
                <input type="submit" name="add" value="Add Entry">
            </form>
             
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>