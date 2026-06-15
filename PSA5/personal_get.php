<?php
// personal_get.php — gather personal info via GET and display
$submitted = !empty($_GET);
function esc($v) { return htmlspecialchars((string)$v); }
$values = $_GET;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Personal Info (GET)</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
  <h1>Personal Information (GET)</h1>
    <form method="get" action="personal_get.php">
      <label>First Name: <input type="text" name="firstname" value="<?php echo esc($values['firstname'] ?? ''); ?>"></label><br>
      <label>Middle Name: <input type="text" name="middlename" value="<?php echo esc($values['middlename'] ?? ''); ?>"></label><br>
      <label>Last Name: <input type="text" name="lastname" value="<?php echo esc($values['lastname'] ?? ''); ?>"></label><br>
      <label>Date of Birth: <input type="date" name="dob" value="<?php echo esc($values['dob'] ?? ''); ?>"></label><br>
      <label>Address: <input type="text" name="address" value="<?php echo esc($values['address'] ?? ''); ?>"></label><br>
      <button type="submit">Submit (GET)</button>
    </form>

  <?php if ($submitted): ?>
    <hr>
    <h2>Submitted Data</h2>
    <ul>
      <li>First Name: <?php echo esc($values['firstname'] ?? ''); ?></li>
      <li>Middle Name: <?php echo esc($values['middlename'] ?? ''); ?></li>
      <li>Last Name: <?php echo esc($values['lastname'] ?? ''); ?></li>
      <li>Date of Birth: <?php echo esc($values['dob'] ?? ''); ?></li>
      <li>Address: <?php echo esc($values['address'] ?? ''); ?></li>
    </ul>
  <?php endif; ?>
  </div>
</body>
</html>
