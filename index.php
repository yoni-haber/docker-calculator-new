<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Simple Calculator!</h1>
    <form method="POST" action="calculate.php">  <!-- form is sent to calculate.php for processing -->
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <select name="operator">  <!-- creates dropdown -->
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <button type="submit">Calculate</button>
    </form>

    <form method="POST" action="calculate2.php">
        <h2>Find the circumference, area and volume of a circle with just its radius using the feature below!</h2>
        <form method="POST" action="calculate2.php">
        <label for="radius">What is the radius?</label><br>
        <input type="int" name="radius" placeholder="Type radius here" required>
        <input type="submit" value="Calculate">
        <br>
    </form>

    <div>
    <h2>Date and Time</h2>
        <?php
        date_default_timezone_set('Europe/London');
        echo "The date you logged on: " . date('j/m/y');
        echo "<br>The time you logged on: " . date('h:i:s');
        ?>
    </div>

</body>
</html>