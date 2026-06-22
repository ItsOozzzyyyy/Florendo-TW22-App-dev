<?php
$conn = new mysqli("localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection failed");
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Saved successfully!')</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

<title>Dog Register</title>
<style>
body {
    font-family: Arial;
    background: #eee;
}

.container {
    width: 300px;
    margin: auto;
    background: #ddd;
    padding: 20px;
    border-radius: 5px;
}

input {
    width: 100%;
    margin-bottom: 10px;
    padding: 5px;
}

button {
    width: 100%;
    padding: 8px;
    background: gray;
    color: white;
    border: none;
}
</style>
</head>

<body>

<div class="container">
    <h3>Dog Information</h3>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Breed</label>
        <input type="text" name="breed" required>

        <label>Age</label>
        <input type="text" name="age" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <label>Color</label>
        <input type="text" name="color" required>

        <label>Height</label>
        <input type="text" name="height" required>

        <label>Weight</label>
        <input type="text" name="weight" required>

        <button type="submit" name="save">Save</button>
    </form>
</div>

</body>
</html> 
