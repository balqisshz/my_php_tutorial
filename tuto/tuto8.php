<?php

// multi-dimensional arrays
// ni third type of array
// they are just array within array
// like maybe we have an array and that array has arrays inside it
// so each elements inside the outer array would be an array itself

$blogs = [ 
   ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],  // insert each array dlm bracket array
   ['title' =>'mario kart cheats', 'author' =>'toad', 'content' =>'lorem', 'likes' => 25], // each blogs ni need key (title,author,likes)
   ['title' =>'zelda hidden cheats', 'author' =>'link', 'content' =>'lorem', 'likes' => 50]
];

//print_r($blogs[1][1]); ni akan print array yg ke dua tpi print toad je
//echo $blogs[2]['author'];
//echo count($blogs);


// add new item so add new associative bracket
$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];

//print_r($blogs);

//how to take something off an array
$popped = array_pop($blogs); // it takes the last element inside the array and it pops it off
print_r($popped);
// result akan store kt variable pooped tu

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    


</body>
</html>