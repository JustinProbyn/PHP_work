<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $array = array(10, 20, 30);
    array_unshift($array, 'Mary');
    print_r($array);

    echo "<br><br>";

    $names = array("first_name" => 'Justin', 'last_name' => 'Probyn');
    print_r($names);
    echo "<br>";

    echo $names['first_name'] . " " . $names['last_name'];


    ?>

</body>

</html>