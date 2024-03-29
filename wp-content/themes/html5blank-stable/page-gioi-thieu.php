<?php get_header(); ?>

<div class="container-fluid breadcrumb-background">
  <div class="row d-flex justify-content-center">
    <div class="header-page">
      <div class="header-title text-center">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="main-sitebar text-center">
        <?php echo do_shortcode("[breadcrumb]"); ?>
      </div>
    </div>
  </div>
</div>

<main role="main">
  <!-- section -->

  <div class="container">
    <div class="row">
      <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

          <?php comments_template( '', true ); // Remove if you don't want comments ?>

          <br class="clear">

          <?php edit_post_link(); ?>

        </article>
        <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

        <!-- article -->
        <article>

          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

        <?php endif; ?>

      </section>
      <!-- /section -->
    </div>
  </div>
</main>


<?php get_footer(); ?>