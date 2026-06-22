<?php
$conn = new mysqli("localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection failed");
}

$result = $conn->query("SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Dogs</title>

<style>
body {
    font-family: Arial;
    background: #eee;
}

.container {
    width: 400px;
    margin: auto;
}

.card {
    background: #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #aaa;
}
</style>

</head>

<body>

<div class="container">
    <h2>Dog Records</h2>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<b>Dog " . $row['id'] . "</b><br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Breed: " . $row['breed'] . "<br>";
            echo "Age: " . $row['age'] . "<br>";
            echo "Address: " . $row['address'] . "<br>";
            echo "Color: " . $row['color'] . "<br>";
            echo "Height: " . $row['height'] . "<br>";
            echo "Weight: " . $row['weight'] . "<br>";
            echo "</div>";
        }
    } else {
        echo "No records found";
    }
    ?>

</div>

</body>
</html>
