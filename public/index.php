<?php
require(dirname(__DIR__)."/config/constante.php");
require(dirname(__DIR__)."/config/require.php");
open_session();
// $datee=array('ba', 'cisse', 'cisssseeba@gmail.com', 'baaaaaaa', '771116556', 'DK', '1', NULL);
/* $datee = array(
    'nom' => 'ba',
    'prenom' => 'cisse',
    'login' => 'cisssseeba@gmail.com',
    'password' => 'baaaaaaa',
    'telephone' => '771116556',
    'adresse' => 'DK'
);
$data=ajout_user($datee);
echo '<pre>';
var_dump(($data)); */
require(ROUTE_DIR.'lib/rooter.php');
?>