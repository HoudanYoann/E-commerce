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
        </div>
        <div class="col-sm-9" style="background-color:pink;">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </div>
    </div>
</div>
