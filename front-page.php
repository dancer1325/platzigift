<?php get_header(); ?>  <!-- Load header template https://developer.wordpress.org/reference/functions/get_header/  -->

<!-- Bring our page's content -->
<!-- https://html.spec.whatwg.org/#hierarchically-correct-main-element -->
<main class='container'>
    <?php if(have_posts()){     // https://developer.wordpress.org/reference/functions/have_posts/
            while(have_posts()){
                the_post(); ?>  <!-- https://developer.wordpress.org/reference/functions/the_post/ -->
                <!-- Next the_title() and the_content() make reference to the 'front-page.php' -->
            <h1 class='my-3'><?php the_title(); ?>!!</h1>   <!-- https://developer.wordpress.org/reference/functions/the_title/ -->
            <?php the_content(); ?>  <!-- https://developer.wordpress.org/reference/functions/the_content/ -->

        <?php    }
    }?>

    <!-- Add product list link to those pages -->
    <div class="lista-productos my-5">
        <h2 class='text-center'>PRODUCTOS</h2>
        <div class="row">
        <?php
        // https://developer.wordpress.org/reference/classes/wp_query/#parameters
        $args = array(
            'post_type' => 'producto',  // https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
            // It matches with name given in register_post_type()
            'post_per_page' => -1,  // It will return all post types
            'order'         => 'ASC',   // By default it's DESC
            'orderby'       => 'title'  // Attribute to order the products
        );

        // Create a WP_Query's instance
        $productos = new WP_Query($args);   // https://developer.wordpress.org/reference/classes/wp_query/

        // have_posts() invoked to the WP_Query instance https://developer.wordpress.org/reference/classes/wp_query/#methods
        if($productos->have_posts()){       // https://developer.wordpress.org/reference/classes/wp_query/have_posts/
            while($productos->have_posts()){
                $productos->the_post();     // https://developer.wordpress.org/reference/classes/wp_query/the_post/
                ?>

                <!-- Since we are into a loop and using bootstrap -- it will show the elements, based on it -->
                <div class="col-4">
                    <figure>    <!-- https://html.spec.whatwg.org/#the-figure-element -->
                        <?php the_post_thumbnail('large'); ?>   <!-- https://developer.wordpress.org/reference/functions/the_post_thumbnail/ -->
                    </figure>
                    <!-- It's to display just 'remarked images' added to the page, not for blocks -->
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>"> <!-- https://developer.wordpress.org/reference/functions/the_permalink/ -->
                            <?php the_title();?>            <!-- https://developer.wordpress.org/reference/functions/the_title/ -->
                        </a>
                    </h4>
                </div>

           <?php }
        }

        ?>
      </div>
    </div>
</main>

<?php get_footer(); ?>  <!-- Load footer template  https://developer.wordpress.org/reference/functions/get_footer/ -->