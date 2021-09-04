<?php
if ( $_SERVER ['REQUEST_METHOD' ]== 'GET' ) {
    if ( isset ( $_GET [ 'view' ])) {
        if ( $_GET [ 'view' ]== 'detail' ) {
        detail_bien();
       }elseif ( $_GET [ 'view' ]== 'liste.bien' ) {
        lister_bien();
       }
    }else{
        require ( ROUTE_DIR .'view/bien/catalogue.html.php' );

    }
}elseif( $_SERVER ['REQUEST_METHOD' ]== 'POST' ){
    if ( isset ( $_POST [ 'action' ])) {
        if ( $_POST [ 'action' ]== 'filter' ) { 
            lister_bien();
        }
    }

        
}


function lister_bien(){
    if (isset($_POST['ok'])) {
        $_SESSION['etat']=$_POST['etat'];
        $_SESSION['zone']=$_POST['zone'];
        $etat=$_SESSION['etat'];
        $zone=$_SESSION['zone'];
        $biens = find_all_bien_by_zone_or_etat($etat ,$zone);
    }else{
            $biens = find_all_bien_by_zone_or_etat();

    }


    require ( ROUTE_DIR . 'view/gestionnaire/liste.bien.html.php' );

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
    function detail_bien(){
        if(!isset($_GET['id_bien']) || !is_numeric($_GET['id_bien'])){
            header("location:".WEB_ROUTE);
            exit;
        }
        $id_bien = $_GET['id_bien'];
        $bien = find_bien_by_id($id_bien);
        require ( ROUTE_DIR . 'view/bien/detail.html.php' );

    }





?>