<?php
$logo_postion = isset($args['logo_postion']) ? $args['logo_postion'] : 'right';
$menu_postion = $logo_postion == 'right' ? 'left' : 'right';
?>
<div id="mainMenu-trigger">
    <a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
    <div class="container">
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header-' . $menu_postion . '-menu',
                    'container' => '',
                    'container_class' => '',
                    'menu_class'=>'',
                    'walker' => new AMINStandardMenuHeader()
                )
            );
            if ($logo_postion == 'middle') {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-left-menu',
                        'container' => '',
                        'container_class' => '',
                        'walker' => new AMINStandardMenuHeader()
                    )
                );
            }
            ?>
        </nav>
    </div>
</div>