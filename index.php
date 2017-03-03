<?php

$alpha = array('a', 'b', 'c', 'd', 'e', 'f', 'e', 'f', 'g', '');

function generatePassword($charCount, $letterToExclude)
{
    
    for($i=0; $i < $charCount; $i++)
    {
        $r = rand(0,24);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Challenge Activity</h1></h1>
        
        <form method="get">
            How many passwords?
            <input type="number" name="npws">
            <br /> <br />
            Password Length
            <br />
            <input type="radio" name="nchars" value="6"> 6 characters
            <input type="radio" name="nchars" value="8"> 8 characters
            <input type="radio" name="nchars" value="10"> 10 characters
            <br /><br />
            Letter to Exclude
            <input type="text" name="xletter">
            <br /><br />
            <input type="submit" name="generate" value="Generate Passwords">
        </form>
    </body>
</html>