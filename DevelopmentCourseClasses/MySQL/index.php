<?php 

include('connection.php'); 

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);


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
             <h1>MySQL Select</h1>
            
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