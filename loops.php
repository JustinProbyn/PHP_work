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

    // while loop
    // $counter = 0;
    // while ($counter <= 10) {
    //     echo $counter . ": Hello" . "<br>";
    //     $counter++;
    // };


    // for loop
    // for ($num = 0; $num < 10; $num++) {
    //     echo $num;
    // };



    // forEach loop
    $sum = 0;
    $numberList = [1, 2, 3, 4, 5];

    foreach ($numberList as $number) {
        // echo $number . "<br>";
        $sum += $number;
        echo $sum . "<br>";
    };


    ?>
</body>

</html>