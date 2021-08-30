<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
            <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=bien&view=catalogue'?>">Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mes Réservations</a>
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
              <a class="nav-link dropdown-toggle mr-5" data-toggle="dropdown" role="button"aria-haspopup="true"aria-expanded="false">Utilisateur</a>
              <div class="dropdown-menu ">
                <a class="dropdown-item " href="#">Se Connecter</a>
              </div>
            </li>
          </ul>
      </div>
    </nav>
    <!-- -----------------------------------------------------------NAV BAR -->
    <div class="">
      <div class="jumbotron text-center p-3">
        <h1 class="display-3">Réservez un Bien</h1>
        <p class="lead">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          culpa eaque ad blanditiis voluptatem. Iste dicta atque quas temporibus
          deserunt!
        </p>
        <hr class="my-4" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
          sapiente?
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button"
            >Créer un compte</a
          >
        </p>
      </div>
    </div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />

              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3">Reserver</a>
              <a href="<?=WEB_ROUTE.'?controllers=bien&view=detail'?>" class="btn btn-sm btn-outline-success float-right">Détails</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?computer"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 49mn</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?smart"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1h</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?house"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1j</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?food"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 12j</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?tv,watch "
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 2m</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
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
  