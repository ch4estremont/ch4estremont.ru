<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php /*get_template_part( 'template-parts/footer/footer-widgets' ); */?>

	<footer class="page-wrapper footer">
		<div class="page-container">
			<div class="row r10">
				<div class="col col-23 col-lap-20 col-desk-27 col-pad-100">
					<div class="flex">
						<a href="/" class="logo">
							<img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/logo-1.svg"/>
							<span><?php echo get_post_meta(21, 'title', true ); ?></span>
						</a>
					</div>
				</div>
				<div class="col col-27 col-lap-25 col-desk-73 col-pad-100">
					<div class="footer__box">
						<div class="flex footer__text-row">
							<a href="tel:<?php echo get_post_meta(21, 'telephone', true ); ?>" class="flex f-middle">
								<img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/phone.svg" class="f-shrink-0 img__contacts mr-13"/>
								<div class="footer__text-1">
									<big><?php echo get_post_meta(21, 'telephone', true ); ?></big>
								</div>
							</a>
						</div>
						<div class="flex footer__text-row">
							<a href="mailto:<?php echo get_post_meta(21, 'mail', true ); ?>" class="flex f-middle">
								<img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/envelope.svg" class="f-shrink-0 img__contacts mr-13"/>
								<div class="footer__text-1"><?php echo get_post_meta(21, 'mail', true ); ?></div>
							</a>
						</div>
					</div>
					<div class="soc">
						<?php echo get_post_meta(21, 'social', true ); ?>
					</div>
				</div>
				<div class="col col-50 col-lap-55 col-desk-100">
					<ul class="nav__line-divider">
						<? include('nav-menu.php');?>
					</ul>
					<div class="footer__text-2"><a href="/privacy-policy/">Политика конфиденциальности</a></div>
					<div class="footer__text-2"><?php echo get_post_meta(21, 'copyright', true ); ?></div>
				</div>
			</div>
		</div>
	</footer>
	<div class="back-to-top _back-to-top"></div>

<!--</div><!-- #page -->

<?php wp_footer(); ?>
<div class="popups-box _popup-box">
	<div class="popup-bg _popup-cls"></div>
	<div data-popup="recall" id="fields2" class="popup-item _popup-item popup-item__recall"> 
		<div class="popup-close _popup-cls"></div>
		<h2 class="popup-item__title">Заказать звонок</h2>
		<p>Оставьте свой номер телефона и мы вам перезвоним</p>
		<div id="note2"></div>
		<form id="recall" action="<?php bloginfo('template_url'); ?>/mail2.php" method="post">
			<div class="i__group">
				<div class="popup__text-1 t t-font4 t-fs14 t-lh1-2 t-color3 mb-8">Ваше имя</div>
				<input type="text" class="i i__type-3 col-100" name="name2" required/>
			</div>
			<div class="i__group">
				<div class="popup__text-1 t t-font4 t-fs14 t-lh1-2 t-color3 mb-8">Телефон </div>
				<input type="text" class="i i__type-3 col-100 _i__mask" name="tel2" required/>
			</div>
			<input id="submitinput2"  type="submit" value="Заказать звонок" class="btn btn__color-1 col-100"/>
		</form>
		<script>
			jQuery(document).ready(function($) {
				$("#recall").submit(function() {
					var str = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "<?php bloginfo('template_url'); ?>/mail2.php", // здесь указываем путь к второму файлу
						data: str,
						success: function(msg) {
							if(msg == 'OK') {
								result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
								$("#fields2").show();
							}
							else {result = msg;}
							$('#note2').html(result);
							 $('.i', '#recall') // выполняем очистку полей после отправки сообщения
			 .not(':button, :submit, :reset, :hidden')
			 .val('')			 
						}
					});
					return false;
				});
			});
			</script>
	</div>
</div>
</body>
</html>
