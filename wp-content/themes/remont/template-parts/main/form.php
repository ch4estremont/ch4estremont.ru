<section id="form" class="page-wrapper form">
	<div class="page-container">
		<form class="form__form" id="contact" action="<?php bloginfo('template_url'); ?>/mail.php" method="post">
			<div class="row r50 ml-0 mr-0" id="fields">
				<div class="col col-39 col-desk-100 form__side-a">
					<h3>Форма обратной связи</h3>
					<div id="note"></div>
					<div class="i__group">
						<div class="form__text-1 t t-font4 t-fs14 t-lh1-2 t-color3 mb-8">Ваше имя <span class="t t-color4">*</span></div>
						<input type="text" class="i col-100" name="name" required/>
					</div>
					<div class="i__group">
						<div class="form__text-1 t t-font4 t-fs14 t-lh1-2 t-color3 mb-8">E-mail <span class="t t-color4">*</span></div>
						<input type="email" class="i col-100" name="email" required/>
					</div>
					<div class="i__group">
						<div class="form__text-1 t t-font4 t-fs14 t-lh1-2 t-color3 mb-8">Телефон </div>
						<input type="text" class="i col-100 _i__mask" name="tel" />
					</div>
				</div>
				<div class="col col-61 col-desk-100 form__side-b">
					<div class="flex f-between form__slogan">
						<div class="form__text-2">Подробнее распишите вы, подробнее ответим мы:)</div><img src="<? echo get_template_directory_uri(); ?>/frontend/pics/icons/letter.svg" class="img__letter form__img f-shrink-0 dev-dn-pad"/>
					</div>
					<textarea placeholder="Сообщение" class="i i__type-2 col-100" name="message" required></textarea>
					<div class="flex f-center f-middle form__agree _check-parent">
						<div class="checkbox form__checkbox">
							<input type="checkbox" checked="checked" class="checkbox-work _check-checkbox"/>
							<div class="chechbox-fake"></div>
						</div>
						<div class="t t-font4 t-fs14 t-lh1-2 t-color5 form__text-3">Я согласен на <a href="/processing-of-personal-data/" class="t t-color6"><u>обработку персональных данных</u></a></div>
						<!--<button class="btn btn__color-6 btn__width-2 _check-submit" id="submitinput" type="submit">
							<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn__icon">
								<path d="M16.8153 1.20628C16.7252 1.11114 16.6114 1.04526 16.4872 1.0164C16.3631 0.987546 16.2337 0.996902 16.1144 1.04337L1.43073 6.70975C1.3041 6.76072 1.19507 6.85137 1.11814 6.96966C1.0412 7.08795 1 7.22828 1 7.372C1 7.51573 1.0412 7.65606 1.11814 7.77435C1.19507 7.89264 1.3041 7.98329 1.43073 8.03426L7.16405 10.4637L11.3956 5.95895L12.3367 6.95765L8.08512 11.4695L10.3811 17.5538C10.4306 17.6856 10.5162 17.7986 10.6269 17.8781C10.7375 17.9577 10.8682 18.0001 11.0018 18C11.1367 17.9971 11.2676 17.9508 11.3772 17.8674C11.4868 17.7839 11.57 17.6672 11.6159 17.5325L16.9554 1.94999C17.0009 1.82468 17.0119 1.68823 16.987 1.55655C16.9622 1.42487 16.9026 1.3034 16.8153 1.20628Z" fill="white" class="tp-03"></path>
							</svg><span class="btn__text">Отправить</span>
						</button>-->
						<input id="submitinput" class="btn btn__color-6 btn__width-2 _check-submit" value="Отправить" type="submit" />
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<script>
	jQuery(document).ready(function($) {
		$("#contact").submit(function() {
			var str = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "<?php bloginfo('template_url'); ?>/mail.php", // здесь указываем путь к второму файлу
				data: str,
				success: function(msg) {
					if(msg == 'OK') {
						result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
						$("#fields").show();
					}
					else {result = msg;}
					$('#note').html(result);
					 $('.i', '#contact') // выполняем очистку полей после отправки сообщения
	 .not(':button, :submit, :reset, :hidden')
	 .val('')			 
				}
			});
			return false;
		});
	});
	</script>