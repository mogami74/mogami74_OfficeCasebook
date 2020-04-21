<?php if(in_category("excel-master")):?>
    <?php
    $prev_post_in_category = get_adjacent_post(true, '', true); //前の記事
    $next_post_in_category = get_adjacent_post(true, '', false); //次の記事
    ?>
    <div id="c_category_nav">
        <h3 id="c_category_nav__title"><a href="<?php echo get_category_link(get_cat_ID('Excelマスターへの道')) ?>">Excelマスターへの道</a></h3>
<?php
if ( $prev_post_in_category ) : //前の記事が存在しているとき ?>
    <div id="c_category_nav__prev">
        <a href="<?php echo get_permalink($prev_post_in_category->ID)?>" title="<?php echo get_the_title
        ($prev_post_in_category->ID) ?>" id="c_category_nav__prev__link" class="clearfix">
            <div id="c_category_nav__indicator">PREV</div>
            <p id="c_category_nav__title"><?php echo get_the_title($prev_post_in_category->ID); ?></p>
        </a>
    </div>
<?php endif; ?>
<?php if ( $next_post_in_category ) : //次の記事が存在しているとき?>
        <div id="c_category_nav__next">
            <a href="<?php echo get_permalink($next_post_in_category->ID)?> " title="<?php echo get_the_title
            ($next_post_in_category->ID) ?>" id="c_category_nav__next__link" class="clearfix">
            <div id="c_category_nav__indicator">NEXT</div>
                <p id="c_category_nav__title"><?php echo get_the_title($next_post_in_category->ID); ?></p>
            </a>
        </div>
<?php endif; ?>
        <div id="c_category_nav__list"></div>
    </div>
<?php endif; ?>

