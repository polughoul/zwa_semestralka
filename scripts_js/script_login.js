// document.addEventListener('DOMContentLoaded', function () {
//     var loginForm = document.getElementById('login-form');
//     var errorMessage = document.getElementById('error-message');

//     loginForm.addEventListener('submit', function (event) {
//         event.preventDefault(); // Предотвращаем отправку формы

//         var nname = document.getElementById('nname').value;
//         var password = document.getElementById('password').value;

//         // Выполняем проверку на клиенте (JavaScript) перед отправкой на сервер (PHP).
//         if (!validateForm(nname, password)) {
//             // Ошибка валидации, выводим сообщение.
//             errorMessage.textContent = 'Пожалуйста, заполните все поля и удостоверьтесь, что пароль содержит не менее 8 символов.';
//         } else {
//             // Отправляем данные на сервер для дополнительной проверки.
//             submitForm(nname, password);
//         }
//     });

//     function validateForm(nname, password) {
//         // Проверка введенных данных на клиенте (JavaScript).
//         if (nname.trim() === '' || password.trim() === '' || password.length < 8) {
//             return false;
//         }
//         return true;
//     }

//     function submitForm(nname, password) {
//         // Отправляем данные на сервер для дополнительной проверки (PHP).
//         // Вы можете использовать AJAX для этого, но для простоты примера, я просто выведу сообщение об успешной аутентификации.
//         // В реальной реализации здесь будет AJAX-запрос на ваш сервер.

//         // Предположим, что аутентификация успешна.
//         errorMessage.textContent = 'Вход успешно выполнен. Перенаправление...';

//         // Здесь можно добавить код для перенаправления пользователя на другую страницу (например, index.php).
//     }
// });
