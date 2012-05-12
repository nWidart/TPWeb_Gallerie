<?php include('includes/header.php'); ?>
<?php
$types_ok = array(
		'image/jpeg',
		'image/png',
		'image/gif',
	);
function create_gallery()
{
	global $types_ok;

	$chemin = "images/projects_filtres";

	if ( $handle = opendir($chemin) )
	{
		$img= '';
		$count = 0;
		while ( ($filename = readdir($handle)) !== FALSE )
		{
			$count++;
			// c'est une image?
			$chemin_image = $chemin . '/' . $filename;
			if ( !is_dir($chemin_image) )
			{
				if ( is_image($chemin_image) )
				{
					$tab_ficher = explode('.', $filename);
					// Le nom du fichier [1]= extension
					$tab_details_nom = explode('-', $tab_ficher[0]);
					$tab_filtres = explode ('_', $tab_details_nom[1]);
					// var_dump($tab_filtres);
					$filters = implode(' ',$tab_filtres);
					echo '<li class="element '. $filters .'">';
					echo '<a href="'. $chemin_image .'"><img src="images/projects/img'. $count .'.jpg" alt="" /></a>';
					echo '</li>';
				}
			}
		}
	}
}


function is_image($chemin_image)
{
	global $types_ok;
	if ( list($largeur, $hauteur, $type) = getimagesize($chemin_image) )
	{
		$type = image_type_to_mime_type($type);

		if ( in_array($type, $types_ok) )
		{
			return TRUE;
		}

		return FALSE;
	}
}

?>
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
			<?php create_gallery(); ?>
		</ul>
	</div>
</div>
<?php include('includes/footer.php'); ?>