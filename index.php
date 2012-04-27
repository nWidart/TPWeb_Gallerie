<?php include('includes/header.php'); ?>
<nav>
	<div class="container_12">
		<div class="grid_12">
			<div class="ribbon">
				<strong class="ribbon-content">
					<ul class="filters">
						<li class="active"><a href="" data-filter="*">Everything</a></li>
						<li><a href="" data-filter=".print">Print Design</a></li>
						<li><a href="" data-filter=".logo">Logo Design</a></li>
						<li><a href="" data-filter=".web">Web Design</a></li>
					</ul>
				</strong>
			</div>
		</div>
	</div><!-- end container -->
</nav>
<div class="container_12 projects">
	<div class="grid_12">
		<ul id="da-thumbs" class="da-thumbs">
			<?php for ($i=1; $i <= 22; $i++) : ?>
				<li class="element print">
					<a href="images/projects/full_size/<?php echo $i; ?>.jpg">
						<img src="images/projects/img<?php echo $i; ?>.jpg" alt="">
						<div><span>Image <?php echo $i; ?></span></div>
					</a>
				</li>
			<?php endfor;?>
		</ul>
	</div>
</div>
<?php include('includes/footer.php'); ?>