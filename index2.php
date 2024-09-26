<?php
    // echo 'Hello World';
    // // $x = 'Hello';
    // // print_r($x);
    
    // $x = 5;
    // echo gettype($x) . "<br>";

    // $y = 10.03;
    // echo gettype($y) . '<br>';

    // $z = 'Hello World';
    // echo gettype($z) . '<br>';

    // function displayPhpVersion(){
    //     echo 'This Is PHP FILE '.phpversion();
    //     echo "\n";

    // }
    // displayPhpVersion();

    // // function foo($arg_1,$arg_2,/*....*/$arg_n){
    // //     echo "Example Function.\n";
    // //     return $returnValue;
    // // }
    // // foo();

    // function sum(){
    //     $value = 120 + 20;
    //     echo $value;
    // }

    // sum();

    // function maximumNumber($x,$y){
    //     if($x > $y){
    //         return $x;
    //     }
    //     return $y;
    // }

    // $a = 20;
    // $b = 30;

    // $test = maximumNumber($a,$b);

    // echo "The Max Of $a and $b Is $test";


    // function isEven($x){
    //     if($x % 2 === 0){
    //         return 'Even';
    //     }
    //     return 'Odd';

    // }

    // echo isEven(12);

    // f

    
    // function localVariable(){
    //     $x = 5;
    //     $y = 10;
    //     echo $x;
    //     echo $y;
    // }
    // localVariable();

    $x = 5;
    $y = 7;

    function sum(){
        global $x,$y;
        $y = $x + $y;

        
    }

    echo sum();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>