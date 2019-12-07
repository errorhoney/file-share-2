<?php
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<div align="center">
<form action = "welcome.php" method="post">
<?php
echo '<input type="submit" name="thepage" value="Demo"> ';

echo '<input type="submit" name="nfolder" value="Folder">';

echo '<input type="submit" name="thepage" value="Upload">';

echo '<input type="submit" name="thepage" value="Shared File">';
?>
</form>
</div>
