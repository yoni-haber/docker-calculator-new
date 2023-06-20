<?php
class Calculator {   //defines class
    public function add($num1, $num2) {  
        return $num1 + $num2;   //method 1: takes num1 and num2 as parameters and returns their sum
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;   //method 2: takes num1 and num2 as parameters and returns their difference
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;   //method 3: takes num1 and num2 as parameters and returns their product
    }

    public function divide($num1, $num2) {  //method 4: takes 2 numbers as paramters 
        if ($num2 != 0) {  //checks num2 is not equal to 0
            return $num1 / $num2;   //returns division of num1 and num2
        } else {
            throw new Exception("Cannot divide by zero");  //if num2 = 0 it returns this phrase
        }
    }
}
?>
