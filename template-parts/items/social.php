<?php $GenralSettingHelper = NEWAMINGenralSettingHelper(); ?>
<ul>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('linkedin'))) : ?>
        <li class="social-linkedin"><a href="<?php echo $GenralSettingHelper->GetSocialLink('linkedin') ?>"><i class="fab fa-linkedin"></i></a></li>
    <?php endif; ?>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('youtube'))) : ?>
        <li class="social-youtube"><a href="<?php echo $GenralSettingHelper->GetSocialLink('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
    <?php endif; ?>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('x'))) : ?>
        <li class="social-twitter"><a href="<?php echo $GenralSettingHelper->GetSocialLink('x') ?>"><i class="fab fa-twitter"></i></a></li>
    <?php endif; ?>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('whatsapp'))) : ?>
        <li class="social-whatsapp"><a href="<?php echo $GenralSettingHelper->GetSocialLink('whatsapp') ?>"><i class="fab fa-whatsapp"></i></a></li>
    <?php endif; ?>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('instagram'))) : ?>
        <li class="social-instagram"><a href="<?php echo $GenralSettingHelper->GetSocialLink('instagram') ?>"><i class="fab fa-instagram"></i></a></li>
    <?php endif; ?>
    <?php if (!empty($GenralSettingHelper->GetSocialLink('telegram'))) : ?>
        <li class="social-telegram"><a href="<?php echo $GenralSettingHelper->GetSocialLink('telegram') ?>"><i class="fab fa-telegram"></i></a></li>
    <?php endif; ?>
</ul>