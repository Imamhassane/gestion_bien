<?php
function est_connect():bool{
    return isset($_SESSION['userConnect'][0]);
}

function  est_gestionnaire():bool{
    return est_connect() && $_SESSION['userConnect'][0]['nom_role']=='ROLE_GESTIONNAIRE';
  }
  
  function  est_client():bool{
      return est_connect() && $_SESSION['userConnect'][0]['nom_role']=='ROLE_CLIENT';
  }
?>