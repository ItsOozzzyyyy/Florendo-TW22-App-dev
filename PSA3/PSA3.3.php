<?php
// Create a user-defined function
function my_function($param1, $param2, $param3) {
    $sum = $param1 + $param2 + $param3;
    $difference = $param1 - $param2 - $param3;
    $product = $param1 * $param2 * $param3;
    $quotient = $param1 / $param2 / $param3;

    return array($sum, $difference, $product, $quotient);
}

// Given values
$num1 = 25;
$num2 = 13;
$num3 = 6;

// Call the function
$result = my_function($num1, $num2, $num3);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PSA3.3</title>
</head>
<body>

<h3>My Parameter values: <?php echo "$num1, $num2, $num3"; ?></h3>

<table border="1" cellpadding="10">
    <tr>
        <td>Addition</td>
        <td><?php echo $result[0]; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $result[1]; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $result[2]; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $result[3]; ?></td>
    </tr>
</table>

</body>
</html>
