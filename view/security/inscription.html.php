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
                    <input type="hidden" name="action" value="inscription">
                        <div class="card-body ">
                        <div class="text-center">
                            <h3 class="card-title ">S'inscrire</h3>
                            <p class="slogan">pour acceder aux fonctionnalités</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group ">
                                    <label for="prenom">Prenom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrer votre prenom">
                                    <small class = "form-text text-danger">
                                        <?= isset($arrayError['prenom']) ? $arrayError['prenom'] : '' ;?>
                                    </small> 
                                </div>                           
                            </div>
                            <div class="col">
                              <div class="form-group ">
                                  <label for="nom" >Nom</label>
                                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrer votre nom">
                                  <small class = "form-text text-danger">
                                      <?= isset($arrayError['nom']) ? $arrayError['nom'] : '' ;?>
                                  </small> 
                              </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                                <div class="col">
                                    <div class="form-group ">
                                        <label for="login" >Email</label>
                                        <input type="text" id="login" name="login" class="form-control" placeholder="Entrer votre email">
                                        <small class = "form-text text-danger">
                                            <?= isset($arrayError['login']) ? $arrayError['login'] : '' ;?>
                                        </small> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">
                                        <label for="addresse" >Addresse</label>
                                        <input type="text" id="addresse" name="addresse" class="form-control" placeholder="Entrer votre addresse">
                                        <small class = "form-text text-danger">
                                            <?= isset($arrayError['addresse']) ? $arrayError['addresse'] : '' ;?>
                                        </small> 
                                    </div>
                                </div>
                        </div>

                            <div class="row mt-3">
                                <div class="col">
                                        <div class="form-group">
                                        <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="entrer votre mot de passe">
                                            <small class = "form-text text-danger">
                                                <?= isset($arrayError['password']) ? $arrayError['password'] : '' ;?>
                                            </small> 
                                        </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="password_confirm">confimer le password</label>
                                        <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="retaper votre mot de passe">
                                        <small class = "form-text text-danger">
                                            <?= isset($arrayError['password_confirm']) ? $arrayError['password_confirm'] : '' ;?>
                                        </small> 
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                        <div class="form-group">
                                        <label for="telephone">Telephone</label>
                                            <input type="number" id="telephone" name="telephone" class="form-control" placeholder="entrer votre mot de passe">
                                            <small class = "form-text text-danger">
                                                <?= isset($arrayError['telephone']) ? $arrayError['telephone'] : '' ;?>
                                            </small> 
                                        </div>
                                </div>
                                <div class="col ">
                                    <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                        <input type="file" id="avatar" style="background-color: #e2e3e5 ; border:1px solid #e2e3e5 " name="avatar" class="form-control " placeholder="retaper votre mot de passe">
                                        <small class = "form-text text-danger">
                                            <?= isset($arrayError['avatar']) ? $arrayError['avatar'] : '' ;?>
                                        </small> 
                                    </div>
                                </div>
                            </div>

                            <div class="card-foter text-right">
                                <button type="submit" class="btn btn-primary btn-sm" style="width: 140px;">inscription</button>
                            </div>
        
                        </div>
                    </form>
        
                </div>
        
            </div>
        </div>
    </div>

 