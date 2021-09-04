<?php
if (isset($_REQUEST['controllers'])){
    if ($_REQUEST['controllers']=='security'){
        require_once(ROUTE_DIR.'controllers/security.controllers.php');
    }elseif($_REQUEST['controllers']== 'reservation'){
        require_once(ROUTE_DIR.'controllers/reservation.controllers.php');
    }elseif($_REQUEST['controllers']=='bien'){
        require_once(ROUTE_DIR.'controllers/bien.controllers.php');
    }elseif($_REQUEST['controllers']=='controllers'){
        require_once(ROUTE_DIR.'controllers/controllers.php');
    }else{
        require_once(ROUTE_DIR.'view/bien/catalogue.html.php');
    }
}else{
    require_once(ROUTE_DIR.'controllers/bien.controllers.php');

}
?>