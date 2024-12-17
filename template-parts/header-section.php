<?php
$DisplaySetting = NEWAMINDisplaySetting();

?>
<header id="header" class="<?php if ($DisplaySetting->StyleWidthHeader() == 'modern') echo 'header-modern'; ?> <?php if (!$DisplaySetting->StickyHeader()) echo 'header-disable-fixed'; ?> <?php if ($DisplaySetting->StyleHeader() == 'dark_mod') echo 'dark'; ?>" data-fullwidth="<?php $DisplaySetting->StyleWidthHeader() != 'modern' ? 'true' : 'false' ?>">
    <div class="header-inner">
        <div class="container">

        <?php get_template_part('template-parts/header/item/logo') ?>


        <?php get_template_part('template-parts/header/item/search','form') ?>



            <div class="header-extras">
                <ul>
                    <li>
                        <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                    </li>
                    <!-- <li>
                        <div class="p-dropdown">
                            <a href="#"><i class="icon-globe"></i><span>فا</span></a>
                            <ul class="p-dropdown-content">
                                <li><a href="#">فارسی</a></li>
                                <li><a href="#">انگلیسی</a></li>
                                <li><a href="#">فرانسوی</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>

            <?php get_template_part('template-parts/header/item/main','menu') ?>
        

        </div>
    </div>
</header>