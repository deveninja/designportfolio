


        <div class="footer">
            <div class="footer-div-1">

            </div>
            <div class="footer-div-2">

            </div>
            <div class="footer-div-3">

            </div>
            <div class="footer-div-4">
            
            </div>
        </div>

        <nav class="site-nav">

                <?php
                    $args = array(
                        'theme_location' => 'footer'
                    );
                ?>

                <?php wp_nav_menu(); ?>

        </nav>

        <?php wp_footer(); ?>
    </div><!-- end of Container fluid -->
    </body>
</html>