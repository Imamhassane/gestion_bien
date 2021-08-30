<?php
if ( $_SERVER ['REQUEST_METHOD' ]== 'GET' ) {
    if ( isset ( $_GET [ 'view' ])) {
       if ( $_GET [ 'view' ]== 'catalogue' ) {
        require ( ROUTE_DIR . 'view/bien/catalogue.html.php' );
       }elseif ( $_GET [ 'view' ]== 'detail' ) {
        require ( ROUTE_DIR . 'view/bien/detail.html.php' );
       }
    }else{
        require ( ROUTE_DIR . 'view/security/connexion.html.php' );
    }
} 
    function add_bien(array $bien):bool{
        return true;
    }
    function modify_bien(array $bien):bool{
        return true;
    }
    function archiver_bien(int $id_bien):array{
        return [];
    }
    function detail_bien(int $id_bien):array{
        return [];
    }
?>