<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php

/**
 * Created by PhpStorm.
 * User: T
 * Date: 3/20/2017
 * Time: 1:08 PM
 */

class ProduitDAO
{
//$_POST["function"]();
    function getListe()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "clubvideo";

        $sqlString = "select * from clubvideo.produit;";

        try {
            // Connection à la db
            $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo;charset=utf8', 'root', 'root');

            // Vérification si le compte exists
            $stmt = $db->prepare($sqlString);
            $stmt->execute();
            $resultArray = $stmt->fetchAll();
            $res = array();
            foreach ($resultArray as $info) {
                $p = new ProduitVO();
                $p->setProduitID($info[0]);
                $p->setNom($info[1]);
                $p->setDescription($info[2]);
                $p->setPrixLocation($info[3]);
                $p->setDisponible($info[4]);
                $p->setCategorie($info[5]);
                array_push($res, $p);

            }
            return $res;
        } catch (PDOException $e) {
            return null;
        }
    }


    function getDropdownListe()
    {
        try {
            // Connection à la db
            $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo;charset=utf8', 'root', 'root');

            // Vérification si le compte exists
            $stmt = $db->prepare("SELECT * FROM produit where disponible > 0");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $result;

        } catch (PDOException $e) {
            return null;
        }
    }

    function louerItem($nom, $prenom, $id)
    {

        try {
            // Connection à la db
            $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo;charset=utf8', 'root', 'root');

            // On fait la transaction
            $stmt = $db->prepare("INSERT INTO transaction(employeid, nomclient, prenomclient, date) VALUES (:user , :nom , :prenom , NOW())");
            $stmt->bindParam(':user', $_SESSION['signin']);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->execute();

            $last_id = $db->lastInsertId();

            // Ajoute la transaction au produit
            $stmt = $db->prepare("INSERT INTO transactionproduit VALUES (:transaction , :produit)");
            $stmt->bindParam(':transaction', $last_id);
            $stmt->bindParam(':produit', $id);
            $stmt->execute();

            // Diminue le disponnible de 1
            $stmt = $db->prepare("UPDATE produit SET disponible = disponible - 1 where produitid = :prod");
            $stmt->bindParam(':prod', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e;
        }
    }
}

