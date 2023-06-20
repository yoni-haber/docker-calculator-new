<!DOCTYPE html>
<html>
<head>
    <title>Result</title>

</head>
<body>
    <h1>Result</h1>

    <?php
    require_once 'classes/Calculator.php';

    // Get the submitted values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Create an instance of the Calculator class
    $calculator = new Calculator();

    // Perform the calculation based on the selected operator
    $result = "";
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

    // Display the result
    echo "<p>The result is: $result</p>";
    ?>

    <button onclick="history.go(-1);">Go Back</button>
</body>
</html>
