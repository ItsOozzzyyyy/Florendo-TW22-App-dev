<?php
// cookie.php — set and show cookies in one file
function esc($v) { return htmlspecialchars((string)$v); }
$just_set = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first = $_POST['firstname'] ?? '';
  $middle = $_POST['middlename'] ?? '';
  $last = $_POST['lastname'] ?? '';
  // set cookies: 10s, 20s, 30s
  setcookie('firstname', $first, time() + 10, '/');
  setcookie('middlename', $middle, time() + 20, '/');
  setcookie('lastname', $last, time() + 30, '/');
  // remember what was just set so we can show it immediately (cookies populate next request)
  $just_set = ['firstname' => $first, 'middlename' => $middle, 'lastname' => $last];
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Cookies (setcookie)</title>
  <link rel="stylesheet" href="styles.css">
  <meta http-equiv="refresh" content="5">
</head>
<body>
  <div class="container">
  <h1>Set Personal Info Cookies</h1>
    <form method="post" action="cookie.php">
      <label>First Name: <input type="text" name="firstname" value="<?php echo esc($just_set['firstname'] ?? ($_COOKIE['firstname'] ?? '')); ?>"></label><br>
      <label>Middle Name: <input type="text" name="middlename" value="<?php echo esc($just_set['middlename'] ?? ($_COOKIE['middlename'] ?? '')); ?>"></label><br>
      <label>Last Name: <input type="text" name="lastname" value="<?php echo esc($just_set['lastname'] ?? ($_COOKIE['lastname'] ?? '')); ?>"></label><br>
      <button type="submit">Set Cookies</button>
    </form>

    <h2>Current Cookies (auto-refresh every 5s)</h2>
    <ul>
      <li>firstname: <?php echo isset($_COOKIE['firstname']) ? esc($_COOKIE['firstname']) : '<em>not set / expired</em>'; ?></li>
      <li>middlename: <?php echo isset($_COOKIE['middlename']) ? esc($_COOKIE['middlename']) : '<em>not set / expired</em>'; ?></li>
      <li>lastname: <?php echo isset($_COOKIE['lastname']) ? esc($_COOKIE['lastname']) : '<em>not set / expired</em>'; ?></li>
    </ul>

    <?php if ($just_set): ?>
      <hr>
      <h3>Just Set (values submitted)</h3>
      <ul>
        <li>firstname: <?php echo esc($just_set['firstname']); ?></li>
        <li>middlename: <?php echo esc($just_set['middlename']); ?></li>
        <li>lastname: <?php echo esc($just_set['lastname']); ?></li>
      </ul>
    <?php endif; ?>

    <p>Note: Cookies expire 10s, 20s and 30s after being set. Refresh to observe expiry.</p>
  </div>
</body>
</html>
