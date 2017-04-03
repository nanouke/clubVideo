<?php

/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 3/20/2017
 * Time: 12:50 PM
 */
class ProduitVO
{
    // --- Variables
    protected $produitID;
    protected $nom;
    protected $categorie;
    protected $description;
    protected $prixLocation;
    protected $disponible;

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
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * @param mixed $prixLocation
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;
    }

    /**
     * @return mixed
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param mixed $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }
	
	public function setProduitID($id)
	{
		$this->produitID = $id;
	}
	
	public function getProduitID()
	{
		return $this->produitID;
	}


}