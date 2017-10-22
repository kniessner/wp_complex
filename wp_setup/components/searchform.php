<?php
/**
 * Search Form Template
 *
 * The search form template displays the search form.
 *
 */
?>
<form class="form-inline my-2 my-lg-0 search-form" action="/" method="get">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control mr-sm-2" />
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

</form>


