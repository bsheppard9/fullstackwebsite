<?php 
    define("TITLE", "GET &amp; POST");

    if(isset($_POST["post_submit"])) {
        //Checks to see that the form is submitted
        //Then builds a function that validates     data
        function validateFormData($formData) {
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        //check to see if inputs are empty
        //Create variables with form data
        //wrap the data with our function
        
        if(!$_POST["post_name"]) { //Checks to see if the form is empty
            $nameError = "Please enter your name <br>";
        } else {
            $name = validateFormData($_POST["post_name"]);        
        }
        
        if(!$_POST["post_email"]) { //Checks to see if the form is empty
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData($_POST["post_email"]);        
        }
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
             <h1><?php echo TITLE; ?></h1>
            
            <h4>Submitted via $_GET</h4>
             <form action="form_get.php" method="get">
                 <input type="text" placeholder="Name" name="name">
                 <input type="text" placeholder="Email" name="email">
                 <input type="submit" name="form_submit">
            </form>
            <!--DON'T USE GET TO RETRIEVE SENSITIVE INFORMATION!!-->
            
            <hr>
            
            <h4>Submitted via $_POST</h4>
            <form action="form_post.php" method="post">
                 <input type="text" placeholder="Name" name="post_name">
                 <input type="text" placeholder="Email" name="post_email">
                 <input type="submit" name="post_submit">
            </form>
            
            <hr>
            
            <h4>Submitted to current page</h4>
            
            <p class="text-danger">* Required fields</p>
            <!-- The function ensures that no javascript has been entered and trims whitespace, cleans code, etc. -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Name" name="post_name"><br><br>
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="post_email"><br><br>
                <input type="submit" name="post_submit">
            </form>
            
            <?php
                /*array(
                    "name" => "Brad",
                    "email" => "brad@email.com"
                );*/ //Essentially what get and post does
                if(isset($_POST["post_submit"])) {
                    echo "<h4>Your info</h4>";
                    echo "$name <br> $email <br>";
                }
            ?>
        </div>
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>