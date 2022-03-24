
<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div id="banniere" class="col-lg-9 col-12">
            <h2>IT-Store</h2>
        </div>

        <div class="col-md-7 col-lg-7 col-12">
            <form action="traitement/traitement_authentification.php" id="login" method="post" class="<?php if($connexion == true) echo "d-none"; ?>">
                <input class="info" name="champ_login" type="text" placeholder=" Indentifiant ">
                <input class="info" name="champ_mdp" type="text" placeholder=" Mot de passe ">

                <input type="submit" value="Connexion" class="btn">
            </form>

            <?php if($connexion == true){ echo "<a class='btn' href='deconnexion.php' style='margin-top:30px;'> Déconnexion </a>" ;} ?>
        </div>
    </div>
</div>