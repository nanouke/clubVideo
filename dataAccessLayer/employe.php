<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 3/20/2017
 * Time: 1:08 PM
 * Description : Recoie les requêtes qui sont liée
 * à un employé.
 */

session_start();

// --- Includes
include ("../dataAccessLayer/ObjetVO/EmployeVO.php");
include ("../dataAccessLayer/ObjetDAO/EmployeDAO.php");


// --- Variables
$employeDAO = new EmployeDAO();

// Debug
//var_dump($_POST);
//die();

// Appelé lorsqu'un employe essaye de se connecter
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Informations
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Instance le User, Null si login invalide
    $userVO = $employeDAO->getLogin($user, $pass);

    //var_dump($userVO);
    //die();

    // Redirige vers le login page si le cridentials ne fonctionne pas.
    // Redirige vers location si sa fonctionne.
    if (is_null($userVO)) {
        header("Location:/clubVideo/presentationLayer/login.php?error=credentialInvalide");
        die();
    }
    else
    {
        echo 'userVO' . $userVO->getEmployeID();
        $_SESSION['signin'] = $userVO->getEmployeID();
        //header("Location:/clubVideo/presentationLayer/location.php");
        die();
    }
}
