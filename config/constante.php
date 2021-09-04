<?php 
//define("WEB_ROUTE" , "http://niassimamhassane.alwaysdata.net/");
define("WEB_ROUTE" , "http://localhost:8000/");
define('ROUTE_DIR', str_replace ('public', '' , $_SERVER['DOCUMENT_ROOT']));
define("USER_DB" , 'root' );
define("PASSWORD_DB" , 'alvinniass' );
define("HOST_BD" , 'localhost');

define("CHAINE_DE_CONNEXION" , 'mysql:dbname=gestion_bien;host='.HOST_BD );



?>