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
            <th scope="col">Client</th>
            <th scope="col">Bien</th>
            <th scope="col">Date</th>
            <th scope="col">Etat</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($reservations as $reservation):?>
          <tr>
            <td> <a href="<?=WEB_ROUTE.'?controllers=reservation&view=liste.reservation.client&id_user='.$reservation['id_user']?>" ><?=$reservation['nom'].' '.$reservation['prenom'].' '.$reservation['telephone']?></a></td>
            <td> <a href="<?=WEB_ROUTE.'?controllers=reservation&view=liste.reservation.bien&id_bien='.$reservation['id_bien']?>"><?=$reservation['type_bien'].' '.$reservation['nom_zone']?></a></td>
            <td><?= date_format(date_create($reservation['date_reservation']), 'd-m-Y')?></td>
            <td><?= $reservation['etat_reservation']?></td>
          </tr>
          <?php endforeach;?>

        </tbody>
      </table>
    </div>
 </div> 