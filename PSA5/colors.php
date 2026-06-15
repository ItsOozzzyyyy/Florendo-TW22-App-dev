<?php
// colors.php — collect 5 favorite colors in session and display them in same file
session_start();
function esc($v) { return htmlspecialchars((string)$v); }
// defaults shown in form when no session values exist (empty by default)
$defaults = [1 => '', 2 => '', 3 => '', 4 => '', 5 => ''];
if (isset($_GET['clear'])) {
  unset($_SESSION['favorite_colors']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $colors = [];
  for ($i = 1; $i <= 5; $i++) {
    $colors[$i] = trim((string)($_POST['color' . $i] ?? ''));
  }
  $_SESSION['favorite_colors'] = $colors;
}
$has = !empty($_SESSION['favorite_colors']) && is_array($_SESSION['favorite_colors']);
$values = $has ? $_SESSION['favorite_colors'] : $defaults;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Favorite Colors (session)</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
  <h1>Favorite Colors</h1>
    <form method="post" action="colors.php">
      <table class="color-row">
        <tr><th colspan="3">Enter your favorite colors</th></tr>
        <tr><td>Favorite color 1:</td><td><input id="color1" name="color1" value="<?php echo esc($values[1] ?? ''); ?>"></td><td><div id="swatch1" class="swatch" style="background-color:<?php echo esc($values[1] ?? 'transparent'); ?>"></div></td></tr>
        <tr><td>Favorite color 2:</td><td><input id="color2" name="color2" value="<?php echo esc($values[2] ?? ''); ?>"></td><td><div id="swatch2" class="swatch" style="background-color:<?php echo esc($values[2] ?? 'transparent'); ?>"></div></td></tr>
        <tr><td>Favorite color 3:</td><td><input id="color3" name="color3" value="<?php echo esc($values[3] ?? ''); ?>"></td><td><div id="swatch3" class="swatch" style="background-color:<?php echo esc($values[3] ?? 'transparent'); ?>"></div></td></tr>
        <tr><td>Favorite color 4:</td><td><input id="color4" name="color4" value="<?php echo esc($values[4] ?? ''); ?>"></td><td><div id="swatch4" class="swatch" style="background-color:<?php echo esc($values[4] ?? 'transparent'); ?>"></div></td></tr>
        <tr><td>Favorite color 5:</td><td><input id="color5" name="color5" value="<?php echo esc($values[5] ?? ''); ?>"></td><td><div id="swatch5" class="swatch" style="background-color:<?php echo esc($values[5] ?? 'transparent'); ?>"></div></td></tr>
        <tr><td colspan="3"><button type="submit">send colors</button></td></tr>
      </table>
    </form>

  <?php if ($has): ?>
    <hr>
    <h2>ResultColors.php</h2>
    <div class="note">After click the button send colors:</div>
    <ul>
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <li>
          My Favorite Color <?php echo $i; ?>: <?php echo esc($values[$i] ?? ''); ?>
          <span style="display:inline-block;margin-left:8px;vertical-align:middle;width:18px;height:14px;border:1px solid #e5e7eb;background-color:<?php echo esc($values[$i] ?? 'transparent'); ?>"></span>
        </li>
      <?php endfor; ?>
    </ul>
    <p><a href="colors.php?clear=1">Change colors</a></p>
  <?php endif; ?>

<script>
  // live-update swatches as the user types
  function updateSwatch(input, swatch) {
    var val = input.value.trim();
    // try to set color; invalid values will be ignored by the browser
    swatch.style.backgroundColor = '';
    swatch.classList.remove('invalid');
    if (val.length === 0) {
      swatch.style.backgroundColor = 'transparent';
      return;
    }
    swatch.style.backgroundColor = val;
    // detect whether the browser accepted the color
    var computed = getComputedStyle(swatch).backgroundColor;
    if (computed === 'rgba(0, 0, 0, 0)' || computed === 'transparent') {
      swatch.classList.add('invalid');
    } else {
      swatch.classList.remove('invalid');
    }
  }
  for (let i=1;i<=5;i++){
    (function(i){
      var inp = document.getElementById('color'+i);
      var sw = document.getElementById('swatch'+i);
      if (!inp || !sw) return;
      inp.addEventListener('input', function(){ updateSwatch(inp, sw); });
      // initialize
      updateSwatch(inp, sw);
    })(i);
  }
</script>
  </div>
</body>
</html>
