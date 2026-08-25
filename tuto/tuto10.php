<?php

// comparison booleans (true or false)
// echo true; "1"
// echo false; ""

// whenever we echo a boolean to the browser
// we dont see the texture
// when we echo to the browser, values have to be converted to strings
// and everything that is output to the browser is ultimately a string of text or numbers or characters
// Php when it sees a boolean and we want to output it to the screen
// it converts it into either a string of 1 if it's true
// or a string of empty if it's false



//numbers
// echo 5 < 10; true, at screen should  be 1
// echo 5 > 10; false, at screen should be empty
// echo 5 == 10; use 2 equal bcus if use one, that is an assignment operator cth: $name = 'shaun'
// echo 10 == 10;
// echo 5!= 10; != mksudnya is not equal to
// echo 5 <= 5;  less or equal
// echo 5 >= 5;



// strings
// echo 'shaun' < 'yoshi'; s tu before y so die mmg less sbb s comes before y
// echo 'shaun' > 'yoshi'; 
// echo 'shaun' > 'Shaun';  uppercase letter is seen as less than lowercase letter
// echo 'mario' == 'mario'; 
// echo 'mario' == 'Mario'; 




// loose vs strictequal comparison
// when we use double equals, we don't take into consideration any kind of data type
// so technically 5 == '5' salah tpi sbb kite gune loose comparison
// dia x amek consideration pon type of data kita gune

// echo 5 == '5';  true

// echo 5 === '5';  this is a strict comparison
// it takes into account the type of data
// so false

// echo 5 == 5; true
//echo 5 === 5; true

// echo true == "1";
// echo false == "";

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>
    


</body>
</html>