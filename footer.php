 <footer class="footer">
        <div class="container">
            <div class="icon">
                <?php 
                    $footer = new WP_Query(array('post_type'=>'project','category_name'=>'footer'));
                    if ($footer->have_posts()) {
                        while ($footer->have_posts()) {
                            $footer->the_post();

                            empt(get_field('fb'),'fab fa-facebook-f');
                            empt( get_field('twitter'),'fab fa-twitter');
                            empt(get_field('linkdin') ,'fab fa-linkedin-in');
                            ?>

            </div>
              <?php
                            dynamic_sidebar( 'f_menu' );
                            the_content( );
                        }
                    }

                 ?>

        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>