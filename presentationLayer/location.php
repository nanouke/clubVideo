<?php include_once ("includes/head.php");
include_once ("../dataAccessLayer/ObjetDAO/produitDAO.php");

session_start();
if(!isset($_SESSION['signin'])){
    header('location: login.php');
}

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
                <select name="produitDropdown" id="produitDropdown">
                    <?php
                    $listeProduit = getDropdownListe();

                    foreach ($listeProduit as $produit) {
                        echo '<option value="' . $produit->produitid . '">' . $produit->produitid . ' - ' . $produit->nom . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="text-right">
                <button class="btn btn-primary">Envoyer</button>
            </div>
        </form>


	</div>

<?php include_once ("includes/footer.php"); ?>
