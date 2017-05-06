<?php
$name = $_POST['name'];
$email = $_POST['email'];
$letter = $_POST['letter'];
mail($email, $name, $letter);
#header('Location: index.php');
?>
