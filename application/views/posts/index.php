<h2><?= $title ?></h2>

<div class="my-4">
	<?php
			include "./application/views/components/post_tile.component.php";
			echo json_encode($posts);
			echo createPostTile($posts);
	?>
</div>

