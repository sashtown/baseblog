<?php
/* 
Menu Snippet for the Baseblog Kirby Theme
******************************************/
?>
        <nav class="menu cf" role="navigation">
        	<ul>
    		<?php foreach($pages->visible() AS $p): ?>
                <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    		<?php endforeach ?>
        	</ul>
            <form class="search cf" role="search" action="<?php echo url('search') ?>">
                <label class="vh" for="q">Search</label>
                <input type="search" class="searchword" name="q" id="q" placeholder="Search..."/>
            </form>
        </nav>
