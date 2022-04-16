<div class="sidebar nobottommargin col_last">
    <div class="sidebar-widgets-wrap">
        <?php
        get_search_form(true);
        if (is_active_sidebar('ju_sidebar')) {
            dynamic_sidebar('ju_sidebar');
        }
        ?>
    </div>
</div>