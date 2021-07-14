<?php

/**
 * The template for displaying content in the front-page.php template
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6'); ?>>
    <div class="card mb-4">
        <header class="card-body">
            <h2 class="card-title">
                <a
                href="<?php the_permalink(); ?>"
                title="<?php printf(esc_attr('Permalinkt to $s', 'zalo-blog'), the_title_attribute('echo=0')); ?>"
                rel="bookmark"><?php  ?>
                <?php the_title(); ?>
            </a>
            </h2>
        </header>
    </div>
</div>