<?php
$DisplaySetting = NEWAMINDisplaySetting();
$RightPosition = $DisplaySetting->RightPositionTopBar();
?>
<div id="topbar" class="<?php if ($DisplaySetting->StyleTopBar() == 'dark_mod') echo 'dark'; ?> d-none d-xl-block d-lg-block topbar-fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if ($RightPosition == 'menu') {
                    get_template_part('template-parts/topbar/menu');
                } else {
                    get_template_part('template-parts/topbar/email_phone');
                }
                ?>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <?php
                get_template_part('template-parts/topbar/social');
                ?>
            </div>
        </div>
    </div>
</div>