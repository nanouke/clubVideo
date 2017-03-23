<?php include('includes/head.php'); ?>

<body>

	
	
	
	
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ClubVid&eacute;o</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

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
		if($i % 3 == 0)echo '<div class="row">';
            echo '<div class="col-md-4 portfolio-item">';
                echo '<a href="#">';
                    echo '<img class="img-responsive" src="ressources/images/imageFilm/film'.$idx.'.jpg" alt="">';
                echo '</a>';
                echo '<h3>';
                    echo '<a href="#">Vid&eacute;o '.$idx.'</a>';
                echo '</h3>';
                echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>';
            echo '</div>';
        if($i % 3 == 0 && $i != 0)echo '</div>';
		echo 2+4;
		}
		?>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->

        <!-- /.row -->

        <hr>

        <!-- Footer -->
		<?php include('includes/footer.php'); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="ressources/js/jquery.js"></script>

	
    <!-- Bootstrap Core JavaScript -->
    <script src="ressources/js/bootstrap.min.js"></script>

</body>

</html>
