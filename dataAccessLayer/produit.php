<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 4/3/2017
 * Time: 12:25 PM
 */

session_start();

// --- Includes
include ("../dataAccessLayer/ObjetVO/ProduitVO.php");
include("../dataAccessLayer/ObjetDAO/ProduitDAO.php");


// --- Variables
$produitDAO = new ProduitDAO();

// Appelé lorsqu'un employe essaye de se connecter
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['produitDropdown'])) {

    // Variables
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $id = explode('-', $_POST['produitDropdown']);
    $id = $id[0];

    echo 'id: ' . $id .'nom: ' . $nom . ' prenom: ' . $prenom;

    // Instance le User, Null si login invalide
    $error = $produitDAO->louerItem($nom, $prenom, $id);


    // Redirige vers le login page si le cridentials ne fonctionne pas.
    // Redirige vers location si sa fonctionne.
    if (is_null($error)) {
        //header("Location:/clubVideo/presentationLayer/location.php?message=success");
        die();
    }
    else
    {
        //header("Location:/clubVideo/presentationLayer/location.php?message=error");
        die();
    }
}
