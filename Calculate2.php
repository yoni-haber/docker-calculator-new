<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h1>Result</h1>
    <?php
    require_once 'classes/Calculator.php';

    $radius = $_POST['radius'];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "<br>The radius you selected was $radius <br>";
    echo "The circumference of this circle is $circumference <br>";
    echo "The area of this circle is $area <br>";
    echo "The volume of a sphere is $volume";

    echo "<br> Try another sum!";

    ?>
</body>
</html>
