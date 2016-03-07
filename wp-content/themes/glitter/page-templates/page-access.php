<?php
/**
 * Template Name: Accessページ
 */
?>
<?php get_header(); ?>

        <section class="shop section frame_bg">
            <img src="/assets/img/frame_top.png" alt="" class="frame">
            <div class="inner">
                <div class="col_R">
                    <h1>
                        <span class="en">ネイルサロン glitter（グリッター）</span>
                        <span class="jp">池袋店</span>
                    </h1>

                    <?php if(have_rows('池袋店')): ?>
                        <?php while(have_rows('池袋店')): the_row(); ?>

                        <dl class="col_Table">
                            <dt class="col_Cell">【住所】</dt>
                            <dd class="col_Cell">〒<?php the_sub_field('郵便番号'); ?><br><a href="<?php the_sub_field('google_map'); ?>" class="map" target="_blank"><?php the_sub_field('住所'); ?></a></dd>
                        </dl>
                        <dl class="col_Table">
                            <dt class="col_Cell">【最寄り駅】</dt>
                            <dd class="col_Cell"><?php the_sub_field('最寄り駅'); ?></dd>
                        </dl>
                        <dl class="col_Table">
                            <dt class="col_Cell">【営業時間】</dt>
                            <dd class="col_Cell">平日・土曜 <?php the_sub_field('営業時間standard'); ?><br>日曜・祝日 <?php the_sub_field('営業時間holiday'); ?></dd>
                        </dl>

                        <div class="btn_area">
                            <a href="<?php the_sub_field('google_map'); ?>" target="_blank" class="btn brown_dark short en">GoogleMAP</a><br class="sp">
                            <a href="http://beauty.hotpepper.jp/kr/slnH000156450/" onClick="ga('send', 'event', 'hotpeppar_index_ikebukuro', 'click', 'access')" target="_blank" class="btn pink short">詳細を見る</a>
                        </div>
                        <div class="btn_area">
                            <a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2"><small>お電話はこちら</small><?php the_sub_field('電話番号'); ?></a>
                        </div>                            
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="col_L">
                    <!-- <div class="slider slider_shop"> -->
                        <div class="item"><figure><img src="/assets/img/access_shop_01.jpg" alt=""></figure></div>
                    <!-- </div> -->
                </div>
            </div>
            <img src="/assets/img/frame_btm.png" alt="" class="frame">
        </section>
        <!-- /.shop -->

        <section class="shop section frame_bg">
            <img src="/assets/img/frame_top.png" alt="" class="frame">
            <div class="inner">
                <div class="col_R">
                    <h1>
                        <span class="en">ネイルサロン glitter（グリッター）</span>
                        <span class="jp">川越店</span>
                    </h1>

                    <?php if(have_rows('川越店')): ?>
                        <?php while(have_rows('川越店')): the_row(); ?>

                        <dl class="col_Table">
                            <dt class="col_Cell">【住所】</dt>
                            <dd class="col_Cell">〒<?php the_sub_field('郵便番号'); ?><br><a href="<?php the_sub_field('google_map'); ?>" class="map" target="_blank"><?php the_sub_field('住所'); ?></a></dd>
                        </dl>
                        <dl class="col_Table">
                            <dt class="col_Cell">【最寄り駅】</dt>
                            <dd class="col_Cell"><?php the_sub_field('最寄り駅'); ?></dd>
                        </dl>
                        <dl class="col_Table">
                            <dt class="col_Cell">【営業時間】</dt>
                            <dd class="col_Cell">平日・土曜 <?php the_sub_field('営業時間standard'); ?><br>日曜・祝日 <?php the_sub_field('営業時間holiday'); ?></dd>
                        </dl>

                        <div class="btn_area">
                            <a href="<?php the_sub_field('google_map'); ?>" target="_blank" class="btn brown_dark short en">GoogleMAP</a><br class="sp">
                            <a href="http://beauty.hotpepper.jp/kr/slnH000330187/" onClick="ga('send', 'event', 'hotpeppar_index_kawagoe', 'click', 'access')" target="_blank" class="btn pink short">詳細を見る</a>
                        </div>
                        <div class="btn_area">
                            <a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2"><small>お電話はこちら</small><?php the_sub_field('電話番号'); ?></a>
                        </div>                            
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="col_L">
                    <!-- <div class="slider slider_shop"> -->
                        <div class="item"><figure><img src="/assets/img/access_shop_01.jpg" alt=""></figure></div>
                    <!-- </div> -->
                </div>
            </div>
            <img src="/assets/img/frame_btm.png" alt="" class="frame">
        </section>
        <!-- /.shop -->

        <section id="googlemap">
            
        </section>

<?php get_footer(); ?>
