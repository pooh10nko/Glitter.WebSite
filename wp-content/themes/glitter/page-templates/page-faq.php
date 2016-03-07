<?php
/**
 * Template Name: Q&Aページ
 */
  get_header(); ?>



		<section class="faq section">
			<div class="inner">
				<p class="text text_read">お客様の疑問や不安にお応えします。<br>ネイルが初めての方でも安心してご利用できるよう、様々な質問に対する答えをカテゴリー別に掲載しています。</p>
			</div>
			<div class="tab">
				<nav class="tab_header">
					<?php if(have_rows('faq')): ?>
                        <?php while(have_rows('faq')): the_row(); ?>
                            <p class="nav_area"><?php the_sub_field('メニュー名'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
				</nav>
				<div class="tab_body">
                    <?php if(have_rows('faq')): ?>
                        <?php while(have_rows('faq')): the_row(); ?>
                            <?php if(have_rows('faq内容')): ?>
                                <div class="tab_area">
                                    <div class="inner">
                                <?php while(have_rows('faq内容')): the_row(); ?>
                                    <dl class="accordion">
										<dt>
											<p class="accordion_inner">
												<span class="icon">Q</span>
												<span class="line"><?php the_sub_field('question'); ?></span>
											</p>
										</dt>
										<dd>
											<p class="accordion_inner">
												<span class="icon">A</span>
												<span class="line"><?php the_sub_field('answer'); ?></span>
											</p>
										</dd>
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
		<!-- /.faq -->

		<section class="contact section">
			<div class="inner">
				<p class="text text_read large">不安なことや分からないことがございましたら<br class="sp">いつでもお問い合わせくださいませ。</p>
				<div class="btn_area">

					<?php if(have_rows('池袋店',25)): ?>
			            <?php while(have_rows('池袋店',25)): the_row(); ?>
							<a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2"><small>池袋店</small><?php the_sub_field('電話番号'); ?></a>
			            <?php endwhile; ?>
			        <?php endif; ?>

					<?php if(have_rows('川越店',25)): ?>
			            <?php while(have_rows('川越店',25)): the_row(); ?>
							<a href="tel:<?php the_sub_field('電話番号'); ?>" class="btn gray_light tel row2"><small>川越店</small><?php the_sub_field('電話番号'); ?></a>             
			            <?php endwhile; ?>
			        <?php endif; ?>

				</div>
			</div>
		</section>
		<!-- /.contact -->

<?php get_footer(); ?>