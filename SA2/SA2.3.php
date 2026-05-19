
<?php require("header.php"); ?>

<table width="80%" border="2" align="center">
<tr>
    <td width="30%">
        <img src="profile.jpg" width="150">
    </td>
    <td>
        <h2>Personal Information</h2>
        <?php include("personal.php"); ?>
    </td>
</tr>

<tr><td colspan="2"><?php include("career.php"); ?></td></tr>
<tr><td colspan="2"><?php include("education.php"); ?></td></tr>
<tr><td colspan="2"><?php include("skills.php"); ?></td></tr>
<tr><td colspan="2"><?php include("affiliation.php"); ?></td></tr>
<tr><td colspan="2"><?php include("work.php"); ?></td></tr>

</table>

<?php require("footer.php"); ?>
