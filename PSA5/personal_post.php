<?php
// personal_post.php — shows form and handles POST submit in one file
function esc($v) { return htmlspecialchars((string)$v); }
$showResult = $_SERVER['REQUEST_METHOD'] === 'POST';
if ($showResult) {
  $firstname = $_POST['firstname'] ?? '';
  $middlename = $_POST['middlename'] ?? '';
  $lastname = $_POST['lastname'] ?? '';
  $dob = $_POST['dob'] ?? '';
  $address = $_POST['address'] ?? '';
}
$values = $showResult ? $_POST : [];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Personal Info (POST)</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
  <h1>Personal Information (POST)</h1>
    <form method="post" action="personal_post.php">
      <label>First Name: <input type="text" name="firstname" required value="<?php echo esc($values['firstname'] ?? ''); ?>"></label><br>
      <label>Middle Name: <input type="text" name="middlename" value="<?php echo esc($values['middlename'] ?? ''); ?>"></label><br>
      <label>Last Name: <input type="text" name="lastname" required value="<?php echo esc($values['lastname'] ?? ''); ?>"></label><br>
      <label>Date of Birth: <input type="date" name="dob" value="<?php echo esc($values['dob'] ?? ''); ?>"></label><br>
      <label>Address: <input type="text" name="address" value="<?php echo esc($values['address'] ?? ''); ?>"></label><br>
      <button type="submit">Submit (POST)</button>
    </form>

  <?php if ($showResult): ?>
    <hr>
    <h2>Submitted Personal Information</h2>
    <ul>
      <li>First Name: <?php echo esc($firstname); ?></li>
      <li>Middle Name: <?php echo esc($middlename); ?></li>
      <li>Last Name: <?php echo esc($lastname); ?></li>
      <li>Date of Birth: <?php echo esc($dob); ?></li>
      <li>Address: <?php echo esc($address); ?></li>
    </ul>
  <?php endif; ?>
  </div>
</body>
</html>
