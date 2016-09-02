<!-- search -->
<div class="row">
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
    <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">search</i>
           <input id="icon_prefix" class="search-input validate" type="text" name="s">
           <label for="icon_prefix"><?php esc_html_e( 'Suche', 'materializepresstheme' ); ?></label>
        </div>
    </div>
    <div class="center-align">
        <button class="search-submit center btn" type="submit" role="button"><?php esc_html_e( 'Suchen', 'materializepresstheme' ); ?></button>
    </div>
</form>
</div>
<!-- /search -->
