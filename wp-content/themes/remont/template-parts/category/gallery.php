<section id="gallery" class="page-wrapper gallery">
	<div class="page-container">
		<?
			$category = get_queried_object();
			$rub = $category->term_id;
		?>
		<h1><? echo get_cat_name($rub); ?></h1>
		<div class="row r10 gallery__list">
			<?php $val_post = get_category($rub)->category_count;		
				if ( $val_post > 0 && $val_post != 0) { ?>
				<?php
					global $post;
					$args = array( 'numberposts' => -1, 'category' => $rub, 'order' => 'DESC');
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
				?>
					<div class="col col-1-3 col-desk-50 col-pad-100">
						<div class="gallery__item">
							<?
								if(get_the_post_thumbnail_url() != '') {
									$img = get_the_post_thumbnail_url();
								} else {
									$img = '/wp-content/themes/remont/frontend/pics/no-image.png';
								} 
							?>
							<div style="background-image: url(<?php echo $img; ?>)" class="gallery__img">
								<div class="gallery__btn">
									<a href="<?php echo the_permalink(); ?>" class="btn btn__color-5 btn__size-3">Смотреть галерею</a>
								</div>
							</div>
							<div class="gallery__title"><a href="<?php echo the_permalink(); ?>"><? echo the_title_attribute(); ?></a></div>
							<div class="gallery__preview"><?php the_excerpt(); ?></div>
							<?if(get_post_meta($post->ID, 'map__link', true ) != ''){?>
								<a href="<?php echo get_post_meta($post->ID, 'map__link', true ); ?>" target="_blank" class="gallery__map">
									<img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/map.svg" class="img__map"/>
									<span><?php echo get_post_meta($post->ID, 'map__name', true ); ?></span>
								</a>
							<?}?>	
						</div>
					</div>
				<?php
					}
				   wp_reset_postdata();
				?>
			<?}?>	
		</div>
		<?php twenty_twenty_one_the_posts_navigation(); ?>
	</div>
</section>