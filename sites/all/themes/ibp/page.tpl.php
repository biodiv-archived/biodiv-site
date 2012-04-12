<?php
// $Id: page.tpl.php,v 1.18 2008/01/24 09:42:53 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns:fb="http://www.facebook.com/2008/fbml"
                    xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>"
                    lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
		<?php print $head ?>
		<title>India Biodiversity Portal</title>
		<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/ibp/css/jquery-ui-1.8.13.custom.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/ibp/css/styles.css"/>

		<?php print $styles ?>
		<?php print $scripts ?>
		<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-1.6.1.min.js"></script>
    		<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="/sites/all/themes/ibp/js/ibp.js"></script>
		<?php print $closure ?>

	</head>
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main menu -->
			<div id="menus">
				<div id="userMenu">
					<ul>
					<?php global $user; ?>
					<?php if($user->uid): ?>
					<li>Welcome <?php echo l($user->name, "user");?></li>
						<?php if($is_admin): ?>
						<li><a href="<?php print check_url($front_page);?>admin">Administration</a></li>
						<?php endif; ?>
					<li class="last"><a href="<?php print check_url($front_page);?>logout">Logout</a></li>
					<?php else: ?>
					<li><a onclick="show_login_dialog();return false;" href="<?php print check_url($front_page);?>user">Login</a></li>
					<li class="last"><a href="<?php print check_url($front_page);?>user/register">Register</a></li>
					<?php endif; ?>
					</ul>
				</div>
                                 <div id="mainMenu">
                                    <?php if(isset($primary_links)): ?>
                                           <?php print theme('links', $primary_links, array('class' => 'links p
rimary-links')) ?>
                                     <?php endif;?>

                                </div>

			</div>
			<!-- Main menu ends -->
			<!-- Guide -->
			<div id="guide">
				<!-- Branding -->
				<div id="branding">
					<!-- Logo -->
					<div id="logo">
						<a href="<?php print check_url($front_page)?>">
							<!--<img src="<?php print check_url($front_page)?><?php print check_url(path_to_theme())?>/images/map-logo.gif" alt="logo"/>-->
							<div></div>
						</a>
					</div>
					<!-- Logo ends -->
				</div>
				<!-- Branding ends -->
			<div class="species_link">
                           <a href="/biodiv/species/list"> Species Pages </a><span class="superscript"> demo </span>
                        </div>

				<!-- Search pane -->
				<div id="searchPane">
					<div id="mapSearch" class="paneBox">
					<?php if($map_search):?>
						<?php print $map_search;?>
					<?php endif; ?>
					</div>
				</div>
				<!-- Search pane ends -->
				
				<!-- Content Menu -->
				<?php if($content_menu):?>
					<div id="contentMenu">
						<?php print $content_menu;?>
					</div>
				<?php endif; ?>
				<!-- Content Menu end -->
				
			</div>
			<!-- Guide ends -->
			<!-- Main -->
			<div id="main">
				<!-- Content -->
				<div id="content">
					
					
					<div id="contentDiv">
						
						<div class="return">
							
						</div>
						
						<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
						<?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $node->title .'</h2>'; endif; ?>
						<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
						<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
						<?php if ($show_messages && $messages): print $messages; endif; ?>
						<?php print $help; ?>
						
						
						
						<?php print $content;?>
						
					</div>
				</div>
				<!-- Content ends -->
				
				<!-- Footer -->
				<div id="pageFooter">
					<?php if($footer): ?>
					<?php print $footer;?>
					<?php endif; ?>
				</div>
				<!-- Footer ends -->
				
			</div>
			<!-- Main ends -->
		</div>
		<!-- Wrapper end -->
		<?php print $closure;?>
    <script language="javascript">
      jQuery(document).ready(function(){
        //setMainDivSize();
      });
    </script>
	</body>
</html>
