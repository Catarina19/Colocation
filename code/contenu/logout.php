<?php
session_start();
//include "includes/log.php";
//write_log(basename(__FILE__));

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Logout</title>

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
                        <h1>Login : vos données</h1>

                        <p>
                            <strong><?= @$_SESSION['login'];?></strong> avez bien été déconnecté-e. Merci pour votre visite.
                            <?php session_destroy(); ?>
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
