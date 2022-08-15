<?php get_header(); ?>

    <main>
        <article class="page-article post-article">
            <?php  if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="page-body">
                        <div class="container">
                            <div class="post-main">
                                <?php the_title( '<h1>', '</h1>' ); ?>

                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
    </main>

<?php get_footer(); ?>
