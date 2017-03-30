<?php include_once ("includes/head.php");
include_once ("../dataAccessLayer/ObjetDAO/produitDAO.php");

session_start();
if(!isset($_SESSION['signin'])){
    header('location: login.php');
}

var_dump(getListe());

?>

    <!-- Page Content -->
    <div class="container">

        <form method="post" action="">
            <div class="form-group">
                <label for="client">Numéro client</label>
                <input type="email" class="form-control" id="client" placeholder="Numéro client">
            </div>
            <div class="form-group">
                <label for="client">Produit</label>

            </div>

            <button></button>
        </form>

	</div>

<?php include_once ("includes/footer.php"); ?>
