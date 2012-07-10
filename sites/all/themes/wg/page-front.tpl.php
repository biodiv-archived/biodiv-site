<?php
// $Id: page.tpl.php,v 1.18 2008/01/24 09:42:53 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns:fb="http://www.facebook.com/2008/fbml"
                    xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>"
                    lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	
	<head>
		<title>Western Ghats Portal</title>
    		<meta name="robots" content="noarchive"> <!-- No caching of page in Google. http://www.google.com/support/webmasters/bin/answer.py?answer=35306&topic=13511 -->
  		<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wg/css/jquery-ui-1.8.13.custom.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wg/css/styles.css"/>

		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<?php flush(); ?>
    		<script type="text/javascript" src="/sites/all/themes/wg/scripts/jquery-1.6.1.min.js"></script>
    		<script type="text/javascript" src="/sites/all/themes/wg/scripts/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="/sites/all/themes/wg/js/wg.js"></script>
		
    		<script type="text/javascript" src="/sites/all/themes/wg/js/jquery.jcarousel-0.2.8/jquery.jcarousel.js"></script>
		<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/wg/js/jquery.jcarousel-0.2.8/themes/classic/skin.css"/>
		<?php print $closure ?>
		<style>
		#mycarousel .jcarousel-item 
		{
			padding-right: 15px;
		}
		</style>
	</head>

	<body id="home">
		<!-- Wrapper -->
		<div id="homeWrapper">
		
			<!-- Main menu -->
			<div id="menus">
				<div id="mainMenu">
					<?php if($main_menu): ?>
					<?php print $main_menu; ?>
					<?php endif; ?>
				</div>
				<div id="homeUserMenu">
				</div>
			</div>
			<!-- Main menu ends -->
			
			<!-- Branding -->
			<div id="homeBranding" style="width:100%;">
				<!-- Logo -->
				<div id="logo">
					<a href="<?php print check_url($front_page)?>">
						<img src="<?php print check_url($front_page)?><?php print check_url(path_to_theme())?>/images/map-logo.gif" alt="logo"/>
						<div></div>
					</a>
				</div>
				<!-- Logo ends -->
			</div>
			<!-- Branding ends -->
                       <div style="clear:both;"></div>
 <?php if ($show_messages && $messages): print $messages; endif; ?>

                        <div id="main-content">
                        <div id="navbars">
                        <div class="navbar">
                                        <div id="species_entry" onclick="location.href='<?php print check_url($front_page)?>biodiv/species/list'";></div>
                                        <div id="explore" onclick="location.href='<?php print check_url($front_page)?>map'";></div>
                                        <div id="checklists" onclick="location.href='<?php print check_url($front_page)?>browsechecklists'"></div>
                                        <!--div id="collaborate" onclick="location.href='<?php print check_url($front_page)?>collaborate-wg'"><div id="collaborate-links"></div></div-->
                        </div><!-- navbar -->

                        <div class="navbar">
                                        <div id="observations" onclick="location.href='<?php print check_url($front_page)?>biodiv/observation/list'"></div>
                                        <div id="themes_entry" onclick="location.href='<?php print check_url($front_page)?>themepages/list'";></div>
                                        <div id="aboutus_entry" onclick="location.href='<?php print check_url($front_page)?>about/western-ghats'"><div id="collaborate-links"></div></div>
                        </div><!-- navbar -->
                        </div>

                        <div id="statistics_box"></div>

                        </div><!-- main-content -->

			<div style="clear:both; margin-left: auto; margin-right: auto; position: relative; width: 640px; left: -152px;">
                        <ul id="whatsnew">
                        <li id="new-whatsnew">New</li>
                        <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!--a href="http://www.surveymonkey.com/s/wgp_motivation">Take a survey on motivation for collaboration</a-->
			Soft launch of observation interface
                        </li>
                        </ul>
			</div>
			
			<div>
			<h3  style="clear:both;padding-left: 10px; margin-left: auto; margin-right: auto; position: relative; width: 640px; left: -150px;" >Other biodiversity sites</h3>	
				<ul id="mycarousel" class="jcarousel-skin-ie7">
    					<li>
						<a href="http://threatenedtaxa.org/"><img title="Journal of Threatened Taxa" src="/sites/default/files/images/partner_logos/JoTTlogohigh75.png" height="75" alt="" /></a>
					</li>
					<li>
						<a href="http://www.ibin.co.in"><img title="Indian Bioresource Information Network" src="/sites/default/files/images/partner_logos/ibin75.png" height="75" alt="" /></a>
					</li>
                                        <li>
                                                <a href="http://www.biodiversityofindia.org"><img title="Biodiversity of India" src="/sites/default/files/images/partner_logos/projectbrahmalogo75.png" height="75" alt="" /></a>
                                        </li>
                                        <li>
                                                <a href="http://avis.indianbiodiversity.org/"><img title="AVIS-IBIS" src="/sites/default/files/images/partner_logos/avis-ibis-bg75.png" height="75" alt="" /></a>
                                        </li>

  				</ul>
			</div>


      		       <div style="clear:both;"></div>
                       <div class="shadow_bar"></div>

                        <div style="width:100%;height:200px;background-color:#fefefe;">
                        <div id="links_box">
                                <div class="links_box_column">
                                <ul>
                                <li class="bold"><a href='/map'>Explore maps &raquo;</a></li>
                                <li class="bold"><a href='/browsechecklists'>Browse checklists &raquo;</a></li>
                                <li class="bold"><a href='/biodiv/species/list'>Browse species &raquo;</a></li>
                                </ul>
                                </div>
   				<div class="links_box_column">
                                <ul>
                                <li class="bold"><a href='/themepages/list'>Themes</a></li>
                                <li><a href='/theme/vegetation-maps-western-ghats'>Vegetation Maps of the Western Ghats</a></li>
                                </ul>
                                </div>

                                <div class="links_box_column">
                                <ul>
                                <li class="bold"><a href='/collaborate-wg'>Collaborate</a></li>
                                <li><a href='/cepf_grantee_database'>Western Ghats CEPF Projects</a></li>
                                <li><a href='/collaborate/partners'>Portal Partners</a></li>
                                <li><a href='/about/volunteers'>Volunteers</a></li>
                                </ul>
                                </div>
                                <div class="links_box_column">
                                <ul>
                                <li class="bold"><a href='/about/western-ghats'>About</a></li>
                                <li><a href='/about/western-ghats'>The Western Ghats</a></li>
                                <li><a href='/about/what-are-biodiversity-hotspots'>What are Biodiversity Hotspots?</a></li>
                                <li><a href='/about/portal-objectives'>Portal Objectives</a></li>
                                <li><a href='/about/data-sharing-guidelines'>Data Sharing Guidelines</a></li>
                                <li><a href='/about/participation-and-action'>Participation and Action</a></li>
                                <li><a href='/about/whats-new'>What's new?</a></li>
                                <li><a href='/about/technology'>Technology</a></li>
                                <li><a href='/about/roadmap1'>Roadmap</a></li>
                                <li><a href='/about/team'>Team</a></li>
                                </ul>
                                </div>

                        </div>
                        </div>
                       <div class="shadow_bar flip-vertical"></div>

 
                       <div style="clear:both;"></div>
			
			
			<!-- Footer -->
			<div id="pageFooter">
				<?php if($footer): ?>
				<?php print $footer;?>
				<?php endif; ?>
			</div>
			<!-- Footer ends -->
			
		</div>
		<!-- Wrapper end -->
		<?php print $closure;?>
    <script language="javascript">
      // Only for the home page
      if(jQuery(window).width() > 1000) {
        jQuery("#homeContent").css("width",(jQuery(window).width() - 537));
      } else {
        jQuery("#homeContent").css("width", 500);
      }

      jQuery(document).ready(function(){
	$("#homeUserMenu").load("/biodiv/SUser/login");
	jQuery('#mycarousel').jcarousel({
		itemFallbackDimension:75 
	});

        //setMainDivSize();
        //chkBrowserCompatibility();
        //chkFlashVersion();
      });
    </script>



	</body>
</html>
