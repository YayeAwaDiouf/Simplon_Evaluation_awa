<?php
require_once '../model/DB.php';
require_once '../model/postDao.php';

if (isset($_POST['valider'])){
    extract($_POST);
    $result = addPost($datePost, $contentPost, $idUserPost,$idTopPost);

    header( "location: ../view/postes/add.php?ok=$result");
}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/postes/add.php?ok=$result");

}

?>