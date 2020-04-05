<?php
require_once '../model/DB.php';
require_once '../model/topicDao.php';

if (isset($_POST['valider'])){
    extract($_POST);
    $result = addTopic($titleTop, $idUserTop, $idCatTop);

    header( "location: ../view/topics/add.php?ok=$result");
}else{
    echo 'Donnees invalides.<br/><br/>';
    header( "location: ../view/topics/add.php?ok=$result");
}

if(isset($_GET['idTop'])){
    deleteTopic($_GET['idTop']);
    header( "location: ../view/topics/add.php?ok=$result");

}

?>