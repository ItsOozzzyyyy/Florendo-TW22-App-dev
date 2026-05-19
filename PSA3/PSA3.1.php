<?php
$people = array(
    array(
        "name" => "Lebron James",
        "image" => "lebron.jpg",
        "age" => 38,
        "birthday" => "12/30/1984",
        "contact" => "09876543210"
    ),
    array(
        "name" => "Michael Jordan",
        "image" => "michael.jpg",
        "age" => 30,
        "birthday" => "07/22/1994",
        "contact" => "09876543211"
    ),
    array(
        "name" => "Kevin Durant",
        "image" => "carol.jpg",
        "age" => 28,
        "birthday" => "11/08/1996",
        "contact" => "09876543212"
    )
);
usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Directory</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 30px 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            border-radius: 8px;
            overflow: hidden;
        }
        
        thead {
            background-color: #2c3e50;
            color: white;
        }
        
        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 1px;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #ecf0f1;
        }
        
        tbody tr {
            transition: background-color 0.3s ease;
        }
        
        tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        tbody tr:last-child td {
            border-bottom: none;
        }
        
        .no-col {
            font-weight: 600;
            color: #667eea;
            width: 50px;
        }
        
        .image-cell {
            text-align: center;
            width: 100px;
        }
        
        .image-cell img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #667eea;
        }
        
        .name-col {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .age-col {
            text-align: center;
            font-weight: 500;
        }
        
        .birthday-col {
            text-align: center;
        }
        
        .contact-col {
            text-align: center;
            color: #667eea;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>People Directory</h1>
        
        <table>
            <thead>
                <tr>
                    <th class="no-col">NO.</th>
                    <th>NAME</th>
                    <th>IMAGE</th>
                    <th class="age-col">AGE</th>
                    <th class="birthday-col">BIRTHDAY</th>
                    <th class="contact-col">CONTACT NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($people as $person): 
                ?>
                <tr>
                    <td class="no-col"><?php echo $no; ?></td>
                    <td class="name-col"><?php echo htmlspecialchars($person['name']); ?></td>
                    <td class="image-cell">
                        <img src="images/<?php echo htmlspecialchars($person['image']); ?>" alt="<?php echo htmlspecialchars($person['name']); ?>">
                    </td>
                    <td class="age-col"><?php echo $person['age']; ?></td>
                    <td class="birthday-col"><?php echo $person['birthday']; ?></td>
                    <td class="contact-col"><?php echo $person['contact']; ?></td>
                </tr>
                <?php 
                $no++;
                endforeach; 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
