<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="<? echo get_template_directory_uri(); ?>/frontend/style.css" rel="stylesheet" type="text/css">	
	<link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/frontend/lib/owlcarousel/owl.carousel.css">
	<link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/frontend/lib/owlcarousel/owl.theme.default.css">
	<script src="<? echo get_template_directory_uri(); ?>/frontend/js/jquery.min.js" defer="defer"></script>
	<script src="<? echo get_template_directory_uri(); ?>/frontend/js/mask.js" defer="defer"></script>
	<script src="<? echo get_template_directory_uri(); ?>/frontend/lib/owlcarousel/owl.carousel.js" defer="defer"></script>
	<script src="<? echo get_template_directory_uri(); ?>/frontend/js/all.js" defer="defer"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php/* get_template_part( 'template-parts/header/site-header' ); */?>
	
	<div class="_main-menu--parent">
		<header class="page-wrapper header">
			<div class="page-container">
				<div class="header__side-a">
					<a href="/" class="logo">
						<img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/logo-1.svg"/>
						<span><?php echo get_post_meta(21, 'title', true ); ?></span>
					</a>
				</div>
				<div class="header__side-b">
					<ul class="nav__hovep dev-dn-lap">
						<? include('nav-menu.php');?>
					</ul>
					<div class="header__contacts">
						<div class="soc dev-dn-lap">
							<?php echo get_post_meta(21, 'social', true ); ?>
						</div>
						<div class="header__text-1 dev-dn-pad"><a href="tel:<?php echo get_post_meta(21, 'telephone', true ); ?>"><?php echo get_post_meta(21, 'telephone', true ); ?></a></div>
					</div>
				</div>
				<div class="header__side-c">
					<button data-link-to-popup="recall" class="btn btn__color-1 btn__width-1 _open-popup dev-dn-pad">
						<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn__icon">
							<g clip-path="url(#clip0)">
								<path d="M17.7499 15.4678L15.2121 17.9852C14.8375 18.3694 14.3409 18.4996 13.8573 18.5001C11.7188 18.4361 9.69735 17.3856 8.03763 16.3069C5.3133 14.325 2.81361 11.8674 1.24476 8.89762C0.643053 7.65228 -0.0629673 6.06331 0.0044877 4.67328C0.0105027 4.15038 0.151413 3.63718 0.519678 3.30013L3.05747 0.763618C3.58445 0.315373 4.09407 0.470353 4.4313 0.992473L6.47297 4.864C6.68786 5.32266 6.56459 5.81409 6.24398 6.14182L5.309 7.07632C5.25128 7.15539 5.21453 7.24539 5.2136 7.34334C5.57213 8.73117 6.65829 10.0103 7.61781 10.8906C8.57732 11.7709 9.60869 12.9636 10.9475 13.2459C11.1129 13.2921 11.3156 13.3083 11.434 13.1983L12.5217 12.0921C12.8966 11.8079 13.438 11.669 13.8383 11.9014H13.8573L17.54 14.0755C18.0806 14.4144 18.137 15.0693 17.7499 15.4678Z" fill="white" class="tp-03"></path>
							</g>
							<defs>
								<clipPath id="clip0">
									<rect width="18" height="18" fill="white" transform="translate(0 0.5)"></rect>
								</clipPath>
							</defs>
						</svg>
						<span class="btn__text">Заказать звонок</span>
					</button>
					<button class="header__btn-nav dev-dn-main dev-dflex-lap _main-menu--btn">
						<div class="header__btn-nav--open">
							<svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line y1="0.5" x2="20" y2="0.5" stroke="white" class="tp-03"></line>
								<line y1="6.5" x2="20" y2="6.5" stroke="white" class="tp-03"></line>
								<line y1="12.5" x2="20" y2="12.5" stroke="white" class="tp-03"></line>
							</svg>
						</div>
						<div class="header__btn-nav--close">
							<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.70711 7.49988L15.4244 0.782546L14.7173 0.0754395L8 6.79277L1.28271 0.0754852L0.575608 0.782592L7.29289 7.49988L0.575195 14.2176L1.2823 14.9247L8 8.20698L14.7177 14.9247L15.4249 14.2176L8.70711 7.49988Z" fill="white" class="tp-03"></path>
							</svg>
						</div>
					</button>
				</div>
			</div>
		</header>
		<? if(is_home()) {} else { ?>
			<div class="header-fake"></div>
		<?}?>
		<div class="main-menu dev-dn-main dev-dflex-lap _main-menu--obj">
			<ul class="nav__hovep _main-menu--menu">
				<? include('nav-menu.php');?>
			</ul>
			<div class="soc">
				<?php echo get_post_meta(21, 'social', true ); ?>
			</div>
		</div>
	</div>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
