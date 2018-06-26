<?php

/* @var $this yii\web\View */

$this->title = 'Valinka.ru';

$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Личный сайт Валерии Красных.'
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => 'валерия красных, valinka.ru, валинка ру, web разработчик, web разработка, web-разработчик, web-разработка, создание сайтов, сайты, php, mysql, css, html, html 5, css, css3, yii2, yii'
])

?>
	
	<section class="main">
		<header>
			<p>Valinka.ru</p>
		</header>
		<nav class="main_nav">
			<ul>
				<li><a href="#about_me">Обо мне</a></li>
				<li><a href="#web">Web-разработка</a></li>
				<li><a href="#photo">Фотография</a></li>
			</ul>
		</nav>
	</section>
	
	<a name="about_me"></a><section class="about_me">
		<div class="ava">
			<img src="/web/img/ava.png">
		</div>
		<p>По образованию я &ndash; редактор. В этой должности проработала несколько лет. В 2015 году мне стала интересна тема web-разработки.</p>

<p>Сначала я освоила верстку html-страниц с помощью сайта <a href="https://htmlacademy.ru/" target="_blank">htmlacademy.ru</a> &ndash; очень интересного интерактивного ресурса, на котором сразу начинаешь практиковать полученные знания.</p>

<p>Следующим шагом стало изучение языка javascript и библиотеки jQuery для создания удобных и &quot;живых&quot; страниц.</p>

<p>Но самый главный вопрос &ndash; как связать страницы между собой &ndash; оставался нерешенным. Тогда очередь дошла до php. Первый сайт я создавала без использования движка и фреймворков,
чисто на процедурном стиле программирования. Использовала php для того, чтобы собрать динамическую страницу из нескольких блоков. В это же время я познакомилась с MySQL, создала небольшую базу данных и научилась выводить информацию из нее на страницы сайта.</p>

<p>Этот сайт я написала на фреймворке Yii 2.0.</p>

<p>Конечно, опыта у меня пока не очень много, но благодаря тем, кто согласится работать со мной, он обязательно появится.</p>

<p>Помимо редактирования и создания сайтов я занимаюсь фотографией. Так что, думаю, в скором времени смогу создавать полноценные сайты с хорошими текстами и качественными изображениями.</p>
		<p>Ну а что я умею, можно посмотреть ниже &ndash; в  разделе <a href="#web">Web-разработка</a>. А фотографии полистать &ndash; вот <a href="<?=Yii::$app->urlManager->createUrl(["site/gallery"]) ?>">тут</a>.</p>
		<p>Валерия Красных</p>
	</section>
	
	<section class="web">
		<a name="web"></a><h2><i class="fa fa-gears"></i> Web-разработка</h2>
		<?php foreach($categories as $category){ ?>
			<?php include "category.php" ?>
		<?php } ?>
		<div class="buttons">
			<a class="button" href="<?=Yii::$app->urlManager->createUrl(["site/portfolio"]) ?>">Портфолио</a>
			<a class="button" href="<?=Yii::$app->urlManager->createUrl(["site/resume"]) ?>">Резюме</a>
		</div>
		<section class="books">
			<a name="books"></a><h3><i class="fa fa-book"></i> Интересные книги</h3>
				<ul>
					<?php include "books.php" ?>
				</ul>
		</section>
	</section>
	
	<section class="photo"><a name="photo"></a>
		<h2><i class="fa fa-camera" aria-hidden="true"></i> Фотография</h2>
		<p>Я считаю, что не существует &quot;правильных&quot; и &quot;неправильных&quot; фотографий. Есть более совершенные технически, есть менее. А что касается самого содержания снимка, это попытка фотографа передать свое видение реальности.</p>
		<p>Мы все очень разные, нам нравятся совершенно разные вещи, и все мы делаем совершенно разные фотографии. Во многом это зависит от нашего настроения, окружения, погоды.</p>
		<p>Для галереи этого сайта я постаралась выбрать те фотографии, которые наиболее сильно передают атмосферу и настроение тех мест, где были сделаны. Для меня самое важное, взглянув на фото, что-то почувствовать, а не просто увидеть картинку.</p>
		<p>Приятного просмотра.</p>
		<div class="buttons"><a class="button" href="<?=Yii::$app->urlManager->createUrl(["site/gallery"]) ?>">Галерея</a></div>
	</section>


