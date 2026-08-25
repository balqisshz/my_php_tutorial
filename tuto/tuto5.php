<?php

// string adalah first data type in php

$stringOne = 'my email is ';
$stringTwo = 'katsuki@gmail.com';

//echo $stringOne.$stringTwo;  // ni bila concatenate variable 1 dn 2. like gabungkn die

// nnti string kite tulis akan keluar di browser

$name = 'Katsuki';

//echo 'Hey, my name is ' . $name; 
// kita guna . untuk concatenate variable dgn variable lain.
// or string dgn variable


// double n sigle quotes ada perbezaan
// when use double quotes, we can directly output variable inside them 
// instead of concatenated them
// bwh ni cth

//echo "Hey, my name is $name";  // ni ha cth
// so $name ni akan replace jdi value die
// so bile run akan ada ayat Hey, my name is Katsuki
// but single quotes x blh buat mcm ni. it would not work
// sbb bile gune single quotes, ble run dia x jdi katsuki, dia akan jadi $name
// so bile nk directly put variable into the string, kite gune double quootes



// next entang escaping character inside string



//echo "The Felidae rawr \"Meowwwww\"";  // \" ni yg escape sbb kite x nk end kn string sblm meow so kite end kn quotes
//echo 'The Felidae rawr "Meowwww"';    // ni alternative lain
// bile run dia akan keluar "Meooow" double quotes tu mmg akan ada





// next how to get certain character out of string
// cth kita nk cari third character, huruf ketiga
// so kita kene gune square []

//echo $name[1]

//bila nk cari first character, kt square tu kite tulis zero
// sbb zero tu mean first index of anything dlm programming language
// so bilr nk cri second huruf, tulis 1




// next is few string function
// function are like bits of code that do things for us
// we can invoke or use function by writing the function name and then add in parentheses or bracket at the end


// function strlen, it stand for string length
// untuk find the length of a string 
// a lot of function take in arguments inside the bracket
//echo strlen($name);
// arguments is just a value
// its doesnt mean that the function is having an argument with something
// it just means, we pass in a vaue and that is the arguments
// so kt dlm bracket tu kita tulis variable $name as an arguments
// so function akan look at this variable and find the length
// so bila nk die muncul di screen length nye tu, kita tulis echo



// next ni function strtoupper
// dia akan amek string n tukar jadi uppercase
//echo strtoupper($name);



// ni function strtolower
// untuk convert string jadi lower case
//echo strtolower($name);


// function str_replace
// function ni replace certain things in string
//echo str_replace('i', 'a', $name); function ni pakai 3 arguments
// first huruf yg kita nk tukar
// second huruf tu nk tukar jadi huruf ape
// third variable name

?>

<!DOCTYPE html>
<html>
<head>
  <title>MPHP Tutorials</title>
</head>
<body>
    


</body>
</html>