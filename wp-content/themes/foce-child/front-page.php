<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <div class="container__video">
            <video class="banner__video" width="1440" autoplay="autoplay" muted=""
                loop="infinite">
                <source src="<?php echo get_theme_file_uri() . '/assets/video/hero-video.mp4'; ?>" type="video/mp4">
            </video>
        </div>
        <div class="container__logo">
            <img class="banner__logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="Logo fleurs d'oranger & chats errants">
        </div>
    </section>

    <section id="story" class="story">
        <!-- Ajout de la classe "displayTitle pour animation des H2 -->
        <h2><span class="displayTitle">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <article id="characters">
            <div class="main-character">
                <h3><span id="characterTitle" class="displayTitle">Les personnages</span></h3>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'characters',
                            'posts_per_page' => -1,
                            'meta_key'  => '_main_char_field',
                            'orderby'   => 'meta_value_num',
                        );
                        $characters_query = new WP_Query($args);
                        while ($characters_query->have_posts()) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide">';
                            echo get_the_post_thumbnail(get_the_ID(), 'full');
                            echo '<div class="swiper-slide-caption">' . get_the_title() . '</div>';  // Ajout du nom sous l'image
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>

        <article id="place">
            <div>
                <h3><span class="displayTitle">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="little-cloud"></div>
            <div class="big-cloud"></div>
        </article>
    </section>

    <section id="studio">
        <!-- Ajout de la classe "displayTitle pour animation des H2 -->
        <h2><span class="displayTitle">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php get_template_part('content', 'nomination'); ?>

</main><!-- #main -->

<?php
get_footer();
