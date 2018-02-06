<?php
    $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$connexion) {
    die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
}
else
{

$reponse = "SELECT * FROM t_categories";
$result = mysqli_query($connexion, $reponse);
?>


<div class="row">
    <div class="category col-sm-2">
        <b>Catégories : </b><br><br>
        <?php
        while ($donnees = mysqli_fetch_array($result)) {

            // On met [1] dans $donnees car c'est le second choix dans notre tableau et comme on commence à partir de 0
            echo "<tr>" . "<td>" .$donnees[1] . "</td>". "</tr>" . "<br>";
        }
        }
            ?>


        <?php
        $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }
        else
        {

        $reponse = "SELECT * FROM t_articles";
        $result = mysqli_query($connexion, $reponse);
        ?>
        <!-- Affichage des articles prédéfinis -->
        </div>
        <div class="col-sm-9">

                <?php
                while ($donnees = mysqli_fetch_array($result)) {

                    // On met [1] dans $donnees car c'est le second choix dans notre tableau et comme on commence à partir de 0
                    // J'affiche le Nom de l'article ainsi que le prix
                    echo "<div class=\"col-sm-3\" style=\"background-color: aqua;\">" .$donnees[1] ."<br>" .
                        "<p>" . $donnees[3] . "<br>" . "<button>Ajouter au panier</button>" . "</div>" ;
                }
                }
                ?>
        </div>
    </div>
</div>
