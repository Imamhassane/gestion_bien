<?php

function find_user_by_login_password($login , $password):array{
    $pdo = ouvrir_connexion_db();
       $sql = "select * from user u , role r 
       where u.id_role = r.id_role 
       and u.login like ?
       and u.password = ? 
       ";
       $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
       $sth->execute([$login , $password]);
     
       $user = $sth->fetchAll((PDO::FETCH_ASSOC));
       
    fermer_connexion_bd($pdo);
   return  $user ;
}


function login_exist($login):array {
   $pdo = ouvrir_connexion_db();
   $sql = "select * from user u 
      where u.login like ?
   ";
   $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
   $sth->execute([$login ]);
   $user = $sth->fetchAll((PDO::FETCH_ASSOC));
   fermer_connexion_bd($pdo);
   return  $user ;
}





function ajout_user(array $user):int{
   $pdo = ouvrir_connexion_db();
   extract($user);
   $sql = " INSERT INTO user (nom, prenom, login, password, telephone, addresse , id_role  ) 
   VALUES (?, ?, ?, ?, ?, ?, ?)";
      if (!est_gestionnaire()) {
            $id_role = 1;
         }else {
            $id_role = 2;
         } 
   $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
   $sth->execute(array($nom , $prenom ,$login, $password, $telephone ,$addresse ,  $id_role ));
   $user = $sth->fetch(PDO::FETCH_ASSOC);
   fermer_connexion_bd($pdo);

   return $user = $del->rowCount();
}
 
/* function ajout_user(array $user):int{
   try {
    $pdo = ouvrir_connexion_db();
    extract($user);
    $sql = " INSERT INTO user (nom, prenom, login, password, telephone, adresse , id_role , id_user ) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
 
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array($nom , $prenom ,$login, $password, $telephone ,$adresse ,  2 ,NULL));
    //var_dump($sth);
    var_dump($sth->fetch(PDO::FETCH_ASSOC));
 
   } catch (PDOException $e) {
      var_dump($e);
   }
    fermer_connexion_bd($pdo);
    return $user = $del->rowCount();
 } */
?>