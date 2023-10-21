<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <div>
        <?php include('header.php'); ?>

    </div>

    <div>
        <main>
            <form action="/script.php" method="get">
                <h1>You can sign in here</h1>
                <label for="nname">Please create a nickname:</label>
                <input type="text" id="nname" name="nname"><br><br>
                <label for="password">Please create a password:</label>
                <input type="text" id="password" name="password"><br><br>
                <label for="repassword">Please write a password again:</label>
                <input type="text" id="repassword" name="repassword"><br><br>
                <input type="submit" value="Sign in"><br>
            </form>
        </main>
    </div>

    <div>
        <?php include('footer.php'); ?>
    </div>



</body>

</html>