<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        input[type="number"] {
            width: 100px;
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5em;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h1>Simple PHP Calculator</h1>

    <form method="post" action="">
        <input type="number" name="num1" required placeholder="Number 1">
        <input type="number" name="num2" required placeholder="Number 2"><br>
        
        <input type="submit" name="operation" value="Add">
        <input type="submit" name="operation" value="Subtract">
        <input type="submit" name="operation" value="Multiply">
        <input type="submit" name="operation" value="Divide">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'Add':
                $result = $num1 + $num2;
                break;
            case 'Subtract':
                $result = $num1 - $num2;
                break;
            case 'Multiply':
                $result = $num1 * $num2;
                break;
            case 'Divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
        }

        echo "<div class='result'>Result: $result</div>";
    }
    ?>
</div>

</body>
</html>