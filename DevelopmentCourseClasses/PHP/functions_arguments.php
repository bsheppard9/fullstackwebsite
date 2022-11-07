<?php 
    define("TITLE", "Functions &amp; Arguments");
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
                function myFirstFunction() {
                    $a = 0;
                    
                    do {
                        echo "$a &nbsp;";
                        $a++;
                    } while ($a <= 100);
                }
            
                //function call
                myFirstFunction();
            
                function mySecondFunction($a) {
                     do {
                        echo "$a &nbsp;";
                        $a++;
                    } while ($a <= 100);
                }
            
                mySecondFunction(5);
            
                function addTogether($num1, $num2) {
                    $newNum = $num1 + $num2;
                    echo "$num1 + $num2 = $newNum";
                }
            
                addTogether(39, 128);
             ?>
        </div>
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>