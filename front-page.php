<?php get_header(); ?>  <!-- Load header template https://developer.wordpress.org/reference/functions/get_header/  -->

<!-- Bring our page's content -->
<!-- https://html.spec.whatwg.org/#hierarchically-correct-main-element -->
<main class='container'>
    <?php if(have_posts()){     // https://developer.wordpress.org/reference/functions/have_posts/
            while(have_posts()){
                the_post(); ?>  // https://developer.wordpress.org/reference/functions/the_post/
            <h1 class='my-3'><?php the_title(); ?>!!</h1>   <!-- https://developer.wordpress.org/reference/functions/the_title/ -->
            <?php the_content(); ?>  <!-- https://developer.wordpress.org/reference/functions/the_content/ -->

        <?php    }
    }?>

    <div class="lista-productos my-5">
        <h2 class='text-center'>PRODUCTOS</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $productos = new WP_Query($args);

        if($productos->have_posts()){
            while($productos->have_posts()){
                $productos->the_post();
                ?>

                <div class="col-4">
                    <figure>
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
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