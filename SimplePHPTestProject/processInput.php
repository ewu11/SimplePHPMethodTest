<?php
    session_start(); //make be in first line above all

    // echo "Hello World!"; //just to make sure it can read the file

    //reset all variable values to empty
    $case1 = $case2 = $firstInput = $secondInput = "";

    //get values from input fields    
    if(isset($_POST["submitButton"])) { //if button was clicked, enter clause
        if((empty($_POST["firstInput"])) && (empty($_POST["secondInput"]))) { //if both input fields are empty
            $firstInput = "N/A";
            $secondInput = "N/A";
        }
        else if(!(empty($_POST["firstInput"])) || !(empty($_POST["secondInput"]))) {
            $firstInput = $_POST["firstInput"];
            $secondInput = $_POST["secondInput"];

            // echo "firstInput: " . $firstInput . "</br>";
            // echo "secondInput: " . $secondInput;
        }
        else {
            $firstInput = "N/A";
            $secondInput = "N/A";
        }
    }

    //finally redirect to a webpage with complete front end styles
    //using this the code down here is okay, but partially wrong because the data from here wont be read on "redirectPage.php"
    //header("Location: redirectPage.php");

    //use the one down here instead
    include "redirectPage.php"; //import data from processInput.php
?>