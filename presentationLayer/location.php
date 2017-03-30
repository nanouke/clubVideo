<?php include_once ("includes/head.php"); include_once ("../dataAccessLayer/ObjetVO/ProduitVO.php");?>

<?php
session_start();
if(!isset($_SESSION['signin'])){
    header('location: login.php');
}
?>

    <!-- Page Content -->
    <div class="container">
        <select name="produitDropdown" id="produitDropdown">
        <?php
            $listeProduit = getListe();

            /* @var $produit ProduitVO */
            foreach ($listeProduit as $produit) {
                echo '<option value="' . $produit->getProduitID() . '">' . $produit->getProduitID() . ' - ' . $produit->$getNom() . '</option>';
            }
        ?>
        </select>
	</div>

<?php include_once ("includes/footer.php"); ?>
