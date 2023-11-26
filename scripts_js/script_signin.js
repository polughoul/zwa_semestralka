document.addEventListener("DOMContentLoaded", function () {
    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", function () {
        const nickname = document.getElementById("nname").value;
        const password = document.getElementById("password").value;
        const repassword = document.getElementById("repassword").value;

        if (!validateNickname(nickname)) {
            return;
        }

        if (!validatePassword(password, repassword)) {
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/scripts_php/script_signin.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert(xhr.responseText);
            }
        };

        if (password === "") {
            alert("Create a password please");
            return;
        }

        xhr.send("nname=" + encodeURIComponent(nickname) + "&password=" + encodeURIComponent(password));
    });

    function validateNickname(nickname) {
        const regex = /^[a-zA-Z0-9]+$/;
        if (!regex.test(nickname)) {
            alert("Nickname should contain only letters and numbers.");
            return false;
        }
        return true;
    }

    function validatePassword(password, repassword) {
        if (password !== repassword) {
            document.getElementById("password-error").innerText = "Passwords do not match.";
            return false;
        } else {
            document.getElementById("password-error").innerText = "";
            return true;
        }
    }
});
