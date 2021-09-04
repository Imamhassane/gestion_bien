<?php 
  require ( ROUTE_DIR . 'view/inc/header.html.php' );
  require ( ROUTE_DIR . 'view/inc/menu.html.php' );
  require ( ROUTE_DIR . 'view/inc/footer.html.php' );

 ?>
 <div class="container mt-5">
  <div class="row ">
      <div class="col-md-offset-3 ml-auto">
            <form method="post" action="<?=WEB_ROUTE?>" class="form-inline">
                    <input type="hidden" name="controllers" value="bien">
                    <input type="hidden" name="action" value="filter">
            <div class="form-group ml-5">
                  <div class="form-group">
                    <label for="">Zone</label>
                    <select class="form-control ml-2" name="zone" id="">
                      <option value="dakar">Dakar</option>
                      <option value="thies">Thies</option>
                      <option value="kaolack" selected>Kaolack</option>
                      <option value="mbour">Mbour</option>
                      <option value="saint-louis" >Saint-Louis</option>
                    </select>
                  </div>
            </div>
            <div class="form-group ml-5">
                  <div class="form-group">
                    <label for="">Etat</label>
                    <select class="form-control ml-2" name="etat" id="">
                      <option value="indisponible">Indisponible</option>
                      <option value="disponible" selected>Disponible</option>
                    </select>
                  </div>
            </div>
              <button type="submit" class="btn btn-primary ml-4" name="ok">OK</button>
            </form>
      </div>
  </div>
   <div class="row mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Gestionnaire</th>
            <th scope="col">Bien</th>
            <th scope="col">Zone</th>
            <th scope="col">Etat</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($biens as $bien):?>
          <tr>
            <td> <a href="#"><?=$bien['nom'].' '.$bien['prenom'].' '.$bien['telephone']?></a></td>
            <td> <a href="#"><?=$bien['type_bien']?></a></td>
            <td><?= $bien['nom_zone']?></td>
            <td><?= $bien['etat_bien']?></td>
          </tr>
          <?php endforeach;?>

        </tbody>
      </table>
    </div>
 </div> 