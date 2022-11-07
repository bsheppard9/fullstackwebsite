<?php 
    define("TITLE", "If, Else &amp; Elseif Statements");
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
                // IF expression is TRUE, do something
                // IF expression is FALSE, don't do anything
                $foo = 99;
                $bar = 79;
                if ($foo > $bar) {
                    //code to execute if true
                    echo "$foo is greater than $bar<br>";
                }
            
                //ELSE
                $currentlyListeningTo = "Green Day";
            
                if ($currentlyListeningTo == "Linkin Park") {
                    //if true
                    echo "You are listening to $currentlyListeningTo";
                } else {
                    //if false
                    echo "Taking a wild guess here, you're listening to $currentlyListeningTo<br>";
                }
            
                //ELSEIF
                $favProgrammingLang = "Python";
                if ($favProgrammingLang == "Java") {
                    //if true
                    echo "Your favorite programming language is $favProgrammingLang";
                } else if ($favProgrammingLang == "Python") {
                    //Code to execute if original expression is false
                    //and if elseif expression is true
                    echo "Good one! You dig $favProgrammingLang";
                } else {
                    //if false
                    echo "I guess you don't like Java or Python. Oh well...";
                }
             ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>