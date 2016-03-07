<?php get_header(); ?>

    <!-- ネイル 検索フォーム -->
    <?php get_template_part( 'content', 'nail_search' ); ?>

    <?php
        $s = $_GET['s'];
        $catnum = $_GET['catnum'];
         
        //tax_query用
        if($catnum){
            $taxquerysp[] = array(
            'taxonomy'=>'category',
            'terms'=> $catnum,
            'include_children'=>false,
            'field'=>'term_id',
            'operator'=>'AND'
            );
        }
    ?>

    <section class="list_area section">
        <div class="inner">
            <div class="post_area post_area_gallery">
                <?php
                    query_posts( array(
                        'tax_query' => $taxquerysp,
                        'post_type' => 'post',
                        'cat' => -31, //お客様ネイルを除く
                        'paged' => $paged,
                        's' => $s,
                        )
                    );
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'gallery_list' ); ?>
                    
                <?php endwhile; else : ?>

                <div>お探しの条件では該当するデザインはございません。<br>条件を変えてお探しください。</div>

                <div class="btn_area">
                    <a href="/gallery/" class="btn green">すべてのデザインを見る</a>
                </div>
                <?php endif; ?>

            </div>
            <!-- ページャー -->
            <?php get_template_part( 'content', 'pager' ); ?>
        </div>
    </section>
    <!-- /.list_area -->
    
    <?wp_reset_query(); ?>

<?php get_footer(); ?>
