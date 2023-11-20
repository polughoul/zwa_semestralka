<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/templates/reset.css" type="text/css">
    <link rel="stylesheet" href="/templates/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Log in</title>
</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <form class="login_form" action="/script_php/script_login.php" method="post">
            <h1 class="login_title_form">You can log in here</h1>
            <label class="login_label_form" for="nname">Please enter a nickname</label>
            <input class="login_input_form" type="text" id="nname" name="nname" required><br><br>
            <label class="login_label_form" for="password">Please enter a password:</label>
            <input class="login_input_form" type="password" id="password" name="password" required><br><br>
            <input class="login_button_form" type="submit" value="Sign in"><br>
        </form>
    </main>
    <script src="/script_js/script_login.js"></script>
    <?php include('footer.php'); ?>
</body>

</html>