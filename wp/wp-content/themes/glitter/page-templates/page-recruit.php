<?php
/**
 * Template Name: Recuitページ
 */
?>
<?php get_header(); ?>

        <section class="welcome section bg_area">
            <div class="inner">
                <h1 class="base white large">WELCOME!</h1>
                <p class="text text_read large">glitterでは、お客様の笑顔のために一緒に働ける仲間を募集しています！</p>
                <p class="text text_read">お休みが取りやすく、誕生日・彼や家族の誕生日・海外旅行など、プライベートも充実できます!<br>土日祝時給+100円もglitterだけの嬉しい特典!!</p>
                <figure class="img"><img src="/assets/img/recruit/recruit_flow.png" alt=""></figure>
            </div>
        </section>
        <!-- /.welcome -->





        <section class="info">
            
            <div class="tab">
                <nav class="tab_header">
                    <p id="nav1" class="nav_area">池袋店</p>
                    <p id="nav2" class="nav_area">川越店</p>
                </nav>
                <div class="tab_body">
                    <div id="tab1" class="tab_area">
                        <div class="inner">
                            <div class="data_table">

                                <?php if(have_rows('池袋店')): ?>
                                <?php while(have_rows('池袋店')): the_row(); ?>
                                    <dl>
                                        <dt><?php the_sub_field('タイトル'); ?></dt>
                                        <dd><?php the_sub_field('本文'); ?></dd>
                                    </dl>
                                <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if(have_rows('店舗共通')): ?>
                                <?php while(have_rows('店舗共通')): the_row(); ?>
                                    <dl>
                                        <dt><?php the_sub_field('タイトル'); ?></dt>
                                        <dd><?php the_sub_field('本文'); ?></dd>
                                    </dl>
                                <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                            <div class="btn_area">
                                <a href="http://relax-job.com/shop/002898/" class="btn green" target="_blank" onClick="ga('send', 'event', 'entry', 'click', 'ikebukuro')">エントリーする</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab_area">
                        <div class="inner">
                            <div class="data_table">

                                <?php if(have_rows('川越店')): ?>
                                <?php while(have_rows('川越店')): the_row(); ?>
                                    <dl>
                                        <dt><?php the_sub_field('タイトル'); ?></dt>
                                        <dd><?php the_sub_field('本文'); ?></dd>
                                    </dl>
                                <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if(have_rows('店舗共通')): ?>
                                <?php while(have_rows('店舗共通')): the_row(); ?>
                                    <dl>
                                        <dt><?php the_sub_field('タイトル'); ?></dt>
                                        <dd><?php the_sub_field('本文'); ?></dd>
                                    </dl>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                
                            </div>
                            <div class="btn_area">
                                <a href="http://relax-job.com/shop/1013449/" class="btn green" target="_blank" onClick="ga('send', 'event', 'entry', 'click', 'ikebukuro')">エントリーする</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.info -->

<?php get_footer(); ?>
