<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="accueil.php" id="img-navbar">
                <img  src="/clubVideo/presentationLayer/ressources/images/logo.png"/>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="accueil.php" style="color: #E6E6E6; font-size: large;">Accueil</a>
                </li>
                <li>
                    <a href="navigation.php" style="color: #E6E6E6; font-size: large;">Naviguer</a>
                </li>
	            <li>
                    <a href="location.php" style="color: #E6E6E6; font-size: large;">Transactions</a>
                </li>
            </ul>
            <?php
                session_start();
                if(isset($_SESSION['signin'])){
                    echo '<div class="navbar-form navbar-right">';
                    echo '<button onclick="logout()" class="btn btn-default"><b>Logout</b></button>';
                    echo '</div>';
                }
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>