<?php get_header();?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <?php
            while ( have_posts() ) : the_post(); ?>

        <div class="entry-content-page">
            <p class="post-meta">
                Geschrieben am <?php the_date();?> von <?php the_author();?>
            </p>
            <hr>
            <h1 class="post-title"><?php the_title();?></h1>
            <hr class="bottom-hr">
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium large');
        }?>
            <?php the_content(); ?>
        </div>
        <?php
            endwhile;
            wp_reset_query(); 
        ?>

    </main>
</div>

<?php get_footer(); ?>