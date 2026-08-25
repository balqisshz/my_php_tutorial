
<?php

// two keywords in php
// it is break and continue
// we use this in some kind of loops when we want to get out of loop or continue through the loop


//break
// a key word in php that automatically allows us to break out of loop
// no matter what point we are inside the loop


$products = [
    ['name' => 'shiny star', 'price' => 20], //each array ni adalah product
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lighting bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product){


if($product['name'] === 'lighting bolt'){
    break;
}
// when we cycling through the products
// and we doing a live check on each product
// if the name is lighting bolt then we are going to break at that moment in time
// and forget about the loop
// it's gonna exit out of the loop completely 
// and no longer loop over ay other products
// if that not the case, if this is FALSE and we are not iterating over the product name lighting bolt
// then it gonna carry on and it's going to echo out the name of that product 

if($product['price'] > 15){
    continue;  // continue ni stop the code
    // it doesnt continue with the rest of the code in the code block for that one loop
    // mkne nya code yg bwh ni dh x dipandang gitu ah. yg echo tu
    // but it still go back up to the foreach and start again on the next product
    // so this particular product if($product['price'] > 15){
    //continue;  is going to continue back to the top of loop and skip out this code
    // echo $product['name'] . '<br />'; but it will continue on to the next product
    // where is the break just exits completely and doesnt continue on to the next product
}
echo $product['name'] . '<br />';
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