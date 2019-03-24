<?php if( is_active_sidebar('sidebar-right') ) : ?>
	<ul class="right-sidebar">
		<?php dynamic_sidebar('sidebar-right'); ?>
	</ul>
<?php endif?>
</div>
<div class="donate">
	<button>Donate</button>
</div>
	<footer class="site-footer">
		<ul class="sidebar-footer"><?php
			dynamic_sidebar('sidebar-footer');
		?></ul>
		<p>NOVVACOMM.</p>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
