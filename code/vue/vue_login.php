<?php

ob_start();
$titre = 'Rent A Snow - Login';
?>

    <div class="span12" id="divMain">
        <h1>Login</h1>
        <?php if (isset($_GET['erreur_email'])) : ?>
            <h5 class="text-error">Email invalide</h5>
        <?php endif ?>
        <?php if (isset($_GET['erreur_password'])) : ?>
            <h5 class="text-error">Erreur de mot de passe</h5>
        <?php endif ?>
        <p>
        <form class="form" method="POST" action="index.php">
            <table class="table">
                <tr>
                    <td>Email : </td>
                    <td>
                        <?php if (isset($_GET['erreur_email'])) : ?>
                        <div class="control-group error"><div class="controls">
                                <input type="text" placeholder="Entrez votre adresse e-mail" class="inputError" name="email" value="<?= @$_GET['email'];?>">
                                <?php else : ?>
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="text" placeholder="Entrez votre adresse e-mail" name="email" value="<?= @$_GET['email'];?>">
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <td>
                </tr>
                <tr>
                    <td>Mot de passe : </td>
                    <td>
                        <?php if (isset($_GET['erreur_password'])) : ?>
                        <div class="control-group error"><div class="controls">
                                <input type="password" placeholder="Entrez le bon mot de passe" class="inputError" name="fPass" value="<?= @$_GET['password'];?>">
                                <?php else : ?>
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="password" placeholder="Entrez votre mot de passe" name="fPass" value="<?= @$_GET['password'];?>">
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="btn" type="submit" value="login" /></td>
                    <td></td>
                </tr>
            </table>
        </form>
        </p>
    </div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";

