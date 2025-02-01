
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Checker</title>
    <style>
        .error {
            color: red; /* Change text color to red */
            font-weight: bold; /* Make the text bold */
        }
    </style>

</head>
<body style="background-color: azure;">
    <form action="" method="POST">
        <input type="password" name="pass" required>
        <button type="submit" name="checkpass">Check Password</button>
        <div class="error">
            <?php if (isset($error)) echo $error; ?>
        </div>
    </form>
    <?php
    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["checkpass"])) {
            $pass = $_POST["pass"];
            $goodlength = strlen($pass) >= 8;
            $upcase = preg_match("/[A-Z]/", "$pass");
            $lowerpass = preg_match("/[a-z]/", "$pass");
            $digit = preg_match("/[0-9]/", "$pass");
            $spec = preg_match("/[^A-Za-z0-9]/", "$pass");

            if (!$goodlength) {
                $error .= "Password should be at least 8 characters long.<br>";
            }
            if (!$upcase) {
                $error .= "Password should have at least one uppercase letter.<br>";
            }
            if (!$lowerpass) {
                $error .= "Password should have at least one lowercase letter.<br>";
            }
            if (!$digit) {
                $error .= "Password should have at least one digit.<br>";
            }
            if (!$spec) {
                $error .= "Password should have at least one special character.<br>";
            }

            if ($goodlength && $upcase && $lowerpass && $digit && $spec) {
                echo "<h1> You have a very strong password</h1>";
            } else {
                echo "<h1> You have a weak password</h1>";
            }
        }
    }
    ?>
</body>
</html>

