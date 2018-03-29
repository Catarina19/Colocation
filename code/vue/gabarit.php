<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title><?=$titre;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Html5TemplatesDreamweaver.com">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

  <link href="contenu/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="contenu/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Icons -->
  <link href="contenu/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="contenu/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
  <!--[if lt IE 8]>
      <link href="contenu/scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
      <link href="contenu/scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->
  <link rel="stylesheet" href="contenu/scripts/fontawesome/css/font-awesome.min.css">
  <!--[if IE 7]>
      <link rel="stylesheet" href="contenu/scripts/fontawesome/css/font-awesome-ie7.min.css">
  <![endif]-->

  <link href="contenu/scripts/carousel/style.css" rel="stylesheet" type="text/css" />
  <link href="contenu/scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

  <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

  <link href="contenu/styles/custom.css" rel="stylesheet" type="text/css" />

<link type="text/javascript" href="contenu/scripts/jquery.min-js"/>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

  <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

  <div class="divPanel notop nobottom">
    <div class="row-fluid">
      <div class="span12">

          <div id="divLogo" class="pull-left span2">
              <a href="index.html"><img src="contenu/images/appartager_logo.png"></a><br />
          </div>

        <div id="divMenuLeft" class="pull-left">
          <div class="navbar">
            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
              NAVIGATION <span class="icon-chevron-down icon-white"></span>
            </button>
            <div class="nav-collapse collapse">
              <ul class="nav nav-pills ddmenu">

                <?php if((@$_GET['action']=="vue_accueil")||(!isset($_GET['action']))) :?>
                <li class="active"><a href="index.php">Home</a></li>
                <?php else : ?>
                <li><a href="index.php">Home</a></li>
                <?php endif; ?>

                  <?php if(isset($_SESSION['email'])) :?>
                      <li><a href="index.php?logout=true">Logout</a></li>
                  <?php else : ?>
                      <?php if(@$_GET['action']=="vue_login") :?>
                          <li class="active"><a href="index.php?action=vue_login">Login</a></li>
                      <?php else : ?>
                          <li><a href="index.php?action=vue_login">Login</a></li>
                      <?php endif; ?>
                  <?php endif; ?>

                <?php if(@$_GET['action']=="vue_appartement") :?>
                <li class="active"><a href="index.php?action=vue_appartement">Nos propositions</a></li>
                <?php else : ?>
                <li><a href="index.php?action=vue_appartement">Nos propositions</a></li>
                <?php endif; ?>

                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="divMenuRight" class="pull-right">
            <div class="navbar">
                <div class="nav-collapse collapse">
                    <ul class="nav ddmenu">
                        <li>
                        <?php if(isset($_SESSION['email'])) :?>
                            <li><a href="index.php?action=vue_ajouter"><i class="general foundicon-plus icon"></i></a></li>


                            <li><a href="index.php?action=vue_profil"><?= $_SESSION['prenom']; ?> <?= $_SESSION['nom']; ?></a></li>
                        <?php else : ?>
                            <?php if(@$_GET['action']=="vue_inscription") :?>
                                <li><a href="index.php?action=vue_inscription">S'inscrire</a></li>
                            <?php else : ?>
                                <li><a href="index.php?action=vue_inscription">S'inscrire</a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>
    <div class="contentArea">

      <div class="divPanel notop page-content">
        <div class="row-fluid">

        <!--__________CONTENU__________-->

          <div class="span12" id="divMain">
            <?=$contenu; ?>
          </div>

        <!--________FIN CONTENU________-->

        </div>

        <div id="footerInnerSeparator"></div>
      </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">
        <div class="divPanel">
            <div class="row-fluid">
                <div class="span12">
                    <div class="span6" id="footerArea1">
                        <h3>Informations</h3>
                        <p>
                            <a href="#" title="Terms of Use">A Propos</a><br />
                            <a href="#" title="Privacy Policy">Conditions générales</a><br />
                            <a href="#" title="FAQ">Aide / FAQ</a><br />
                            <a href="#" title="Sitemap">Partenaires</a>
                            <a href="#" title="Privacy Policy">Sécurité</a><br />
                            <a href="#" title="FAQ">Blog</a><br />
                        </p>
                    </div>

                    <div class="span6" id="footerArea2">
                        <h3>Contact</h3>
                        <ul id="contact-info">
                            <li>
                                <i class="general foundicon-phone icon"></i>
                                <span class="field">Téléphone : +41 27 890 12 34</span>
                            </li>
                            <br />
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email :</span>
                                <a href="mailto:info@colocation.com" title="Email">info@colocation.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br />

            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">Copyright © 2018 - site pour les colocataires de Suisse . All Rights Reserved.</p>
                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                        <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                        <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
                        <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br /><br /><br />

<script src="contenu/scripts/jquery.min.js" type="text/javascript"></script>
<script src="contenu/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="contenu/scripts/default.js" type="text/javascript"></script>


<script src="contenu/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="contenu/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="contenu/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


</body>
</html>