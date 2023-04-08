<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Using PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Basic Online Calculator</h1>

    <form>
        <input type="text" name="num1" placeholder="Number 1">

        <input type="text" name="num2" placeholder="Number 2">

        <select name="operator">
            <option>Operators</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>

        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <p>The answer is: </p>

    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch ($operator) {
                case "Operators":
                    echo "You need to select an Operator!";
                    break;
                case "Add":
                    echo $result1 + $result2;
                    break;
                case "Subtract":
                    echo $result1 - $result2;
                    break;
                case "Multiply":
                    echo $result1 * $result2;
                    break;
                case "Divide":
                    echo $result1 / $result2;
                    break;        
            }
        }
    ?>

</body>
</html>