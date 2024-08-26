<?php
require_once 'config\pdo.php';

$annonce_id = $_GET['annonces_id'];

$query = $pdo->query("SELECT * FROM annonces WHERE id = ".$annonce_id);
$annonce = $query->fetch(PDO::FETCH_ASSOC);
require_once 'templates\head.php';
require_once 'templates\headernav.php';

?>



<div class="container">
    <div class="row">
        <div class="col-md-3">
          <div class="card mb-4" style="width: 18rem;">
          <img src="<?php echo $annonce['photo_url']; ?>" class="card-img-top" alt="photo">
            <div class="card-body">
              <h5 class="card-title"><?php echo $annonce['titre']; ?></h5>
              <p class="card-text"><?php echo $annonce['nom_hotel']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo "Lieu : " . $annonce['lieu']; ?></li>
              <li class="list-group-item"><?php echo "Durée minimale : " . $annonce['min_duree']; ?></li>
              <li class="list-group-item"><?php echo "Durée maximale : " . $annonce['max_duree']; ?></li>
              <li class="list-group-item"><?php echo "Remise : " . $annonce['remise']; ?></li>
              <li class="list-group-item"><?php echo "Prix : " . $annonce['prix']. '€'; ?></li>
              <li class="list-group-item"><?php echo "Description : " . $annonce['description']; ?></li>
              <li class="list-group-item"><?php echo "Avis : " . $annonce['note_moyenne']; ?></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
  <?php require_once 'templates\footer.php';?>