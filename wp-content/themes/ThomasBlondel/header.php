<html>
<head>
	<title>Thomas Blondel's Website</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.3.min.js"></script>
	<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header class="<?php if(isset($GLOBALS['page'])) echo $GLOBALS['page'] ?>">
			<div class="header-content">
				<div class="links">
					<ul>
						<li <?php if (isset($GLOBALS['page-selected']) && $GLOBALS['page']=="homepage") echo "class=\"selected\""?>><a href="/wordpress_thom/">Profil</a></li>
						<li <?php if (isset($GLOBALS['page-selected']) && $GLOBALS['page']=="portfolio") echo "class=\"selected\""?>><a href="<?php echo get_permalink(get_page_by_title('Portfolio')->ID) ?>">Portfolio</a></li>
						<li <?php if (isset($GLOBALS['page-selected']) && $GLOBALS['page']=="blog") echo "class=\"selected\""?>><a href="<?php echo get_permalink(get_page_by_title('Blog')->ID) ?>">Blog</a></li>
						<li <?php if (isset($GLOBALS['page-selected']) && $GLOBALS['page']=="contact") echo "class=\"selected\""?>><a href="/wordpress_thom/contact/">Contact</a></li>
					</ul>
				</div>