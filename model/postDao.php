<?php
function addPost($datePost, $contentPost, $idUserPost,$idTopPost){
    $sql = "INSERT INTO poste VALUES (NULL,'$datePost','$contentPost' , $idUserPost , $idTopPost)";

    return executeSQL($sql);
}

function listerPost(){
    $sql = "SELECT mailUser ,
                    bdayUser ,
                     labelCat,
                     titleTop,
                     datePost ,
                     contentPost
            FROM poste p,
                 categorie c,
                 user u ,
                  topic t
            WHERE p.idUserPost=u.idUser AND p.idTopPost=t.idTop AND t.idCatTop=c.idCat ";

    return executeSQL($sql);
}

function deletePost($idPost){
    $sql = "DELETE FROM poste WHERE idPost=$idPost";

    return executeSQL($sql);
}
?>