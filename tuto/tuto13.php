<?php

// functions
// function are blocks of code that can be executed to do something
// can think like something goes is, something else comes out
// input -> function -> output
// kita blh invoke function ni n blh run byk kali


// we can create our own function 
// we can create formatProduct($product)
//that function would expect us to send in as an import as an argument to the function
// formatProduct ni akan run code tu, n dia akn spit out the output which is string


// cara nk create our own function
// first use function keyword and create the function name

// function sayHello() { // then open n close parentheses () then done! this is our function name sayHello!
// next we need to write the code that we want to run when this function is called or invoked
// so we need to do it INSIDE a code block whihc is..need to open up the curly braces for this code block

// then write the code that going to execute
// echo "Good Morning Katsuki";

// }

// next kite call/invoke the function sbb kalau x nnti x dpt echo
// sayHello();
// that going to tell php to find this function n run it

// next cara nak pass in arguments kt our own function
// cth nk pass the name katsuki tu
// kita leh wat camni

// function sayHello($name) {  // 
//     echo "Good Morning $name";

    // so first kene specify that we gonna expect this value Katsuki
    // so kita pass argument in and we declare that parameter ($name)
// }
// sayHello('Katsuki'); //katsuki ni value // ni kita pass in




// what if we dont pass in the name
 // bile run its goint to output goodmorning name, but its not really exist bcuz x pass anything in
 // blh dpt erro lh kalau x pass in

 // so apa kita blh buat
 // kita blh give this a default values kt sebelah variable name
 // so that if name is not passed in, then its gonna take the default value

 //function sayHello($name = 'Kacchan') {  // kacchan ni default value
//     echo "Good Morning $name";
//  }

// sayHello(); // ni bile x passed in
// but cth if kita tulis katsuki dlm tu, dia akan overide kacchan tu
// so nme katsuki akan keluar instead kacchan



// another function create sendiri
// function formatProduct($product) {
//     //  echo "{$product['name']} cost RM{$product['price']} to buy <br />";
//     return "{$product['name']} cost RM{$product['price']} to buy <br />";
// }

// formatProduct(['name' => 'gold star', 'price'=> 20]);
// $formatted = formatProduct(['name' => 'gold star', 'price'=> 20]);
// echo $formatted;



// function ni responsible to taking in a product variable which might have a name and a price
// and it gonna output some kind sentence about that product
// so first after dh create function, letak parameter dlm bracket tu $product
//



// cara passing multiple function arguments and accepting multiple different parameters

function sayHello($name = 'Katsuki', $time = 'morning') {
    echo "Good $time Katsuki";
}

sayHello('');

function formatProduct($product){
    return "{$product['name']} cost RM{$product['price']} to buy <br />";
}



?>



<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    


</body>
</html>