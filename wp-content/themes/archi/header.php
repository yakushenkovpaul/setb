<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $archi_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	
    <!-- Favicons
    ================================================== -->
    <?php archi_custom_favicon() ?>	
	
<?php wp_head(); ?>
<style>
		#services-masonry > div > p {
			background-color: #1a8b49;
		}
</style>
</head>
<body <?php body_class(); ?> >
<?php 
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/headers/header-sidenav'); 
    }else{  
?>
<div id="wrapper">
    <!-- header begin -->
    <header class="<?php archi_header_class(); ?>"> 
    <?php if($archi_option['topbar-allpage']!=false){ ?>        
		<?php } ?>

        <div class="<?php if($archi_option['header-wideboxed']!=false){echo 'container-fluid';}else{echo 'container';} ?>">
            <div class="row">
                <div class="col-md-12">
                    <div id="logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img <?php if ($archi_option['logo_scroll']['url'] != '') { ?>class="logo-static"<?php } ?> src="<?php echo esc_url($archi_option['logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            <?php if ($archi_option['logo_scroll']['url'] != '') { ?>
                                <img class="logo-scroll" src="<?php echo esc_url($archi_option['logo_scroll']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            <?php } ?>
                        </a>
                    </div>
                    <span id="menu-btn"></span>
                    <!-- mainmenu begin -->
                    <nav>
                        <?php 
                            $menu_type_class = ''; 
                            if($archi_option['menu_type']=='dotted'){ 
                                $menu_type_class = '';
                            }elseif ($archi_option['menu_type']=='line') {
                                $menu_type_class = 'class="line-separator"';
                            }elseif ($archi_option['menu_type']=='circle') {
                                $menu_type_class = 'class="circle-separator"';
                            }elseif ($archi_option['menu_type']=='square') {
                                $menu_type_class = 'class="square-separator"';
                            }elseif ($archi_option['menu_type']=='plus') {
                                $menu_type_class = 'class="plus-separator"';
                            }elseif ($archi_option['menu_type']=='strip') {
                                $menu_type_class = 'class="strip-separator"'; 
                            }else{
                                $menu_type_class = 'class="no-separator"';
                            }    
                        ?>
                        <?php
                            $primary = array(
                                'theme_location'  => 'primary',
                                'menu'            => '',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="mainmenu" '.$menu_type_class.'>%3$s</ul>',
                                'depth'           => 0,
                            );
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( $primary );
                            }
                        ?>                       
                    </nav>
                </div>
                <!-- mainmenu close -->
            </div>
        </div>
    </header>
    <!-- header close -->

<?php } ?>    