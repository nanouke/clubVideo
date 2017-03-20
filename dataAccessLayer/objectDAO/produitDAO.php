<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 3/20/2017
 * Time: 1:08 PM
 */

$_POST["function"]();

function getListe()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clubvideo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return false;
    }

    $stmt = $conn->prepare("select * from clubvideo.tbl_elements; ");

    $stmt->execute();

    $arr = array();
    $return = new ProduitVO();

    foreach($stmt->fetchAll() as $info)
    {
        $return->setCategorie($info['produitid']);
        $return->setNom($info['nom']);
        $return->setCategorie($info['categorie']);
        $return->setDescription($info['description']);
        $return->setPrixLocation($info['prixlocation']);
        $return->setDisponible($info['disponible']);
        array_push($arr, $return);
    }

    $json = json_encode($return);
    echo $json;
}