<?php
// User-defined functions for volumes

function cube($s) {
    return pow($s, 3);
}

function rectangularPrism($l, $w, $h) {
    return $l * $w * $h;
}

function cylinder($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function cone($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function sphere($r) {
    return (4/3) * pi() * pow($r, 3);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SA2.2</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
        }

        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h2>Volume of Shapes</h2>

<table>
<tr>
    <th>Values</th>
    <th>Formula</th>
    <th>Answer</th>
</tr>

<tr>
    <td>s = 5</td>
    <td>V = s³</td>
    <td><?php echo cube(5); ?></td>
</tr>

<tr>
    <td>l=4, w=3, h=2</td>
    <td>V = l × w × h</td>
    <td><?php echo rectangularPrism(4,3,2); ?></td>
</tr>

<tr>
    <td>r=3, h=5</td>
    <td>V = πr²h</td>
    <td><?php echo round(cylinder(3,5),2); ?></td>
</tr>

<tr>
    <td>r=3, h=5</td>
    <td>V = 1/3 πr²h</td>
    <td><?php echo round(cone(3,5),2); ?></td>
</tr>

<tr>
    <td>r=3</td>
    <td>V = 4/3 πr³</td>
    <td><?php echo round(sphere(3),2); ?></td>
</tr>

</table>

</body>
</html>
