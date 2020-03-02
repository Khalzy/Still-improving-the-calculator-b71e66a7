<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Calculator</h1>
    <form method="POST">
        <label>
            <input type="number" name="First"> First Number
        </label>

        <label>
            <input type="number" name="Second"> Second Number
        </label>

        <?php


        $num1 = $_POST["First"] ?? null;
        $num2 = $_POST["Second"] ?? null;
        $chooseOperator = $_POST["calcu"] ?? null;
        $total = 0;
        switch ($chooseOperator) {

        case "Add":
            $total = $num1 + $num2;
            break;

        case "Subtract":
            $total = $num1 - $num2;
            break;

        case "Multiply":
            $total = $num1 * $num2;
            break;

        case "Divide":
            $total = $num1 / $num2;
            break;

        case "Modulo":
            $total = $num1 % $num2;
            break;
        }



        echo $total ?>


        <label>
            <input type="submit" value="Add" name="calcu">
            <input type="submit" value="Subtract" name="calcu">
            <input type="submit" value="Multiply" name="calcu">
            <input type="submit" value="Divide" name="calcu">
            <input type="submit" value="Modulo" name="calcu">

        </label>

    </form>



</body>

</html>