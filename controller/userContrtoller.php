<?php
require_once '../model/DB.php';
require_once '../model/userDao.php';

if (isset($_POST['valider'])){
    extract($_POST);
    $result = addUser($mailUser, $pwUser,$bdayUser);

    header( "location: ../view/users/add.php?ok=$result");
}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/users/add.php?ok=$result");
}

//Mettre à jour un utilisateur
if(isset($_POST['valider']))
{
    updateUser($_POST['idUser'],$_POST['mailUser'], $_POST['pwUser'], $_POST['bdayUser']);
    header( "location: ../view/users/add.php?ok=$result");

}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/users/add.php?ok=$result");
}

//Supprimer un utilisateur
if(isset($_GET['idUser'])){
    deleteUser($_GET['idUser']);
    header( "location: ../view/users/add.php?ok=$result");

}

?>