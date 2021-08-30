<?php
if ( $_SERVER ['REQUEST_METHOD' ]== 'GET' ) {
    if ( isset ( $_GET [ 'view' ])) {
       if ( $_GET [ 'view' ]== 'connexion' ) {
        require ( ROUTE_DIR . 'view/security/connexion.html.php' );
       }elseif ( $_GET [ 'view' ]== 'inscription' ) {
        require ( ROUTE_DIR . 'view/security/inscription.html.php' );
       }
    }else{
        require ( ROUTE_DIR . 'view/bien/catalogue.html.php' );
    }
}elseif ($_SERVER ['REQUEST_METHOD' ]== 'POST') {
    if ( isset ( $_POST [ 'action' ])) {
        if ( $_POST [ 'action' ]== 'connexion' ) {
            connexion ( $_POST [ 'username' ], $_POST [ 'password' ]);
        }elseif ($_POST['action']=='inscription') {
 
            inscription($_POST);
        }
    }
}
function connexion(string $username,string $password):void{
    $arrayError=array();
     validation_login($username,'username',$arrayError);
     validation_password($password,'password',$arrayError);

     if (form_valid($arrayError)) {
        echo 'reussi';

     }else {
         $_SESSION['arrayError']=$arrayError;
         header('location:'.WEB_ROUTE.'?controllers=security&view=connexion');
     }
}
function inscription(array $data ):void{
        $arrayError=array();
        extract($data);
        validation_login($login,'username',$arrayError);
        validation_password($password,'password',$arrayError);
        validation_champ($prenom,'prenom',$arrayError);
        validation_champ($nom,'nom',$arrayError);
        if ($password != $confirmpassword){
            $arrayError['confirmpassword'] = 'Les deux password ne sont pas identiques';
        }               
        if (form_valid($arrayError)) {
             echo 'test';
        }else{
                $_SESSION['arrayError']=$arrayError;
                header('location:'.WEB_ROUTE.'?controllers=security&view=inscription');
            }
}
?>