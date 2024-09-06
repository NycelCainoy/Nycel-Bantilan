<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Both numbers must be valid numeric values.";
        exit;
    }


    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            
            if ($num2 == 0) {
                echo "Error: Division by zero.";
                exit;
            }
            $result = $num1 / $num2;
            break;
        default:
            echo "Invalid operator.";
            exit;
    }

    
    echo "Result: " . $result;
}
?>
