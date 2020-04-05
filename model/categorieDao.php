<?php

function addCategorie($labelCat){
    $sql = "INSERT into categorie VALUES(NULL, '$labelCat')";

    return executeSQL($sql);
}

function updateCategorie($idCat,$labelCat){
    $sql = "UPDATE categorie SET         lebelCat = '$labelCat',
									WHERE idCat = $idCat";

    return executeSQL($sql);
}

function deleteCategorie($idCat){
    $sql = "DELETE FROM categorie WHERE idCat = $idCat";

    return executeSQL($sql);
}

function listeCategorie(){
    $sql = "SELECT * FROM categorie";

    return executeSQL($sql);
}

function getCategorieById($idCat){
    $sql = "SELECT * FROM categorie WHERE idCat = $idCat";

    return executeSQL($sql);
}

?>