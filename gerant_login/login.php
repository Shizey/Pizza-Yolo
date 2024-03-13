<!DOCTYPE html>
<html>

<head>
    <title>Login Gérant</title>
    <link rel="stylesheet" type="text/css" href="style/index.css" />
</head>

<body>
    <div class="container">
        <fieldset style="width:0px;margin:auto;margin-top:350px;">
            <legend align=center>Login Gérant</legend>
            <form action="./connexion.php" method="post">

                <div>
                    <label for="Nom">Nom</label>
                    <input type="text" class="formulaire" id="nom" name="nom" require />
                </div>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="text" class="formulaire" id="mdp" name="mdp" require />
                </div>
                <br>
                <div>
                    <input type="submit" class="bouton" value="Login" />
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>