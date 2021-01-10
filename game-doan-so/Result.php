<?php
if (isset($_POST['Result']))
{
    $radioVal = $_POST["MyRadio"];

    if($radioVal == "Smaller")
    {
        echo("Less than ".rand(0,100));
    }
    else if ($radioVal == "Bigger")
    {
        echo("Bigger than ".rand(0,100));
    }
    else if ($radioVal == "Exactly")
    {
        echo("Correct");
    }

    $rannum = rand(0,100);
    $rannum1= rand(0,100);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="Result.php">
    <h1> <?php echo "Is your number ".$rannum. "?" ?></h1>
    <input type="radio" name="MyRadio" value="Smaller" checked>The number is less<br>
    <input type="radio" name="MyRadio" value="Bigger">The number is bigger<br>
    <input type="radio" name="MyRadio" value="Exactly">Correct
    </br>

    <input type="submit" value="Result" name="Result">
</form >

</body>
</html>
