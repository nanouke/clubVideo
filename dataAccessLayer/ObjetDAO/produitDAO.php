<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 3/20/2017
 * Time: 1:08 PM
 */

//$_POST["function"]();
function getListe()
{
	$sqlString = "select * from clubvideo.produit;";

	try
    {
        // Connection à la db
        $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo', 'root', 'root');

        // Vérification si le compte exists
        $stmt = $db->prepare($sqlString);
        $stmt->execute();
        $resultArray = $stmt->fetchAll();
		$res = array();
		foreach($resultArray as $info)
		{
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
    }
    catch(PDOException $e){
        return null;
    }
}


function getDropdownListe()
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

function louerItem($produit, $nom, $prenom, $date) {

    // Connection à la db
    $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo', 'root', 'root');

    // Vérification si le compte exists
    $stmt = $db->prepare("INSERT INTO transaction VALUES (:user , :nom , :prenom , :date)");
    $stmt->bindParam(':user' , $_SESSION['signin']->getEmployeID);
    $stmt->bindParam(':nom' , $nom);
    $stmt->bindParam(':prenom' , $prenom);
    $stmt->bindParam(':date' , $date);
    $stmt->execute();

    $last_id = $db->lastInsertId();

    // Vérification si le compte exists
    $stmt = $db->prepare("INSERT INTO transactionproduit VALUES (:transaction , :produit)");
    $stmt->bindParam(':transaction' , $last_id);
    $stmt->bindParam(':produit' , $produit->getProduitID);
    $stmt->execute();

}

