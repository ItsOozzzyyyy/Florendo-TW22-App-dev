
<?php
$fruits = [
    ["name"=>"Apple", "img"=>"https://upload.wikimedia.org/wikipedia/commons/1/15/Red_Apple.jpg", "desc"=>"Color: Red", "facts"=>"Apples are rich in fiber and vitamin C."],
    
    ["name"=>"Banana", "img"=>"https://upload.wikimedia.org/wikipedia/commons/8/8a/Banana-Single.jpg", "desc"=>"Color: Yellow", "facts"=>"Bananas provide energy and are rich in potassium."],
    
    ["name"=>"Cherry", "img"=>"https://upload.wikimedia.org/wikipedia/commons/b/bb/Cherry_Stella444.jpg", "desc"=>"Color: Red", "facts"=>"Cherries contain antioxidants."],
    
    // ✅ YOUR GRAPES IMAGE
    ["name"=>"Grapes", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz1nxqIJ0wK4KnVtdvUaWGH9Lm61X-toObxQ&s", "desc"=>"Color: Purple", "facts"=>"Grapes are used to make wine."],
    
    // ✅ YOUR LEMON IMAGE
    ["name"=>"Lemon", "img"=>"https://t4.ftcdn.net/jpg/02/85/95/37/360_F_285953794_Aufu90PPcaOk59DQLSbSMRkLQumniBXi.jpg", "desc"=>"Color: Yellow", "facts"=>"Lemons are rich in vitamin C."],
    
    ["name"=>"Mango", "img"=>"https://upload.wikimedia.org/wikipedia/commons/9/90/Hapus_Mango.jpg", "desc"=>"Color: Yellow", "facts"=>"Mangoes are known as the king of fruits."],
    
    ["name"=>"Orange", "img"=>"https://upload.wikimedia.org/wikipedia/commons/c/c4/Orange-Fruit-Pieces.jpg", "desc"=>"Color: Orange", "facts"=>"Oranges boost immunity."],
    
    // ✅ YOUR PAPAYA IMAGE
    ["name"=>"Papaya", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl1UVbm1ul5X5Uq23rmSWfLwWzMtKoVLtbUg&s", "desc"=>"Color: Orange", "facts"=>"Papayas help digestion."],
    
    ["name"=>"Pineapple", "img"=>"https://upload.wikimedia.org/wikipedia/commons/c/cb/Pineapple_and_cross_section.jpg", "desc"=>"Color: Yellow", "facts"=>"Pineapples contain bromelain enzyme."],
    
    ["name"=>"Strawberry", "img"=>"https://upload.wikimedia.org/wikipedia/commons/2/29/PerfectStrawberry.jpg", "desc"=>"Color: Red", "facts"=>"Strawberries are rich in antioxidants."]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>SA2.1 - My Fruits</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 90%;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
        }

        th {
            background-color: #ddd;
        }

        img {
            width: 120px;
            height: 120px;
        }
    </style>
</head>
<body>

<h2>My Fruits</h2>

<table>
<tr>
    <th>Image</th>
    <th>Name</th>
    <th>Description</th>
    <th>Facts</th>
</tr>

<?php
foreach ($fruits as $fruit) {
    echo "<tr>
        <td><img src='".$fruit['img']."' alt='".$fruit['name']."'></td>
        <td>".$fruit['name']."</td>
        <td>".$fruit['desc']."</td>
        <td>".$fruit['facts']."</td>
    </tr>";
}
?>

</table>

</body>
</html>
