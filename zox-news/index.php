<?php get_header(); ?>
<div class="mvp-main-blog-wrap left relative mvp-main-blog-marg">
	<div class="mvp-main-box">
		<div class="mvp-main-blog-cont left relative">
			<div class="mvp-main-blog-out left relative">
				<div class="mvp-main-blog-in">
					<div class="mvp-main-blog-body left relative">
						<?php if(get_option('mvp_blog_layout') == '1' ) { ?>
							<ul class="mvp-blog-story-list-col left relative infinite-content">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<li class="mvp-blog-story-col left relative infinite-post">
										<a href="<?php the_permalink(); ?>" rel="bookmark">
										<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<div class="mvp-blog-story-out relative">
												<div class="mvp-blog-story-img left relative">
													<?php the_post_thumbnail('mvp-mid-thumb', array( 'class' => 'mvp-reg-img lazy' )); ?>
													<?php the_post_thumbnail('mvp-small-thumb', array( 'class' => 'mvp-mob-img lazy' )); ?>
													<?php if ( has_post_format( 'video' )) { ?>
														<div class="mvp-vid-box-wrap mvp-vid-marg">
															<i class="fa fa-2 fa-play" aria-hidden="true"></i>
														</div><!--mvp-vid-box-wrap-->
													<?php } else if ( has_post_format( 'gallery' )) { ?>
														<div class="mvp-vid-box-wrap">
															<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
														</div><!--mvp-vid-box-wrap-->
													<?php } ?>
												</div><!--mvp-blog-story-img-->
												<div class="mvp-blog-story-in">
													<div class="mvp-blog-story-text left relative">
														<div class="mvp-cat-date-wrap left relative">
															<?php if ( is_sticky() ) { ?>
																<span class="mvp-cd-cat left relative sticky"><?php esc_html_e( 'Sticky Post', 'zox-news' ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
															<?php } else { ?>
																<span class="mvp-cd-cat left relative"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
															<?php } ?>
														</div><!--mvp-cat-date-wrap-->
														<h2><?php the_title(); ?></h2>
														<p><?php echo wp_trim_words( get_the_excerpt(), 26, '...' ); ?></p>
													</div><!--mvp-blog-story-text-->
												</div><!--mvp-blog-story-in-->
											</div><!--mvp-blog-story-out-->
										<?php } else { ?>
											<div class="mvp-blog-story-text left relative">
												<div class="mvp-cat-date-wrap left relative">
													<?php if ( is_sticky() ) { ?>
														<span class="mvp-cd-cat left relative sticky"><?php esc_html_e( 'Sticky Post', 'zox-news' ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
													<?php } else { ?>
														<span class="mvp-cd-cat left relative"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
													<?php } ?>
												</div><!--mvp-cat-date-wrap-->
												<h2><?php the_title(); ?></h2>
												<p><?php echo wp_trim_words( get_the_excerpt(), 26, '...' ); ?></p>
											</div><!--mvp-blog-story-text-->
										<?php } ?>
										</a>
									</li><!--mvp-blog-story-wrap-->
								<?php endwhile; endif; ?>
							</ul>
						<?php } else { ?>
							<ul class="mvp-blog-story-list left relative infinite-content">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<li class="mvp-blog-story-wrap left relative infinite-post">
										<a href="<?php the_permalink(); ?>" rel="bookmark">
										<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<div class="mvp-blog-story-out relative">
												<div class="mvp-blog-story-img left relative">
													<?php the_post_thumbnail('mvp-mid-thumb', array( 'class' => 'mvp-reg-img lazy' )); ?>
													<?php the_post_thumbnail('mvp-small-thumb', array( 'class' => 'mvp-mob-img lazy' )); ?>
													<?php if ( has_post_format( 'video' )) { ?>
														<div class="mvp-vid-box-wrap mvp-vid-marg">
															<i class="fa fa-2 fa-play" aria-hidden="true"></i>
														</div><!--mvp-vid-box-wrap-->
													<?php } else if ( has_post_format( 'gallery' )) { ?>
														<div class="mvp-vid-box-wrap">
															<i class="fa fa-2 fa-camera" aria-hidden="true"></i>
														</div><!--mvp-vid-box-wrap-->
													<?php } ?>
												</div><!--mvp-blog-story-img-->
												<div class="mvp-blog-story-in">
													<div class="mvp-blog-story-text left relative">
														<div class="mvp-cat-date-wrap left relative">
															<?php if ( is_sticky() ) { ?>
																<span class="mvp-cd-cat left relative sticky"><?php esc_html_e( 'Sticky Post', 'zox-news' ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
															<?php } else { ?>
																<span class="mvp-cd-cat left relative"><?php $category = get_the_category(); if (isset($category)) { echo esc_html( $category[0]->cat_name ); } ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
															<?php } ?>
														</div><!--mvp-cat-date-wrap-->
														<h2><?php the_title(); ?></h2>
														<p><?php echo wp_trim_words( get_the_excerpt(), 26, '...' ); ?></p>
													</div><!--mvp-blog-story-text-->
												</div><!--mvp-blog-story-in-->
											</div><!--mvp-blog-story-out-->
										<?php } else { ?>
											<div class="mvp-blog-story-text left relative">
												<div class="mvp-cat-date-wrap left relative">
													<?php if ( is_sticky() ) { ?>
														<span class="mvp-cd-cat left relative sticky"><?php esc_html_e( 'Sticky Post', 'zox-news' ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
													<?php } else { ?>
														<span class="mvp-cd-cat left relative"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span><span class="mvp-cd-date left relative"><?php printf( esc_html__( '%s ago', 'zox-news' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
													<?php } ?>
												</div><!--mvp-cat-date-wrap-->
												<h2><?php the_title(); ?></h2>
												<p><?php echo wp_trim_words( get_the_excerpt(), 26, '...' ); ?></p>
											</div><!--mvp-blog-story-text-->
										<?php } ?>
										</a>
									</li><!--mvp-blog-story-wrap-->
								<?php endwhile; endif; ?>
							</ul>
						<?php } ?>
						<div class="mvp-inf-more-wrap left relative">
							<?php $mvp_infinite_scroll = get_option('mvp_infinite_scroll'); if ($mvp_infinite_scroll == "true") { if (isset($mvp_infinite_scroll)) { ?>
								<a href="#" class="mvp-inf-more-but"><?php esc_html_e( 'More Posts', 'zox-news' ); ?></a>
							<?php } } ?>
							<div class="mvp-nav-links">
								<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>
							</div><!--mvp-nav-links-->
						</div><!--mvp-inf-more-wrap-->
					</div><!--mvp-main-blog-body-->
				</div><!--mvp-mvp-main-blog-in-->
				<?php get_sidebar('home'); ?>
			</div><!--mvp-mvp-main-blog-out-->
		</div><!--mvp-main-blog-cont-->
	</div><!--mvp-main-box-->
</div><!--mvp-main-blog-wrap-->
<?php get_footer(); ?>