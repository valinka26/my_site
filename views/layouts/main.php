<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="/web/valinka.ico" rel="shortcut icon" type="image/x-icon" />		
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<script> 
var $buoop = {notify:{i:-5,f:-4,o:-4,s:-2,c:-4},insecure:true,api:5}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script>
<div class="wrapper"></div>
<i class="fa fa-bars fa-2x menu_show" aria-hidden="true"></i>
<nav class="full_nav">
	<p><i class="fa fa-window-close-o menu_hide" id="menu_hide" aria-hidden="true"></i></p>
	<ul>
		<li><b><a href="<?=Url::to(['site/index', '#' => 'about_me'])?>" class="menu_hide">Обо мне</a></b></li>
		<li><b><a href="<?=Url::to(['site/index', '#' => 'web'])?>" class="menu_hide">Web-разработка</a></b>
			<ul>
				<li><a href="<?=Url::to(['site/index', '#' => 'design'])?>" class="menu_hide">Web-дизайн</a></li>
				<li><a href="<?=Url::to(['site/index', '#' => 'html'])?>" class="menu_hide">HTML-верстка</a></li>
				<li><a href="<?=Url::to(['site/index', '#' => 'programming'])?>" class="menu_hide">Программирование</a></li>
				<li><a href="<?=Url::to(['site/index', '#' => 'books'])?>" class="menu_hide">Интересные книги</a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(["site/portfolio"]) ?>">Портфолио</a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(["site/resume"]) ?>">Резюме</a></li>
			</ul>
		</li>
		<li><b><a href="<?=Url::to(['site/index', '#' => 'photo'])?>" class="menu_hide">Фотография</a></b>
			<ul>
				<li><a href="<?=Yii::$app->urlManager->createUrl(["site/gallery"]) ?>">Галерея</a></li>
			</ul>
		</li>
	</ul>
</nav>


<?=$content?>

<footer class="footer">
    <div>
		<a href="mailto:valerie-kras@mail.ru"><i class="fa fa-envelope" aria-hidden="true"></i> Пишите!</a>
	</div>
	<div>
		<a href="https://vk.com/id6560426"><i class="fa fa-vk" aria-hidden="true"></i></a>
		<a href="https://www.facebook.com/profile.php?id=100006398801332"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="https://www.instagram.com/valinka26/?hl=ru"><i class="fa fa-instagram" aria-hidden="true"></i></a>

	</div>	
	<div>
		&copy; Valinka.ru, <?=date("Y") ?>
	</div>	
</footer>

<?php
$script = <<< JS
$('.menu_show').on('click',function(){
	$('.full_nav').fadeIn("slow");
});
$('.menu_hide').on('click',function(){
	$('.full_nav').fadeOut("slow");
});
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
