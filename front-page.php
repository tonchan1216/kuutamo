<?php get_header("top"); ?>
<!-- div bb-wrapper -->
<div class="bb-wrapper">
	<div class="bb-bookblock" id="bb-bookblock">
		<div class="bb-item" id="page-about">
			<div class="bb-side page-layout-1">
				<div>
					<h2>Hello kuutamo</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/rabbit1.png" alt="kuutamo rabit">
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-concept"></p>
				<div>
					<p>
						<?php query_posts('pagename=top/concept'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>
		</div>

		<div class="bb-item" id="page-menu">
			<div class="bb-side page-layout-1">
				<div>
					<h2>Menu</h2>
					<p>
						<?php query_posts('pagename=top/menu'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-menu"></p>
				<div>
					<h2 class="h2_jp">今月のおすすめ</h2>
					<p>
						<?php query_posts('post_type=book_contents&name=monthly'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>
		</div>

		<div class="bb-item">
			<div class="bb-side page-layout-2">
				<div>
					<h2>Lunch</h2>
					<dl>
						<?php query_posts('post_type=book_contents&name=today'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

						<dt>ほんじつのデリ</dt>
						<?php the_field("deli", $post->ID); ?>

						<dt>ほんじつのプレート</dt>
						<?php the_field("plate", $post->ID); ?>
						<?php	endwhile; endif; wp_reset_query();?>
					</dl>
				</div>
			</div>

			<div class="bb-side page-layout-2">
				<div>
					<dl>
						<dt>Aランチ</dt>
						<dd>ほんじつのデリの中から３品</dd>
						<dd>kuutamo手作りパンor雑穀入りごはん</dd>
						<dd>お味噌汁（山口県産合わせみそ）</dd>

						<dt>Bランチ</dt>
						<dd>ほんじつのプレート</dd>
						<dd>サラダ</dd>

						<dt>Set drink</dt>
						<dd>コーヒー（HOT/ICE）</dd>
						<dd>紅茶（HOT/ICE）</dd>
					</dl>
				</div>
			</div>
		</div>

		<div class="bb-item">
			<div class="bb-side page-layout-2">
				<div>
					<h2>Soft Drink</h2>
					<dl>
						<dt>コーヒー</dt>
						<dd>名古屋の「TaoCoffee」さんより、その時々お薦めをご提供致します</dd>

						<dt>紅茶</dt>
						<dd>「沖縄ティーファクトリー」さんより、琉球紅茶を使ったオリジナルブレンド</dd>

						<dt>cafevino(ボトルコーヒー)</dt>
						<dd>「COFFEE COUNTY」さんのコーヒーをワインのようにボトルに閉じ込めた新しい味わいのコーヒー</dd>
					</dl>
				</div>
			</div>

			<div class="bb-side page-layout-2">
				<div>
					<h2>Alcohol</h2>
					<dl>							
						<dt>Beer ハートランド　生ビール</dt>
						<dt>グラスワイン（赤/白）　</dt>
					</dl>
				</div>
			</div>
		</div>

		<div class="bb-item">
			<div class="bb-side page-layout-2">
				<div>
					<h2>Food</h2>
					<dl>							
						<dt>自家製ピクルス</dt>
						<dt>おいなりさん</dt>
						<dd>むさしの豆腐店の肉厚のお揚げさんを使ったKuutamo特製</dd>
						<dt>サンドイッチ</dt>
					</dl>
				</div>
			</div>

			<div class="bb-side page-layout-2">
				<div>
					<h2>Sweets</h2>
					<dl>							
						<dt>本日のケーキ</dt>
						<dt>濃厚チーズプリン</dt>
						<dt>アイスクリーム</dt>
					</dl>
				</div>
			</div>
		</div>

		<div class="bb-item" id="page-map">
			<div class="bb-side page-layout-1">
				<div>
					<h2>Infomation</h2>
					<p>
						<?php query_posts('pagename=top/information'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-info"></p>
				<div>
					<h2>Gallary</h2>
					<p>
						<?php query_posts('post_type=book_contents&name=gallary'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>
		</div>

		<div class="bb-item" id="page-access">
			<div class="bb-side page-layout-1">
				<div>
					<h2>Access</h2>
					<p>
						<?php query_posts('pagename=top/access'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif;
						wp_reset_query();
						?>
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-access"></p>
				<img id="map" src="<?php echo get_stylesheet_directory_uri();?>/images/map.jpg" alt="">
			</div>
		</div>

		<div class="bb-item" id="page-news">
			<div class="bb-side page-layout-1">
				<div>
					<h2>News & Blog</h2>
					<p>
						<ul>			
							<?php query_posts('category_name=infomation,event,news'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
								<li>
									<?php the_time('Y.m.d');?>
									<a href="<?php echo the_permalink();?>"><? the_title();?></a>
								</li>
							<? endwhile; endif; wp_reset_query();?>
						</ul>
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-news"></p>
				<div class="fb-page" data-href="https://www.facebook.com/kuutamo-510368712445569/" data-width="300" data-height="360" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"></div>
			</div>
		</div>
	</div><!-- /bb-bookblock -->

	<nav id="head-nav">
		<ul>
			<li class="nav-concept active">
				<a href="#" title=""><span>C</span>oncept</a>
			</li>

			<li class="nav-menu">
				<a href="#" title=""><span>M</span>enu</a>
			</li>

			<li class="nav-info">
				<a href="#" title=""><span style="padding-left: 4px">I</span>nfo</a>
			</li>

			<li class="nav-access">
				<a href="#" title=""><span>A</span>ccess</a>
			</li>

			<li class="nav-news">
				<a href="#" title=""><span>N</span>ews</a>
			</li>
		</ul>
	</nav>

	<nav class="page-nav">
		<a class="fa fa-arrow-left fa-2x" href="#" id="bb-nav-prev"></a>
		<a class="fa fa-arrow-right fa-2x" href="#" id="bb-nav-next"></a>
	</nav>
</div><!-- /bb-wrapper -->

</div><!-- /container -->

<?php get_footer("top"); ?>