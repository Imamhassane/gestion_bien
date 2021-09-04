<?php
function find_reservation_en_cours($etat_reservation = 'en cours'):array{
    $pdo = ouvrir_connexion_db();
       $sql = "select * from reservation r , bien b , user u , zone z
       where z.id_zone = b.id_zone and
       r.id_bien = b.id_bien
       and r.id_user = u.id_user 
       and r.etat_reservation like ? ";
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute(array($etat_reservation));
       $reservations = $sth->fetchAll((PDO::FETCH_ASSOC));
    fermer_connexion_bd($pdo);
    return  $reservations ;
 }


function find_all_reservation():array{
    $pdo = ouvrir_connexion_db();
       $sql = "select * from reservation ";
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute();
       $reservations = $sth->fetchAll((PDO::FETCH_ASSOC));
    fermer_connexion_bd($pdo);
    return  $reservations ;
 }


 function find_all_reservation_by_date_or_etat($etat_reservation = 'en cours' ):array{
    $pdo = ouvrir_connexion_db();
  // $params =array($etat_reservation);
  
       $sql = "select * from reservation r , bien b , user u , zone z
       where z.id_zone = b.id_zone and
       r.id_bien = b.id_bien
       and r.id_user = u.id_user 
       and r.etat_reservation like ? ";
       /* if(is_null($date_reservation)){
           $sql .= 'and r.date_reservation like ? ';
           $params[]=$date_reservation;
       } */
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute(array($etat_reservation));
       $reservations = $sth->fetchAll((PDO::FETCH_ASSOC));
       fermer_connexion_bd($pdo);
    return  $reservations ;
 }
 
























/*  function find_all_reservation_by_date_($date_reservation  ){
    $pdo = ouvrir_connexion_db();
       $sql = "select * from reservation r 
        where r.date_reservation like ?" ;
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute(array($date_reservation));

       $reservation = $sth->fetchAll((PDO::FETCH_ASSOC));
        var_dump($reservation);

       fermer_connexion_bd($pdo);
    return  $reservation ;
 }
 */





/* function filter_reservation_by_bien():array{
    $pdo = ouvrir_connexion_db();
    $sql = "select * from  reservation 
    group by id_bien
    ";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array());
    $reservations = $sth->fetch((PDO::FETCH_ASSOC));

    fermer_connexion_bd($pdo);
    return $reservations ;
}

function filter_reservation_by_date():array{
    $pdo = ouvrir_connexion_db();
    $sql = 'select * from  reservation  
     group by date_reservation
     ';
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array());
    $reservations = $sth->fetch((PDO::FETCH_ASSOC));

    fermer_connexion_bd($pdo);
    return $reservations ;
} 

function filter_reservation_by_etat():array{
    $pdo = ouvrir_connexion_db();
    $sql = 'select *  from  reservation 
    group by etat_reservation  
    ';
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array());
    $reservations = $sth->fetch((PDO::FETCH_ASSOC));

    fermer_connexion_bd($pdo);
    return $reservations ;
} */
function ajout_reservation_bien( $id_bien, $id_user){
    try{
        $pdo=ouvrir_connexion_db();
        $sql="INSERT INTO reservation (date_reservation,etat_reservation,description_reservation,id_bien,id_user,id_reservation)
         VALUES (?, ?, ?, ?, ?, ?)";
          $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
           $now=date_create();
           $now=date_format($now,'Y-m-d H:i:s');
           $sth->execute(array($now,'en cours','description', $id_bien, $id_user,NULL));
           $reservation=$sth->fetch();
           fermer_connexion_bd($pdo);
           return $reservation=$sth->rowCount($sth);
    }catch(Exception $e){
        $e->getMessage();
    }
  
}

function filter_reservation_by_client($id_user):array{
    $pdo = ouvrir_connexion_db();
        $sql = "select * from reservation r, bien b 
        where b.id_bien = r.id_bien
         and r.id_user = ? ";
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($id_user));
    $reservations = $sth->fetchAll(PDO::FETCH_ASSOC);
    fermer_connexion_bd($pdo);
    return $reservations ;
} 

function find_reservation_by_bien($id_bien):array{
    $pdo = ouvrir_connexion_db();
       $sql = "select * from reservation r, bien b , zone z
       where b.id_bien = r.id_bien 
       and b.id_zone = z.id_zone
      and r.id_bien = ? ";
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute(array($id_bien));
       $reservations = $sth->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($reservations);

    fermer_connexion_bd($pdo);
    return  $reservations ;
 }





?>