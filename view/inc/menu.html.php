<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">E-221</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=controllers&view=catalogue'?>">Accueil
            </a>
          </li>
          <?php  if (est_client()):?>
          <li class="nav-item">
            <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=reservation&view=reservation.client'?>">Mes Réservations</a>
          </li>
          <?php  endif ?>
          <?php   if (est_gestionnaire()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=reservation&view=liste.reservation'?>">Réservations</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=bien&view=liste.bien'?>">Liste des biens</a>
          </li>
          <?php endif ?>
          <?php if (!est_connect()): ?>
          <li class="nav-item ">
            <a class="nav-link" href="#">A propos</a>
          </li>
          <?php endif ?>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Rechercher un article..."
          />
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">
            Rechercher
          </button>
        </form>

        <ul class="navbar-nav mr-o ml-4">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown" role="button"aria-haspopup="true"aria-expanded="false"><?=isset($_SESSION['userConnect']) ? $_SESSION['userConnect'][0]['prenom'].' '.$_SESSION['userConnect'][0]['nom']: 'Utilisateur'?> </a>
              <div class="dropdown-menu ">
              <?php if (!est_connect()): ?>
              <a class="dropdown-item " href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>">Se Connecter</a>
              <?php else: ?>
                <a class="dropdown-item " href="<?=WEB_ROUTE.'?controllers=security&view=deconnexion'?>">Se deonnecter</a>
              <?php endif ?>
              </div>
            
            </li>
          </ul>

      </div>
    </nav>
   