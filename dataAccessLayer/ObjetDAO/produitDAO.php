<?php

function getListe()
{
    try
    {
        // Connection à la db
        $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo', 'root', 'root');

        // Vérification si le compte exists
        $stmt = $db->prepare("SELECT * FROM produit");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;

    }
    catch(PDOException $e){
        return null;
    }
}
?>