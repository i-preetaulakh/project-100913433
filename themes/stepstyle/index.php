<?php get_header(); ?>

<main id="main-content">
    <div class="container">
        <h1>Welcome to StepStyle</h1>
        
        <!-- Featured Products Section -->
        <?php if (class_exists('WooCommerce')) : ?>
            <section class="featured-products">
                <h2>Featured Shoes</h2>
                <?php echo do_shortcode('[products limit="4" columns="4" visibility="featured"]'); ?>
            </section>
        <?php endif; ?>

        <!-- Blog Posts -->
        <section class="blog-posts">
            <h2>Latest News</h2>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
