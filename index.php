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

			<li class="element print">
				<a href="images/projects/full_size/1.jpg">
					<img src="images/projects/img1.jpg" alt="">
					<div><span>Image 1</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/2.jpg">
					<img src="images/projects/img2.jpg" alt="">
					<div><span>Image 2</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/3.jpg">
					<img src="images/projects/img3.jpg" alt="">
					<div><span>Image 3</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/4.jpg">
					<img src="images/projects/img4.jpg" alt="">
					<div><span>Image 4</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/5.jpg">
					<img src="images/projects/img5.jpg" alt="">
					<div><span>Image 5</span></div>
				</a>
			</li>
			<li class="element logo">

				<a href="images/projects/full_size/6.jpg">
					<img src="images/projects/img6.jpg" alt="">
					<div><span>Image 6</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/7.jpg">
					<img src="images/projects/img7.jpg" alt="">
					<div><span>Image 7</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/8.jpg">
					<img src="images/projects/img8.jpg" alt="">
					<div><span>Image 8</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/9.jpg">
					<img src="images/projects/img9.jpg" alt="">
					<div><span>Image 9</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/10.jpg">
					<img src="images/projects/img10.jpg" alt="">
					<div><span>Image 10</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/11.jpg">
					<img src="images/projects/img11.jpg" alt="">
					<div><span>Image 11</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/12.jpg">
					<img src="images/projects/img12.jpg" alt="">
					<div><span>Image 12</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/13.jpg">
					<img src="images/projects/img13.jpg" alt="">
					<div><span>Image 13</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/14.jpg">
					<img src="images/projects/img14.jpg" alt="">
					<div><span>Image 14</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/15.jpg">
					<img src="images/projects/img15.jpg" alt="">
					<div><span>Image 15</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/16.jpg">
					<img src="images/projects/img16.jpg" alt="">
					<div><span>Image 16</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/17.jpg">
					<img src="images/projects/img17.jpg" alt="">
					<div><span>Image 17</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/18.jpg">
					<img src="images/projects/img18.jpg" alt="">
					<div><span>Image 18</span></div>
				</a>
			</li>
			<li class="element print">
				<a href="images/projects/full_size/19.jpg">
					<img src="images/projects/img19.jpg" alt="">
					<div><span>Image 19</span></div>
				</a>
			</li>
			<li class="element logo">
				<a href="images/projects/full_size/20.jpg">
					<img src="images/projects/img20.jpg" alt="">
					<div><span>Image 20</span></div>
			</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/21.jpg">
					<img src="images/projects/img21.jpg" alt="">
					<div><span>Image 21</span></div>
				</a>
			</li>
			<li class="element web">
				<a href="images/projects/full_size/22.jpg">
					<img src="images/projects/img22.jpg" alt="">
					<div><span>Image 22</span></div>
				</a>
			</li>
		</ul>
	</div>
</div>
<?php include('includes/footer.php'); ?>