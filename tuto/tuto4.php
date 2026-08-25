<?php

// variable ni nk store info or values or data
// kene guna $ untuk create variable tuk php

define('NAME', 'Katsuki');

//$name = "Katsuki";
// variable pastu set that equal as string. guna =
// n bila nk acces blh just gune echo $name
// so die akan amek name katsuki tu, stored kr variable.
// n nnti die akan muncul kt browser

// but kita still blh gak output variable ni inside html


$age = 5;  // ni nk wat integer x pakai quotes



// kita blh overide variable gak like kt bwh ni
// bile kita run, name mimi akan keluar. nme katsuki dh x keluar
// sbb kite dh overriding katsuki tu
//$name = "Mimi";
//define('NAME', 'Mimi');

// if nk letak dua nme tpi x nk die jadi overriden
// kita blh define different type of variable called constant
// kita gune define (ada kt atas sekali code nye)
// define tu function btw
// define ('letak variable name or constant name', 'Then set value of that constant' )
// so bila nk acces benda ni, kita kene gi kt html tu yg kt div
// so dgn gune constant ni, kita x blh nk overide die. akn keluar error nnti

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    
<h1>Felidae Profile Page</h1>

<div><?php echo NAME; ?></div>  // ni yg gune define function
<div><?php echo $age; ?></div>  // ha cam ni output variable 
// so nnti string or integer yg kita tulis akan keuar kt browser

</body>
</html>