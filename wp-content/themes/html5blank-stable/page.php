<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <div class="container">
    <div class="row">
      <section>
        <div class="header-title text-center">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="main-sitebar">
          <?php echo do_shortcode("[breadcrumb]"); ?>
        </div>
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