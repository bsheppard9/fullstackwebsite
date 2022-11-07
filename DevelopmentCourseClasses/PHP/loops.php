<?php 
    define("TITLE", "Loops");
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
                $startingNum = 50;
            
                //WHILE LOOP
                while ($startingNum <= 100) {
                    //execute code
                    //WARNING: INFINITE LOOP CAN LEAD TO FROZEN SCREEN!
                    echo "$startingNum &nbsp;";
                    
                    //increment by 1
                    $startingNum++;
                }
            
                //FOR LOOP
                for ($a = 30; $a <= 40; $a++) {
                    //code
                    echo "Number $a <br>";
                }
            
            
                //FOREACH LOOP
                $friends = array("Jim", "Sandra", "Kyle", "Cassandra");
                foreach ($friends as $friend) {
                    //output each individual value in the array
                    echo "$friend is my friend! <br>";
                }
            
                //DO WHILE LOOP
                $foo = 10;
                do {
                    //It will always run this code at least once
                    //WARNING: INFINITE LOOP CAN LEAD TO FROZEN SCREEN!
                    echo "Numero $foo <br>";
                    
                    //increment by 1
                    $foo++;
                } while ($foo <= 50);
             ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>