<?php get_header(); ?>

    <main>
        <div class="page-article post-article">
            <div class="page-body">
                <?php if ( have_posts() ) : ?>
                    <section class="related-section">
                        <div class="container">
                            <h1><?php single_cat_title(); ?></h1>

                            <ul class="related-posts list-unstyled">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <li>
                                        <article class="related-article">
                                            <a href="<?php the_permalink(); ?>" class="related-link">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <div class="related-image">
                                                        <?php the_post_thumbnail( 'thumbnail', ['class' => 'img-fluid'] ); ?>
                                                    </div>
                                                <?php endif; ?>
                            
                                                <div>
                                                    <h2 class="related-title"><?php the_title(); ?></h2>
                            
                                                    <p class="related-author post-author">By <?php the_author(); ?></p>
                                                    <p class="related-time post-time">
                                                        <time datetime="<?php the_time('Y-m-d'); ?>">
                                                            <?php the_time("F j, Y"); ?>
                                                        </time> | <span>4 min read</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </article>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
