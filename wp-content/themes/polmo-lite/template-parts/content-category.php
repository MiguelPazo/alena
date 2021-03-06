<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Polmo
 */
?>
<article class="blog-post">
    <div class="row">
        <div class="col-sm-6">
            <div class="text-content">
                <?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                <?php echo jeweltheme_ateam_entry_post_meta();?>

                <p>
                    <?php echo wp_trim_words( get_the_content(), 35, ' '  ); ?>
                </p>

                <div class="btn-container default">
                    <a class="btn btn-bg" href="<?php the_permalink();?>">Read On</a>
                </div><!-- /.btn-container -->
            </div><!-- /.text-content -->
        </div><!-- /.col-sm-6 -->
        <div class="col-sm-6">
            <div class="media-content">
                <div class="post-image">
                    <?php if ( has_post_thumbnail() ) { 
                        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'blog-thumb' );
                        ?>
                        <img src="<?php echo esc_url( $url[0] ); ?>" alt="<?php the_title();?>" />
                    <?php } ?>
                </div><!-- /.post-image -->
            </div><!-- /.media-content -->                  
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
</article><!-- /#blog-post -->
