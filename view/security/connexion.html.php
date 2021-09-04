<?php
if (isset($_SESSION['arrayError'])){
    $arrayError = $_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
}
require ( ROUTE_DIR . 'view/inc/header.html.php' );
  require ( ROUTE_DIR . 'view/inc/menu.html.php' );
  require ( ROUTE_DIR . 'view/inc/footer.html.php' );

?>

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
                            <?php if(isset($arrayError['userConnect'])):?>
                              <div class="alert alert-danger"  role="alert">
                                  <?= $arrayError['erreurConnect']; ?>
                              </div>                            
                            <?php endif ?>
                        </div>
 
                            <div class="form-group ">
                                <label for="login" >Email</label>
                                <input type="text" id="login" name="login" class="form-control" placeholder="Entrer votre email">
                                <small class = "form-text text-danger">
                                    <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
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

      