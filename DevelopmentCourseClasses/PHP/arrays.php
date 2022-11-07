<?php 
    define("TITLE", "PHP Arrays");
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
            
            <?php
                $username = "johndoe";
                $fullName = "John Doe";
                $age = 32;
                $gender = "male";
                $country = "Mexico";
                //Simple Array
                $user = array(
                    "johndoe",
                    "John Doe",
                    32,
                    "male",
                    "Mexico"
                );
                echo $user[0]."<br>";
                echo $user[1]."<br>";
                echo $user[2]."<br>";
                echo $user[3]."<br>";
                echo $user[4]."<br>";
            
                //Associative Array
                $people = array(
                    "username" => "johndoe",
                    "fullname" => "John Doe",
                    "age" => 32,
                    "gender" => "male",
                    "country" => "Mexico"
                );
            
                //Echo the values of the array
                echo $people["username"]."<br>";
                echo $people["fullname"]."<br>";
                echo $people["age"]."<br>";
                echo $people["gender"]."<br>";
                echo $people["country"]."<br>";
            
                //Multi-Dimensional Array
                $employees = array(
                    array(
                        "username" => "johndoe",
                        "fullname" => "John Doe",
                        "age" => 32,
                        "gender" => "male",
                        "country" => "Mexico"
                    ),
                    array(
                        "username" => "janedoe",
                        "fullname" => "Jane Doe",
                        "age" => 27,
                        "gender" => "male",
                        "country" => "Mexico"
                    )
                );
                //Echo the values of this array
                echo "<hr><br>";
                echo $employees[0]["fullname"];
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>