<?php include('includes/head.php'); ?>

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Navigation
                    <!--<small>Secondary Text</small>-->
                </h1>
            </div>
        </div>

		<?php
		include('../dataAccessLayer/ObjetDAO/ProduitDAO.php');
		include('../dataAccessLayer/ObjetVO/ProduitVO.php'); 
		$dao = new ProduitDAO();
		$liste = $dao->getListe();
		
		//print_r($liste);
		
		function folderSize ($dir)
		{
			$i = 0; 
			if ($handle = opendir($dir)) {
				while (($file = readdir($handle)) !== false){
					if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
						$i++;
				}
			}
			
			return $i;
		}
		
		
		$fsize = folderSize("ressources/images/imageFilm/");
		$idx = 0;
		//$fsize = 5;
		echo '<div class="row">';
		foreach( $liste as $produit)
		{
		$idx++;
		$description = $produit->getDescription();
		$id = $produit->getProduitID();
		$titre = $produit->getNom();
		$disponible = $produit->getDisponible();
		if($disponible == "1")$disponible = "Disponible";
		else $disponible = "Non disponible";
			
            echo '<div class="col-md-4 portfolio-item">';
                //echo '<a href="#">';
                    echo '<img class="img-responsive" src="ressources/images/imageFilm/film'.$id.'.jpg" alt="" width="674" height="1000">';
                //echo '</a>';
                echo '<h3>';
                    echo '<a href="#">'.$titre.' ('.$disponible.')</a>';
                echo '</h3>';
                echo '<p>'.$description.'</p>';
            echo '</div>';
		if($idx % 3 == 0){echo '</div>';echo '<div class="row">';}
		}
		?>
    </div>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>