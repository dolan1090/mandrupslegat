<footer>
    <div class='container'>
        <section class="footer-center">
            <?php
            $ecentura_image_payment = get_option('ecentura_image_payment');
            echo wp_get_attachment_image($ecentura_image_payment, 'full');
            ?>
            <div class="box-footer-menu">
                <div class="copyright">
                    <?php echo get_option('ecentura_copyright_text') ?>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'bottom-menu',
                        'container' => 'false',
                        'menu_class' => 'footer-menu',
                        'link_before' => ' ',
                        'link_after' => ' '
                    )
                ); ?>
            </div>
        </section>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/dist/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>