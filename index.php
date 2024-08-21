<?php

/*$annonces_no_bdd = [
  'id1' => [
    'titre' => 'Tokyo',
    'nom_hotel' => 'Wasabi',
    'lieu' => 'Japon',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '5000',
    'description' => 'Magnifique soleil levant',
    'note_moyenne' => '5/5'
  ],

  'id2' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ],
  'id3' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ],
  'id4' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ],
  'id5' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ],
  'id6' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ],  
  'id7' => [
    'titre' => 'Puerto Limon',
    'nom_hotel' => 'Le Ara bleu',
    'lieu' => 'Costa Rica',
    'min_duree' => '7 jours',
    'max_duree' => '15 jours',
    'remise' => '15%',
    'prix' => '4000',
    'description' => 'Faune et flore',
    'note_moyenne' => '5/5'

  ]

];*/

$pdo = new PDO("mysql:host=localhost;dbname=annonces_db;port=3306", 'root', '');
$query = $pdo->query('SELECT * FROM annonces');
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/index.css">
  <title>StudiVoyage</title>
</head>

<body>
  <header class="container-fluid">
    <nav class="navbar navbar-expand-lg">
      <div class="nav container-fluid">
        <a class="navbar-brand" href="#"><img class="col-4 " src="asset/images/logo/logoTravel.png" alt="logo"></a>
        <div class="collapse navbar-collapse col-8 ps-3" id="navbarNav">
          <ul class="navbar-nav form-control bg-perso align-items-center">
            <li class="nav-item pacifico-regular">
              <a class="nav-link active opacity-75 " aria-current="page" href="#lesPlusRecherches">Les plus
                recherchés</a>
            </li>
            <li class="nav-item pacifico-regular">
              <a class="nav-link active  opacity-75    " aria-current="page" href="#">Les plus
                dépaysants</a>
            </li>
            <li class="nav-item pacifico-regular">
              <a class="nav-link active  opacity-75  " aria-current="page" href="#">Les dernières
                minutes</a>
            </li>
            <li class="nav-item pacifico-regular">
              <a class="nav-link active  opacity-75   " aria-current="page" aria-disabled="true" href="#"><svg
                  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 -960 960 960" width="1em" fill="#000000">
                  <path
                    d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                </svg> Tel:01 02 03 04 05 </a>
            </li>
            <li class="nav-item pacifico-regular">
              <button class="bg-white form-control  opacity-75 " data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="nav-link active " aria-current="page"
                  href="#">Connectez-vous</a>
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Connexion</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row d-flex justify-content-between">
                          <div class="col pacifico-regular text-white">
                            <label for="email" class="fs-4 pb-1">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                          </div>
                          <div class="col pacifico-regular text-white">
                            <label for="depart" class="fs-4 pb-1">Mot de passe</label>
                            <input type="password" class="form-control" id="depart" placeholder="Votre mot de passe"
                              name="password">
                            <hr>
                          </div>
                        </div>
                        <button class="form-control">Nouvel utilisateur? <br><a
                            href="pages/inscription.html">Inscription</a></button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn bg-perso text-white" data-bs-dismiss="modal">Fermez</button>
                      <button type="button" class="btn bg-perso" <br><a href="pages/connexion.html"
                          class="text-decoration-none">Connexion</a></button>
                    </div>
                  </div>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container pb-5 ">
      <h1 class="wrapper"><svg class="title">
          <text class="title_text" x="50%" y="50%" dy="0.35em" text-anchor="middle">Votre prochaine destination?
          </text>
        </svg>
      </h1>
    </div>
    <div class="navsearh">
      <form class="d-flex justify-content-center">
        <div class="row d-flex justify-content-between">
          <div class="col pacifico-regular text-white ps-5">
            <label for="destination" class="fs-4  ">Destination</label>
            <input type="text" class="form-control" id="destination" placeholder="Entrez le pays" name="destination">
          </div>
          <div class="col pacifico-regular text-white">
            <label for="depart" class="fs-4 pb-1">Départ</label>
            <input type="text" class="form-control" id="depart" placeholder="Entrez la ville" name="depart">
          </div>
          <div class="col pacifico-regular text-white">
            <label for="duree" class="fs-4 pb-1">Durée</label>
            <input type="text" class="form-control" id="duree" placeholder="Entrez la durée" name="duree">
          </div>
          <div class="col pacifico-regular text-white">
            <label for="date-depart" class="fs-4 pb-1">Date de départ</label>
            <input type="date" class="form-control" id="date-depart" name="date-depart">
          </div>
          <div class="col pacifico-regular text-white">
            <label for="date-depart" class="fs-4 pb-1">Date de retour</label>
            <input type="date" class="form-control" id="date-depart" name="date-retour">
          </div>
          <div class="col d-flex align-items-end">
            <button type="submit"
              class="btn btn-default align-text-center bg-perso pacifico-regular">Rechercher</button>
          </div>
        </div>
    </div>
    </form>
    <h1 class="main_title pacifico-regular text-white px-5">Vers l'infini et au delà...<img src="asset/images/plane.png"
        style="width: 80px;"></h1>
  </header>

  <!--Section les plus recherchés-->

  <section class="container-fluid column les_plus_recherches">
    <h2 class="pacifico-regular  px-5 pb-5 fs-1" id="lesPlusRecherches">Les plus recherchés</h2>

    <!--les cards-->

    <div class="container">
    <div class="row">
      <?php foreach ($annonces as $annonce) { ?>
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
      <?php } ?>
    </div>
  </div>
  </section>
  <section></section>

  <footer class="footer bg-perso text-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Qui sommes-nous</h5>
          <ul class="list-unstyled">
            <li><a href="#">Nos agences</a></li>
            <li><a href="#">Nos spécialistes</a></li>
            <li><a href="#">Nous rejoindre</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Nos métiers</h5>
          <ul class="list-unstyled">
            <li><a href="#">Voyages à la carte</a></li>
            <li><a href="#">Groupes</a></li>
            <li><a href="#">Voyages d'affaires</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Infos pratiques</h5>
          <ul class="list-unstyled">
            <li><a href="#">Conditions de ventes</a></li>
            <li><a href="#">Conditions des offres</a></li>
            <li><a href="#">Assurance voyage</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Suivez-nous</h5>
          <ul class="list-unstyled">
            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/15198c0af4.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="asset/js/script.js"></script>
</body>

</html>
