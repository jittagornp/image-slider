<div class="jcarousel-wrapper">
	<div class="jcarousel">
		<ul>
		<?php
			if ($handle = opendir('./img/')) {
				while (false !== ($entry = readdir($handle))) {
					if ($entry != "." && $entry != "..") {
						echo "<li><img src=\"img/".$entry."\" width=\"500\" height=\"500\" alt=\"\"></li>";
					}
				}
				closedir($handle);
			}
		?>
	</div>

	<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
	<a href="#" class="jcarousel-control-next">&rsaquo;</a>
	
	<p class="jcarousel-pagination">
		
	</p>
</div>