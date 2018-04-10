<?php

$this->title = 'Резюме';

$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Резюме Валерии Красных.'
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => 'валерия красных, valinka.ru, валинка ру, web разработчик, web разработка, web-разработчик, web-разработка, создание сайтов, сайты, php, mysql, css, html, html 5, css, css3, yii2, yii'
])

?>

<div class="breadcrumbs">
	<a href="<?=Yii::$app->urlManager->createUrl(['site/index']) ?>">Valinka.ru</a>
	<a href="<?=Yii::$app->urlManager->createUrl(["site/resume"]) ?>" class="active">Резюме</a>
</div>

<section class="resume">
    <a href='/web/resume/cv.pdf' download><i class="fa fa-2x fa-file-pdf-o"></i></a>
	<h3>Валерия Красных</h3>
	<p>Web-разработчик</p>
	<p>Дата рождения: 26.03.1988</p>
	<p><a href="tel:<?=Yii::$app->params['adminTel'] ?>" id ="tel"><nobr> <?=Yii::$app->params['adminTel'] ?></nobr></a>, <a href="mailto:<?=Yii::$app->params['adminEmail'] ?>"><?=Yii::$app->params['adminEmail'] ?></a></p>
	<section class="prof_skills">
		<h2><i class="fa fa-gears"></i> Профессиональные навыки</h2>
			<ul>
				<div class="container">
					<li><b>Web-дизайн</b>
						<ul><?=$skills[0]['skills'] ?></ul>
					</li>
					<li><b>HTML5 и CSS3</b>
						<ul><?=$skills[1]['skills'] ?></ul>
					</li>
				</div>
				<div class="container">
					<?=$skills[2]['skills'] ?>
				</div>
			</ul>
	</section>
	<div class="flex_container">
		<section class="education">
			<h2><i class="fa fa-graduation-cap"></i> Образование</h3>
				<?php foreach($education as $ed) { ?>
					<?php if($ed->yr != $prev_yr){ ?>
						<p class="yr"><?=$ed->yr ?></p>
					<?php } ?>
					<?php $prev_yr = $ed->yr ?>
					<ul>
						<li><?=$ed->title ?>
							<?php if($ed->link){ ?><p class="small"><a href="<?=$ed->link ?>"><?=$ed->ed_center ?></a></p>
							<?php } else{ ?>
							<p class="small"><?=$ed->ed_center ?></p>
							<?php } ?>
						</li>
					</ul>
				<?php } ?>
		</section>
		
		<section class="experience">
			<h2><i class="fa fa-briefcase"></i> Опыт работы</h3>
			<ul>
			
				<?php foreach($experience as $exp){ ?>
			
				<li><?=$exp->position ?>
					<p class="small"><?=$exp->place ?> <nobr>(<?=$exp->start ?> &ndash; <?=$exp->end ?>)</nobr></p>
				</li>
				
				<?php } ?>
			</ul>
		</section>
	</div>
	
</section>