<?php



if ( $_SERVER ['REQUEST_METHOD' ]== 'GET' ) {
    if ( isset ( $_GET [ 'view' ])) {
        if ( $_GET [ 'view' ]== 'catalogue' ) {
        catalogue();
       }
    }else{
        catalogue();
    }
}


function catalogue(){
    $biens = find_bien_disponible();
    require ( ROUTE_DIR . 'view/bien/catalogue.html.php' );

}

?>