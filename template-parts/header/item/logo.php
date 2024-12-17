<?php
$GenralSettingHelper = NEWAMINGenralSettingHelper();
$light_logo = $GenralSettingHelper->get_logo();
$dark_logo = $GenralSettingHelper->get_logo('dark');
?>
<div id="logo">
    <a href="<?php echo bloginfo('siteurl') ?>">
        <?php if (!empty($light_logo)): ?>
            <img src="<?php echo $light_logo ?>" class="logo-default" alt="<?php echo bloginfo('name') ?>">
        <?php else: ?>
            <span class="logo-default">AMIN</span>
        <?php endif; ?>
        <?php if (!empty($dark_logo)): ?>
            <img src="<?php echo $dark_logo ?>" class="logo-dark" alt="<?php echo bloginfo('name') ?>">
        <?php else: ?>
            <span class="logo-dark">AMIN</span>
        <?php endif; ?>
    </a>
</div>