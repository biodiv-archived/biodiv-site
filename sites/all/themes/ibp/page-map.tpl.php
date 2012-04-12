<?php
// $Id: page.tpl.php,v 1.18 2008/01/24 09:42:53 goba Exp $
?>
<!DOCTYPE html>
 <html xmlns:fb="http://www.facebook.com/2008/fbml"
                    xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>"
                    lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    	<title>India Biodiversity Portal - Maps</title>
	<link rel="shortcut icon" href="/sites/default/files/ibp_favicon_2.png" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="/sites/all/themes/ibp/css/jquery-ui-1.8.13.custom.css" />
	<link rel="stylesheet" type="text/css" href="/sites/all/themes/ibp/css/am.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/ibp/css/styles.css"/>
	<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="/sites/all/themes/ibp/js/ibp.js"></script>
	<?php print $closure ?>


</head>
    
<body id="mapPage">

<div id="header">
<!-- Logo -->
  <div id="logo">
    <a href="<?php print check_url($front_page)?>">
      <img src="<?php print check_url($front_page)?><?php print check_url(path_to_theme())?>/images/map-logo.gif" alt="western ghats" id="wg_logo"/>
    </a>
  </div>
<!-- Logo ends -->

<!-- {{{ login -->
        <?php global $user; ?>
        <div id="login" class="loginRegister">
          <?php if($user->uid): ?>
            Welcome <?php echo l($user->name, "user");?>
            <?php if($is_admin): ?>
              | <a href="<?php print check_url($front_page);?>admin">Administration</a>
            <?php endif; ?>
            | <a href="<?php print check_url($front_page);?>logout">Logout</a>
          <?php else: ?>
              <a onclick="show_login_dialog();return false;"  href = "/user?destination=map"> Login </a> | <a href = "/user/register?destination=map"> Register </a>
          <?php endif; ?>
</div>
        <!-- login ends }}} -->
<div id="controls-bar">
<ul>
<li title="Remove all added layers" class="controls_label" onclick="resetMap();">Reset</li>
</ul>
</div>

</div>

<div id="shadow"></div>

<div id="main_wrapper">

<div id="parent_panel">
<div>
<a href="#" id="panel_show_bttn" style="display:none;"></a>
</div>
<div id="panel">
<div id="top_bar">
<ul id="top_bar_links">
<li><a href="#" id="explore_bttn">Explore</a></li>
<!--li><a href="#" id="search_bttn">Search</a></li-->
<!--li><a href="#" id="share_bttn">Share</a></li-->
<li><a href="#" id="selected_layers_bttn">Selected layers</a></li>
<li><a href="#" id="selected_features_bttn">Selected features</a></li>
</ul>


<a href="#" id="panel_hide_bttn"></a>
</div>
<div id="feature_info_panel" class="side_panel" style="overflow:auto; display:none;"></div>
<div id="layers_list_panel" class="side_panel"></div>
<div id="search_panel" class="side_panel" style="display:none;">
<div id="search_box"></div>
<div id="search_results_panel"></div>
</div>
<div id="share_panel" class="side_panel" style="display:none;"></div>
<div id="selected_layers_panel" class="side_panel" style="display:none;"></div>
</div>
</div>
<div id="map"></div>
</div>

<div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="/sites/all/themes/ibp/scripts/OpenLayers-2.10/OpenLayers.js"></script> 
<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-1.6.1.min.js"></script> 
<script type="text/javascript" src="/sites/all/themes/ibp/scripts/jquery-ui-1.8.13.custom.min.js"></script> 
<script type="text/javascript" src="/sites/all/themes/ibp/scripts/am.js"></script> 
<script type="text/javascript" src="/sites/all/themes/ibp/scripts/mapapp.js"></script> 
<script id="text/javascript">
var mapOptions = {
    popup_enabled: false,
    toolbar_enabled: true,
    baselayers_switcher_enabled: true,
    feature_info_panel_div: 'feature_info_panel'
};

var layerOptions = [
    {
        title:'<?php print $_GET['title']?>',
        layers:'<?php print $_GET['layers']?>',
        styles:'<?php print $_GET['styles']?>',
        opacity:0.7
    }
]

var map = showMap('map', mapOptions, layerOptions);

showLayersExplorer('layers_list_panel', map);
addSearchBox('search_box');
addSearchResultsPanel('search_results_panel');
</script>
</div>

<div id="layer_details_dialog" title="Layer Details" style="display:none;"><p>TODO</p></div>

</body>
</html>

<!--
vim: syntax=xml foldmethod=marker
-->
