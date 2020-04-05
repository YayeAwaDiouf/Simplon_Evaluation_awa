<?php
function addTopic($titleTop, $idUserTop,$idCatTop){
    $sql = "INSERT INTO topic VALUES (NULL ,'$titleTop', $idUserTop , $idCatTop)";

    return executeSQL($sql);
}
function listeTopAll(){
    $sql = "SELECT idTop ,titleTop FROM topic";
    return executeSQL($sql);
}
function listeTopic(){
    $sql = " SELECT titleTop ,
                    mailUser ,
                    bdayUser ,
                    labelCat
              FROM categorie c,
                    user u ,
                    topic t
              WHERE t.idUserTop = u.idUser
              AND t.idCatTop=c.idCat";

    return executeSQL($sql);
}

function deleteTopic($idTop){
    $sql = "DELETE FROM topic WHERE idTop=$idTop";

    return executeSQL($sql);
}
?>