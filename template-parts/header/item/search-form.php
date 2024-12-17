<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
    <form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <input class="form-control" name="s" value="<?php echo get_search_query(); ?>" type="text" placeholder="جستجو کنید ..." />
        <span class="text-muted">جستجو را شروع کنید و کلید "Enter" را بزنید یا برای خروج دکمه "ESC" را بزنید</span>
    </form>
</div>