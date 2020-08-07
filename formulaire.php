<?php

session_start();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <title>12h10</title>
</head>

<body>
    <div class="card" style="width : 45%;">
        <div class="card-body">
            <h3 class="card-title">La Vie c'est les voyages, donc faut les Vivre !</h3>
            <img src="voyage.jpg" class="card-img-top" alt="voyage">
            <form class="bg-yellow container " action="agence.php" method="post" id="civilitee">
                <div class="card-text">
                    <div class="col-sm-12">
                        <label for="civilite">Civilité : </label>
                        <div class="col-sm-6">
                            <select name="civilite" class="form-control" id="civilite">
                                <option selected disabled>...</option>
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="col-sm-12">
                        <label for="nom" class="col-sm-2 col-form-label">Nom :</label>
                        <div class="col-sm-6">
                            <input name="nom" type="text" class="form-control" id="nom">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="col-sm-12">
                        <label for="prenom" class="col-sm-2 col-form-label">Prénom :</label>
                        <div class="col-sm-6">
                            <input name="prenom" type="text" class="form-control" id="prenom">
                        </div>
                    </div>
                </div>
                <div class="card-text">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios2">
                                Voyages
                            </label>
                        </div>
                        <div class="card-text">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Excursion
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Suite</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>