<?php

ob_start();
$titre = 'Appartager - Login';
?>
    <div class="span12" id="divMain">
        <h1>Login</h1>
        <div style="float:left;margin-right: 150px;">
            </br>
            <form method="POST" action="index.php?action=vue_login">
                <span class="label label-important"><?php if (@$erreurmdp == 1) : ?>MAUVAISE COMBINAISON<?php endif; ?></span>
                <p>
                    Email :<br>
                    <input type="text" name="email" required>
                </p>
                <p>
                    Mot de passe :<br>
                    <input type="password" name="password" required>
                </p>
                <input class="btn" type="submit" value="Connexion">
            </form>
        </div>
    </div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";

