<?php
function  est_gestionnaire():bool{
    return est_connect() && $_SESSION['userConnect']['role']=='ROLE_GESTIONNAIRE';
  }
  
  function  est_client():bool{
      return est_connect() && $_SESSION['userConnect']['role']=='ROLE_CLIENT';
  }
  ?>