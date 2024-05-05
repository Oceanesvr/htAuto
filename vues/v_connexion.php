<!--<section class="form-connect">
    <form action="index.php?uc=administrer&action=verifConnex" method="post">
    <input type="text" placeholder="  identifiant" name="username" required>
    <input type="password" placeholder="  mot de passe" name="password" required>
    <button type="submit" value="Connexion" action="index.php?uc=action=">se connecter</button>
    </form>
</section>-->

<div class="login-container">
    <h2>Connexion</h2>

    <form action="index.php?uc=administrer&action=verifConnex" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </div>

        <div>
            <label for="pass">Mot de passe:</label>
            <input type="password" id="pass" name="pass">
        </div>

        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</div>


