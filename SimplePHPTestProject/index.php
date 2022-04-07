<html>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testing Session</title>
        <link rel="stylesheet" href="myStyle.css"> <!-- import css -->
        <div id="headerContainer"> <!-- div for header -->
            <h1>Testing "session"</h1>
        </div>
    </header>
    <body>
        <form id="inputForm" method="POST"> <!-- div for background -->
            <div id="bodyContainer"> <!-- div for main contents -->
                <div id="mainContainer">
                    <h3>"session" values:</h3>
                    <hr id="horiLine1">
                    <div id="inputContainer">
                        <label for="firstInput">First input</label>
                        <input type="text" name="firstInput" placeholder="Enter first input" value="">
                        <label for="secondInput">Second input</label>
                        <input type="text" name="secondInput" placeholder="Enter second input" value="">
                    </div>
                </div>
            </div>
            <!-- <?php //include 'processInput.php'; ?>  import php -->
            <div id="buttonContainer"> <!-- div for button -->
                <button type="submit" name="submitButton" formaction="processInput.php">Submit</button>
            </div>
            </form>
    </body>
    <footer>
        <!-- insert here... -->
    </footer>
</html>