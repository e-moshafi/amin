<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
<?php get_template_part('template-parts/footer', 'section') ?>



</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<?php wp_footer(); ?>
<script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDKXKdHQdtqgPVl2HI2RnUa_1bjCxRCQo4&callback=initMap'></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() . "/assets/template/plugins/gmap3/gmap3.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ."/assets/template/plugins/gmap3/map-styles.js" ?>"></script>
</body>

</html>