<?php include('includes/head.php'); ?>

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Navigation
                    <!--<small>Secondary Text</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
		        <!-- Projects Row -->

		<?php
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
		for( $i = 0; $i < $fsize; $i++)
		{
		$idx++;
		if($idx % 3 == 0){echo '<div class="row">';}
			
            echo '<div class="col-md-4 portfolio-item">';
                echo '<a href="#">';
                    echo '<img class="img-responsive" src="ressources/images/imageFilm/film'.$idx.'.jpg" alt="">';
                echo '</a>';
                echo '<h3>';
                    echo '<a href="#">Vid&eacute;o '.$idx.'</a>';
                echo '</h3>';
                echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>';
            echo '</div>';
        if($idx % 3 == 0 && $i != 0){echo '</div>'; }
		}
		?>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->

        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>