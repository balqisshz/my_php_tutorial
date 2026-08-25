<?php

// conditional statements

// $price = 20;

// if ($price < 10) {  // if statements
// echo 'the condition is met';
// // its a conditional statements we use the if keyword
// // then we have some kind of condition we want to evaluate ($price < 30)
// // if the condition is true, the block {} inside the code is going to execute 
// // if the condition is false, screen empty. so  need to add else clause. so bile salah ayat condition not met tu keluar
//  //we can also add aditional clauses
// } else if ($price < 30 ) { // ni yg add additional tu
//     echo 'elseif condition met';
// } else {
//     echo 'condition not met';

   
// }


$products = [
    ['name' => 'shiny star', 'price' => 20], //each array ni adalah product
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lighting bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product){

// if($product['price'] < 15  && $product['price'] > 2){
//     // kita blh check multiple condition inside if statement
//     // so gune && means nk check another condition 
//     echo $product['name'] . '<br />';  // ni product yg less than 15
// }
// jwpn btl nnti green shell n gold coint sbb lebih dri dua DAN kurg dari 15


// check if price is over 20 and if price less tahn 10
//  if($product['price'] > 20  || $product['price'] < 10){  // || ni all/logical. only one of them have to be true
//     echo $product['name'] . '<br />'; 
// }



}


?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    
<!-- outputing if statements inside the template itself
// bcuz sometimes we want to output different content 
//if something is true and if it false -->

<div> <!--inside ul tu buat foreach loop to cycle through the products -->
    <ul> 
       <?php foreach ($products as $product){ ?>
        <!-- inside this loop we gonna do an if check -->
        <?php if($product['price'] > 15){ ?>
         <!--now blh letak li tag-->
         <li><?php echo $product['name']; ?></li> <!-- if price greater than 15, akan ada li tag kat product tu bile output-->
          <?php } ?>
       <?php } ?>  
       <!--we need separate php tag down here to close the loop later one
       // because in between we're going to output some html template code-->
    </ul>
</div>

</body>
</html>