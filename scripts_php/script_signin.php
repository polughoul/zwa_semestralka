
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из POST-запроса
    $nickname = $_POST['nname'];
    $password = $_POST['password'];


    $file = "users.json";
    if (!file_exists($file)) {

        file_put_contents($file, json_encode([]));
    }


    $data = json_decode(file_get_contents($file), true);


    if (isset($data[$nickname])) {
        echo 'This nickname already exists. Please choose another.';
        exit();
    }


    $data[$nickname] = [
        'password' => password_hash($password, PASSWORD_DEFAULT),
    ];


    file_put_contents($file, json_encode($data));


    echo 'You have successfully registered!';
} else {

    echo 'The request failed.';
}
?>