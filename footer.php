<footer>
    <div class="container"> <!-- container Bootstrap's class https://getbootstrap.com/docs/5.0/layout/containers/#default-container -->
        <?php dynamic_sidebar('footer'); ?> <!-- https://developer.wordpress.org/reference/functions/dynamic_sidebar/ -->
        <!-- footer Id of the dynamic sidebar -->
        <!-- TODO: Check why it's not displayed -->
    </div>
</footer>

<?php wp_footer() ?>    <!-- Fires wp_footer action https://developer.wordpress.org/reference/functions/wp_footer/  -->

<!-- Next tags are the closed, related to the header.php opened -->
</body>
</html>