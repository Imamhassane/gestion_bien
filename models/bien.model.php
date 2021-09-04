   <?php   

   function find_all_bien():array{
      $pdo = ouvrir_connexion_db();
         $sql = "select * from bien";
         $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
         $sth->execute();
         $bien = $sth->fetchAll((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);
      return  $bien ;
   }
    function find_all_bien_by_zone_or_etat($etat_bien = 'disponible' ,$zone = 'kaolack' ):array{
     
      $pdo = ouvrir_connexion_db();
         $sql = "select * from bien b , user u , zone z
         where b.id_zone=z.id_zone and
         u.id_user=b.id_user and 
         b.etat_bien like ? and
         z.nom_zone like ?
         ";
         $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
         $sth->execute(array($etat_bien, $zone));
         $bien = $sth->fetchAll((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);
      return  $bien ;
   
   } 

   function find_bien_disponible():array{
      $pdo = ouvrir_connexion_db();
         $sql = "select * from bien where etat_bien like  ?";
         $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
         $sth->execute(['disponible']);
         $bien = $sth->fetchAll((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);
      return  $bien ;
   }



   // function find_bien_by_id(int $id_bien):array{
   //    $pdo = ouvrir_connexion_db();
   //    $sql = 'select * from  bien where id_bien= ?';
   //    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
   //    $sth->execute(array($id_bien));
   //    $bien = $sth->fetch();  
   //    fermer_connexion_bd($pdo);
   //    return $bien ;
   // }


   function bien_reserved_by_client():array{
      $pdo = ouvrir_connexion_db();
      $sql = "select * from bien b , reservation r ,user u
      where b.id_bien=r.id_bien
      and b.id_user = u.id_user
      and etat_reservation = 'reserver' ";
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute();
      $bien = $sth->fetchAll((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);

      return  $bien ;
   }


   function insert_bien(array $bien):int{
      $pdo = ouvrir_connexion_db();
      extract($bien);
      $sql = " INSERT INTO `bien` (`id_bien`, `etat_bien`, `type_bien`, `reference`, `prix`, `description_bien`, `id_zone`, `date_creation`, `addresse`, `id_user`)
      VALUES (?, ?, ?, ?, ?, ? ?, '?, ?, ?);";
      $now = date_create();
      $now=date_format($now , 'Y-m-d');
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute(array( $id_bien , $etat_bien ,$type_bien, $reference, $prix , $description_bien , $id_zone , $now ,$addresse , $id_user));
      $bien = $sth->fetch((PDO::FETCH_ASSOC));

      fermer_connexion_bd($pdo);

      return $bien = $del->rowCount();
   }
   function update_bien(array $bien):int{
      $pdo = ouvrir_connexion_db();
      extract($bien);
      $sql="UPDATE `bien` SET `etat_bien` = ?, `type_bien` = ?,  `description_bien` = ?, `id_zone` = ?,  `addresse` =?, `id_user` = ?
       WHERE `bien`.`id_bien` = ? ";
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute([ $etat_bien , $type_bien ,  $prix , $description_bien ,$id_zone , $addresse , $id_user , $id_bien]);
      fermer_connexion_bd($pdo);
  
      return $sth->rowCount();
   }
   function delete_bien(array $id_bien):int{
      $pdo=ouvrir_connexion_db();
      $sql="delete from bien b where b.id_bien=?";
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute([$id_bien]);
      fermer_connexion_bd($pdo);
      return $sth->rowCount();
   }
   
   function filter_bien_by_zone():array{
      $pdo = ouvrir_connexion_db();
      $sql = "select * from bien b , zone z
      where b.id_zone = z.id_zone 
      group by nom_zone  
      ";
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute(array());
      $bien = $sth->fetch((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);
      return $bien ;
   } 

   function filter_bien_by_etat():array{
      $pdo = ouvrir_connexion_db();
      $sql = "select * from bien
      group by etat_bien  
      ";
      $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $sth->execute(array());
      $bien = $sth->fetch((PDO::FETCH_ASSOC));
      fermer_connexion_bd($pdo);
      return $bien ;
   } 









 function find_bien_by_id( $id_bien):array{
    $pdo = ouvrir_connexion_db();
/* 
        (requête non préparée) 
       $sql = "select * from bien b where b.id_bien= $id"; */


        //(requête non préparée (requête dont les arguments sont injectés lors de l'écriture de la requête) avec joker non nommée) 
        $sql = 'select * from  bien b where b.id_bien= ?';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_bien));
        $bien = $sth->fetchAll();



/*      (requête préparée(requête dont les arguments sont injectés lors de l'exécution de la requête) avec un joker(argument) nommé) 
        $sql = 'select * from  bien b where b.id_bien= :x';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':x' => $id_bien));
        $bien = $sth->fetch();
 */
    fermer_connexion_bd($pdo);
    return $bien ;
 }

?>