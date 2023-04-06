<?php
/*
 * Template Name: DIATheme
 * Description: A simple WordPress template with language support and single post page.
 * Author: Arthur Mkrtchian
 * Author URI: Your Website
 * Version: 1.0
 */
?>
<footer>
        <div class="container">
            <div class="footer__column">
                <div class="footer__column-heading">
                    <div class="footer-logo">
                        <?php if (function_exists("the_custom_logo")) {
                            the_custom_logo();
                        } ?>
                    </div>
                </div>
                <a href="#" class="footer__column-item">Dnipropetrovsk Regional Council</a>
                <a href="#" class="footer__column-item">Dnipropetrovsk Regional State Administration</a>
            </div>

            <div class="footer__column">
                <div class="footer__column-heading">
                    <h3 class="footer__column-heading-text">Links</h3>
                </div>
                <a href="#" class="footer__column-item">Starting a business</a>
                <a href="#" class="footer__column-item">Business services</a>
                <a href="#" class="footer__column-item">Preferences for investors</a>
                <a href="#" class="footer__column-item">Access to public information</a>
                <a href="#" class="footer__column-item">Projects and proposals submission</a>
            </div>

            <div class="footer__column">
                <div class="footer__column-heading">
                    <h3 class="footer__column-heading-text">About Agency</h3>
                </div>
                <a href="#" class="footer__column-item">+38 056 742 86 87</a>
                <a href="#" class="footer__column-item">info@dia.dp.ua</a>
                <a href="#" class="footer__column-item">Dnipro, 2 О. Paul Ave., office 538</a>
            </div>
        </div>
        <div class="copyright">Dnipropetrovsk Investment Agency 2022. Al Rights Reserved.</div>
    </footer>
    <script src="js/header.js"></script>
    <script src="js/menu.js"></script>
    
    </div>
</body>

</html>