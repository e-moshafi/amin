<?php $GenralSettingHelper = NEWAMINGenralSettingHelper(); ?>
<div class="social-icons social-icons-colored-hover">
    <ul>

        <?php if (!empty($GenralSettingHelper->get_link_social('linkedin'))) : ?>
            <li class="social-linkedin"><a href="<?php echo $GenralSettingHelper->get_link_social('linkedin') ?>"><i class="fab fa-linkedin"></i></a></li>
        <?php endif; ?>
        <?php if (!empty($GenralSettingHelper->get_link_social('youtube'))) : ?>
            <li class="social-youtube"><a href="<?php echo $GenralSettingHelper->get_link_social('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
        <?php endif; ?>
        <?php if (!empty($GenralSettingHelper->get_link_social('twitter'))) : ?>
            <li class="social-twitter"><a href="<?php echo $GenralSettingHelper->get_link_social('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
        <?php endif; ?>
        <?php if (!empty($GenralSettingHelper->get_link_social('whatsapp'))) : ?>
            <li class="social-whatsapp"><a href="<?php echo $GenralSettingHelper->get_link_social('whatsapp') ?>"><i class="fab fa-whatsapp"></i></a></li>
        <?php endif; ?>
        <?php if (!empty($GenralSettingHelper->get_link_social('instagram'))) : ?>
            <li class="social-instagram"><a href="<?php echo $GenralSettingHelper->get_link_social('instagram') ?>"><i class="fab fa-instagram"></i></a></li>
        <?php endif; ?>
    </ul>
</div>