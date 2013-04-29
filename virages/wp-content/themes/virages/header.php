<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Virages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--styles -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/blog.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo( 'template_directory' ); ?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse pull-right">
            <!--<p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>-->
            <ul class="nav" id="menutop">
			  <li class="active"><a href="/">ACCUEIL</a></li>
              <li><a href="http://virages.agencealbum.com/therapie-breve/">THERAPIE BREVE</a></li>
              <li><a href="http://virages.agencealbum.com/formations/">FORMATIONS</a></li>
              <li><a href="http://virages.agencealbum.com/qui-intervient/">INTERVENANTS</a></li>
              <li><a href="http://virages.agencealbum.com/blog/">BLOG</a></li>
              <li><a href="http://virages.agencealbum.com/contact/">CONTACT</a></li>
              <li><a href="http://virages.agencealbum.com/inscription/">S'INSCRIRE</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div id="entete">	
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<header>
						<div class="span3">
							<a href="/"><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/lg_virages_A.png" /></a>
						</div>
						<div class="span9">
							<p id="desc-entreprise">Virages propose des formations à la thérapie brève et au&nbsp;coaching stratégique en&nbsp;petits groupes avec un suivi individualisé de votre projet personnel</p>
						</div>
					</header>
				</div>
			</div>
		</div>
	</div>