<?php include("includes/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
            include('includes/en.php');
            echo $lang['title_data'];
        } else if ($_GET['lang'] == "ko") {
            include('includes/ko.php');
            echo $lang['title_data'];
        }
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="styles/site.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Sen&display=swap" rel="stylesheet">

<body>
    <p id="language_setter">
        <a class="button" href="data.php?lang=en">English</a>
        <a class="button" href="data.php?lang=ko">한국어</a>
    </p>
    <div id="container">
        <div id="nav">
            <?php
            $data = "active";
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['nav'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['nav'];
            } ?>
        </div>
        <main class="container">
            <?php
            $data = "active";

            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['data_p1'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['data_p1'];
            } ?>

            <?php
            $data = "active";
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['data_p2'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['data_p2'];
            } ?>

            <?php
            $data = "active";
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['data_p3'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['data_p3'];
            } ?>
        </main>
    </div>

    <div class="footer2">
        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>
