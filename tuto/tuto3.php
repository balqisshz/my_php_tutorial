<?php   //ni php tag

//echo 'Hello, Felidae'; 
// ni utk nk letak PHP statement
// gune echo statement mcm cth kt atas tu
// single quote tu die mcm string? blh letak huruf, number gitu
// so echo statement ni, dia amek strings n die echos like send benda tu ke browser
// tpi browser akn intepret string tu as html, sbb browser cannotrun php


//utk create php file ofc kite kene embed php code inside php tag kt sini, mcm html jgk
//so lepas dh buat tag, dh blh type PHP code inside php tag tu


?>

<!DOCTYPE html>
<html>
<head>
  <title>My First PHP File</title>
</head>
<body>
    
<h1><?php echo 'Hello, Felidae'; ?></h1>  //ni cara nk embed php inside html

// why buat gini npe x buat yg biase? knp kene letak php tag tu
//sbb cth kt string tu kita bkn just letak setakat string tpi kite letak dynamic data
// mcm user info from user dashboard or product info from database
// so dia cam untuk output dynamic content to the HTML template


</body>
</html>