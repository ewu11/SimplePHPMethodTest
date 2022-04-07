<html>
    <?php
        //echo "HAHAHA!"; //to test whether it redirects to this page or not
    ?>
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result</title>
        <link rel="stylesheet" href="myStyle.css"> <!-- import css -->

        <style>
            #bodyContainer p#message {
                color: black;
                cursor: default;
                font-size: 150%;
                display: block;
            }

            /* add hover effect */
            #bodyContainer p#message:hover {
                color: darkred;
                cursor: default;
                text-decoration: underline;
            }
        </style>

        <div id="headerContainer"> <!-- div for header -->
            <h1>Result</h1>
        </div>
    </header>
    <body>
        <div id="bodyContainer">
            <label for="firstInput">First input:</label>
            <p id="message"><?php echo $firstInput ?></p>
            <label for="secondInput">Second input:</label>
            <p id="message"><?php echo $secondInput ?></p>
        </div>
    </body>
    <footer>
        <!-- insert here...-->
    </footer>
</html>
