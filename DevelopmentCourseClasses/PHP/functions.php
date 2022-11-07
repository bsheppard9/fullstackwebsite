<?php 

    function checkForClickBait() {
        //Grab value from textarea
        //Make all letters lowercase
        //Store in a variable
        $clickBait = strtolower($_POST["clickbait_headline"]);
        
        
        //Store array of clickbait-souding words or phrases
        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );
        
        //Array of replacement words
        /*Make suer each replacement is in the same order as the word being replaced*/
        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );
        
        //Use str_replace() to replace the words
        //Uppsercase the first letter using ucwords()
        //Store in a variable
        $honestHeadline = str_replace($a, $b, $clickBait);
        
        return array($clickBait, $honestHeadline);
        
    }

    function displayHonestHeadline($x, $y) {
        //Uppsercase the first letter using ucwords()
        //Store in a variable
        echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";
        //Echo the honest headline
        echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
    }

?>