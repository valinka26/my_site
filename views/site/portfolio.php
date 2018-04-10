<?php

/* @var $this yii\web\View */

$this->title = 'Портфолио';

$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Портфолио Валерии Красных.'
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => 'валерия красных, valinka.ru, валинка ру, web разработчик, web разработка, web-разработчик, web-разработка, создание сайтов, сайты, php, mysql, css, html, html 5, css, css3, yii2, yii, портфолио'
])
?>

<div class="breadcrumbs">
	<a href="<?=Yii::$app->urlManager->createUrl(['site/index']) ?>">Valinka.ru</a>
	<a href="<?=Yii::$app->urlManager->createUrl(["site/portfolio"]) ?>" class="active">Портфолио</a>
</div>

<section class="portfolio">
	
	<?php foreach($portfolio as $p){ ?>	
	<div class="img">
		<a class="caption-link" href="<?=$p->link ?>" data-title="<?=$p->title ?>"
		data-description="<?=$p->description ?>">
			<img src="<?=$p->img ?>" alt="<?=$p->title ?>">
		</a>
	</div>
	<?php } ?>
	
</section>