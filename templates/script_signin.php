<!-- <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nname = $_POST['nname'];
            $password = $_POST['password'];

            // Дополнительные проверки

            // Проверка на уникальность никнейма
            if (isUsernameUnique($nname)) {
                // Сохранение данных в файл или базу данных
                saveUserData($nname, $password);
                echo 'Регистрация успешно завершена!';
            } else {
                echo 'Этот никнейм уже занят. Пожалуйста, выберите другой.';
            }
        }
        function isUsernameUnique($nname)
        {
            $filename = 'users.txt';
            if (file_exists($filename)) {
                $contents = file_get_contents($filename);
                $lines = explode("\n", $contents);
                foreach ($lines as $line) {
                    // Разбираем строку на части
                    list($key, $value) = explode(', ', $line);
                    if (strpos($key, 'Username:') !== false) {
                        $username = trim(substr($key, strlen('Username:')));
                        if ($username === $nname) {
                            // Никнейм уже существует
                            return false;
                        }
                    }
                }
            }
            return true; // Никнейм уникален
        }

        function saveUserData($nname, $password)
        {
            // Сохранение данных в файл или базу данных
            // В этом примере, данные сохраняются в файл users.txt
            $file = fopen('users.txt', 'a');
            if ($file) {
                fwrite($file, "Username: $nname, Password: $password\n");
                fclose($file);
            }
        }
