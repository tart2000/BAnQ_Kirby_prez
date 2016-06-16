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
		<p><?php echo $p->typologie() ?> - <?php echo $p->ou() ?></p>
		<i>Mission : "<?php echo $p->mission() ?>"</i></br>
		<!-- <?php echo $p->description()->kirbytext()->excerpt(100) ?> -->
	</div>
</section>