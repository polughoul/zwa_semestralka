// var form = document.getElementById("registration-form");
// var nnameInput = document.getElementById("nname");
// var passwordInput = document.getElementById("password");
// var repasswordInput = document.getElementById("repassword");
// var passwordError = document.getElementById("password-error");
// var submitButton = document.getElementById("submit-button");

// // Добавляем слушатель события клика на кнопку "Sign in"
// submitButton.addEventListener("click", function (event) {
//     event.preventDefault(); // Предотвращаем отправку формы

//     // Получаем значения из полей
//     var nname = nnameInput.value;
//     var password = passwordInput.value;
//     var repassword = repasswordInput.value;

//     // Проверка, что пароль и повтор пароля совпадают
//     if (password !== repassword) {
//         passwordError.innerHTML = "Password is not equal. Please try again!";
//     } else if (password.length < 6) {
//         passwordError.innerHTML = "Пароль должен содержать минимум 6 символов.";
//     } else {
//         passwordError.innerHTML = "";

//         // Если вы хотите добавить дополнительные проверки для никнейма и пароля, вы можете добавить их здесь.

//         // Если все проверки прошли успешно, можно выполнить отправку данных на сервер
//         form.submit();
//     }
// });