<?php
if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('footer')) :
    elementor_theme_do_location('footer');
else:
    get_template_part('template-parts/footer', 'section');
endif;
?>


</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<?php wp_footer(); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo NEWAMINContactUsSetting()->GetGoogleMapApi() ?>&callback=initMap"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/assets/template/plugins/gmap3/gmap3.min.js" ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/assets/template/plugins/gmap3/map-styles.js" ?>"></script>
</body>

</html>