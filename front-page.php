<?php get_header("top"); ?>

<?php if(!is_mobile()): ?>
	<div class="container">
		<header id="header">
			<h1>
				<a href="<?php echo home_url();?>" title="中村橋のカフェkuutamo"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/images/kuutamo_logo1.png" alt="kuutamo | 中村橋のデリカフェ"></a>
			</h1>

			<nav>
				<ul>
					<li><a href="<?php echo home_url('/blog/');?>" title="ブログトップ | kuutamo">Blog</a></li>
					<li><a href="https://www.facebook.com/kuutamogohan" title="Facebookページ">Facebook</a></li>
				</ul>
			</nav>
		</header><!-- /header -->

		<!-- div bb-wrapper -->
		<div class="bb-wrapper">
			<div class="bb-bookblock" id="bb-bookblock">
				<div class="bb-item" id="page-about">
					<div class="bb-side page-layout-1">
						<div>
							<h2>Hello kuutamo</h2>

							<img  class="rabbit" src="<?php echo get_stylesheet_directory_uri();?>/images/rabbit1.png" alt="kuutamo rabbit">
						</div>
					</div>

					<div class="bb-side page-layout-1">
						<p class="nav nav-concept"></p>
						<div>
							<?php query_posts('post_type=book_contents&name=concept'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>
				</div>

				<div class="bb-item" id="page-menu">
					<div class="bb-side page-layout-2">
						<div>
							<h2>Menu</h2>
							<?php query_posts('post_type=book_contents&name=menu1'); ?>
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
							<?php query_posts('post_type=book_contents&name=menu2'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
							}
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>
				</div>

				<div class="bb-item">
					<div class="bb-side page-layout-2">
						<div>
							<h2>Lunch</h2>
							<?php query_posts('post_type=book_contents&name=menu3'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>

					<div class="bb-side page-layout-2">
						<div>
							<?php query_posts('post_type=book_contents&name=menu4'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>
				</div>

				<div class="bb-item">
					<div class="bb-side page-layout-2">
						<div>
							<h2>Soft Drink</h2>
							<?php query_posts('post_type=book_contents&name=menu5'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
							}
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>

					<div class="bb-side page-layout-2">
						<div>
							<h2>Alcohol</h2>
							<?php query_posts('post_type=book_contents&name=menu6'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
							}
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>
				</div>

				<div class="bb-item">
					<div class="bb-side page-layout-2">
						<div>
							<h2>Food</h2>
							<?php query_posts('post_type=book_contents&name=menu7'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
							}
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>

					<div class="bb-side page-layout-2">
						<div>
							<h2>Sweets</h2>
							<?php query_posts('post_type=book_contents&name=menu8'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
							}
							endwhile; endif;
							wp_reset_query();
							?>
						</div>
					</div>
				</div>

				<div class="bb-item" id="page-map">
					<div class="bb-side page-layout-1">
						<div>
							<h2>Infomation</h2>
							<p>
								<?php query_posts('post_type=book_contents&name=information'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( array(100,100), 'class=eyecatchimg' );
								}
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
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'thumbnail', 'class=eyecatchimg' );
								}
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
								<?php query_posts('post_type=book_contents&name=access'); ?>
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
						<img id="map" src="<?php echo get_stylesheet_directory_uri();?>/images/map.jpg" alt="中村橋駅からのアクセスマップ">
					</div>
				</div>

				<div class="bb-item" id="page-news">
					<div class="bb-side page-layout-1">
						<div>
							<h2>News &amp; Blog</h2>
							<p>
								<dl>			
									<?php 
									$query_args = array(
										'post_type' => array('post','event') 
										);
									$the_query = new WP_Query($query_args);
									if ( $the_query->have_posts() ) :	while ( $the_query->have_posts() ) : $the_query->the_post();?>
										<dt><?php the_time('Y.m.d');?></dt>
										<dd><a href="<?php echo the_permalink();?>"><? the_title();?></a></dd>
									<?php endwhile;	endif;?>
									<?php wp_reset_postdata();?>
								</dl>
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
						<a href="#" title="カフェのコンセプト"><span>C</span>oncept</a>
					</li>

					<li class="nav-menu">
						<a href="#" title="メニュー"><span>M</span>enu</a>
					</li>

					<li class="nav-info">
						<a href="#" title="インフォメーション"><span style="padding-left: 4px">I</span>nfo</a>
					</li>

					<li class="nav-access">
						<a href="#" title="お店までのアクセス"><span>A</span>ccess</a>
					</li>

					<li class="nav-news">
						<a href="#" title="最新情報"><span>N</span>ews</a>
					</li>
				</ul>
			</nav>

			<nav class="page-nav">
				<a class="fa fa-arrow-left fa-2x" href="#" id="bb-nav-prev" title="前へ"></a>
				<a class="fa fa-arrow-right fa-2x" href="#" id="bb-nav-next"　title="次へ"></a>
			</nav>
		</div><!-- /bb-wrapper -->
	</div><!-- /container -->

<?php else: ?>
	<?php get_template_part('front-page-sp'); ?>
<?php endif;?>

<?php get_footer("top"); ?>