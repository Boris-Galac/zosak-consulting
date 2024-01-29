<form method="get" title="Search" role="search" class="form" action="<?php echo home_url() ?>">
    <input type="search" class="form-input" name="s" aria-label="search" value="<?php echo get_search_query(); ?>"
        placeholder="Pronađi blog..." required>
    <button class="btn form-btn" type="submit">
        <i class="ri-search-line"></i>
    </button>
</form>