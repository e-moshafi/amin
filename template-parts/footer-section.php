<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<footer id="footer" class="<?php if ($DisplaySetting->StyleFooter() == 'dark_mod') echo 'inverted'; ?>">
    <div class="footer-content">
        <?php if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('footer')) : ?>
            <div class="container">
                <?php elementor_theme_do_location('footer'); ?>
            </div>
        <?php else : ?>
            <div class="container">
                <div class="row">
                    <?php for ($i = 1; $i <= $DisplaySetting->FooterStyleColumn(); $i++): ?>
                        <div class="col-lg">
                            <?php get_template_part('template-parts/footer/item/widget', 'section', ['number' => $i]) ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="copyright-content">
        <div class="container">
            <div class="row">
                <?php if ($DisplaySetting->DisplaySocialFooter()): ?>
                    <div class="col-lg">
                        <?php get_template_part('template-parts/footer/item/social'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-lg">
                    <?php get_template_part('template-parts/footer/item/copyright'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>