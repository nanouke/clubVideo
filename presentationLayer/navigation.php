<?php include('includes/head.php'); ?>

<?php
	include('../dataAccessLayer/ObjetDAO/produitDAO.php');
	include('../dataAccessLayer/ObjetVO/ProduitVO.php'); 
	
	//création de l'objet DAO ayant accès à la base de donnée.
	$dao = new ProduitDAO();
	
	//Aquisition des données dans la base de donnée.
	$liste = $dao->getListe();
	
	//Index utilisé pour vérifier combiens il y a de produit par colonnes.
	$idx = 0;
	
	echo '<div class="row">';
	
		//Parcourir la liste des produits dans la database.
		foreach( $liste as $produit)
		{
			$idx++;
			
			//Aquisition des données
			$description = $produit->getDescription();
			$id = $produit->getProduitID();
			$titre = $produit->getNom();
			$nombreProduit = (int)$produit->getDisponible();
			
			//Déterminer si le produit est disponible.
			if($nombreProduit >= 1)
			{
				$disponible = $nombreProduit." Disponible";
			}
			else
			{
				$disponible = "Non disponible";
			}
			
			//Assurer de mettre le mot au pluriel si y en a plus que 1.
			if($nombreProduit > 1)
			{
				$disponible = $disponible. "s";
			}
			
			//Affichage de l'image selon l'ID du produit, le nom/titre et la description du produit.
			echo '<div class="col-md-4 portfolio-item">';
				echo '<img class="img-responsive" src="ressources/images/imageFilm/film'.$id.'.jpg" alt="'.$titre.'" width="674" height="1000">';
				echo '<h3>';
					echo '<a>'.$titre.'</br>('.$disponible.')</a>';
				echo '</h3>';
				echo '<p>'.$description.'</p>';
			echo '</div>';
			
			//changer de colonne lorsqu'il y a plus de 3 produits.
			if($idx % 3 == 0)
			{
				echo '</div>';
				echo '<div class="row">';
			}
		}	
	echo '</div>';
?>
    
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
