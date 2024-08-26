
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


