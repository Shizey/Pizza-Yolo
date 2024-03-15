<?php
session_start();
?>

<!DOCTYPE html>
<html>
<?php
require_once '../global/head.html';
?>

<body>
    <?php require_once '../global/header.html';  ?>
    <div class="container">
        <fieldset style="width:0px;margin:auto;margin-top:300px;margin-bottom:300px;">
            <legend align=center>Login Gérant</legend>
            <form action="./connexion.php" method="post">

                <div>
                    <label for="Nom">Nom</label>
                    <input type="text" class="formulaire" id="nom" name="nom" require />
                </div>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" class="formulaire" id="mdp" name="mdp" require />
                </div>
                <br>
                <div>
                    <input type="submit" class="bouton" value="Login" />
                </div>
            </form>
        </fieldset>
    </div>
    <footer>
        <?php require_once '../global/footer.html'; ?>
    </footer>
</body>

</html>