<?php  use yii\widgets\Pjax;
		use yii\helpers\Html;
		
		$this->title = 'Фотогалерея';

	$this->registerMetaTag([
		'name' => 'description',
		'content' => 'Фотогалерея Валерии Красных.'
	]);
	$this->registerMetaTag([
		'name' => 'keywords',
		'content' => 'валерия красных, valinka.ru, валинка ру, фотография, фотограф, фото, фото природа, фото город, фото весна, фото зима, фото осень'
	])
?>

<div class="breadcrumbs">
	<a href="<?=Yii::$app->urlManager->createUrl(['site/index']) ?>">Valinka.ru</a>
	<a href="<?=Yii::$app->urlManager->createUrl(["site/gallery"]) ?>" class="active">Галерея</a>
</div>

<section class="photogallery">

	<?php
		$opt_cat = ['class' => 'active'];
		$opt_seas = ['class' => ''];	

		if ($action === 'seasons') {
			Html::removeCssClass($opt_cat, 'active');
			Html::addCssClass($opt_seas, 'active');
		}
	?>

	<?php Pjax::begin(); ?>
		<div class="view">
			<?= Html::a(
				'По категориям',
				['gallery?action=categories'],
				$opt_cat				
			) ?>
			<?= Html::a(
				'По временам года',
				['gallery?action=seasons'],
				$opt_seas
			) ?>
		</div>
		<div class="container">
			<?php foreach($main_photos as $photo){ ?>	
				<div class="album">
					<a class="caption-link" href="<?=$photo->link ?>" data-description="<?=$photo->description ?>"><img src="<?=$photo->file_link ?>"></a>
				</div>
			<?php } ?> 
		</div>	
	<?php Pjax::end(); ?>

</section>		
	 
				


