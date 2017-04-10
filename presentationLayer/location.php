<?php include_once ("includes/head.php");
include_once("../dataAccessLayer/ObjetDAO/ProduitDAO.php");

if(!isset($_SESSION['signin'])){
    header('location: login.php');
}

?>

    <!-- Page Content -->
    <div class="container">

        <h2>Réserver</h2>

        <form method="post" action="/clubVideo/dataAccessLayer/produit.php">
            <div class="form-group">
                <label for="client">Prénom client</label>
                <input type="text" class="form-control" name="prenom" id="client" placeholder="Prénom client">
            </div>

            <div class="form-group">
                <label for="client">Nom client</label>
                <input type="text" class="form-control" name="nom" id="client" placeholder="Nom client">
            </div>

            <div class="form-group">
                <label for="client">Produit</label>
                <select name="produitDropdown" id="produitDropdown" class="form-control">
                    <?php
                    $produitDAO = new ProduitDAO();
                    $listeProduit = $produitDAO->getDropdownListe();

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

        <h2>Retourner</h2>

        <form method="post" action="/clubVideo/dataAccessLayer/produit.php" class="form-inline" id="form-chercherClient">

            <div class="form-group">
                <label for="retour_prenom_client">Prénom client:</label>
                <input type="text" class="form-control" name="prenom" id="retour_prenom_client" placeholder="Prénom client">
            </div>

            <div class="form-group">
                <label for="retour_prenom_nom">Prénom client:</label>
                <input type="text" class="form-control" name="nom" id="retour_prenom_nom" placeholder="Nom client">
            </div>

            <button class="btn btn-primary">Chercher</button>

        </form>

        <form method="post" action="" class="form-inline" id="form-retour">

            <input type="hidden" name="prenom" value="null" id="prenomRetour">
            <input type="hidden" name="nom" value="null" id="nomRetour">

            <div class="form-group">
                <label for="transaction">Transaction</label>
                <select name="transactionDropdown" id="transaction" class="form-control">
                </select>
            </div>

            <button class="btn btn-primary">Retourner</button>

        </form>

	</div>

<?php include_once ("includes/footer.php"); ?>
