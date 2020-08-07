<?php

session_start();
// var_dump($_POST);


$civIsOk = isset($_POST["civilite"]) && !empty($_POST["civilite"]);

$nomIsOk = isset($_POST["nom"]) && !empty($_POST["nom"]);

$prenomIsOk = isset($_POST["prenom"]) && !empty($_POST["prenom"]);

$gridRadiosIsOk = isset($_POST["gridRadios"]) && !empty($_POST["gridRadios"]);

if (!$civIsOk || !$nomIsOk || !$prenomIsOk || !$gridRadiosIsOk) {
    header("location: formulaire.php");
    exit();
}

$_SESSION["nom"] = $_POST["nom"];
$_SESSION["prenom"] = $_POST["prenom"];
$_SESSION["civilite"] = $_POST["civilite"];
$_SESSION["gridRadios"] = $_POST["gridRadios"];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <title>12h11</title>
</head>

<body>
    <?php if ($_SESSION["gridRadios"] === "option1") : ?>
        <div class="card" style="width : 50%;">
            <div class="card-body">
                <section>
                    <form class="bg-yellow" action="recapitulatif.php" method="post" id="recap">
                        <h3 class="card-title">Choisissez bien votre voyage</h3>
                        <img src="pont.jpg" class="card-img-top" alt="pont">
                        <div class="card-text">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlSelect1">Voyages : </label>
                                    <select name="choix" id="exampleFormControlSelect1">
                                        <option>Choix de votre voyage</option>
                                        <option value="Konoha - 450">Konoha-1 semaine - 450€/pers</option>
                                        <option value="Banshee - 550">Banshee-1 semaine - 550€/pers</option>
                                        <option value="Guantanamo - 650">Guantanamo-1 semaine - 650€/pers</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="col-sm-12">
                                <label for="number" class="col-sm-2 col-form-label">Participants :</label>
                                <div class="col-sm-8">
                                    <input name="nbrpers" type="number" class=" width-20" id="number">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Estimation</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    <?php else : ?>
        <div class="card" style="width : 50%;">
            <div class="card-body">
                <section>
                    <form class="bg-yellow container" action="recapitulatif.php" method="post" id="recap1">
                        <h3 class="card-title">Choisissez bien votre excursion</h3>
                        <img src="montgolfier.jpg" class="card-img-top" alt="montgolfier">
                        <div class="card-text">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlSelect1">Excursion : </label>
                                    <select name="choix" id="exampleFormControlSelect2">
                                        <option>Choix de votre excursion</option>
                                        <option value="Sur la trace des loutres - 150">Sur la traces des Loutres - 150€/pers</option>
                                        <option value="A la recherche de la belette d'or - 200">A la recherche de la belette d'or - 150€/pers</option>
                                        <option value="Capybara 'rongeur ou poney' - 175">Capybara "rongeur ou poney?" - 150€/pers</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="col-sm-12">
                                <label for="numbers" class="col-sm-2 col-form-label">Nombre de personnes :</label>
                                <div class="col-sm-8">
                                    <input name="nbrpers" type="number" class=" width-20" id="numbers">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Estimation</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>