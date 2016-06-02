<?php snippet('header') ?>

  	<div class="reveal">
	    <div class="slides">
	    	<!-- page d'intro ici -->
	    	<section>
	    		<h1>Projet 'Incubateur St Sulpice'</h1>
    			<?php echo $site->title() ?></br>
    			<?php echo $site->ladate() ?>
	    	</section>
	    	<!-- liste de pages --> 
	    	
    		<?php foreach ($site->pages()->visible() as $pa) : ?>
    			<?php if ($pa->template()=='default') : ?> 
	    			<section>
	    				<?php echo $pa->text()->kirbytext() ?>
	    			</section>
    			<?php endif ?>
    			<?php if ($pa->template()=='piliers') : ?>
    				<!-- liste des piliers --> 
			        <section>
			        	<h2><?php echo $pa->title() ?></h2>
			        	<ol>
			        		<?php foreach ($pa->children() as $pil) : ?>
			        			<li><?php echo $pil->title() ?> <a href="#/<?php echo $pil->uid() ?>">→</a></li>
				        	<?php endforeach ?>
			        	</ol>
			        </section>

			        <!-- pages piliers --> 
			        <?php foreach ($pa->children() as $p) : ?>
			        	<section id="<?php echo $p->uid() ?>">
			        		<section>
				        		<h2><?php e($p->num()!='',$p->num().'-') ?><?php echo $p->title() ?></h2>
				        		<strong>(<?php echo $p->labtype() ?>)</strong>
				        		<?php echo $p->text()->kirbytext() ?>
			        		</section>
			        		<section>
				        		<i>Exemple de mission :</i></br>
				        		<i>"<?php echo $p->missionex() ?>"</i>
				        	</section>
				        	<!-- liste des projets si il y en a -->
				        	<?php if ($p->hasChildren()) : ?>
					        	<section>
					        		<h1>Exemples de projets</h1>
					        	</section>
					        	<!-- les projet ici ! -->
					        	<!-- une page par projet -->
						        <?php foreach ($p->children() as $project) : ?>
						        	<?php snippet('project-item', array('p'=>$project)) ?>
						        <?php endforeach ?>
					        <?php endif ?>

			        	</section>
			    	<?php endforeach ?>


	    		<?php endif ?>
	    	<?php endforeach ?>

	    	
	        
	        

        	<!-- page de fin -->
        	<section>
        		<h1>Merci</h1>
        	</section>
		    
	    </div>
	</div>

<?php snippet('footer') ?>