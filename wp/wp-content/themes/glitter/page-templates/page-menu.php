<?php
/**
 * Template Name: Menuページ
 */
?>
<?php get_header(); ?>

        <?
            $campaign_mes = get_field('【CAMPAIGN】メッセージ');
            $bridal_mes = get_field('【BRIDAL】メッセージ');
        ?>

        <section class="campaign section bg_area">
            <div class="inner">
                <h1 class="base white large">CAMPAIGN</h1>
                <p class="text text_read"><? echo $campaign_mes; ?></p>
                <div class="menu_area">

                    <?php if(have_rows('【CAMPAIGN】料金プラン')): ?>
                        <?php while(have_rows('【CAMPAIGN】料金プラン')): the_row(); ?>
                        <div class="item">
                            <div class="bg">
                                <div class="bg_inner heightLine-group1">
                                    <h2><?php the_sub_field('タイトル'); ?></h2>
                                    <p class="text text_read"><?php the_sub_field('コース内容'); ?></p>
                                </div>
                                <p class="price"><?php the_sub_field('料金'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                </div>
                <div class="btn_area">
                    <a href="http://beauty.hotpepper.jp/kr/slnH000156450/coupon/" class="btn yellow row2" target="_blank" onClick="ga('send', 'event', 'hotpeppar', 'click', 'menu')"><small>池袋店</small>すべてキャンペーンを見る</a>
                    <a href="http://beauty.hotpepper.jp/kr/slnH000330187/coupon" class="btn yellow row2" target="_blank" onClick="ga('send', 'event', 'hotpeppar', 'click', 'menu')"><small>川越店</small>すべてキャンペーンを見る</a>
                </div>
            </div>
        </section>
        <!-- /.campaign -->

        <section class="bridal section bg_area">
            <div class="inner">
                <h1 class="base white large">BRIDAL</h1>
                <p class="text text_read"><? echo $bridal_mes; ?></p>
                <div class="menu_area">

                    <?php if(have_rows('【BRIDAL】料金プラン')): ?>
                        <?php while(have_rows('【BRIDAL】料金プラン')): the_row(); ?>
                        <div class="item">
                            <div class="bg">
                                <div class="bg_inner heightLine-group2">
                                    <h2><?php the_sub_field('タイトル'); ?></h2>
                                    <p class="text text_read"><?php the_sub_field('コース内容'); ?></p>
                                </div>
                                <p class="price"><?php the_sub_field('料金'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                </div>
                <div class="btn_area">
                    <a href="/gallery/" class="btn green">すべてのデザインを見る</a>
                </div>
            </div>
        </section>
        <!-- /.bridal -->

        <section class="standard section">
            <div class="inner">
                <p class="text text_read large">glitterはいつでもジェルオフ無料</p>
            </div>
            <div class="tab">
                <nav class="tab_header">
                    <?php if(have_rows('料金表')): ?>
                        <?php while(have_rows('料金表')): the_row(); ?>
                            <p class="nav_area"><?php the_sub_field('メニュー名'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </nav>

                <div class="tab_body">
                    <?php if(have_rows('料金表')): ?>
                        <?php while(have_rows('料金表')): the_row(); ?>
                            <?php if(have_rows('メニュー詳細')): ?>
                                <div class="tab_area">
                                    <div class="inner">
                                <?php while(have_rows('メニュー詳細')): the_row(); ?>
                                    <dl class="menu_table">
                                        <dt>
                                            <span class="text text_title"><?php the_sub_field('タイトル'); ?></span>
                                            <span class="text text_disc"><?php the_sub_field('本文'); ?></span>
                                            <aside><?php the_sub_field('注釈文'); ?></aside>
                                        </dt>
                                        <dd>¥<?php the_sub_field('金額'); ?></dd>
                                    </dl>
                                <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </section>
        <!-- /.standard -->




<?php get_footer(); ?>
