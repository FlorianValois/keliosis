<?php
if (!defined('ABSPATH')) {
	exit;
}

// Désactivation de "Gutenberg" de WP 5 et mise en place de l'éditor classique
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/*

Utiliser l'extension "Classic Editor" (https://wordpress.org/plugins/classic-editor/) si les filtres ne fonctionnent plus.

*/