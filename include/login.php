<?php
session_start();

if (isset($_POST['login'])) {


    // Vérification dans un tableau avec print_r très important pour nos vérifications

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $tabErreur = array();

    $mail = $_POST['mail'];
    $mdp = $_POST['password'];

    if ($mail == "")
        array_push($tabErreur, "Veuillez saisir une adresse");

    if ($mdp == "")
        array_push($tabErreur, "Veuillez saisir un mot de passe");

    if (count($tabErreur) > 0) {
        $message = "<ul>";

        for ($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";

        echo ($message);
        include ("./formLogin.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {
            $mdp = sha1($mdp);

            $requete = "SELECT * FROM login WHERE MAIL='$mail' AND MDP='$mdp'";

            if($result = mysqli_query($connexion, $requete)) {
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['login'] = 1;
                    $_SESSION['test'] = true;
                    echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>";
                    echo ("<script>redirection(\"../index.php\");</script>
                    <a href=\"../index.php\">Vous êtes authentifié, viendez à la page d'accueil</a>");
                }

            }

        }
        mysqli_close($connexion);
    }

    echo "<pre>";
    echo    ($_SESSION['login']);
    echo "</pre>";
}

else {
    include ("./formLogin.php");
}
?>