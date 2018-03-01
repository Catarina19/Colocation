<?php
//include "includes/log.php";
//write_log(basename(__FILE__));
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="scripts/bootstrap/dist/css/bootstrap.css">
    <script src="scripts/jquery/dist/jquery.min.js"></script>
    <script src="scripts/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body id="pageBody">
    <?php include "includes/Menu.php"; ?>

    <div id="divBoxed" class="container">
        <div class="contentArea">
            <div class="divPanel notop page-content">
                <div class="row-fluid">

                    <!-- ________________________ Contenu de la page ______________________________-->

                    <div class="span12" id="divMain">
                        <h1>Login</h1>
                        <?php if (isset($_GET['erreur'])) : ?>
                            <h5 class="text-error">Erreur de mot de passe</h5>
                        <?php endif ?>
                        <p>
                        <form class="form" method="POST" action="login_data.php">
                            <table class="table">
                                <tr>
                                    <td>Login : </td><td><input type="text" placeholder="Entrez votre login" name="fLogin" value="<?= @$_GET['fLogin']; // pour éviter à l'utilisateur de retaper son login ?>"><td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td>
                                        <?php if (isset($_GET['erreur'])) : ?>
                                        <div class="control-group error"><div class="controls">
                                                <input type="password" placeholder="Entrez le bon password" class="inputError" name="fPass" value="<?= @$_GET['fPass']; // pour éviter à l'utilisateur de retaper son mdp ?>">
                                                <?php else : ?>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="password" placeholder="Entrez votre password" name="fPass" value="<?= @$_GET['fPass']; // pour éviter à l'utilisateur de retaper son mdp ?>">
                                                        <?php endif ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="btn" type="submit" value="login" /></td>
                                    <td><a href="Inscription.php">S'inscrire</a></td>
                                </tr>
                            </table>
                        </form>
                        </p>
                    </div>
                    <!--End Main Content-->
                </div>
                <div id="footerInnerSeparator"></div>
            </div>
        </div>
    </div>
</body>
</html>
