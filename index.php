<?php

function myCookie($type)
{
    setcookie('my-cookie', true, [
        'expires' => time() + 60,
        'secure' => true,
        'SameSite' => $type,
    ]);
}

print_r($_POST['type']);

if (isset($_POST['type'])) {
    myCookie($_POST['type']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETCOOKIE</title>
</head>

<body>
    <form action="index.php" method="post">
        <select name="type" id="">
            <option value="Lax">lax</option>
            <option value="Strict">strict</option>
            <option value="None">none</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <img src='./cookie-image.php' alt=''>
</body>

</html>