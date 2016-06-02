<section>
	<div class="left">
		<?php if ($p->theurl()!='') : ?>
			<a href="<?php echo $p->theurl() ?>" target="_blank">
				<img src="http://api.webthumbnail.org/?width=320&height=320&screen=1280&url=<?php echo $p->theurl() ?>" alt="Image" />
			</a>
		<?php endif ?>		
	</div>
	<div class="right">
		<h2><?php echo $p->title() ?></h2>
		<?php echo $p->text()->kirbytext() ?>
	</div>
</section>