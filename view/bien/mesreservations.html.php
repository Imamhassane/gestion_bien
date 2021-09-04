<?php 
  require ( ROUTE_DIR . 'view/inc/header.html.php' );
  require ( ROUTE_DIR . 'view/inc/menu.html.php' );
  require ( ROUTE_DIR . 'view/inc/footer.html.php' );

 ?>
    <!-- -----------------------------------------------------------NAV BAR -->
    <div class="">
      <div class="jumbotron text-center p-3">
        <h1 class="display-3">Suivez vos reservations</h1>
        <p class="lead">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          culpa eaque ad blanditiis voluptatem. Iste dicta atque quas temporibus
          deserunt!
        </p>
        <hr class="my-4" />


      </div>
    </div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row">
  
      <?php foreach ($reservation as $res): ?>

        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
            <h5 class="card-title">
                  <button class="btn"><span class="badge badge-success"><?= $res['type_bien']?></span></button>
                  <button class="btn"><span class="badge badge-info"><?= $res['prix_bien'].' '.'CFA'?></span></button>

              </h5>
              <hr />

              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><?= $res['etat_reservation']?></a>
              <a href="<?=WEB_ROUTE.'?controllers=bien&view=detail&id_bien='.$bien['id_bien']?>" class="btn btn-sm btn-outline-success float-right">réserver le <?= $res['date_reservation']?></a>
            </div>
          </div>
        </div>
        <?php endforeach ?>        
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
