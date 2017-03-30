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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clubvideo";

	
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return false;
    }

    // $stmt = $conn->prepare("select * from clubvideo.produit; ");

    // $stmt->execute();
	
	// $result = $stmt->get_result();
	// while ($d = $result->fetch())
	// {
		// print_r($d);
	// }
	

	//echo json_encode($d[3][2]);
	
	$sqlConn =  new mysqli($servername, $username, $password, $dbname);
	
	$sqlString = "select * from clubvideo.produit;";
	
	$result = $sqlConn->query($sqlString);
	
	
	//$resultArray = array();
	$resultArray = $result->fetch_all();
	
	//print_r($resultArray);
	
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
	
	// $resultArray = $result->fetch_all(MYSQLI_NUM);
	// $resultArray = $result->fetch_all(MYSQLI_BOTH);
	
	
	// Proof that it's working
	// echo "<pre>";
	// var_dump($d);
	// echo "</pre>";
	
    // $arr = array();
    // $return = new ProduitVO();

	// $resultSet = $stmt->fetchAll();
	
    // foreach($resultSet as $info)
    // {
		// echo "echo array: ".json_encode($info);
		// try {
			// $return->setCategorie($info['produitid']);
			// $return->setNom($info['nom']);
			// $return->setCategorie($info['categorie']);
			// $return->setDescription($info['description']);
			// $return->setPrixLocation($info['prixlocation']);
			// $return->setDisponible($info['disponible']);
			// array_push($arr, $return);
		// }
		// catch(Exception $e)
		// {
			// echo "catch";
		// }
    // }

    // $json = json_encode($return);
    // echo $json;
}

function louerItem($produit, $nom, $prenom, $date) {

    // Connection à la db
    $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo', 'root', '');

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