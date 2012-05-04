<?php
/* 
Menu Snippet for the Baseblog Kirby Theme
******************************************/
?>

	<nav class="menu">
		<ul>
			<?php foreach($pages->visible() AS $p): ?>
			<li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>