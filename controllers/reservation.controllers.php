<?php
if ( $_SERVER ['REQUEST_METHOD' ]== 'GET' ) {
    if ( isset ( $_GET [ 'view' ])) {
        if ( $_GET [ 'view' ]== 'liste.reservation' ) {
        liste_reservation_en_cours();
       }elseif ( $_GET [ 'view' ]== 'reservation.client' ) {
        add_reservation();
        liste_reservation_un_client();
       }elseif ( $_GET [ 'view' ]== 'liste.reservation.client' ) {
        lister_reservation_by_client();
       }elseif ( $_GET [ 'view' ]== 'liste.reservation.bien' ) {
        lister_reservation_by_bien();
       }
    
    }else{
        require ( ROUTE_DIR . 'view/bien/catalogue.html.php' );

    }
} elseif( $_SERVER ['REQUEST_METHOD' ]== 'POST' ){
    if ( isset ( $_POST [ 'action' ])) {
        if ( $_POST [ 'action' ]== 'filter' ) {
            liste_reservation_en_cours(); 
        }
    }

}
 


function liste_reservation_en_cours(){
     if (isset($_POST['ok'])) {
            $_SESSION['etat']=$_POST['etat'];
            $etat=$_SESSION['etat'];
        $reservations = find_all_reservation_by_date_or_etat($etat);
    }else{
        $reservations = find_all_reservation_by_date_or_etat( );
    }
 
    require ( ROUTE_DIR . 'view/gestionnaire/liste.reservation.html.php' );

}




function liste_reservation_un_client(){
    $id_user = $_SESSION['userConnect'][0]['id_user'];
    $reservation = filter_reservation_by_client($id_user);
    require ( ROUTE_DIR . 'view/bien/mesreservations.html.php' );
}




function lister_reservation_by_bien(){
    $id_bien = $_GET['id_bien'];
    $reservations = find_reservation_by_bien($id_bien);
    require ( ROUTE_DIR . 'view/gestionnaire/liste.reservation.bien.html.php' );
}

function lister_reservation_by_client(){
    $id_user = $_GET['id_user'];
    $reservations = filter_reservation_by_client($id_user);
    require ( ROUTE_DIR . 'view/gestionnaire/liste.reservation.client.html.php' );
}




function add_reservation(){
    $id_bien =$_GET['id_bien'];
    $id_user = $_SESSION['userConnect'][0]['id_user'];
    ajout_reservation_bien($id_bien ,$id_user);
}




function traiter_reservation(int $id_reservation , string $etat_reservation="annuler"):bool{
    return false;
}



function reservation_bien(int $id_reservation , int $id_bien):bool{
    return false;
}
?>