<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h1>Result</h1>
    <?php
    require_once 'classes/Calculator.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $calculator = new Calculator();

    switch ($operator) {
        case 'add':
            $result = $calculator->add($num1, $num2);
            break;
        case 'subtract':
            $result = $calculator->subtract($num1, $num2);
            break;
        case 'multiply':
            $result = $calculator->multiply($num1, $num2);
            break;
        case 'divide':
            $result = $calculator->divide($num1, $num2);
            break;
        default:
            $result = "Invalid operator";
            break;
    }

    echo "The simple calculator result is: " . $result;

    echo "<br> Try another sum!";

    ?>
</body>
</html>
