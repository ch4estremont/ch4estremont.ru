<?php 
$catID = 10;
$val_post = get_category($catID)->category_count;		
if ( $val_post > 0 && $val_post != 0) { ?>
	<section id="reviews" style="background-image: url(<? echo get_template_directory_uri(); ?>/frontend/pics/back/reviews.jpg)" class="page-wrapper reviews">
		<div class="page-container">
			<div class="row r10">
				<div class="col col-1-3 col-lap-100">
					<h3><? echo get_cat_name($catID); ?></h3>
					<p><? echo category_description($catID); ?></p>
				</div>
				<div class="col col-2-3 col-lap-100">
					<div class="owl-carousel owl-reviews _owl-reviews">
						<?php
						global $post;
						$args = array('category' => $catID);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ){ setup_postdata($post);
						?>
							<div class="item">
								<div class="reviews__item _slice-txt--parent">
									<div class="reviews__top">
										<div class="reviews__side-a">
											<div class="reviews__name"><? echo the_title_attribute(); ?></div>
											<? if(get_post_meta($post->ID, 'soc__link', true ) != '') {?>
												<a href="<?php echo get_post_meta($post->ID, 'soc__link', true ); ?>" target="_blank" class="reviews__soc"> 
													<span><?php echo get_post_meta($post->ID, 'soc__txt', true ); ?></span>
													<div class="img__insta">
														<img src="<?php echo get_post_meta($post->ID, 'soc__icon', true ); ?>"/>
													</div>
												</a>
											<?}?>
										</div>
										<div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" class="reviews__ava"></div>
									</div>
									<div class="reviews__title"><? echo the_excerpt();  ?></div>
									<div data-slice-txt="270" class="reviews__txt _slice-txt _slice-txt--mode"><? echo the_content();  ?></div>
									<div class="reviews__nav _slice-txt--nav">
										<a href="<?php echo the_permalink(); ?>" class="btn btn__color-2 btn__size-4">Полный отзыв</a>
									</div>
								</div>
							</div>
						<?php
											}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else { } ?>