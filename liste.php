<?php
require_once 'inc/db.php';
$db = new DB();
$db->connexion();
$result = $db->findAllEtudiant();
var_dump($result);
?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AP Gestion des étudiants</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
    <h1>AP Gestion des étudiants</h1>
    <!-- tableau affichant tout les stages -->


    <table class="table">
        <thead>
            <tr>
                <th scope="col">nom eleve</th>
                <th scope="col">prenom eleve</th>
                <th scope="col">id eleve</th>

            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>