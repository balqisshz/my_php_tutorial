<?php

// variable scope
// when we create a variable, they can have a certain scope
// it could be a global scope or a local scope


// local vars

function myFunc(){
    $price = 10;  //declare variable 
      echo $price;
    // variable yg create inside function like this, it has local scope
    //means we can only use it only inside this function
    // echo pon inside function. bkn outside function
  
}

// myFunc();
// if try echo outside mean dekat bawah myFunc();
// x akan blh sbb x de access. adeerror



// second example
function myFuncTwo($age){  // dh call function ni
    echo $age;
}

// myFuncTwo(25);  // kita pass in arguments
// even thou kita pass in age dri outside, and assign variable inside function
// its still has only local scope kt function () tu
// n kite cannot access it again/echo outside of function 

// bile kite create variable inside a function or inside bracket ()
// then its local scope and it can only be used locally inside that function



// global variables

// outside function, kita buat variable name 
$name = 'Katsuki'; 
// next create function
// function sayHello(){
    // $name = 'Katsuki'; //but what if x nk gune value katsuki tu?
    // global $name;  //kite buat ni, n nnti kita akan dpt access variable $name yg di declare outside of function
    // kita blh overide gak
    // $name = 'Kacchan'; // kita blh overide outsidefunction gak
    // echo "hello $name"; // kita declare this name variable outside of function
    // bile run x kn keluar apa ii sbb kita x called the function
// }


// called the function
// sayHello(); //bile run kite dpt error yg cakap $name tu undefined
// why die undefined sbb die looking for local variable by default inside the function
// so if kita tmbh $name = 'Katsuki'; kt atas echo
// bilerun akan work sbb dh find local variable
// echo $name; //ni overiden outside

// so bile kita change kt inside nme tu, die actually change name kt varible yg outside function, bkn yg local



// new function
function sayBye(&$name){
    $name = 'Kacchan';
echo "Bye $name";

}

sayBye($name);
echo $name;




?>



<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    


</body>
</html>