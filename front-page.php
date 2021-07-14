<?php
/**
 * Template Name: Home Page (Landing)
 * Description: Homepage or landing page tempalte with no sidebar.
 * Author: Rabin
 */

 get_header();
?>
<!-- Content Start -->
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <?php
        $args = array (
            'posts_per_page' => 1,
            'category_name' => 'highlight'
        );

        $highlightPost = get_posts($args);

        foreach($highlightPost as $post) : setup_postdata($post); ?>
            <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic"><?php the_title(); ?></h1>
            <p class="lead my-3"><?php the_content(); ?></p>
            <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
  </div>

  <div class="row mb-2">
      <?php

        $args = array(
            'posts_per_page' => 2,
            'category_name' => 'featured'
        );

        $featuredPosts = get_posts($args);

        foreach($featuredPosts as $post) : setup_postdata($post); ?>
             <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0"><?php the_title(); ?></h3>
                    <?php zalo_blog_article_posted_on(); ?>
                    <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                    </div>
                </div>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <?php

        $args = array(
            'posts_per_page' => 2,
            'category_name' => 'featured'
        );

        $posts = get_posts($args);

        foreach($posts as $post): setup_postdata($post);  ?>

            <article class="blog-post">
              <h3 class="mb-0">
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'zalo-blog' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
              </h3>
                <?php
                zalo_blog_article_posted_on();
                the_content(); ?>
            </article>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>

<?php?>
      <!-- <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav> -->

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <?php
            get_sidebar();
        ?>
      </div>
    </div>
  </div>

</main>

<?php
    get_footer();
?>