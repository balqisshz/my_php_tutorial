<?php

//Loops
// common in nearly every programming language
// execute a block of code a set number of times
// dia cam... akan print kn values kite gitu
// like kita ada byk value n print tpi x tau byk mne
// so gune loop ni ha



$ninjas = ['shaun', 'yoshi', 'ryu'];

//for($i = 0; $i < count($ninjas); $i++){  
// nk cycle through each one of the thing insie the array
// and to output them to the screen
// $i tu count variable
// as long as i less than 3, akan continue loop
//echo $ninjas[$i] . '<br />';  
//}

//foreach($ninjas as $ninja){ 
  //  echo $ninja . '<br />';
//}

$products = [
    ['name' => 'shiny star', 'price' => 20], //each array ni adalah product
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lighting bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];  // ' - '  ni hypen
//     echo '<br/>';
// }



// while loop
// similiar to the other kinds of loops 
// we just use it to cycle through a particular block of code
// while a certain condition is true

// $i = 0;  //declare i ni dulu

// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br/>';
//     $i++; // increase by one after loop till i isnot going to be less than count
// }


?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    

  <h1>Products</h1>
  <ul>
    <?php foreach($products as $product){ ?>

    <h3><?php echo $product['name']; ?></h3>
    <p>RM <?php echo $product['price']; ?></p>

    <?php } ?>
  </ul>

</body>
</html>