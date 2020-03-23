<?php
include("includes/init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['title_hello'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['title_hello'];
            }
            ?></title>
    <!-- css import -->
    <link rel="stylesheet" type="text/css" href="styles/site.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Sen&display=swap" rel="stylesheet">

<body>
    <!-- <img id="logo" src="images/logo.png" alt="logo" /> -->
    <p id="contact">
        <a id="contact_top" href="mailto:jessielee.shl@gmail.com">jessielee.shl@gmail.com</a>
        <a id="contact_top" href="https://www.linkedin.com/in/seung-hee-jessie-lee-3a188519b/">LinkedIn</a>
        <a id="contact_top" href="https://github.com/shljessie">Github</a>
    </p>
    <div id="page-container">
        <div id="container">
            <div id="nav">
                <?php
                $hello = "active";
                if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                    include('includes/en.php');
                    echo $lang['nav'];
                } else if ($_GET['lang'] == "ko") {
                    include('includes/ko.php');
                    echo $lang['nav'];
                } ?>
            </div>
            <div id="Hello">
                <?php
                if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                    include('includes/en.php');
                    echo $lang['HELLO'];
                } else if ($_GET['lang'] == "ko") {
                    include('includes/ko.php');
                    echo $lang['HELLO'];
                } ?>
            </div>
            <div>
                <?php
                if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                    include('includes/en.php');
                    echo $lang['intro'];
                } else if ($_GET['lang'] == "ko") {
                    include('includes/ko.php');
                    echo $lang['intro'];
                }
                ?>

            </div>
        </div>
        <footer>
            <?php include("includes/footer.php"); ?>
        </footer>
</body>

</html>
