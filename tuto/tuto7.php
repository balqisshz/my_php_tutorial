<?php


// array ni ape
// array give us a way to Store multiple different values inside just a single variable


// indexed arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];
//echo $peopleOne[1];
// bila nk set equal to array pakai square []
// this indicate an array in php 
// next place values inside the square bracket
// echo $peopleOne[1] n cara nk acces index array like kita nk nme sorg tu je keluar
// dia mcm cara nk cari first character, tpi ni nk cari values
// ingt zero dulu start
// name tu value like shaun
// [1] ni key

$peopleTwo = array('ken', 'chun-li'); // ni another way nak create array
//echo $peopleTwo[1];
// array kuning tu function 

$ages = [20, 30, 40, 50];  
//print_r($ages);
// there is different way to print out the values of these array
//bcus so far we just echoing out a single elements inside the array
// so how do we echo the whole array
// x jadi kalau guna echo $ages; jdi error
// so kita gune print_r stand for print readable


$ages[1] = 25;   // ni nk overide 30 jadi 25
//print_r($ages);

$ages[] = 60;    // ni nk add new values kt array
//print_r($ages);

array_push($ages, 70);  // ni nk add values onto the end of an array
//print_r($ages);
// array_push ni function yg takes in two parmeters
// first array yg kita nk push a value onto ($ages)
// second values is the value yg kita nk push onto the array (70)



// next, how to count the different elements inside
//echo count($ages);



// ni how nk merge two arrays together
// create variable bru untuk restore the result of this function
// function name is array_merge
$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);




// associative arrays (key & value pairs)
// associative array are key value pairs
// we use key instead of index

$ninjaOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
//echo $ninjaOne['mario'];  ni print certain value
//print_r($ninjaOne); ni print whole array/ readable version
// arrow => tu point to the value of whatever the key (shaun) going to be
// shaun tu key, black tu value

$ninjaTwo = array('bowser' => 'green', 'peach' => 'yellow'); //ni second associative array
//print_r($ninjaTwo);


$ninjaTwo['peach'] = 'pink';  // ni nk add new value or blh guna tk overide
//print_r($ninjaTwo);

//echo count($ninjaOne);  // count the element or values inside associative array

$ninjaThree = array_merge($ninjaOne, $ninjaTwo);  //merge array
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