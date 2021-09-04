<?php 
  require ( ROUTE_DIR . 'view/inc/header.html.php' );
  require ( ROUTE_DIR . 'view/inc/menu.html.php' );
  require ( ROUTE_DIR . 'view/inc/footer.html.php' );

 ?>

    <!-- -----------------------------------------------------------NAV BAR -->
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
        <div class="row mt-5">
            <h6 class="display-4">Détails du Bien</h6>
        </div>
      <div class="row">
        <div class="col-sm-8 mb-4">
          <div class="card">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio saepe sit consequatur accusantium sed voluptatem exercitationem? Hic officia dicta ipsum numquam vero magnam velit quibusdam, repudiandae veniam error sint omnis voluptates quaerat consequatur labore, similique laborum mollitia dolor tempore fugiat excepturi quas expedita sit? Veritatis nostrum dolorem delectus temporibus voluptatum!
              </p>
              <hr />
              <span class="float-left btn btn-sm btn-outline-danger disabled"><?= $bien['prix_bien']?></span>

              <span class="float-left btn btn-sm disabled">Ref:<?=$bien['reference_bien']?></span>
              <span class="float-left btn btn-sm disabled">Depuis: 999H</span>
              <a href="#" class="btn btn-sm btn-primary float-right"><?=$bien['etat_bien']?></a
              >
            </div>
          </div>
        </div>
        <!-- -------------------------------------------- -->
        <div class="col">
          <div class="card text-center" style="width: 18rem">
            <img style="width: 8em; height:8em;" class="card-img-top rounded-circle align-self-center" src="https://api.randomuser.me/portraits/men/30.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">The Customer</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, nisi.
              </p>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-primary text-white"><i class="fas fa-mobile-alt mr-2"></i>77181 88 77</a>
                <span class="list-group-item list-group-item-action">
                    <a href="#"><i class="fab fa-facebook-square fa-2x text-primary mr-1"></i></a>
                    <a href="#"><i class="fab fa-whatsapp fa-2x text-success mr-1"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x text-primary mr-1"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x text-warning mr-1"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-2x text-danger"></i></a>
                </span>
              </div>
          </div>
        </div>
      </div>
    </div>
