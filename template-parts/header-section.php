<?php
$DisplaySetting = NEWAMINDisplaySetting();
$logo_position = $DisplaySetting->LogoPositionHeader();
$logo_position_css_class = $DisplaySetting->LogoPositionHeaderCssClass();
?>
<header id="header" class="<?php echo $logo_position_css_class ?> <?php if ($DisplaySetting->StyleWidthHeader() == 'modern') echo 'header-modern'; ?> <?php if (!$DisplaySetting->StickyHeader()) echo 'header-disable-fixed'; ?> <?php if ($DisplaySetting->StyleHeader() == 'dark_mod') echo 'dark'; ?>" data-fullwidth="<?php echo $DisplaySetting->StyleWidthHeader() != 'modern' && $logo_position != 'middle' ? 'true' : 'false' ?>">
    <div class="header-inner">
        <div class="container">

            <?php get_template_part('template-parts/header/item/logo') ?>


            <?php get_template_part('template-parts/header/item/search', 'form') ?>

            <div class="header-extras <?php if ($logo_position == 'right') echo 'float-left' ?>">

                <?php get_template_part('template-parts/header/item/buttons', 'menu') ?>
            </div>

            <?php get_template_part('template-parts/header/item/main', 'menu', ['logo_postion' => $logo_position]) ?>


        </div>
    </div>
</header>