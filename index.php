<?php

if (defined('WP_DEBUG') && WP_DEBUG) :

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>
    <!-- wp_head --><?php wp_head(); ?><!-- /wp_head -->
</head>
<body <?php body_class(); ?>>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    </article>
    <!-- wp_footer --><?php wp_footer(); ?><!-- /wp_footer -->
</body>
</html>
<?php

endif;
