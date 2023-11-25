<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/styles/reset.css" type="text/css">
    <link rel="stylesheet" href="/styles/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>feedback</title>
</head>

<body>
    <?php include('header.php'); ?>

    <main class="main_feedback">
        <form class="feedback_form" action="/script.php" method="post">
            <h1 class="feedback_title_form">Leave Your Feedback</h1>

            <label class="feedback_label_form" for="name">Your Name:</label>
            <input class="feedback_input_form" type="text" id="name" name="name" required><br><br>

            <label class="feedback_label_form" for="email">Your Email:</label>
            <input class="feedback_input_form" type="email" id="email" name="email" required><br><br>

            <label class="feedback_label_form" for="feedback">Your Feedback:</label>
            <textarea class="feedback_input_form" id="feedback" name="feedback" rows="4" required></textarea><br><br>

            <input class="feedback_button_form" type="submit" value="Send Feedback"><br>
        </form>
    </main>

    <?php include('footer.php'); ?>
</body>

</html>