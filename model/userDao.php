<?php

function addUser($mailUser, $pwUser, $bdayUser){
    $sql = "INSERT into user VALUES(NULL ,'$mailUser', '$pwUser', '$bdayUser')";

    return executeSQL($sql);
}

function updateUser($idUser,$mailUser, $pwUser, $bdayUser){
    $sql = "UPDATE user SET         mailUser = '$mailUser',
									pwUser= '$pwUser',
									bdayUser = '$bdayUser'
									WHERE idUser = $idUser";

    return executeSQL($sql);
}

function deleteUser($idUser){
    $sql = "DELETE FROM user WHERE idUser = $idUser";

    return executeSQL($sql);
}

function listeUser(){
    $sql = "SELECT * FROM user";

    return executeSQL($sql);
}

function getUserById($idUser){
    $sql = "SELECT * FROM user WHERE idUser = $idUser";

    return executeSQL($sql);
}

?>