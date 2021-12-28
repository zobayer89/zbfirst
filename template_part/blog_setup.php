<?php 
    if(have_posts()):
        while(have_posts( )): the_post()
?>
    <div class="blog_area">
        <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
        </div>
        <div class="post_details">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
        <?php //the_content(); ?>
    </div>
<?php
    endwhile;
    else:
        _e('No Post Found', 'zobayerpantho');
    endif;
?>
<div id="page_nav">
    <?php
        if('zb_pagenav'):
            zb_pagenav();
        else:
            next_posts_link();
            previous_posts_link();
        endif;
    ?>
</div>