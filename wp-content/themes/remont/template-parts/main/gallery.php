<section id="gallery" class="page-wrapper gallery">
	<div class="page-container">
		<h2><small>Галереи</small><? echo get_cat_name(4); ?></h2>
		<div class="gallery__nav">
			<div class="gallery__nav-list">
			<?
				$categories = get_categories(['parent' => 4]);
				$sub_cats = array_column($categories, 'cat_ID');
				asort($sub_cats);
				$i = 0;
				foreach($sub_cats as $rb){ 
			?>
				<?php $val_post = get_category($rb)->category_count;		
					if ( $val_post > 0 && $val_post != 0) { 
				?>
					<a href="<? echo get_category_link($rb); ?>" class="btn btn__color-4 btn__size-2 <?if($i == 0) {echo 'selected';}?>"><? echo get_cat_name($rb); ?></a>
				<?
					$i++;
					}
				?>
			<?
				}
			?>
			</div>
		</div>
		<div class="row r10 gallery__list dev-dn-lap">
			<?
				$categories = get_categories(['parent' => 4]);
				$sub_cats = array_column($categories, 'cat_ID');
				asort($sub_cats);
				$i = 0;
				foreach($sub_cats as $rb){ 
			?>
				<?php $val_post = get_category($rb)->category_count;		
					if ( $val_post > 0 && $val_post != 0) { 
				?>
				<?if($i == 0) {
					global $post;
					$args = array( 'numberposts' => -1, 'category' => $rb, 'order' => 'DESC');
					$myposts = get_posts( $args );
					$z = 0;
					foreach( $myposts as $post ){ setup_postdata($post);
					$z++;
					if($z > 6) {
						break; 
					}
				?>
					<div class="col col-1-3">
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
				}?>
				<?
					$i++;
					}
				?>
			<?
				}
			?>
			
		</div>
		<div class="owl-carousel owl-gallery _owl-gallery gallery__list dev-dn-main dev-db-lap">
			<?
				$categories = get_categories(['parent' => 4]);
				$sub_cats = array_column($categories, 'cat_ID');
				asort($sub_cats);
				$i = 0;
				foreach($sub_cats as $rb){ 
			?>
				<?php $val_post = get_category($rb)->category_count;		
					if ( $val_post > 0 && $val_post != 0) { 
				?>
				<?if($i == 0) {
					global $post;
					$args = array( 'numberposts' => -1, 'category' => $rb, 'order' => 'DESC');
					$myposts = get_posts( $args );
					$z = 0;
					foreach( $myposts as $post ){ setup_postdata($post);
					$z++;
					if($z > 6) {
						break; 
					}
				?>
					<div class="item">
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
				}?>
				<?
					$i++;
					}
				?>
			<?
				}
			?>
			
		</div>
		<div class="flex f-center dev-dn-lap">
			<button data-link-to-popup="recall" class="btn btn__color-1 btn__width-1 _open-popup">
				<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn__icon">
					<g clip-path="url(#clip0)">
						<path d="M17.7499 15.4678L15.2121 17.9852C14.8375 18.3694 14.3409 18.4996 13.8573 18.5001C11.7188 18.4361 9.69735 17.3856 8.03763 16.3069C5.3133 14.325 2.81361 11.8674 1.24476 8.89762C0.643053 7.65228 -0.0629673 6.06331 0.0044877 4.67328C0.0105027 4.15038 0.151413 3.63718 0.519678 3.30013L3.05747 0.763618C3.58445 0.315373 4.09407 0.470353 4.4313 0.992473L6.47297 4.864C6.68786 5.32266 6.56459 5.81409 6.24398 6.14182L5.309 7.07632C5.25128 7.15539 5.21453 7.24539 5.2136 7.34334C5.57213 8.73117 6.65829 10.0103 7.61781 10.8906C8.57732 11.7709 9.60869 12.9636 10.9475 13.2459C11.1129 13.2921 11.3156 13.3083 11.434 13.1983L12.5217 12.0921C12.8966 11.8079 13.438 11.669 13.8383 11.9014H13.8573L17.54 14.0755C18.0806 14.4144 18.137 15.0693 17.7499 15.4678Z" fill="white" class="tp-03"></path>
					</g>
					<defs>
						<clipPath id="clip0">
							<rect width="18" height="18" fill="white" transform="translate(0 0.5)"></rect>
						</clipPath>
					</defs>
				</svg><span class="btn__text">Заказать ремонт</span>
			</button>
		</div>
	</div>
</section>