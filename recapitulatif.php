<?php
session_start();
// var_dump($_POST);
$choixIsOk = isset($_POST["choix"]) && !empty($_POST["choix"]);
$nbrpersIsOk = isset($_POST["nbrpers"]) && !empty($_POST["nbrpers"]);
if(!$choixIsOk || !$nbrpersIsOk){
    header("location: agence.php");
    exit();
}

$_SESSION["choix"] = $_POST["choix"];
$_SESSION["nbrpers"] = $_POST["nbrpers"];
$nomvoyage=explode("-",$_SESSION["choix"]);
$prixtotal = $_SESSION["nbrpers"] * $nomvoyage[1];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <title>12h12</title>
</head>
<body>
    <div class="card" style="width : 45%;">
        <div class="card-body">
            <?php if($_SESSION["gridRadios"] === "option1"): ?>
            <section>
                <div>
                    <h3 clas="card-title">Votre récapitulatif</h3>
                    <img src="panneau.jpg" class="card-img-top" alt="voyage">
                    <p class="card-text">Bonjour, <?=$_SESSION["civilite"]?> <?=$_SESSION["nom"]?> <?=$_SESSION["prenom"]?><br>Vous avez choisi un Voyage <?= $nomvoyage[0] ?> au prix de <?=$nomvoyage[1]?> € par personne.<br> Vous nous avez indiqué <?=$_SESSION["nbrpers"]?> personnes <br> Le montant total est de <?=$prixtotal ?> €  </p>
                </div>    
            </section>
        </div>    
    </div>        
            <?php else: ?>
    <div class="card" style="width : 45%;">
        <div class="card-body">            
            <section>
                <div>
                    <h3 class="card-title">Votre récapitulatif</h3>
                    <img src="voiture.jpg" class="card-img-top" alt="voiture">
                    <p class="card-text">Bonjour, <?=$_SESSION["civilite"]?> <?=$_SESSION["nom"]?> <? $_SESSION["prenom"]?><br>Vous avez choisi une Excursion <?= $nomvoyage[0]?> au prix de <?=$nomvoyage[1]?> € par personne.<br> Vous nous avez indiqué <?=$_SESSION["nbrpers"]?> personnes <br> Le montant total est de <?=$prixtotal ?>€  </p>
                </div>    
            </section>
            <?php endif; ?>
        </div>    
    </div>        
</body>
</html>