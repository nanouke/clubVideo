<?php include('includes/head.php'); ?>

<div class="col-sm-12 col-md-offset-3 col-md-6">

    <form method="post">
        <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <div class="input-group">

                <input type="password" class="form-control" id="password" placeholder="Mot de passe">
            </div>
        </div>

    </form>

</div>

<?php include('includes/footer.php'); ?>