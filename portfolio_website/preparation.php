<?php include("includes/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['title_preparation'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['title_preparation'];
            }
            ?></title>
    <!-- css import -->
    <link rel="stylesheet" type="text/css" href="styles/site.css" />


<body>
    <img id="logo" src="images/logo.png" alt="logo" />
    <div id="container">
        <div id="Hello">SORRY</div>
        <div>
            <div id="intro">
                <p id="intro1">This project is currently under construction for presentation. </p>
        </div>

        </div>
    </div>


    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>

</html>
