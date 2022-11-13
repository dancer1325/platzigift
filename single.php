<?php get_header(); ?>  <!-- Load header template https://developer.wordpress.org/reference/functions/get_header/  -->

<!-- Bring our page's content -->
<!-- https://html.spec.whatwg.org/#hierarchically-correct-main-element -->
<main class='container my-3'>
    <?php if(have_posts()){     // https://developer.wordpress.org/reference/functions/have_posts/
            while(have_posts()){
                the_post();     // https://developer.wordpress.org/reference/functions/the_post/
            ?>
                <h1 class='my-5'><?php the_title() ?></h1>  <!-- https://developer.wordpress.org/reference/functions/the_title/ -->
                <!-- my-5 notation https://getbootstrap.com/docs/5.0/utilities/spacing/#notation -->
                <div class="row">
                    <div class="col-4">
                        <?php the_post_thumbnail('large'); ?>   <!-- https://developer.wordpress.org/reference/functions/the_post_thumbnail/ -->
                    </div>
                    <div class="col-8">
                        <?php the_content(); ?> <!-- https://developer.wordpress.org/reference/functions/the_content/ -->
                    </div> 
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>  <!-- Load footer template  https://developer.wordpress.org/reference/functions/get_footer/ -->