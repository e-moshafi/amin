<?php 
$menu_postion=isset($args['menu_postion']) ? $args['menu_postion']:'left';
?>
<div id="mainMenu-trigger">
    <a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
    <div class="container">
        <?php 
        wp_nav_menu(
            array(
                'theme_location'=>'header-'.$menu_postion.'-menu',
                'container'=>'nav',
                'container_class'=>'',
                'walker'=>new AMINStandardMenuHeader()
            )
        );
        ?>
    </div>
</div>