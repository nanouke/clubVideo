<?php

/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 3/20/2017
 * Time: 12:58 PM
 */
class EmployeVO
{
    // --- Variables
    protected $employeID;
    protected $nom;
    protected $prenom;
    protected $nomUtilisateur;
    protected $motDePasse;

    /**
     * @return mixed
     */
    public function getEmployeID()
    {
        return $this->employeID;
    }

    /**
     * @param mixed $employeID
     */
    public function setEmployeID($employeID)
    {
        $this->employeID = $employeID;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * @param mixed $nomUtilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    // --- Setters & Getters
    
}