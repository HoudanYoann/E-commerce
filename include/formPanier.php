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
    <link rel="stylesheet" href="../assets/css/objet.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">

    <?php include_once("header.php");?>
    <main>
        <!-- Formulaire de connexion -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" action="objet.php">
                        <div class="wrapper">
                            <form class="form-signin">
                                <h2 class="form-signin-heading"> Mon Panier :</h2>
                                <p>Mon Objet 1 </p>
                                <p>Mon Objet 1 </p>
                                <p>Mon Objet 1 </p>
                        </div>
                </div>
            </div>

    </main>

    <?php include_once("./footer.php");?>
</div>

</body>
</html>
