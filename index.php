<?php
require_once 'config/pdo.php';
require_once 'templates/head.php';
$query = $pdo->query('SELECT * FROM  annonces');
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<body>

  <!--Section les plus recherchés-->

  <section class="container-fluid column les_plus_recherches">
    <h2 class="pacifico-regular  px-5 pb-5 fs-1" id="lesPlusRecherches">Les plus recherchés</h2>

    <!--les cards-->

    <div class="container">
      <div class="row">
        <?php foreach ($annonces as $annonce): ?>
          <div class="col-md-3">
            <div class="card mb-4" style="width: 18rem">
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
                <li class="list-group-item"><?php echo "Prix : " . $annonce['prix'] . '€'; ?></li>
                <li class="list-group-item"><?php echo "Description : " . $annonce['description']; ?></li>
                <li class="list-group-item"><?php echo "Avis : " . $annonce['note_moyenne']; ?></li>
                <a href="annonce.php?annonces_id=<?php echo $annonce['id']; ?>" class="btn btn-primary">Voir en détail</a>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <div>
    <a href="templates/ajout_annonce.php" class="btn btn-primary">Ajoutez une annonce</a>
    </div>

</body>
<?php require_once 'templates/footer.php' ?>
</html>