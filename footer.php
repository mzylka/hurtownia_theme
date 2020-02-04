<footer class="footer">
    <div class="footer__logo-box">
        <img src="<?php bloginfo('template_directory');?>/images/hurtownia-logo.png" class="footer__logo">
    </div>
    <div class="row">
        <div class="col-1-of-2">
            <div class="footer__contact">
                <h3>Hurtownia Antyków</h3>
                <ul>
                    <li>Kołobrzeg 78-100, ul. Wylotowa 87</li>
                    <li>tel: (+48)606 637 713</li>
                    <li>Godziny otwarcia: 10.00-18.00</li>
                    <li>e-mail: fanta001@interia.pl</li>
                </ul>
                <div class="footer__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1167.584606190323!2d15.55044948368015!3d54.177078997520205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470015a728f84cb3%3A0xb7677d630c8650fd!2santyki%20wylotowa!5e0!3m2!1spl!2spl!4v1579191151493!5m2!1spl!2spl" width="auto" height="250px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="footer__info">
            <h3>Informacje</h3>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu'
                        )
                    );
                ?>
            </div>
        </div>
    </div>

    <div class="footer__copyright">
    Copyright © Hurtownia Antyków 2020. Wszelkie prawa zastrzeżone.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>