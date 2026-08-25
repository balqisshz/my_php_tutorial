<!-- 
 Form in PHP

 Dari website kn ade form like isi email etc, so once dpt data tu, kita nk send data tu ke server
 Bile dpt data tu kt server, we can do something with it like save kt database

 The way we do this, we send data from browser to the server is via vouple of different
 methods in conjuction with web forms in html

 And those 2 methods is GET and POST

 -Both method can be used to send data to the server
 - GET sends the data in the URL (we see at the top of browser)
 - POST sends data in the request header(hidden, cant see) more secured way




 XSS Attacks
htmlspecialchars = take the date we import and look at the data and turn any character into html identity
its for safety reason so mean people can't send malicious link



htmlspecialchars ni  function yg mcm security gitu?
and die akan look at the data / string of characters that we input
and it turns any certain special html characters like angle bracket and quotes into html entities

HTML entities are like safe string version code for special characters
So cth bile isi some scriot, dia akn tukar jadi html entities rather than original code die




Form Validation
- We need to validate the data that a users enters into form after they click submit


Basic validation

empty = checking if the value is empty


Filter and More Validation
-check if the valus is a correct type
-we need to validated those things on the server inside the script
-use filter to validate email
- filter are built in php language to help us validate things 
-php only has filter for certain things, email are one of them but they dont have filter for 
comma separated list or title
- so we need to validate it ourself
- so we gonna use some regular expressions
- we use builtin filter to validate the email from php
-and then we gonna use a function to use some regular expression to validate the tittle 
and the ingredients

$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo 'An email must be a valid email address ;
}

!filter_var = gonna take 2 variable, the value so it can check, and also the type of filer.
FILTER_VALIDATE_EMAIL = take a value and pass to validate filter code and make sure it is a valid email address

regular expression match a string of character to a pattern and the pattern match the string than it's gonna pass the test



$title = $_POST['title'];
if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
echo 'A title must contain only letters and spaces;

!preg_match = match something to the value ('/^[a-zA-Z\s]+$/') =

this is regular expression >> ('/^[a-zA-Z\s]+$/') so when it try to match with the title that have characters only no integer and etc

this is regular expression >> ('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/' looking for a comma in the ingredience string


Showing Error

error array, if there is an error it will update it

place the error in the php file and the html

how to keep the data when the user key in, instaed of it just dissapear
>> value = "<php echo htmlspecialchars($email); ?> in the html file
>> $title = $email = $ingredients = ''; in thr php file

Checking for Errors & Redirecting

if(array_filter($errors)){ if there is an error, cycle through our array and define a coallback function
//echo 'errors in the form';
}else{
/echo 'form is valid'; if form no error redirecting to index page
header('Location: index.php');










-->







<?php

// how check if data dh send or blm
// kite gune isset function
//function ni check wether a certain variable if you like on values has been set
//we want to check is if any data has been sent to us via the GET method
//  if(isset($_GET['submit'])){  //$_GET ni global array in php
// when we make a get request using a form 
// all of different parameters or data that we send isgoing to be stored on the server in this GET variable
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
//  }



$title = $email = $ingredients = '';
$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');
 if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);
    // surround all our data with htmlspecial ni
    // it takes the data that we have input
    



    // ni validation 
    // check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required <br />';
    } else {
        //ni masuk part validation n filter tu
        // buat new variable
        $email = $_POST['email']; //grab that values from the post  array
        // the value that was submitted to us, that's if there's something in it,
        //restoring it inside $email
        // now kite nk check if ni correct structure utk email
        // so kita guna php filter
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //inside function ni yg dlm bracket() akan ada 2 parameters
        // echo 'email muss be a valid email address';
         $errors['email'] =  'email must be a valid email address';
        }
        
        // first value that we want to check which is this $_POST['email']
        // the second is the type of filter that we want to apply
        // that filter is built in to php

        // echo htmlspecialchars($_POST['email']);
    }




      // check title
    if(empty($_POST['title'])){
        $errors['title'] = 'An title is required <br />';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){  //nk match something to a regular expression
        // echo 'Title must be letters and spaces only'; //ni bile error
         $errors['title'] =  'Title must be letters and spaces only';
        }
        // echo htmlspecialchars($_POST['title']);
    }





      // check ingredients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'ingredients is required <br />';
    } else {
           $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){  //nk match something to a regular expression
        // echo 'Ingredients must be a comma separated list'; //ni bile error
        $errors['ingredients'] =  'Ingredients must be a comma separated list';
        }
       // echo htmlspecialchars($_POST['ingredients']);
    }

    if(array_filter($errors)){
       // echo 'errors in the form';
    } else {
       // echo 'form is valid';
       header('location: index.php');
    }

 }  // end of POST check

?>

<!DOCTYPE html>
<html>

  <?php include('template/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST"> <!--action tu utk file yg akn handle data-->
    <label> Your Email:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"> <!--value ni so bile tekan submit apa yg kite tulis x hilang. dia stay even salah-->
    <div class="red-text"><?php echo $errors['email'];?></div>
    <label> Pizza Title:</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars ($title) ?>">
     <div class="red-text"><?php echo $errors['title'];?></div>
    <label> Ingredients (comma separated):</label>
    <input type="text" name="ingredients" value="<?php echo htmlspecialchars ($ingredients) ?>">
     <div class="red-text"><?php echo $errors['ingredients'];?></div>
    <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
    </form>
</section>

  <?php include('template/footer.php'); ?>
  

</html>