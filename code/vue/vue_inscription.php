<?php

// tampon de flux stocké en mémoire
ob_start();
$titre="RentASnow - Inscription";

?>

    <div class="span12" id="divMain">
        <h1>Crée un compte</h1>
        <p>
        <form class="form" method="POST" action="index.php?action=enregistrer">
            <table class="table">
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" value="<?= @$_GET['nom']; ?>" required></td>

                    <td>Prenom : </td>
                    <td><input type="text" name="prenom" value="<?= @$_GET['prenom']; ?>" required></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="email" name="email" value="<?= @$_GET['email']; ?>" required></td>

                    <td>Mot de passe : </td>
                    <td>
                        <?php if (isset($_GET['erreur'])) : ?>
                            <input type="password" class="inputError" name="password" value="<?= @$_GET['password'];?>" required>
                        <?php else : ?>
                            <input type="password" name="password" value="<?= @$_GET['password']; ?>" required>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>N° de tél. : </td>
                    <td><input type="text" name="tel" value="<?= @$_GET['tel']; ?>" required></td>

                    <td>Date de naissance : </td>
                    <td><input type="date" name="naissance" value="<?= @$_GET['naissance']; ?>" required></td>
                </tr>
                <tr>
                    <td><input class="btn" type="submit" value="Confirmer"/></td>
                    <td></td><td></td><td></td>
                </tr>
            </table>
        </form>
        </p>
    </div>

<?php

$contenu = ob_get_clean();
require "gabarit.php";
