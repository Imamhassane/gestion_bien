<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
            <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=bien&view=catalogue'?>"
              >Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">A propos</a>
          </li>
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
            <a
              class="nav-link dropdown-toggle mr-5"
              data-toggle="dropdown"
              href="#"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >Utilisateur</a
            >
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>">Se Connecter</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- -----------------------------------------------------------NAV BAR -->
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-5  ml-auto mr-auto">
        
                <div class="card alert-secondary">
        
                    <form method="POST" action="<?=WEB_ROUTE?>"> 
                    <input type="hidden" name="controllers" value="security">
                    <input type="hidden" name="action" value="connexion">
                        <div class="card-body ">
                        <div class="text-center">
                            <img src="user.png" width="50%" class="logo" />
                            <h3 class="card-title ">Se connexion</h3>
                            <p class="slogan">pour acceder aux fonctionnalités</p>
                            <p class="slogan alert alert-danger">Login ou mot de passe invalide!</p>
                        </div>
 
                            <div class="form-group ">
                                <label for="username" >Email</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Entrer votre email">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['username']) ? $arrayError['username'] : '' ;?>
                                </small> 
                            </div>
        
                            <div class="form-group">
                            <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="entrer votre mot de passe">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                </small> 
                            </div>
        
                            <div class="card-foter text-right">
                                <button type="submit" class="btn btn-primary btn-sm" style="width: 140px;">Connexion</button>
                            </div>
        
                        </div>
                    </form>
        
                </div>
        
            </div>
        </div>
    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>