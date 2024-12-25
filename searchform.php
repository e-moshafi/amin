<form id="widget-search-form-sidebar" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <div class="input-group">
        <input type="text" aria-required="true" name="s"
            class="form-control widget-search-form" value="<?php echo get_search_query(); ?>" placeholder="جستجو کنید ...">
        <div class="input-group-append">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>