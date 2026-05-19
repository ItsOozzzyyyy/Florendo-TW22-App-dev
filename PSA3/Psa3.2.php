<?php
// Array with 10 different numbers
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Calculate Sum
$sum = array_sum($numbers);

// Calculate Difference (first number minus all others)
$difference = $numbers[0];
for($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
}

// Calculate Product (multiply all)
$product = 1;
foreach($numbers as $num) {
    $product *= $num;
}

// Calculate Quotient (first number divided by all others)
$quotient = $numbers[0];
for($i = 1; $i < count($numbers); $i++) {
    $quotient /= $numbers[$i];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            padding: 40px 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2em;
            font-weight: bold;
        }
        
        .array-display {
            display: none;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 2px solid #333;
            margin: 0 auto;
        }
        
        thead {
            background-color: #f0f0f0;
            border-bottom: 2px solid #333;
        }
        
        th {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            color: #333;
            border-right: 2px solid #333;
            font-size: 0.95em;
        }
        
        th:last-child {
            border-right: none;
        }
        
        td {
            padding: 15px;
            border-right: 2px solid #333;
            border-bottom: 2px solid #333;
            text-align: center;
            font-size: 0.95em;
            color: #333;
        }
        
        td:last-child {
            border-right: none;
        }
        
        tbody tr:last-child td {
            border-bottom: none;
        }
        
        .operation-name {
            text-align: left;
            font-weight: normal;
        }
        
        .operation-result {
            text-align: right;
            font-weight: normal;
        }
        
        .array-row td {
            border-bottom: 2px solid #333 !important;
        }
        
        .array-row .operation-name {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">        
        <table>
            <thead>
                <tr>
                    <th colspan="2" style="text-align: center; border-right: none;">Array list: <?php echo implode(', ', $numbers); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr class="array-row">
                    <td style="text-align: left; width: 50%;"></td>
                    <td style="text-align: right; width: 50%; border-left: 2px solid #333;"><?php echo $sum; ?></td>
                </tr>
                <tr>
                    <td class="operation-name">Addition</td>
                    <td class="operation-result"><?php echo $sum; ?></td>
                </tr>
                <tr>
                    <td class="operation-name">Subtraction</td>
                    <td class="operation-result"><?php echo $difference; ?></td>
                </tr>
                <tr>
                    <td class="operation-name">Multiplication</td>
                    <td class="operation-result"><?php echo number_format($product, 0); ?></td>
                </tr>
                <tr>
                    <td class="operation-name">Division</td>
                    <td class="operation-result"><?php echo $quotient; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
