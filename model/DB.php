<?php
function getConnexion(){
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DBNAME", "simplonevaluation");

    return mysqli_connect(HOST, USER, PASSWORD, DBNAME);
}

function executeSQL($sql){
    $connexion = getConnexion();

    return mysqli_query($connexion, $sql);
}
?>