<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/templates/reset.css" type="text/css">
    <link rel="stylesheet" href="/templates/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Appointment</title>
</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <form class="appointment_form" action="/script.php" method="get">
            <h1 class="appointment_title_form">You can make an appointment here</h1>
            <label class="appointment_label_form" for="fname">Please enter your name:</label>
            <input class="appointment_input_form" type="text" id="fname" name="fname" required><br><br>
            <label class="appointment_label_form" for="sname">Please enter your surname:</label>
            <input class="appointment_input_form" type="text" id="sname" name="sname" required> <br><br>
            <label class="appointment_label_form" for="pass">Please enter a number of your passport</label>
            <input class="appointment_input_form" type="text" id="pass" name="pass" required> <br><br>
            <label class="appointment_label_form" for="email">Please enter your e-mail</label>
            <input class="appointment_input_form" type="email" id="email" name="email" required> <br><br>
            <label class="appointment_label_form" for="tel">Please enter your phone number</label>
            <input class="appointment_input_form" type="tel" id="tel" name="tel" required><br><br>
            <label class="appointment_label_form" for="pass">Please choose a date, time and doctor</label><br>
            <input class="appointment_input_form" type="date" id="date" name="date" required>
            <input class="appointment_input_form" type="time" id="time" name="datetime" required>
            <select class="appointment_select_form">
                <option value="Cheese" selected>Green</option>
                <option value="Vegetables" selected>Red</option>
                <option value="Vegetables" selected>Blue</option>
            </select><br>
            <input class="appointment_button_form" type="submit" value="Enter"><br>
        </form>
    </main>

    <?php include('footer.php'); ?>




</body>

</html>