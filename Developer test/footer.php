<footer id="colophon" class="site-footer" role="contentinfo">
        <!-- Aquí podrías incluir contenido del pie de página, enlaces, información adicional, etc. -->
        <div class="footer-content">
            <div class="social">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id' => 'footer-menu',
                    'container' => 'nav',
                    'container_class' => 'footer-menu',
                    'items_wrap' => '<ul id="%1$s" class="footer-menu-wrap">%3$s</ul>',
                ));
            ?>

            <p>© Copyright<?php echo date('Y'); ?> PILLAR HOMES. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
<?php wp_footer(); ?>
</html>