<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page-wrapper">
	<div id="page" class="container-16 clearfix">
	
	  <div id="site-header" class="clearfix">
		
		  <div class="grid-12 push-4">
		  	 <?php print render($page['navigation']); ?>  
		  </div> <?php // class=grid-12 push-4 ?>
	  </div>	
	
	  <div id="main" class="column <?php print ns('grid-14', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
		<?php print $breadcrumb; ?>
     
		<?php if ($tabs): ?>
		  <div class="tabs"><?php print render($tabs); ?></div>
		<?php endif; ?>
		<?php print $messages; ?>
		<?php print render($page['help']); ?>
	
		<div id="main-content" class="region clearfix">
		  <?php print render($page['content']); ?>
		</div>
	
		<?php print $feed_icons; ?>
	  </div>
	
	<?php if ($page['sidebar_first']): ?>
	  <div id="sidebar-left" class="column sidebar region grid-2 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
		<?php print render($page['sidebar_first']); ?>
	  </div>
	<?php endif; ?>
	
	<?php if ($page['sidebar_second']): ?>
	  <div id="sidebar-right" class="column sidebar region grid-5">
		<?php print render($page['sidebar_second']); ?>
	  </div>
	<?php endif; ?>
	
	
	  <div id="footer" class="prefix-1 suffix-1">
		<?php if ($page['footer']): ?>
		  <div id="footer-region" class="region grid-14 clearfix">
			<?php print render($page['footer']); ?>
		  </div>
		<?php endif; ?>
	  </div>
	
	</div>
</div>