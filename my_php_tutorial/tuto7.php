<?php

// indexed arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];
//echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-li');
//echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
//print_r($ages);

$ages[1] = 25;
//print_r($ages);

$ages[] = 60;
//print_r($ages);

array_push($ages, 70);
//print_r($ages);

//echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

// associative arrays (key & value pairs)

$ninjaOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
//echo $ninjaOne['mario'];
//print_r($ninjaOne);

$ninjaTwo = array('bowser' => 'green', 'peach' => 'yellow');
//print_r($ninjaTwo);

$ninjaTwo['peach'] = 'pink';
//print_r($ninjaTwo);

//echo count($ninjaOne);

$ninjaThree = array_merge($ninjaOne, $ninjaTwo);
print_r($ninjaThree);

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tuorials</title>
</head>

<body>



</body>

</html>