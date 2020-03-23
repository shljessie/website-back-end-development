<?php include("includes/init.php");
$show_form = TRUE;

$show_name_feedback = FALSE;
$show_question_feedback = FALSE;
$show_email_feedback = FALSE;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $is_valid = TRUE;
    $name = trim($_POST['name']);
    $question = trim($_POST['question']);
    $email = trim($_POST['email']);



    if (empty($name)) {
        $is_valid = FALSE;
        $show_name_feedback = "Please provide your name! :)";
    } else {
        $is_valid = TRUE;
    }

    if (empty($question)) {
        $is_valid = FALSE;
        $show_question_feedback = "Ask me any question! :)";
    } else {
        $is_valid = TRUE;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $is_valid = FALSE;
        $show_email_feedback = "Please provide valid email for a response to your question! :)";
    } else {
        $is_valid = TRUE;
    }


    $show_form = !$is_valid;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                include('includes/en.php');
                echo $lang['title_resume'];
            } else if ($_GET['lang'] == "ko") {
                include('includes/ko.php');
                echo $lang['title_resume'];
            }
            ?></title>
    <!-- css import -->
    <link rel="stylesheet" type="text/css" href="styles/site.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Sen&display=swap" rel="stylesheet">

<body>
    <p id="contact">
        <a id="contact_top" href="mailto:jessielee.shl@gmail.com">jessielee.shl@gmail.com</a>
        <a id="contact_top" href="https://www.linkedin.com/in/seung-hee-jessie-lee-3a188519b/">LinkedIn</a>
        <a id="contact_top" href="https://github.com/shljessie">Github</a>
    </p>
    <div id="page-container">
        <div id="container">

            <div id="nav">
                <?php
                $resume = "active";
                if ($_GET['lang'] == "en" || empty($_GET['lang'])) {
                    include('includes/en.php');
                    echo $lang['nav'];
                } else if ($_GET['lang'] == "ko") {
                    include('includes/ko.php');
                    echo $lang['nav'];
                } ?>
            </div>

            <div>
                <p id="resume">
                    <p> <a href="https://docs.google.com/document/d/1QFNgcO9zj-Xf6fsRxyjCGN0nNiHyRKlDmDp75iOOtJo/edit?usp=sharing" id="resume"> Download Resume </a> </p>

            </div>

            <div id="form_body"><?php
                                if ($show_form) { ?> <form id="feedback_form" method="post" action="form.php" nonvalidate>
                        <!-- Contact Form Title -->

                        <h3 id="form_head">Feedback Form</h3>
                        <h4>Ask me any questions you have!</h4>

                        <!-- Name input field -->
                        <div class="group_label_input">
                            <p class="form_feedback"><?php echo $show_name_feedback ?></p>
                            <label for="name_field">Name</label></br>
                            <input id="name_field" type="text" placeholder="Full Name" name="name" value="<?php echo htmlspecialchars($name); ?>" /></br>
                        </div>

                        <!-- Question input field -->
                        <div class="group_label_input">
                            <p class="form_feedback"><?php echo $show_question_feedback ?></p>
                            <label for="question_field">Ask me any Question!</label></br>
                            <input id="question_field" type="text" placeholder="Ask Jessie..." name="question" value="<?php echo htmlspecialchars($question); ?>" /></br>
                        </div>

                        <!-- Email input field -->
                        <div class="group_label_input">
                            <p class="form_feedback"><?php echo $show_email_feedback ?></p>
                            <label for="email_field">Email</label></br>
                            <input id="email_field" type="text" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email); ?>" /></br>
                        </div>

                        <!-- Feedback input field -->
                        <div class="group_label_input">
                            <p class="form_feedback"><?php echo $show_tips ?></p>
                            <label for="tips_field">Any additional things you would like to say?(not required)</label></br>
                            <input id="tips_field" type="text" placeholder="Tips" name="tips" value="<?php echo htmlspecialchars($tips); ?>" /></br>
                        </div>

                        <div class="group_label_input">
                            <span>
                                <!-- empty element to align submit button --></span>
                            <input id="submit_button" type="submit" value="Submit" />
                        </div>

                    </form>
            </div>
        <?php } else {; ?>
            <div id="form_comfirmation">
                <h2 id="form_confirmation_head"> Message to Jessie from <?php echo $name ?> </h2>

                <ul class="form_confirmation_main">
                    <li class="form_confirmation_text">Your Name: <?php echo $name ?></li>
                    <li class="form_confirmation_main">Your Question: <?php echo $question ?></li>
                    <li class="form_confirmation_main">Your E-mail: <?php echo $email ?></li>
                    <li class="form_confirmation_main">Your Feedback: <?php echo $tips ?></li>
                </ul>

                <h3 id="form_confirmation_tail">Thank you for your response! I'll respond to your questions soon! :)</h3>

                <p id="back_to_page"><a href="form.php">Back to Website</a></p>

            </div>
        <?php } ?>

        </div>
        <footer>
            <?php include("includes/footer.php"); ?>
        </footer>
</body>

</html>
