</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">

    <div class="foot-desc">
        <div class="join">Connect With Us
            <div class="line-foot"></div>
            <div class="social-media-icon">
                <div class="logo-facebook">
                    <a href="https://facebook.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri('img/Asset1.png') ?>" alt="facebook-logo">
                    </a>
                </div>
                <div class="logo-twitter">
                    <a href="https://twitter.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri('img/Asset2.png') ?>" alt="twitter-logo">
                    </a>
                </div>
                <div class="logo-instagram">
                    <a href="https://instagram.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri('img/asset3.png') ?>" alt="instagram-logo">
                    </a>
                </div>
                <div class="logo-linkedin">
                    <a href="https://linkedin.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri('img/Asset4.png') ?>" alt="linkedln-logo">
                    </a>
                </div>
                <div class="logo-youtube">
                    <a href="https://youtube.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri('img/Asset5.png') ?>" alt="youtube-logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?><br>All Right Reserved</h3></div>
</footer>
</div>
</body>

</html>