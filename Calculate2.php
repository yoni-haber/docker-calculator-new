<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h1>Result</h1>

    <?php
    require_once 'classes/Calculator.php';

    // Get the radius from the form submission
    $radius = $_POST['radius'];

    // Calculate the circumference, area, and volume
    $calculator = new Calculator();
    $circumference = 2 * pi() * $radius;
    $area = pi() * pow($radius, 2);
    $volume = (4/3) * pi() * pow($radius, 3);

    // Round the calculated values to 2 decimal places
    $circumference = round($circumference, 2);
    $area = round($area, 2);
    $volume = round($volume, 2);

    // Display the results
    echo "<p>The radius you selected was $radius.</p>";
    echo "<p>The circumference of this circle is $circumference.</p>";
    echo "<p>The area of this circle is $area.</p>";
    echo "<p>The volume of a sphere is $volume.</p>";
    ?>

    <button onclick="history.go(-1);">Go Back</button>
</body>
</html>