<?php include_once ("includes/head.php"); ?>

<?php
if(!isset($_SESSION['signin'])){
    header('location: login.php');
}
?>

    <!-- Page Content -->
    <div class="container">
	</div>

<?php include_once ("includes/footer.php"); ?>
