<?php

$alpha = str_split('abcdefghijklmnopqrstuvwxyz');

function generatePassword($charCount, $letterToExclude)
{
    global $alpha;
    $result = '';
    for($i=0; $i < $charCount; $i++)
    {
        $c = $letterToExclude;
        while($c == $letterToExclude)
        {
            $c = $alpha[rand(0,25)];
        }
        $result = $result . $c;
    }
    return $result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Challenge Activity</h1></h1>
        
        <form method="post">
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
        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $n = $_POST['npws'];
            $passwords = array();
            for($i = 0; $i < $n; $i++)
            {
                $passwords[] = generatePassword($_POST['nchars'],$_POST['xletter']);
            }
            sort($passwords);
            for($i = 0; $i < $n; $i++)
            {
                echo $passwords[$i];
                echo '<br/>';
            }
        }
        ?>
    </body>
</html>