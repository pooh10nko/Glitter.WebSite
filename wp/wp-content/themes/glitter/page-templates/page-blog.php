<?php
/**
 * Template Name: Blogページ
 */
?>
<?php get_header(); ?>

        <section class="list_area section">
            <div class="inner">
                <p class="text text_read">お客様のネイルをご紹介させていただいております。<br>お気に入りのデザインがございましたら、<br class="sp">スタッフにお申し付けください。<br>その他のデザインは <a href="/gallery/">ギャラリー</a> をご覧下さい。</p>
                <div class="post_area post_area_blog">
                    <?php
                        query_posts(
                            Array(
                            'post_type' => 'post',
                            // 'posts_per_page' => 50,
                            'cat' => 31, //お客様ネイルのみ
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
