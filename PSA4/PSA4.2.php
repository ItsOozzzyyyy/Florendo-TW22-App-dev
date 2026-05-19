<?php
// Array with 20 names
$names = [
    "chrisa","john doe","maria cruz","mark lee","anna joy",
    "paul ryan","lisa ann","kevin tan","james bond","claire red",
    "nina blue","leo king","sara white","tom brown","alex grey",
    "ella rose","dan hill","mia wong","noah lim","ivan cruz"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PSA4.2</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 95%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h2>List of names</h2>

<table>
<tr>
    <th>Name</th>
    <th>Number of characters</th>
    <th>Uppercase first character</th>
    <th>Replace vowels with @</th>
    <th>Check position of character "a"</th>
    <th>Reverse name</th>
</tr>

<?php
foreach ($names as $name) {

    // Number of characters (with spaces)
    $length = strlen($name);

    // Uppercase first character
    $uppercase = ucfirst($name);

    // Replace vowels with @
    $replace = preg_replace("/[aeiou]/i", "@", $name);

    // Position of letter 'a'
    $pos = strpos(strtolower($name), "a");
    if ($pos !== false) {
        $pos = $pos + 1; // make it human readable (start at 1)
    } else {
        $pos = "Not found";
    }

    // Reverse name
    $reverse = strrev($name);

    echo "<tr>
        <td>$name</td>
        <td>$length</td>
        <td>$uppercase</td>
        <td>$replace</td>
        <td>$pos</td>
        <td>$reverse</td>
    </tr>";
}
?>

</table>

</body>
</html>
