<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Seaweed+Script" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        
        <?php wp_head(); ?>

	</head>
	<body>
		<div class="container">
			
			<header class="header">
				<h1>Ayurveda <span>Wellness &amp; Wisdom</span></h1>
				<nav class="main-nav">
					<?php
                        wp_nav_menu( $args = array(
                            'theme_location' => 'primary'

                        ) )

                    ?>
				</nav>
			</header>