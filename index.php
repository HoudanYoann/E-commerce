<?php
session_start();
echo "<pre>";
    if (isset($_SESSION['login']))    print_r($_SESSION['login']);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Site E-Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" style="text/css" href="./assets/css/styles.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">

    <?php include_once("./include/header.php");?>

    <?php include_once("./include/caroussel.php");?>


    <main>

        <?php include_once("./include/category.php");?>

    </main>
    <?php include_once("./include/footer.php");?>
</div>

</body>
</html>
