<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/styles/reset.css" type="text/css">
    <link rel="stylesheet" href="/styles/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Sign in</title>
</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <form class="registration_form" action="/scripts_php/script_signin.php" method="POST" id="registration-form">
            <h1 class="registration_title_form">You can sign in here</h1>
            <label class="registration_label_form" for="nname">Please create a nickname:</label>
            <input class="registration_input_form" type="text" id="nname" name="nname" required><br><br>
            <label class="registration_label_form" for="password">Please create a password:</label>
            <input class="registration_input_form" type="password" id="password" name="password" required><br><br>
            <label class="registration_label_form" for="repassword">Please write a password again:</label>
            <input class="registration_input_form" type="password" id="repassword" name="repassword" required><br><br>
            <span id="password-error" class="password-error"></span><br>
            <input class="registration_button_form" type="button" value="Sign in" id="submit-button">
        </form>
    </main>
    <script src="/scripts_js/script_signin.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>