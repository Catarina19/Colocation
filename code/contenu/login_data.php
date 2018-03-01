<?php
/*session_set_cookie_params(10); // durée de vie de session à 20 min sinon destruction automatique
session_start();

include "includes/log.php";
write_log(basename(__FILE__));

if(($_POST['captcha'])!="")
{
    if($_POST['captcha'] != $_SESSION['captcha1'].$_SESSION['captcha2'])
        header ("Location:login.php?qErr=Captcha");
}
else
    header ("Location:login.php?qErr=vide");

if (empty($_POST['fLogin']))
{
    if (!empty($_POST['fPass']))
        header("Location:login.php?qPass=" . $_POST['fPass']);
    else
        header("Location:login.php?qErr=vide");
}
else
{
    if (empty ($_POST['fPass']))
        header ("Location:login.php?qLogin=".$_POST['fLogin']);
    else
    {
        if ($_POST['fPass']!='1234')
            header ("Location:login.php?erreur=mdp&qLogin=".$_POST['fLogin']);
        else
    {
    $_SESSION['login']=$_POST['fLogin'];
    setcookie('temps', date("d-m-Y H:i:s"), time() + 365*24*3600, null, null, false, true);
*/
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login_data</title>

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
                            Le Login est <strong><?= @$_POST['fLogin'];?></strong> et le mot de passe est <strong><?php echo $_POST['fPass']; ?></strong>
                        </p>

                    </div>
                    <!--End Main Content-->
                </div>

                <div id="footerInnerSeparator"></div>
            </div>
        </div>

    </div>
<?php
/*
}
}
}
*/
?>

</body>
</html>