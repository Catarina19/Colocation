<?php

// tampon de flux stocké en mémoire
ob_start();
$titre="RentASnow - Inscription";
?>

    <div class="span12" id="divMain">
        <h1>Crée un compte</h1>
        <p>
        <form class="form" method="POST" action="index.php">
            <table class="table">
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" value="<?= @$_GET['nom']; ?>"></td>

                    <td>Prenom : </td>
                    <td><input type="text" name="prenom" value="<?= @$_GET['prenom']; ?>"></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email" value="<?= @$_GET['email']; ?>"></td>

                    <td>Mot de passe : </td>
                    <td>
                        <?php if (isset($_GET['erreur'])) : ?>
                            <input type="text" class="inputError" name="password" value="<?= @$_GET['password'];?>">
                        <?php else : ?>
                            <input type="text" name="password" value="<?= @$_GET['password']; ?>">
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>N° de tél. : </td>
                    <td><input type="text" name="tel" value="<?= @$_GET['tel']; ?>"></td>

                    <td>Date de naissance : </td>
                    <td><input type="text" name="naissance" value="<?= @$_GET['naissance']; ?>"></td>
                </tr>
                <tr>
                    <td><input class="btn" type="submit" value="Confirmer" /></td>
                    <td></td><td></td><td></td>
                </tr>
            </table>
        </form>
        </p>
    </div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
