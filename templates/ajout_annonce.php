<?php
require_once 'head.php';
require_once '../config/pdo.php';
?>

<h1>Nouvelle Annonce</h1>
<div class="container">
    <form action="form_validation.php" method="post">
        <div class="mb-3">
            <label for="titre">Titre</label>
            <input type"text" class="form-control  id=" titre" name="titre" placeholder="Titre">
        </div>
        <div class="mb-3">
            <label for="nom_hotel">Hotel</label>
            <input type"text" class="form-control" id="nom_hotel" name="nom_hotel" placeholder="Nom de l'hotel">
        </div>
        <div class="mb-3">
            <label for="lieu">Lieu</label>
            <input type"text" class="form-control" id="lieu" name="lieu" placeholder="lieu">
        </div>
        <div class="mb-3">
            <label for="min_duree">Durée minimum</label>
            <input type"text" class="form-control" id="min_duree" name="min_duree" placeholder="Durée minimum">
        </div>
        <div class="mb-3">
            <label for="max_durée">Durée maximum</label>
            <input type"text" class="form-control" id="max_durée" name="max_durée" placeholder="Durée maximum">
        </div>
        <div class="mb-3">
            <label for="Prix"></label>
            <input type"number" class="form-control" id="prix" name="prix" placeholder="Prix">
        </div>
        <div class="mb-3">
            <label for="remise"></label>
            <input type"text" class="form-control" id="remise" name="remise" placeholder="Remise">
        </div>
        <div class="mb-3">
            <label for="description"></label>
            <input type"text" class="form-control" id="description" name="description" placeholder="Description">
        </div>
        <div class="col-12">
            <button class="btn -btn-primary" type="submit">Validez l'annonce</button>
        </div>
    </form>
</di>