<article <?php hybrid_attr( 'post' ); ?>>

  <header class="entry-header">
    <h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
  </header><!-- .entry-header -->

  <div <?php hybrid_attr( 'entry-content' ); ?>>
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php edit_post_link( __( 'Edit', 'taylor' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->

</article><!-- .entry -->