<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Simple Calculator</h1>
        <form method="post" action="calculate.php">
            <label for="num1">Enter the first number:</label>
            <input type="text" id="num1" name="num1" required>
            <br><br>
            <label for="operator">Select an operator:</label>
            <select id="operator" name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <br><br>
            <label for="num2">Enter the second number:</label>
            <input type="text" id="num2" name="num2" required>
            <br><br>
            <input type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
