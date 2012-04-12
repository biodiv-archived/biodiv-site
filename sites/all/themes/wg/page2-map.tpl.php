<?php
// $Id: page.tpl.php,v 1.18 2008/01/24 09:42:53 goba Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title>augmented maps</title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <?php flush(); ?>
</head>
    
<body id="mapPage">

<!-- {{{ header -->
<div id="header">

    <!-- {{{ Branding -->
    <div id="mapBranding" style="width:0px;">
        <!-- Logo -->
        <div id="logo">
            <a href="<?php print check_url($front_page)?>">
            <div class="icon"></div>
            </a>
        </div>
        <!-- Logo ends -->
    </div>
    <!-- Branding ends }}} -->

    <!-- {{{ Search -->
    <div id="search_form" style="float:left; padding:20px;">
        <form action="<?php print check_url(path_to_theme())?>/search.php" name="search" method="post">
            <input type="text" size=42 name="search_string" id="search_string" />
            <input type="submit" id="search_btn" value="Search" />
        </form>  
    </div>

    <div id="advanced_search" style="float:left; padding-top:20px;">
        <a href="#">Advanced search</a>
    </div>
    <!-- Search ends }}} -->

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
        <a href="#">Login</a> | <a href="<?php print check_url($front_page);?>user/register">Register</a>
        <?php endif; ?>
    </div>
    <!-- login ends }}} -->

</div> 
<!-- header ends }}} -->

<div style="clear:both"></div>


<!-- {{{ wrapper -->
<div id="wrapper">

    <div style="display:none">
        <?php if($map_area): ?>
        <?php print $map_area;?>
        <?php endif; ?>
    </div>

    <!-- {{{ mapArea -->
    <div id="mapArea" style="postion:relative;">

        <!-- map -->
        <div id="map" style="position: absolute; top:0px; right:0px; height:100%; width:70%;">

            <!-- {{{ activeLayer -->
            <div id="activeLayer" class="toolbar" style="position: absolute;">
              <div class="tool first last">
                <img src="" alt=""/>
                <a href="#" title="Zoom to Layer Extent"><img src="<?php print check_url($front_page)?><?php print check_url(path_to_theme())?>/images/icons/zoom-to-extent-icon.png" alt="Zoom to Layer Extent"/></a>
                <a href="#" title="Show layer information"></a>
              </div>
            </div>
            <!-- activeLayer end }}} -->

        </div>
        <!-- map ends -->

    </div>
    <!-- mapArea ends }}}-->

</div>
<!-- wrapper ends }}} -->

</body>
</html>

<!--
vim: syntax=xml foldmethod=marker
-->
