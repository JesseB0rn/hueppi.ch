This does not work. Disable BLog page plz. Im sorry, -jesseb0rn
<?php /*get_header(); ?>
    <main role="main">
        <?php if ( have_posts() ) { ?>
            <header class="archive-header">
                <h1>
                    <?php esc_html( the_archive_title() ); ?>
                </h1>
                <?php the_archive_description(); ?>
            </header>
            <?php
            while ( have_posts() ) {
                the_post();
                get_template_part( 'content', get_post_format() );
            }
        }
        the_posts_pagination( array( 'type' => 'list' ) ); ?>
    </main>
<?php 
get_footer();*/
//! Doesn't Work, and I don't have time
//TODO: Fix this, so it works. Workaround ist the "latest post" block. -jesseb0rn
