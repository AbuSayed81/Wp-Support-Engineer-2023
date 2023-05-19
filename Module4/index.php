<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class 1&2</title>
</head>
<body>
    <?php
    /* 
        echo 'Hello World';
        echo '<br>';
        echo 'This is Abu Sayed';
        echo '<br>';
        echo 'My country name is bangladesh';
        
        echo '<br>';
        echo 120.25;
        
        echo 'Hello from RRF php basic course-2023';
    */  

        #PHP Case Sensitivity
        // echo 'Hellow World';
        // echo '<br>';
        // EcHO 'This is Abu Sayed';
        // Echo '<br>';
        // ECHO 'My Name is Bangladesh';

        #However; all variable names are case-sensitive!
        #Like as;
        // $color = 'Red';

        // echo 'My Byke Color is is' . $color . "<br>";
        // echo 'My House Color is' . $Color . "<br>"; #Its a Undefined variable
        // echo 'My House Color is' . $COLOR . "<br>"; #Its a Undefined variable

        #Global and Local Scope
#A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
    #Global variable
   # $var = 5;

    // function myFunction(){
    //     // using x inside this function will generate an error
    //     echo "<p>Variable x inside function is: $var</p>";
    // }

    // myFunction();
    // echo "<p>Variable x outside function is: $var</p>";

    #Local variable

    

    function myFunction(){
        #Local variable
       // $var = 5;
        // using x inside this function will generate an error
        //echo "<p>Global Variable var works inside function is: $var</p>";
    }

    //myFunction();
    //echo "<p>Variable x outside function is: $var</p>";
    // $var1 = 5;
    // $var2 = 10;
    //  function myFunc(){
    //     global $var1, $var2;
    //     $var1 = $var1 + $var2;
    //  }

    //  myFunc();
    //  echo $var1;

    
    #strlen() Return the Length of a String
    //echo strlen("Hello World.This is Abu Sayed.");
    //echo '<br>';
    #str_word_count() - Count Words in a String
    //echo str_word_count("Hello World.This is Abu Sayed.");
    //echo '<br>';
    #The PHP strrev() function reverses a string.
    //echo strrev("Hello World.This is Abu Sayed.");
    #strpos() - Search For a Text Within a String
    //echo strpos("Hello World.This is Abu Sayed.");

    #PHP if...else...elseif Statements
    
    // $var = date("H");

    // echo $var;
    // echo "<br>";
    // echo "<p>The hour (of the server) is " . $var; 
    // echo "<br>";
    // echo ", and will give the following message:</p>";
    // echo "<br>";


    // if($var > 4){
    //     echo "Have a Good Morning.";
    // }elseif($var > 5){
    //     echo "Have a Good Day.";
    // }else{
    //     echo "Have a Good night.";
    // }

    // $favHoppy = "Busineman";

    // switch($favHoppy){
    //     case "Businessman":
    //     echo "Your Fabourite Hobby is to be a : " . $favHoppy;
    //     break;

    //     case "Scholer":
    //     echo "Your Fabourite Hobby is to be a : " . $favHoppy;
    //     break;

    //     case "Freelance":
    //     echo "Your Fabourite Hobby is : to be a " . $favHoppy;
    //     break;

    //     default:
    //     echo "Your favourite hobby is neither Businessman, Scholer nor Frelancer";
        
    // }

    //The PHP while Loop
    // Examples
    // The example below displays the numbers from 1 to 5:

    // $var = 1;

    // while($var <=5){
    //     echo "The number is : " . $var . "<br>";
    //     $var++;
    // }
    //This example counts to 100 by tens:
    
    $var = 0;

    while($var <= 100 ){
        echo "The Number Is : " .$var . "<br>";
        $var+=10;
    }
    ?>
</body>
</html>