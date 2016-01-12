
<?php if( is_home() ): ?>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
			<h3>Featured</h3>
		</div>
		<?php
			$featured = new special_theme;
			echo $featured->featured_index();
		?>
		<?php endif; ?>


<?php get_template_part('templates/footer'); ?>
