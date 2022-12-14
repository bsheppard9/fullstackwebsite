<?php
    //did the user's browser send a cookie for the session?
    if (isset($_COOKIE[session_name()])) {
        //empty the cookie
        setcookie(session_name(), '', time()-86400, '/');
    }

    //Clear all session variables
    session_unset();

    //Destroy the session
    session_destroy();

    echo "You've been logged out! See you next time.";

    echo "<p><a href='login.php'>Log back in</a></p>";

?>