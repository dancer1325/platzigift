<!-- Get either header or footer, as it was done in index.php -->
<?php get_header(); ?> <!-- Load header template https://developer.wordpress.org/reference/functions/get_header/  -->

<!-- Bring our page's content -->
<!-- https://html.spec.whatwg.org/#hierarchically-correct-main-element -->
<main class='container'>
    <?php if(have_posts()){     // https://developer.wordpress.org/reference/functions/have_posts/
            while(have_posts()){
                the_post(); ?>  <!-- https://developer.wordpress.org/reference/functions/the_post/ -->
            <h1 class='my-3'><?php the_title(); ?></h1> <!-- https://developer.wordpress.org/reference/functions/the_title/ -->
            <!-- my-3 notation https://getbootstrap.com/docs/5.0/utilities/spacing/#notation -->

            <?php the_content(); ?> <!-- https://developer.wordpress.org/reference/functions/the_content/ -->

         <?php }
    }?>
</main>

<?php get_footer(); ?>  <!-- Load footer template  https://developer.wordpress.org/reference/functions/get_footer/ -->