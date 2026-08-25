<?php


// Two built in PHP function called include and require

// iclude and require another file to this file

// nk include file ninjas ke file ni
//include ('ninjas.php');

// require
// do same thing mcm include
//require('ninjas.php');


//so apa difference dorg
// include ('ninjass.php'); //so file ni x wujud, bile run dpt error but end of php tu still ada
// means die carried on with the rest of the php

// next if kita gune require pulak..
// require ('ninjass.php'); //bile run kite still dpt error
// tpi die jadi fatal error, die x carry on with the rest of the code


require 'ninjas.php'; // x pakai bracket pon still work
include 'ninjas.php';
echo 'end of php';

// so include ni allow us to go out grab another file and include it in this file

















?>






<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    <!-- so if we want to add this content to several different pages in the html template -->
     <!-- we can do this-->
      <?php include('content.php') ?>
      <!-- we can do it multiple times too-->
<?php include('content.php') ?>
<?php include('content.php') ?>

<!-- so bile kita nk update content ni, kita x yah buat byk kai, gi kt file content-->


</body>
</html>