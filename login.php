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
            <div>
                <form action="/script.php" method="get">
                    <h1>You can log in here</h1>
                    <label for="nname">Please enter a nickname</label>
                    <input type="text" id="nname" name="nname"><br><br>
                    <label for="password">Please enter a password:</label>
                    <input type="text" id="password" name="password"><br><br>
                    <input type="submit" value="Sign in"><br>
                </form>
            </div>
        </main>
    </div>
    <div>
        <?php include('footer.php'); ?>
    </div>



</body>

</html>