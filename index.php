<!doctype html>
<html lang="en">

<head>
    <title>PHP</title>
</head>

<body>
    <?php
    echo "<h1>Hello world!</h1>";
    echo "<p> Text</p>";
    $a = 0.5;
    $b = "0.5";
    $c = $a + floatval($b);
    echo $c;


    $firstVariavle = 25;
    $secondVariable = 12;
    $world = "FEL SIT students";
    for ($i = 0; $i < $firstVariavle + $secondVariable; $i++) {
        echo "<h1>Hello $world</h1> $i iteration";
    }
    // define("MY_CYCLE", 10);
    // $myOutput = " ";
    // for ($i = 0; $i < "MY_CYCLE"; $i++) {
    //     $myOutput = $myOutput . $i;
    // }
    // echo $myOutput;
    $cisla = ["100", "90", "80", "70", "60", "50", "40", "30", "20", "10"];
    foreach ($cisla as &$cislo) {
        if ($cislo > "50") {
            echo $cislo . " je vice nez 50";
        }
    }
    ?>



</body>

</html>