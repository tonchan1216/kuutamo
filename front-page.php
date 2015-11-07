<?php get_header("top"); ?>

<?php if(!is_mobile()): ?>
	<div class="container">
		<header id="header">
			<h1>
				<a href="<?php echo home_url();?>" title="kuutamo　| 中村橋のdeli&cafe"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/images/kuutamo_logo1.png" alt="kuutamo"></a>
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

							<img src="<?php echo get_stylesheet_directory_uri();?>/images/rabbit1.png" alt="kuutamo rabit">
						</div>
					</div>

					<div class="bb-side page-layout-1">
						<p class="nav nav-concept"></p>
						<div>
								<?php query_posts('pagename=top/concept'); ?>
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
							<h2 class="h2_jp">今月のおすすめ</h2>
								<?php query_posts('post_type=book_contents&name=menu2'); ?>
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
						<img id="map" src="<?php echo get_stylesheet_directory_uri();?>/images/map.jpg" alt="中村橋駅からのアクセスマップ">
					</div>
				</div>

				<div class="bb-item" id="page-news">
					<div class="bb-side page-layout-1">
						<div>
							<h2>News & Blog</h2>
							<p>
								<ul>			
									<?php query_posts('category_name=notice,event,news'); ?>
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
				<a class="fa fa-arrow-left fa-2x" href="#" id="bb-nav-prev" title="前へ"></a>
				<a class="fa fa-arrow-right fa-2x" href="#" id="bb-nav-next"　title="次へ"></a>
			</nav>
		</div><!-- /bb-wrapper -->
	</div><!-- /container -->

<?php else: ?>
	<?php get_template_part('front-page-sp'); ?>
<?php endif;?>

<?php get_footer("top"); ?>