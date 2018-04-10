<?php  use yii\widgets\Pjax;
		use yii\helpers\Html;
		
		$this->title = "Фото: $breadcrumb";

	$this->registerMetaTag([
		'name' => 'description',
		'content' => "Фото: $breadcrumb"
	]);
	$this->registerMetaTag([
		'name' => 'keywords',
		'content' => 'валерия красных, valinka.ru, валинка ру, фотография, фотограф, фото, фото природа, фото город, фото весна, фото зима, фото осень'
	])
?>



	<div class="breadcrumbs">
		<a href="<?=Yii::$app->urlManager->createUrl(['site/index']) ?>">Valinka.ru</a>
		<a href="<?=Yii::$app->urlManager->createUrl(["site/gallery?action=$action"]) ?>">Галерея</a>
		<a href="<?=$link ?>" class="active"><?=$breadcrumb ?></a>
	</div>

<div class="gallery">
	<?php foreach($album as $a){ ?>
		<a href="<?=$a->file_link ?>"><img src="<?=$a->file_name ?>"></a>
	<?php } ?>
</div>
<?php 
$script = <<< JS
$(".gallery").magnificPopup({
		delegate: 'a',
		type: "image",
		gallery:{
			enabled:true,
		},
		tCounter:false,
		 removalDelay: 300,
		 mainClass: "mfp-fade",
		 callbacks: {
		change: function() {
		if (this.isOpen) {
			this.wrap.addClass('mfp-open');
		}
	}
	}
	});	
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>