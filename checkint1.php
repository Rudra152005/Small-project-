
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        Enter the integer: <input type="number" placeholder="Enter any value" name="num">
        <br>
        <br>
        <button type="submit" name="checkint">CHECK IF IT IS INTEGER</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST["checkint"])) {
            $num = $_POST['num'];
            if(filter_var($num, FILTER_VALIDATE_INT) !== false){
                if($num == 0){
                    echo "The number is Zero";
                }
                elseif($num < 0){
                    echo "The number is negative";
                }
                else{
                    echo "The number is positive";
                }
            } else {
                echo "The input is not an integer";
            }
        }
    }
    ?>
</body>
</html