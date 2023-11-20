<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/templates/reset.css" type="text/css">
    <link rel="stylesheet" href="/templates/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <section class="section_home">
            <h1 class="title_home">Welcome to MindfulCare</h1>
            <p class="text_home">Welcome to the website of Mindfulcare organization. Our organization consists of highly qualified professionals from the Czech Republic.
                Our organization decided to unite the efforts of these professionals to help people from the Czech Republic in an organized way. <br>Offline sessions take place in our office located at Zenklova 8/78, 180 00 Praha 8-Palmovka.</p>
            <div class="photo_office">
                <input checked type="radio" name="respond" id="desktop">
                <article id="slider">
                    <input checked type="radio" name="slider" id="switch1">
                    <input type="radio" name="slider" id="switch2">
                    <input type="radio" name="slider" id="switch3">

                    <div id="slides">
                        <div id="overflow">
                            <div class="image">
                                <article><img src="photo_2023-11-20_02-04-35.jpg"></article>
                                <article><img src="photo_2023-11-20_02-04-35 (2).jpg"></article>
                                <article><img src="photo_2023-11-20_02-04-36.jpg"></article>
                            </div>
                        </div>
                    </div>
                    <div id="controls">
                        <label for="switch1"></label>
                        <label for="switch2"></label>
                        <label for="switch3"></label>
                    </div>
                    <div id="active">
                        <label for="switch1"></label>
                        <label for="switch2"></label>
                        <label for="switch3"></label>
                    </div>
                </article>
            </div>
            <span class="span_home"><strong class="strong_bold">Why should you contact us?</strong></span>
            <ul class="list_home">
                <li class="list_fields_home">We offer the services of highly qualified professionals with extensive experience in various fields of psychology and psychotherapy. Each of our specialists undergoes annual training courses.</li>
                <li class="list_fields_home">Convenient and quick appointment. You do not need to write separately to a particular specialist (but you can certainly contact them for any questions), you can quickly and easily sign up through the form on the site.</li>
                <li class="list_fields_home">The first three sessions are free of charge.</li>
                <li class="list_fields_home">Various bonuses, when you receive which you will be allocated a discount of <strong class="strong_bold">10% to 30%</strong></li>
                <li class="list_fields_home">Meetings are possible both offline and online.</li>
            </ul>

            <p class="text_home"><strong class="strong_red">We also now have an 80% discount for all Ukrainian refugees.</strong></p>
            <p class="text_home">For any technical questions write to <strong class="strong_bold">mindfullcare@gmail.com</strong> or call to the number: <strong class="strong_bold">+420 723 448 753</strong></p>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>