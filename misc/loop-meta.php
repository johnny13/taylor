<div <?php hybrid_attr( 'loop-meta' ); ?>>

  <h1 <?php hybrid_attr( 'loop-title' ); ?>><?php the_archive_title(); ?></h1>
  
  <?php if ( is_category() || is_tax() ) : // If viewing a category or custom taxonomy. ?>

    <?php hybrid_get_menu( 'sub-terms' ); // Loads the menu/sub-terms.php template ?>

  <?php endif; ?>

  <?php if ( !is_paged() && $desc = get_the_archive_description() ) : // Check if we're on page 1 ?>

    <div <?php hybrid_attr( 'loop-description' ); ?>>
      <?php the_archive_description() ?>
    </div><!-- .loop-description -->

  <?php endif; ?>

</div><!-- .loop-meta -->