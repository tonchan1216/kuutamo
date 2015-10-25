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
					<?php query_posts('pagename=top/menu'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif;
					wp_reset_query();
					?>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<p class="nav nav-menu"></p>
				<div>
					<h2>今月のおすすめ</h2>
					<p>
						<?php query_posts('pagename=top/menu/monthly'); ?>
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
			<div class="bb-side page-layout-1">
				<div>
					<h2>Soft Drink</h2>
					あたたかいもの
					<ul>							
						<li>コーヒー</li>
						<li>カフェオレ</li>
						<li>紅茶</li>
						<li>紅茶ラテ</li>
						<li>チャイ</li>
						<li>ホットジンジャー</li>
						<li>ジンジャーラテ</li>
					</ul>
					つめたいもの
					<ul>
						<li>コーヒー</li>
						<li>ボトルコーヒー</li>
						<li>カフェオレ</li>
						<li>紅茶</li>
						<li>紅茶オレ</li>
						<li>チャイ</li>
						<li>ティーソーダ</li>
						<li>１００％オレンジジュース</li>
						<li>100％りんごジュース</li>
						<li>１００％グレープフルーツジュース</li>
						<li>ジンジャーエール</li>
						<li>東京牛乳</li>
					</ul>
				</div>
			</div>

			<div class="bb-side page-layout-1">
				<div>
					<h2>WINE＆BEER</h2>
					<ul>							
						<li>ハートランド　生ビール</li>
						<li>グラスワイン（赤/白）　</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="bb-item">
			<div class="bb-side page-layout-2">
				<div>
					<h2>Aa</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>

				<div>
					<h2>Bb</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-2">
				<div>
					<h2>Cc</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>

				<div>
					<h2>Dd</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>
			</div>
		</div>

		<div class="bb-item">
			<div class="bb-side page-layout-2">
				<div>
					<h2>Aa</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>

				<div>
					<h2>Bb</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>
			</div>

			<div class="bb-side page-layout-2">
				<div>
					<h2>Cc</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé
					</p>
				</div>

				<div>
					<h2>Dd</h2>

					<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé
						tootsie roll jelly beans. Sweet icing croissant dessert bear
						claw. Brownie dessert cheesecake danish jelly pudding bear claw
						soufflé.
					</p>
				</div>
			</div>
		</div>

		<div class="bb-item" id="page-map">
			<div class="bb-side page-layout-1">
				<div>
					<h2>Infomation</h2>
					<p>
						<?php query_posts('pagename=top/infomation'); ?>
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
					<h2>〜gallary〜</h2>
					<p>
						<?php query_posts('pagename=top/gallary'); ?>
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
					<h2>News</h2>
					<p>
						<ul>			
							<?php query_posts('category_name=infomation,event,news'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
								<li>
									<?php the_time('Y/m/d');?>
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