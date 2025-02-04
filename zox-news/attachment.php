<?php get_header(); ?>
<article id="mvp-article-wrap" <?php post_class(); ?> itemscope itemtype="http://schema.org/NewsArticle">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="mvp-article-cont" class="left relative">
			<div class="mvp-main-box">
				<div id="mvp-post-main" class="left relative">
					<header id="mvp-post-head" class="left relative">
						<h1 class="mvp-post-title left entry-title" itemprop="headline"><?php the_title(); ?></h1>
					</header>
					<div id="mvp-post-content" class="left relative">
						<div id="mvp-content-wrap" class="left relative">
							<div class="mvp-post-soc-out right relative">
								<?php $socialbox = get_option('mvp_social_box'); if ($socialbox == "true") { ?>
									<?php $socialbox = get_option('mvp_social_box'); if ($socialbox == "true") { ?>
										<?php if ( function_exists( 'mvp_SocialSharing' ) ) { ?>
											<?php mvp_SocialSharing(); ?>
										<?php } ?>
									<?php } ?>
								<?php } ?>
								<div class="mvp-post-soc-in">
									<div id="mvp-content-body" class="left-relative">
										<div id="mvp-content-main" class="left relative">
 											<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "post"); ?>
												<a href="<?php echo esc_url(wp_get_attachment_url($post->id)); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo esc_url( $att_image[0] );?>" class="attachment-post" alt="<?php the_title(); ?>" /></a>
											<?php else : ?>
												<a href="<?php echo esc_url(wp_get_attachment_url($post->ID)); ?>" title="<?php echo esc_html( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo esc_html(basename($post->guid)); ?></a>
											<?php endif; ?>
										</div><!--mvp-content-main-->
									</div><!--mvp-content-body-->
								</div><!--mvp-post-soc-in-->
							</div><!--mvp-post-soc-out-->
						</div><!--mvp-content-wrap-->
					</div><!--mvp-post-content-->
				</div><!--mvp-post-main-->
			</div><!--mvp-main-box-->
		</div><!--mvp-article-cont-->
	<?php endwhile; endif; ?>
</article><!--mvp-article-wrap-->
<?php get_footer(); ?>