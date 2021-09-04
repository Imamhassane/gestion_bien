<?php 
  require ( ROUTE_DIR . 'view/inc/header.html.php' );
  require ( ROUTE_DIR . 'view/inc/menu.html.php' );
  require ( ROUTE_DIR . 'view/inc/footer.html.php' );

 ?>
 <div class="container mt-5">
  <div class="row ">
      <div class="col-md-offset-3 ml-auto">
        <form method="POST" action="<?=WEB_ROUTE?>" class="form-inline">
              <input type="hidden" name="controllers" value="reservation">
               <input type="hidden" name="action" value="filter">
              <div class="form-group ml-5">
                <label for="">Date</label>
                <input type="date" name="date" id="" class="form-control ml-2" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group ml-5">
                  <div class="form-group">
                    <label for="">Etat</label>
                    <select class="form-control ml-2" name="etat" id="">
                      <option value="valider">Valider</option>
                      <option value="annuler">Annuler</option>
                      <option value="en_cours" selected>En cours</option>
                    </select>
                  </div>
              </div>
              <button type="submit" name="ok" class="btn btn-primary ml-4 ">OK</button>
            </form>
      </div>
  </div>
   <div class="row mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Bien</th>
            <th scope="col">Etat</th>
            <th scope="col">Prix</th>
            <th scope="col">Zone</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($reservations as $reservation):?>
          <tr>
            <td><?=$reservation['type_bien']?></a></td>
            <td><?= $reservation['etat_reservation']?></td>
            <td><?= $reservation['prix_bien'].' '.'F CFA'?></td>
            <td><?= $reservation['nom_zone']?></td>

          </tr>
          <?php endforeach;?>

        </tbody>
      </table>
    </div>
 </div> 