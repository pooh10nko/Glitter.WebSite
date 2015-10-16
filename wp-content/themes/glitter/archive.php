<?php
/**
 * Template Name: ギャラリーページ

 */
  get_header(); ?>
	<!-- #main -->
	<div id="main">
		<h2><img src="/common/images/garally_h2.png" alt="Concept" /></h2>
		<div id="pankuzu" class="breadcrumb">
			<ul class="clearfix">
				<li><a href="<?php bloginfo('url'); ?>">ネイルサロン glitter池袋西口店</a><span>&gt;</span></li>
				<?php if($post -> post_parent != 0 ): ?>
				<?php $ancestors = array_reverse( $post-> ancestors ); ?>
				<?php foreach($ancestors as $ancestor): ?>
				<li><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a><span>&gt;</span></li>
				<?php endforeach; ?>
				<?php endif; ?>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
		
		<!--▼▼固定ページ内容▼▼-->
		<div id="gallery">
			<div id="backnumbar">
				<ul class="clearfix">
				<?php get_sidebar(); ?>
				</ul>
			</div>
			<div id="galleryNavi">
				<ul>
					<li class="gallery1"><a href=""><img src="/common/images/garally_navi01_on.png" alt="" /></a></li>
					<li class="gallery2"><a href=""><img src="/common/images/garally_navi02_off.png" alt="" /></a></li>
					<li class="gallery3"><a href=""><img src="/common/images/garally_navi03_off.png" alt="" /></a></li>
					<li class="gallery4"><a href=""><img src="/common/images/garally_navi04_off.png" alt="" /></a></li>
					<li class="gallery5"><a href=""><img src="/common/images/garally_navi05_off.png" alt="" /></a></li>
				</ul>
			</div>
<?php get_sidebar('link'); ?>
			
			
								<?php query_posts(array(
					    'post_type' => 'photo',
					    'posts_per_page' => -1,
					    'order' => 'DESC',
					    'taxonomy' => 'nailcat',
					    'term' => 'cute-2'
					)); ?>
					<!-- ループ開始 -->
					<?php if (have_posts()): while(have_posts()):the_post(); ?>
					<?php the_time('Y.m.d') ?><?php the_title(); ?><br />
					 <?php endwhile; endif; ?>
					<?php wp_reset_postdata(); wp_reset_query(); ?>
					
					
					
					
			
			<div id="photo">
				<ul class="clearfix">
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
					<li class="mosaic-block fade">
						<a href="" target="_blank" class="mosaic-overlay">
							<div class="details">
								<p class="title">2013秋ネイル</p>
								<p class="menu">スカルプ+ラインストーン+3D<br />サンプルテキスト サンプルテキスト サンプルテキスト </p>
								<p class="price">¥6,500-</p>
							</div>
						</a>
						<div class="mosaic-backdrop"><img src="/common/images/garally_dummy.jpg"/></div>
					</li>
				</ul>
			</div>
			
			<div id="comment">
				<p class="title">ストライプloveネイル　</p>
				<p class="text">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
			</div>

		</div>
		<!--▲▲固定ページ内容▲▲-->
		
	</div>
	<!-- /#main -->

<?php get_footer(); ?>