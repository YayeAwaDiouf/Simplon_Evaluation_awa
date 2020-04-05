<?php
require_once '../model/DB.php';
require_once '../model/categorieDao.php';

if (isset($_POST['valider'])){
    extract($_POST);
    $result = addCategorie($labelCat);

    header( "location: ../view/categories/add.php?ok=$result");
}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/categories/add.php?ok=$result");
}

//Mettre à jour un utilisateur
if(isset($_POST['valider']))
{
    updateCategorie($_POST['idCat'],$_POST['labelCat']);
    header( "location: ../view/categories/add.php?ok=$result");

}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/categories/add.php?ok=$result");
}

//Supprimer un utilisateur
if(isset($_GET['idCat'])){
    deleteCategorie($_GET['idCat']);
    header( "location: ../view/categories/add.php?ok=$result");

}

?>