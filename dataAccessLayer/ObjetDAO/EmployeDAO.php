<?php

/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 3/20/2017
 * Time: 1:37 PM
 */
class EmployeDAO
{
    // Objet DataBase
    protected $db;

    // ------------------------------- signIn
    // ----------------------------------------------------------------------------------------------------------------
    public function  getLogin($user, $password) {
        try
        {
            // Connection à la db
            $db = new PDO('mysql:server=127.0.0.1:3306;dbname=clubvideo', 'root', 'root');

            // Vérification si le compte exists
            $stmt = $db->prepare("SELECT EXISTS (SELECT nomutilisateur FROM employe WHERE nomutilisateur = :user and motpasse = :pass)");
            $stmt->bindParam(':user' , $user);
            $stmt->bindParam(':pass' , $password);
            $stmt->execute();
            $row = $stmt->fetchColumn(0);

            // Vérifie si le user Exist
            if (!$row) {
                return null;
            }

            // Vérification si le mot de passe match
            $stmt = $db->prepare("SELECT * FROM employe WHERE nomutilisateur = :user and motpasse = :pass");
            $stmt->bindParam(':user' , $user);
            $stmt->bindParam(':pass' , $password);
            $stmt->execute();
            $row = $stmt->fetch();

            // On retourne l'information de l'employe qui viens de se connecter
            if($row){
                // Objet de Transport
                $employe = new EmployeVO();
                $employe->setEmployeID($row['employeid']);
                $employe->setNom($row['nom']);
                $employe->setPrenom($row['prenom']);

                return $employe;
            }
            else{
                return null; // wrong password
            }

        }
        catch(PDOException $e){
            return null;
        }
    }
}