<a name="<?=$category->css_class ?>"></a><h3><i class="<?=$category->awesome_class ?>"></i> <?=$category->title ?></h3>
<section class="<?=$category->css_class ?>">
	<div class="description">
		<?= $category->description ?>
	</div>
	<div class="skills">
		<ul><?= $category->skills ?></ul>
	</div>
</section>