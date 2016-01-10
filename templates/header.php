<?php use Roots\Sage\Titles; ?>

	<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header class="mdl-layout__header">
		<div class="mdl-layout__header-row">
			<!-- Title -->
			<span class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>">
				<?php bloginfo('name'); ?>
			</span>
			<!-- Add spacer, to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
			<!-- Navigation -->
			<?php
    if ( has_nav_menu( 'primary_navigation' ) ) :
      // Remove wrapping <li> from around links
      // https://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/#comment-542093
      $cleanermenu = wp_nav_menu( array(
        'theme_location' => 'primary_navigation',
        'container' => false,
	    'container_class' => false,
		'container_id'    => '',
        'items_wrap' => '<nav class="mdl-navigation mdl-layout--large-screen-only">%3$s</nav>',
		'menu_class' => 'mdl-navigation__link',
        'echo' => false,
        'depth' => 1,
      ) );
      $find = array('><a','li');
      $replace = array('','a class="mdl-navigation__link"');
      echo str_replace( $find, $replace, $cleanermenu );
    endif;
    ?>

		</div>
	</header>
	<div class="mdl-layout__drawer">
		<a class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>">
			<?php bloginfo('name'); ?>
		</a>

		<?php
  if ( has_nav_menu( 'primary_navigation' ) ) :
    // Remove wrapping <li> from around links
    // https://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/#comment-542093
     $cleanermenu = wp_nav_menu( array(
        'theme_location' => 'primary_navigation',
        'container' => false,
	    'container_class' => false,
		'container_id'    => '',
        'items_wrap' => '<nav class="mdl-navigation">%3$s</nav>',
		'menu_class' => 'mdl-navigation__link',
        'echo' => false,
        'depth' => 1,
      ) );
      $find = array('><a','li');
      $replace = array('','a class="mdl-navigation__link"');
      echo str_replace( $find, $replace, $cleanermenu );
  endif;
  ?>

	</div>
</div>
	<main class="mdl-layout__content">
		<div class="page-content">
			<!-- Your content goes here -->