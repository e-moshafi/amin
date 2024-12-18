<?php
$DisplaySetting = NEWAMINDisplaySetting();

?>
<header id="header" class="<?php if ($DisplaySetting->StyleWidthHeader() == 'modern') echo 'header-modern'; ?> <?php if (!$DisplaySetting->StickyHeader()) echo 'header-disable-fixed'; ?> <?php if ($DisplaySetting->StyleHeader() == 'dark_mod') echo 'dark'; ?>" data-fullwidth="<?php echo $DisplaySetting->StyleWidthHeader() != 'modern' ? 'true' : 'false' ?>">
    <div class="header-inner">
        <div class="container">

            <?php get_template_part('template-parts/header/item/logo') ?>


            <?php get_template_part('template-parts/header/item/search', 'form') ?>

            <div class="header-extras">

                <?php get_template_part('template-parts/header/item/buttons', 'menu') ?>
            </div>

            <?php get_template_part('template-parts/header/item/main', 'menu') ?>


        </div>
    </div>
</header>