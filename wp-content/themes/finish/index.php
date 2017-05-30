<?php
get_header();
?>

<div id="sliders" class="clearfix"><img src="<?php echo get_template_directory_uri(); ?>/img/slider-bg.jpg"></div>
<div class="width1170">
	<div class="aboutCompany"><h1>О компании</h1>
		<div class="clearfix textBlockLeft"><img src="<?php echo get_template_directory_uri(); ?>/img/post1.jpg">
			<div class="textBlock1"><p>Новое время и современные сады требуют соответствующих
					деталей. Мебель из ротанга набила оскомину и выглядит слишком
					традиционно. New wave – это ресурс, созданный ландшафтным
					дизайнером и специалистами в области мебели. Это
					долгожданное решение для дизайнеров и конечных потребителей,
					которые ищут современную, стильную и качественную мебель и
					аксессуары для сада.</p><br>
				<p>Как мы работаем? Интересно и интенсивно! Посещаем основные</p><br>
				<p>профильные выставки –<span>Saloni del mobile в Милане, Stockholm
Furniture Fair, The International Interiors Show в Кельне, Stockholm
Design Week, а также Maison&Object в Париже,</span>чтобы отследить новинки и
					поддерживать прямые контакты с фабриками. Мы осуществляем доставку садовой мебели
					и аксессуров «под ключ».
					span New wave</p>
				<p>- единственный посредник между брендом и покупателем,
					что позволяет нам работать оперативно и доступно. New Wave – это актуальный и «свежий»
					ассортимент для Вашего любимого сада.</p></div>
		</div>
	</div>
	<div class="forDesigners"><h2>Для дизайнеров</h2>
		<div class="clearfix textBlockRight"><img src="<?php echo get_template_directory_uri(); ?>/img/post1.jpg">
			<div class="textBlock2"><p><span>New Wave</span> предлагает особые условия для ландшафтных
					дизайнеров и дизайнеров интерьера. Заполните форму
					обратной связи, указав Ваши контактные данные и сферу
					деятельности, и мы предоставим Вам доступ к каталогам
					и прайс-листам в электронном виде.</p><br>
				<p>Во время презентаций и мероприятий, которые мы
					организуем для ознакомления с новыми коллекциями
					и приятного общения в кругу профессионалов, у Вас есть
					возможность получить каталоги и буклеты интересующих
					Вас фабрик и оценить исполнение и дизайн продуктов
					в наличии.</p><br>
				<p>Мы нацелены на долговременное сотрудничество
					и взаимную кооперацию с дизайнерами – делитесь
					предложениями по расширению ассортимента, задавайте
					вопросы о продукции, запрашивайте подробную
					информацию. Наша задача – установить прямой контакт
					с фабрикой и оперативно доставить мебель и аксессуары
					для сада. Давайте решать задачу по созданию
					современных и стильных садов вместе!</p></div>
		</div>
		<a class="enterDesigners">ВХОД ДЛЯ ДИЗАЙНЕРОВ</a></div>
<!--    вставить лууп для вывода фабрик-->
	<div class="fabricsSlider clearfix"><h2>ФАБРИКИ</h2>
		<div class="sliderContents">
			<div class="fabSlide"><img src="<?php echo get_template_directory_uri(); ?>/img/fab1.jpg"><span>ETHIMO</span>
				<div class="hoverFabSlide"><span>ETHIMO</span><a href="#" class="showFabrick"></a></div>
			</div>
			<div class="fabSlide"><img src="<?php echo get_template_directory_uri(); ?>/img/fab2.jpg"><span>MUUBS</span>
				<div class="hoverFabSlide"><span>MUUBS</span><a href="#" class="showFabrick"></a></div>
			</div>
			<div class="fabSlide"><img src="<?php echo get_template_directory_uri(); ?>/img/fab3.jpg"><span>SKAGERAK</span>
				<div class="hoverFabSlide"><span>SKAGERAK</span><a href="#" class="showFabrick"></a></div>
			</div>
		</div>
		<a href="#" class="lookAllFabrick">ПРОСМОТРЕТЬ ВСЕ ФАБРИКИ<i aria-hidden="true"
		                                                             class="fa fa-chevron-right"></i></a></div>
</div>
<div id="overflow"></div><!--div.mailFormform
    input(type='text' placeholder='Имя')
    input(type='Email' placeholder='E-mail')
    input(type='tel' placeholder='Телефон')
    textarea(placeholder='Сообщение')
    label(for='sender').send
        | ОТПРАВИТЬ
        i.fa.fa-caret-right(aria-hidden="true")
        input(type='submit' value='ОТПРАВИТЬ' id='sender')-->

<?php get_footer(); ?>