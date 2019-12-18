<?php

$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection,'practice');
echo "<a href="logout.php" class="btn btn-lg btn-primary" > Logout </a>";
?>