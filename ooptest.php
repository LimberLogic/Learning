<?php include 'oop.php' ?>

<?php getHeader('OOP Test Page') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>OOP Programming Test</h1>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Spoon</h1>
			<?php $obj = new Spoon(0.5) ?>
			<p>Cleanliness before scoop: <?=$obj->cleanliness?></p>
			<p>Scooping... <?php $obj->scoop() ?></p>
			<p>Cleanliness after scoop: <?=$obj->cleanliness?></p>
			<p>Cleaning the spoon... <?php $obj->getClean() ?></p>
			<p>Spoon is now clean: <?=$obj->cleanliness?></p>
			<?php $obj->moveTo(1, 2) ?>
			<?php $obj->bend() ?>
			<pre><?php var_dump($obj) ?></pre>
			<p>Static output: <?=Silverware::staticMethod()?></p>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Knife</h1>
			<?php $obj = new Knife() ?>
			<p>Cleanliness before cut: <?=$obj->cleanliness?></p>
			<p>cuting... <?php $obj->cut() ?></p>
			<p>Cleanliness after cut: <?=$obj->cleanliness?></p>
			<p>Sharpness after cut: <?=$obj->getSharpness()?></p>
			<p>Cleaning the knife... <?php $obj->getClean() ?></p>
			<p>Sharpening the knife... <?php $obj->sharpen() ?></p>
			<p>Knife is now sharp: <?=$obj->getSharpness()?></p>
			<p>Knife is now clean: <?=$obj->cleanliness?></p>
			<?php $obj->moveTo(1, 2) ?>
			<pre><?php var_dump($obj) ?></pre>
			<p><?php unset($obj) ?></p>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Passing by Reference</h1>
			<p><?php $obj = new Knife() ?></p>
			<p>Sharpness: <?=$obj->getSharpness()?></p>
			<p>Static call: <?php Silverware::cutWithKnife($obj) ?></p>
			<p>Sharpness: <?=$obj->getSharpness()?></p>
		</div>
	</div>
</div>

<?php getFooter() ?>