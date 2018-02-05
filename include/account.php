<?php
session_start();
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" style="text/css" href="../assets/css/styles.css"/>
    <link rel="stylesheet" href="../assets/css/account.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">

    <?php include_once("header.php");?>
    <main>
        <!-- Affichage des Commandes -->
        <?php include_once ("formAccount.php"); ?>

    </main>

    <?php include_once("./footer.php");?>
</div>

</body>
</html>
