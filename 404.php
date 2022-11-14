<?php get_header() ?>       <!-- Load header template https://developer.wordpress.org/reference/functions/get_header/  -->

<!-- Bring / Generate our page's content -->
<!-- https://html.spec.whatwg.org/#hierarchically-correct-main-element -->
<main class='container'>
    <div class="pagina404 my-5">    <!-- TODO: Where is pagina404 defined? Or you create the identifier here?-->
        <h1>404 PÁGINA NO ENCOTRADA</h1>
        <h2>Haga <a href="<?php echo home_url(); ?>">click aquí</a>  para volver a la página principal</h2> <!-- https://developer.wordpress.org/reference/functions/home_url/ -->
    </div>
</main>

<?php get_footer() ?>       <!-- Load footer template  https://developer.wordpress.org/reference/functions/get_footer/ -->