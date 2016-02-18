<?php
// error_reporting(E_ALL );
// ini_set('display_errors', 1);
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Boone | Project 2 | CSCI E-15</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styles.css">

    <?php require 'logic.php'; ?>
</head>
<body>
<main>
    <h1>Password Generator</h1>
    <div class="intro">
        <p>This is an <a href="http://xkcd.com/936/">xkcd-style</a> password generator. You can choose a password comprised of three, four, or five words, and also a number and/or symbol.</p>
    </div>

    <form action="index.php" method="GET">
        <div class="row">
            <div class="small-12 columns errors">
                <?php echo ((isset($badLength) && $badLength != '') ? $badLength : ''); ?>
            </div>
            <div class="small-12 medium-4 columns">
                <label>Number of words
                    <input type="text" name="numberOfWords" maxlength="1" placeholder="Enter a number between 3 and 5">
                </label>
            </div>
            <fieldset class="small-12 columns">
                <legend>Include a number?</legend>
                <input type="radio" name="numberYesOrNo" value="yes">
                    <label for="yes">Yes</label>
                <input type="radio" name="numberYesOrNo" value="no">
                    <label for="no">No</label>
            </fieldset>
            <fieldset class="small-12 columns">
                <legend>Include a symbol?</legend>
                <input type="radio" name="symbolYesOrNo" value="yes">
                    <label for="yes">Yes</label>
                <input type="radio" name="symbolYesOrNo" value="no">
                    <label for="no">No</label>
            </fieldset>
        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="small-4 columns">
                <button type="submit" class="button">Get Password</button>
            </div>
        </div>
    </form>
    <div class="errors">
        <?php
        echo ((isset($nonNumber) && $nonNumber != '') ? $nonNumber : '');
        echo ((isset($wrongNumber) && $wrongNumber != '') ? $wrongNumber : '');                 echo ((isset($blank) && $blank != '') ? $blank : '');
        ?>
    </div>
    <div class="password">
        <p><?php echo $finalPassword  ?></p>
    </div>
</main>
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/min/app-min.js"></script>
</body>
</html>
