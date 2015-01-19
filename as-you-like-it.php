<!doctype html>
<html lang="en">
<head lang="en">
	<meta charset="UTF-8">
	<title>As You Like It</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<?php

            $firstNameErr = $lastNameErr = $emailErr = "";
            $play = "As You Like It";

            if (isset($_POST['submit'])) {

                if (empty($_POST['firstName'])) {
                    $firstNameErr = "* Required Field";
                } else {
                    $firstName = $_POST['firstName'];
                }

                if (empty($_POST['lastName'])) {
                    $lastNameErr = "* Required Field";
                } else {
                    $lastName = $_POST['lastName'];
                }

                if (empty($_POST['lastName'])) {
                    $emailErr = "* Email Required";
                } else {
                    $email = $_POST['email'];
                }

                $city        = $_POST['city'];
                $book        = $_POST['book'];
                $play        = $_POST['play'];
                $movie       = $_POST['movie'];
                $tree        = $_POST['tree'];
                $colorScheme = $_POST['scheme'];
                $shape       = $_POST['shape'];
                $vacation    = $_POST['vacation'];

            }

        ?>

    <?php include 'header.php'; ?>

    <div id="main" class = "main pad layout">

        <form method="post" action="as-you-like-it.php">
            <div class="left striped column-1 btm-margin">

                <div class = "form-pad input-div">
                    <label class="column-1 left" for="firstName">First Name:</label>
                    <input class="column-2 left" type="text" id="firstName" name="firstName" value="<?php if($firstName) {echo $firstName;} ?>">
                    <span class="column-3 left err-pad err-color"><?php echo $firstNameErr; ?></span>
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="lastName">Last Name:</label>
                    <input class="column-2 left" type="text" id="lastName" name="lastName" value="<?php if($lastName) {echo $lastName;} ?>">
                    <span class="column-3 left err-pad err-color"><?php echo $lastNameErr; ?></span>
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="email">Email:</label>
                    <input class="column-2 left" type="email" id="email" name="email" value="<?php if($email) {echo $email;} ?>">
                    <span class="column-3 left err-pad err-color"><?php echo $emailErr; ?></span>
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="city">Favorite City:</label>
                    <input class="column-2 left" type="text" id="city" name="city" value="<?php if($city) {echo $city;} ?>">
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="book">Favorite Book:</label>
                    <input class="column-2 left" type="text" id="book" name="book" value="<?php if($book) {echo $book;} ?>">
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="play">Favorite Play:</label>
                    <input class="column-2 left" type="text" id="play" name="play" value="<?php if($play) {echo $play;} ?>">
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="movie">Favorite Movie:</label>
                    <input class="column-2 left" type="text" id="movie" name="movie" value="<?php if($movie) {echo $movie;} ?>">
                    <br>
                </div>
                <div class = "form-pad input-div">
                    <label class="column-1 left" for="tree">Favorite Tree:</label>
                    <input class="column-2 left" type="text" id="tree" name="tree" value="<?php if($tree) {echo $tree;} ?>">
                    <br>
                </div>

                <fieldset>
                    <p>My dream vacation:</p>
                    <div class="color-coded">
                        <input type="radio" name="vacation" value="resort"><span class="colorCode">lounging in a tropical resort</span><br>
                        <input type="radio" name="vacation" value="camping"><span class="colorCode">camping in the high Sierras</span><br>
                        <input type="radio" name="vacation" value="paris"><span class="colorCode">walking in the heart of Paris</span><br>
                        <input type="radio" name="vacation" value="hiking"><span class="colorCode">hiking the Pacific Crest Trail</span><br>
                        <input type="radio" name="vacation" value="village"><span class="colorCode">hanging out in a Costa Rican village</span>
                    </div>
                </fieldset>

            </div>

            <div class="right column-2">

                <div class="pad colors-width">
                    <fieldset>
                        <p>Which color scheme do you prefer?</p>
                        <input type="radio" name="scheme" value="complementary">Complementary
                        <div id="complementary-scheme">
                            <div class="column-1 color-block">
                            </div>
                            <div class="column-2 color-block">
                            </div>
                            <div class="column-3 color-block">
                            </div>
                            <div class="column-4 color-block">
                            </div>
                            <div class="column-5 color-block">
                            </div>
                        </div>
                        <br>
                        <input type="radio" name="scheme" value="monochromatic">Monochromatic
                        <br>
                        <div id="mono-scheme">
                            <div class="column-1 color-block">
                            </div>
                            <div class="column-2 color-block">
                            </div>
                            <div class="column-3 color-block">
                            </div>
                            <div class="column-4 color-block">
                            </div>
                            <div class="column-5 color-block">
                            </div>
                        </div>
                        <br>
                        <input type="radio" name="scheme" value="wild">Wild
                        <br>
                        <div id="wild-scheme">
                            <div class="column-1 color-block">
                            </div>
                            <div class="column-2 color-block">
                            </div>
                            <div class="column-3 color-block">
                            </div>
                            <div class="column-4 color-block">
                            </div>
                            <div class="column-5 color-block">
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="pad shape-width">
                    <fieldset>
                        <p>I like things:</p>
                        <input type="radio" name="shape" value="straight">Straight<span class="box"></span>
                        <input type="radio" name="shape" value="slanted">Slanted<span class="slanted box"></span>
                        <input type="radio" name="shape" value="askew">Askew<span class="skewed box"></span>
                    </fieldset>
                </div>

            </div>

            <input class="clear pad submit-btn" type="submit" name="submit">

            <?php

                if ($firstName && $lastName && $email) {

                    echo "<div>";
                        echo "<p>You have successfully submitted the form!</p>";
                        echo "<p>Name: $firstName $lastName</p>";
                        echo "<p>Email: $email</p>";
                        if ($city) {
                            echo "<p>Favorite City: $city</p>";
                        }
                        if ($book) {
                            echo "<p>Favorite Book: $book</p>";
                        }
                         if ($play) {
                            echo "<p>Favorite Play: $play</p>";
                        }
                        if ($movie) {
                            echo "<p>Favorite Movie: $movie</p>";
                        }
                        if ($tree) {
                            echo "<p>Favorite Tree: $tree</p>";
                        }
                        if ($vacation) {
                            echo "<p>Preferred Vacation: $vacation</p>";
                        }
                        if ($colorScheme) {
                            echo "<p>Favorite Color Scheme: $colorScheme</p>";
                        }
                        if ($shape) {
                            echo "<p>Preferred Shape : $shape</p>";
                        }
                    echo "</div>";
                }

            ?>

        </form>

    </div>

    <?php include 'footer.php'; ?>

    <?php

         if ($firstName && $lastName && $email) {

             $to        = "silaslangley@yahoo.com";
             $subject   = "favorite things";
             $message   =   "Name: $firstName " . "$lastName\n" .
                            "Email Address: $email\n" .
                            "Favorite City: $city\n" .
                            "Favorite Book: $book\n" .
                            "Favorite Play: $play\n" .
                            "Favorite Movie: $movie\n" .
                            "Favorite Tree: $tree\n" .
                            "Preferred Vacation: $vacation\n" .
                            "Favorite Color Scheme: $colorScheme\n" .
                            "Preferred Shape: $shape\n";
             $from      = "$firstName " . "$lastName";

             mailto($to, $subject, $message, 'From: ' . $from);

         }

    ?>

</body>
</html>