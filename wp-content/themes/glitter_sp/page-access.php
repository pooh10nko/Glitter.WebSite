<?php
/**
 * Template Name: アクセスページ

 */
  get_header(); ?>


			<section id="access" class="section" itemprop="location" itemscope itemtype="http://schema.org/Map">
				<h1>ACCESS</h1>
				<img src="/sp/images/map.jpg" alt="" itemprop="image" />
				<p id="btnMap">
					<a href="http://maps.apple.com/maps?q=東京都豊島区西池袋1-18-8" class="ios">Mapアプリを起動</a>
					<a href="https://goo.gl/maps/52HXl" itemprop="url" content="https://goo.gl/maps/52HXl" class="android">googleMapで見る</a>
				</p>
			</section>
			<!-- /#access -->

			<section id="shop">
				<h1><img src="/sp/images/logo2.png" alt=""></h1>
				<table>
					<tr itemprop="address" itemscope itemtype="http://schema.org/Place" itemref="station">
						<th>住所</th>
						<td itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">：<span itemprop="addressRegion">東京都</span><span itemprop="addressLocality">豊島区</span><span itemprop="streetAddress">西池袋1-18-8</span> 2F,3F</td>
					</tr>
					<tr id="station">
						<th>最寄り駅</th>
						<td>：<span itemprop="containedIn">池袋駅</span><br><span>9番・9C番・10番・11番・12番出口から徒歩1分</span></td>
					</tr>
					<tr>
						<th>営業時間</th>
						<td>
						：<span itemprop="openingHours" content="Mo-Sa 10:00-23:00">平日・土曜 10:00～23:00（受付 22:00）</span><br />
						<span itemprop="openingHours" content="Su 10:00-20:00">日曜・祝日 10:00～20:00（受付 19:00）</span></td>
					</tr>
				</table>
				<address id="btnTel"><p><a href="tel:03-3985-5550" itemprop="telephone" content="03-3985-5550"><img src="/sp/images/btn_tel.png" alt="03-3985-5550"></a></p></address>
			</section>
			<!-- /#shop -->
			
			<div id="btn_top"><a href="/">TOPに戻る</a></div>

<?php get_footer(); ?>