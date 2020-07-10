<?php

  
get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php


while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
            <!--<h1 class="page-title"><?php the_title();?></h1>
            <hr class="bottom-hr">-->

            <?php the_content(); ?>
        </div>

        <?php
endwhile; 
wp_reset_query(); 
?>



    </main>
</div>

<?php get_footer(); ?>