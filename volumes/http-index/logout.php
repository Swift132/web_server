<?php
session_start();
session_destroy();

header('Location: login.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="http://10.0.5.113" target="_blank" class="btn btn-main">Main Server Diogo</a>
</body>
</html>