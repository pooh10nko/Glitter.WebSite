	</main>
	<!-- /.container -->

	<footer class="footer">
		<div class="pagetop"><a href="#pagetop"></a></div>
		<div class="inner">
			<figure class="logo"><img src="/assets/img/logo_brown.png" alt="glitter" width="180"></figure>
			<h1 class="bold" itemprop="name">ネイルサロン glitter（グリッター）</h1>
			<div class="shop_area">
				<div class="shop_info col_L frame_bg">
					<img src="/assets/img/frame_top.png" alt="" class="frame">
					<?php if(have_rows('池袋店',25)): ?>
                        <?php while(have_rows('池袋店',25)): the_row(); ?>
							<address class="address inner">
								<div>
									<h2 class="bold">-池袋店-</h2>
									<p class="text">【住所】<br class="sp"><a href="<?php the_sub_field('google_map'); ?>" class="map" target="_blank"><span itemprop="
address">〒<?php the_sub_field('郵便番号'); ?> <?php the_sub_field('住所'); ?></span></a><br>【最寄り駅】<br class="sp"><?php the_sub_field('最寄り駅'); ?><br>【営業時間】<br class="sp">平日・土曜 <?php the_sub_field('営業時間standard'); ?><br>日曜・祝日 <?php the_sub_field('営業時間holiday'); ?><br>【電話番号】<br class="sp"><a href="tel:<?php the_sub_field('電話番号'); ?>" class="tel"><span itemprop="
telephone"><?php the_sub_field('電話番号'); ?></span></a></p>
								</div>
								<div class="btn_area">
									<a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2" onClick="ga('send', 'event', 'tel_ikebukuro', 'click', 'footer')"><small>池袋店</small><?php the_sub_field('電話番号'); ?></a>
									<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_ikebukuro', 'click', 'footer')">池袋店のご予約はこちら</a>
								</div>
							</address>                            
                        <?php endwhile; ?>
                    <?php endif; ?>
					<img src="/assets/img/frame_btm.png" alt="" class="frame">
				</div>
				<div class="shop_info col_R frame_bg">
					<img src="/assets/img/frame_top.png" alt="" class="frame">
					<?php if(have_rows('川越店',25)): ?>
                        <?php while(have_rows('川越店',25)): the_row(); ?>
							<address class="address inner">
								<div>
									<h2 class="bold">-川越店-</h2>
									<p class="text">【住所】<br class="sp"><a href="<?php the_sub_field('google_map'); ?>" class="map" target="_blank"><span itemprop="
address">〒<?php the_sub_field('郵便番号'); ?> <?php the_sub_field('住所'); ?></span></a><br>【最寄り駅】<br class="sp"><?php the_sub_field('最寄り駅'); ?><br>【営業時間】<br class="sp">平日・土曜 <?php the_sub_field('営業時間standard'); ?> <br>日曜・祝日 <?php the_sub_field('営業時間holiday'); ?><br>【電話番号】<br class="sp"><a href="tel:<?php the_sub_field('電話番号'); ?>" class="tel"><span itemprop="
telephone"><?php the_sub_field('電話番号'); ?></span></a></p>
								</div>
								<div class="btn_area">
									<a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2" onClick="ga('send', 'event', 'tel_ikebukuro', 'click', 'footer')"><small>川越店</small><?php the_sub_field('電話番号'); ?></a>
									<a href="<?php the_sub_field('予約url'); ?>" target="_blank" class="btn brown" onClick="ga('send', 'event', 'hotpeppar_ikebukuro', 'click', 'footer')">川越店のご予約はこちら</a>
								</div>
							</address>                            
                        <?php endwhile; ?>
                    <?php endif; ?>
					<img src="/assets/img/frame_btm.png" alt="" class="frame">
				</div>
			</div>
			<div class="btn_area btn_sns">
				<a href="https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=http%3A%2F%2Fnail-glitter.net%2F&display=popup&ref=plugin&src=share_button" target="_blank" class="btn facebook" onClick="ga('send', 'event', 'facebookShare', 'click', 'footer')"><img src="/assets/img/icon/icon_facebook.png" alt="facebook" width="15"></a>
				<a href="https://www.instagram.com/nailsalon_glitter/" target="_blank" class="btn instagram" onClick="ga('send', 'event', 'instagram', 'click', 'footer')"><img src="/assets/img/icon/icon_instagram.png" alt="instagram" width="31"></a>
			</div>
			<p class="copyright">glitter &copy; All Rights Reserved.</p>
		</div>
	</footer>
	<!-- /.footer -->
</div>
<!-- /.page -->

<?php wp_footer(); ?>
</body>
</html>




