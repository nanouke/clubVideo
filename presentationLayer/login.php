<?php include('includes/head.php'); ?>

<div class="col-sm-12 col-md-offset-3 col-md-6">

    <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger">
            <?php if($_GET['error'] == "credentialInvalide"): ?>

                <p>Le nom d'utilisateur ou le mot de passe est invalide.</p>

            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<div class="col-sm-12 col-md-offset-3 col-md-6">

    <form method="post" action="/clubVideo/dataAccessLayer/employe.php">
        <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                <input type="text" name="username" class="form-control" id="username" placeholder="Nom d'utilisateur">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
            </div>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Connexion</button>
        </div>


    </form>

</div>

<?php include('includes/footer.php'); ?>