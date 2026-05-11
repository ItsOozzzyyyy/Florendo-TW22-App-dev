<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styleslab1.css">

    <title>Length Conversion Chart</title>

</head>

<body>
<div class="wrapper">

        <h1>Length Conversion Chart</h1>

        <p class="subtitle">Using PHP Operators and Formulas</p>

        <?php

            // Create conversion data using arrays and formulas

            $conversions = array(

                'METRIC CONVERSIONS' => array(

                    array('1 centimetre', '=', 10, 'millimetres', '1 cm', '=', '10 mm'),

                    array('1 decimetre', '=', 10, 'centimetres', '1 dm', '=', '10 cm'),

                    array('1 metre', '=', 100, 'centimetres', '1 m', '=', '100 cm'),

                    array('1 kilometre', '=', 1000, 'metres', '1 km', '=', '1000 m')

                ),

                'IMPERIAL CONVERSIONS' => array(

                    array('1 foot', '=', 12, 'inches', '1 ft', '=', '12 in'),

                    array('1 yard', '=', 3, 'feet', '1 yd', '=', '3 ft'),

                    array('1 chain', '=', 22, 'yards', '1 ch', '=', '22 yd'),

                    array('1 furlong', '=', 220, 'yards', '1 fur', '=', '220 yd'),

                    array('1 mile', '=', 1760, 'yards', '1 mi', '=', '1760 yd')

                ),

                'METRIC → IMPERIAL CONVERSIONS' => array(

                    array('1 millimetre', '=', 0.03937, 'inches', '1 mm', '=', '0.03937 in'),

                    array('1 centimetre', '=', 0.39370, 'inches', '1 cm', '=', '0.39370 in'),

                    array('1 metre', '=', 39.37008, 'inches', '1 m', '=', '39.37008 in'),

                    array('1 metre', '=', 3.28084, 'feet', '1 m', '=', '3.28084 ft'),

                    array('1 metre', '=', 1.09361, 'yards', '1 m', '=', '1.09361 yd'),

                    array('1 kilometre', '=', 1093.6133, 'yards', '1 km', '=', '1093.6133 yd'),

                    array('1 kilometre', '=', 0.62137, 'miles', '1 km', '=', '0.62137 mi')

                ),

                'IMPERIAL → METRIC CONVERSIONS' => array(

                    array('1 inch', '=', 2.54, 'centimetres', '1 in', '=', '2.54 cm'),

                    array('1 foot', '=', 30.48, 'centimetres', '1 ft', '=', '30.48 cm'),

                    array('1 yard', '=', 91.44, 'centimetres', '1 yd', '=', '91.44 cm'),

                    array('1 yard', '=', 0.9144, 'metres', '1 yd', '=', '0.9144 m'),

                    array('1 mile', '=', 1609.344, 'metres', '1 mi', '=', '1609.344 m'),

                    array('1 mile', '=', 1.609344, 'kilometres', '1 mi', '=', '1.609344 km')

                )

            );

            // Display each section

            foreach ($conversions as $section => $rows) {

                echo '<div class="section">';

                echo '<h2>' . $section . '</h2>';

                echo '<table>';

                echo '<tr>';

                echo '<th></th>';

                echo '<th>Formula</th>';

                echo '<th></th>';

                echo '<th>Abbrev.</th>';

                echo '</tr>';

                foreach ($rows as $row) {

                    echo '<tr>';

                    echo '<td>' . $row[0] . '</td>';

                    echo '<td class="operator">' . $row[1] . '</td>';

                    echo '<td class="value">' . $row[2] . ' ' . $row[3] . '</td>';

                    echo '<td></td>';

                    echo '<td>' . $row[4] . '</td>';

                    echo '<td class="operator">' . $row[5] . '</td>';

                    echo '<td class="value">' . $row[6] . '</td>';

                    echo '</tr>';

                }

                echo '</table>';

                echo '</div>';

            }

        ?>

    </div>

</body>

</html>
