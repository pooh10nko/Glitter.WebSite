<?php
/**
 * Template Name: Galleryページ
 */
?>
<?php get_header(); ?>
        <!-- ネイル 検索フォーム -->
        <?php get_template_part( 'content', 'nail_search' ); ?>

        <section class="list_area section">
            <div class="inner">
                <div class="post_area post_area_gallery">
                    <?php
                        query_posts(
                            Array(
                            'post_type' => 'post',
                            // 'posts_per_page' => 50,
                            'cat' => -31, //お客様ネイルを除く
                            'orderby' => 'date',
                            'paged' => $paged,
                            'order' => 'DESC'
                            )
                        );
                        if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'gallery_list' ); ?>
                        
                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
                <!-- ページャー -->
                <?php get_template_part( 'content', 'pager' ); ?>
            </div>
        </section>
        <!-- /.list_area -->
        
        <?wp_reset_query(); ?>

<?php get_footer(); ?>
