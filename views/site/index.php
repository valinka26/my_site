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
		<p>Ну что ж, как и положено, начнем с плохих новостей<img src=http://arcanumclub.ru/smiles/smile31.gif> Далеко не все, к сожалению, сразу после школы могут определиться с профессией своей мечты. Нехватка жизненного опыта и подробной информации о том, что предстоит делать, работая на той или иной должности, сыграла недобрую шутку со многими. И я оказалась в их числе.</p>
		<p>Но все же есть и хорошая новость &ndash; никогда не поздно переквалифицироваться, главное здесь &ndash; желание и стремление.</p>
		<p>Так из редактора я превратилась в web-разработчика и немного фотографа<img src=http://arcanumclub.ru/smiles/smile1.gif> Теперь я ловлю кайф от работы, во сколько бы ни пришлось вставать и какой бы запутанной и сложной ни казалась задача. Ну что может быть лучше?<img src=http://arcanumclub.ru/smiles/smile37.gif> Только быть котом (шучу)<img src=http://arcanumclub.ru/smiles/smile3.gif></p>
		<p>Конечно, опыта у меня пока в этом деле не очень много, и, наверное, это минус. Но есть и огромный плюс работы со мной &ndash; мне все интересно, свое дело я очень люблю и буду разбираться с любой проблемой до победного! Да, и еще я немного перфекционист, неплохое качество для человека, пишущего код<img src=http://arcanumclub.ru/smiles/smile7.gif></p>
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
		<p>Приятного просмотра<img src=http://arcanumclub.ru/smiles/smile31.gif></p>
		<div class="buttons"><a class="button" href="<?=Yii::$app->urlManager->createUrl(["site/gallery"]) ?>">Галерея</a></div>
	</section>


