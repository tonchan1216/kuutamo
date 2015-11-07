	<div id="container" class="container">
		<header id="header">
			<h1>
				<a href="<?php echo home_url();?>" title="kuutamo　| 中村橋のdeli&cafe"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/images/kuutamo_logo1.png" alt="kuutamo"></a>
			</h1>

			<div class="menu-panel">
				<h3>kuutamo</h3>
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current"><a href="#item1"　title="コンセプト">Conept</a></li>
					<li><a href="#item2"　title="メニュー">Menu</a></li>
					<li><a href="#item3"　title="インフォメーション">Info</a></li>
					<li><a href="#item4"　title="ギャラリー">Gallery</a></li>
					<li><a href="#item5"　title="アクセス">Acccess</a></li>
					<li><a href="#item6"　title="ニュース">News</a></li>
				</ul>
				<div>
					<a href="<?php echo home_url('/blog/');?>" title="ブログトップ | kuutamo">Blog</a>
					<a href="https://www.facebook.com/kuutamogohan" title="Facebookページ">Facebook</a>
				</div>
			</div>
		</header><!-- /header -->

		<div class="bb-custom-wrapper">
			<div id="bb-bookblock" class="bb-bookblock">
				<div class="bb-item" id="item1">
					<div class="content">
						<div class="scroller">
							<h2>Hello kuutamo</h2>
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
				</div>

				<div class="bb-item" id="item2">
					<div class="content">
						<div class="scroller">
							<h2>Menu</h2>
							<div>
								<?php query_posts('pagename=top/menu'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

							<div>
								<h3>今月のおすすめ</h3>
								<?php query_posts('post_type=book_contents&name=monthly'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

							<div>
								<h3>Lunch</h3>
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

							<div>
								<?php query_posts('post_type=book_contents&name=menu4'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

							<div>
								<h3>Soft Drink</h3>
								<?php query_posts('post_type=book_contents&name=menu5'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

							<div>
								<h3>Alcohol</h3>
								<?php query_posts('post_type=book_contents&name=menu6'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

							<div>
								<h3>Food</h3>
								<?php query_posts('post_type=book_contents&name=menu7'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>

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
				</div>

				<div class="bb-item" id="item3">
					<div class="content">
						<div class="scroller">
							<h2>Infomation</h2>
							<div>
								<?php query_posts('pagename=top/information'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="bb-item" id="item4">
					<div class="content">
						<div class="scroller">
							<h2>Gallery</h2>
							<div>
								<?php query_posts('post_type=book_contents&name=gallary'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="bb-item" id="item5">
					<div class="content">
						<div class="scroller">
							<h2>Access</h2>
							<div>
								<img id="map" src="<?php echo get_stylesheet_directory_uri();?>/images/map.jpg" alt="中村橋駅からのアクセスマップ">
								<?php query_posts('pagename=top/access'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; endif;
								wp_reset_query();
								?>
							</div>
						</div>
					</div>
				</div>					

				<div class="bb-item" id="item6">
					<div class="content">
						<div class="scroller">
							<h2>News & Blog</h2>
							<div>
								<ul>			
									<?php query_posts('category_name=notice,event,news'); ?>
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
										<li>
											<?php the_time('Y.m.d');?>
											<a href="<?php echo the_permalink();?>"><? the_title();?></a>
										</li>
									<? endwhile; endif; wp_reset_query();?>
								</ul>
							</div>
							<div class="fb-page" data-href="https://www.facebook.com/kuutamo-510368712445569/" data-width="300" data-height="360" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"></div>
						</div>
					</div>
				</div>
			</div>

			<nav>
				<span id="bb-nav-prev"><i class="fa fa-arrow-left"　title="前へ"></i></span>
				<span id="bb-nav-next"><i class="fa fa-arrow-right"　title="次へ"></i></span>
			</nav>

			<span id="tblcontents" class="menu-button">kuutamo</span>
		</div>
	</div><!-- /container -->