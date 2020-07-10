<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_html(get_bloginfo( 'name' )) . '">';
                } else {
                echo '<h1>'. esc_html(get_bloginfo( 'name' )) .'</h1>';
                }?>
            </div>

            <?php echo wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>

            <div class="mobile-toggle">
                <button onclick="toggleMobileNav();">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

            </div>
        </nav>
    </header>
    <div class="mobile-nav-hidden" id="mobile-nav">
        <?php echo wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
    </div>