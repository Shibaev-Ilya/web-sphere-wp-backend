<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the <main class="main"> and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_sphere
 */

?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__container">
            <div class="footer__row footer__top">
                <?php if ( is_front_page() ) { ?>
                    <div class="footer__logo footer__logo_link">
                        <svg class="footer__logo-img">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#logo"></use>
                        </svg>
                        <span class="footer__logo-text"><?php _e( 'Web Sphere', 'web_sphere' ) ?></span>
                    </div>
                <?php } else { ?>
                    <a class="footer__logo footer__logo_link" href="<?php echo esc_url( home_url( '/' ) ) ?>">
                        <svg class="footer__logo-img">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#logo"></use>
                        </svg>
                        <span class="footer__logo-text"><?php _e( 'Web Sphere', 'web_sphere' ) ?></span>
                    </a>
                <?php } ?>
                <?php wp_nav_menu(
                        array(
                                'theme_location' => 'footer-menu',
                                'container'      => false,
                                'menu_class'     => 'footer__menu-wrap',
                                'depth'          => 1,
                        )
                ); ?>
            </div>
            <div class="footer__row footer__contacts">
                <?php if ( get_theme_mod( 'site_phone' ) ) { ?>
                    <div class="footer__contacts-item"><?php _e( 'Телефон', 'web_sphere' ) ?>: <a
                                href="tel:<?php echo preg_replace( '/\D/', '', get_theme_mod( 'site_phone' ) ) ?>"><?php echo get_theme_mod( 'site_phone' ) ?></a>
                    </div>
                <?php } ?>
                <?php if ( get_theme_mod( 'site_email' ) ) { ?>
                <div class="footer__contacts-item"><?php _e( 'E-mail', 'web_sphere' ) ?>: <a
                            href="mailto:<?php echo get_theme_mod( 'site_email' ) ?>"><?php echo get_theme_mod( 'site_email' ) ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="footer__row footer__bottom">
                <div class="footer__copyright">© Web Sphere 2025, All Rights Reserved</div>
                <div class="footer__bottom-links">
                    <a class="footer__copyright" href="<?php echo esc_url( '/policy/' ) ?>" target="_blank"
                       rel="noopener"><?php _e( 'Политика конфиденциальности', 'web_sphere' ) ?></a>
                    <a class="footer__copyright" href="<?php echo esc_url( '/cookie/' ) ?>" target="_blank"
                       rel="noopener"><?php _e( 'Политика использования файлов cookie', 'web_sphere' ) ?></a>
                    <a class="footer__copyright" href="<?php echo esc_url( '/agreement/' ) ?>" target="_blank"
                       rel="noopener"><?php _e( 'Согласие на обработку персональных данных', 'web_sphere' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal js-modal" id="callback">
    <div class="modal__wrapper modal-contact">
        <button class="js-button-close modal__btn-close" title="Close" tabindex="0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1">
                <path d="M20 20L4 4m16 0L4 20"></path>
            </svg>
        </button>
        <div class="modal__inner modal-contact__inner">
            <div class="modal__title"><?php _e( 'Обсудим проект?', 'web_sphere' ) ?></div>
            <p class="modal-contact__text">
                <?php
                printf(
                        __( 'Привет! Меня зовут Александр, и я буду рад помочь с вашим проектом, можете позвонить по телефону %s или связаться по контактам ниже.', 'web_sphere' ),
                        sprintf(
                                '<a href="tel:%s">%s</a>',
                                esc_attr( preg_replace( '/\D/', '', get_theme_mod( 'site_phone' ) ) ),
                                esc_html( get_theme_mod( 'site_phone' ) )
                        )
                );
                ?>
            </p>
            <div class="modal-contact__links">
                <?php if ( get_theme_mod( 'site_social_telegram' ) ) { ?>
                    <a class="modal-contact__link"
                       href="<?php echo esc_url( get_theme_mod( 'site_social_telegram' ) ) ?>" target="_blank">
                        <svg width="40" height="40" viewBox="-1 -1  18 18" xmlns="http://www.w3.org/2000/svg"
                             class="bi bi-telegram">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
                        </svg>
                        <span>Telegram</span>
                    </a>
                <?php }
                if ( get_theme_mod( 'site_social_whatsapp' ) ) { ?>
                    <a class="modal-contact__link"
                       href="<?php echo esc_url( get_theme_mod( 'site_social_whatsapp' ) ) ?>" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 1024 1024" class="icon"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8-10.1-3.8-17.5-5.6-24.8 5.6-7.4 11.1-28.4 35.8-35 43.3-6.4 7.4-12.9 8.3-23.8 2.8-64.8-32.4-107.3-57.8-150-131.1-11.3-19.5 11.3-18.1 32.4-60.2 3.6-7.4 1.8-13.7-1-19.3-2.8-5.6-24.8-59.8-34-81.9-8.9-21.5-18.1-18.5-24.8-18.9-6.4-.4-13.7-.4-21.1-.4-7.4 0-19.3 2.8-29.4 13.7-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5 70 30.2 97.4 32.8 132.4 27.6 21.3-3.2 65.2-26.6 74.3-52.5 9.1-25.8 9.1-47.9 6.4-52.5-2.7-4.9-10.1-7.7-21-13z"></path>
                            <path d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9-53.3 22.8-101.1 55.2-142 96.5-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3 53.5-22.3 101.6-54.3 142.8-95.2 41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"></path>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                <?php } ?>
            </div>

            <p class="modal-contact__text"><?php _e( 'Либо заполните форму и мы свяжемся с вами так быстро, как только сможем', 'web_sphere' ) ?></p>
            <?php echo do_shortcode( '[contact-form-7 id="4b677ce" title="Shall we discuss the project?" html_class="form modal-contact__form"]' ); ?>
        </div>
    </div>
</div>
<div class="modal modal_info js-modal" id="popup">
    <div class="modal__wrapper">
        <button class="js-button-close modal__btn-close" title="Close" tabindex="0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1">
                <path d="M20 20L4 4m16 0L4 20"></path>
            </svg>
        </button>
        <div class="modal__inner">
            <p class="modal__text js-modal-text"></p>
        </div>
    </div>
</div>
<div class="contact-widget shake-right">
    <?php if ( get_theme_mod( 'site_social_telegram' ) ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'site_social_telegram' ) ) ?>" target="_blank">
            <span class="visually-hidden">Telegram</span>
            <svg width="80" height="80" viewBox="-1 -1  18 18" xmlns="http://www.w3.org/2000/svg"
                 class="bi bi-telegram">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg>
        </a>
    <?php }
    if ( get_theme_mod( 'site_social_whatsapp' ) ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'site_social_whatsapp' ) ) ?>"  target="_blank">
            <span class="visually-hidden">WhatsApp</span>
            <svg width="80" height="80" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg">
                <path d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8-10.1-3.8-17.5-5.6-24.8 5.6-7.4 11.1-28.4 35.8-35 43.3-6.4 7.4-12.9 8.3-23.8 2.8-64.8-32.4-107.3-57.8-150-131.1-11.3-19.5 11.3-18.1 32.4-60.2 3.6-7.4 1.8-13.7-1-19.3-2.8-5.6-24.8-59.8-34-81.9-8.9-21.5-18.1-18.5-24.8-18.9-6.4-.4-13.7-.4-21.1-.4-7.4 0-19.3 2.8-29.4 13.7-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5 70 30.2 97.4 32.8 132.4 27.6 21.3-3.2 65.2-26.6 74.3-52.5 9.1-25.8 9.1-47.9 6.4-52.5-2.7-4.9-10.1-7.7-21-13z"/>
                <path d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9-53.3 22.8-101.1 55.2-142 96.5-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3 53.5-22.3 101.6-54.3 142.8-95.2 41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z"/>
            </svg>
        </a>
    <?php } ?>
</div>
<div class="cookie" id="cookie-notification">
    <div class="container cookie__inner">
        <p class="cookie__text">
            <?php
            printf(
                    __( 'На этом сайте не используются файлы %s', 'web_sphere' ),
                    sprintf(
                            '<a href="%s" target="_blank">%s</a>',
                            esc_url( '/cookie' ),
                            __( 'cookie', 'web_sphere' )
                    )
            );
            ?>
        </p>
        <button class="cookie__btn simple-button simple-button_light  js-cookie-accept">
            <span>OK</span>
            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M12,2 C12.7139344,2 13.4186669,2.07493649 14.1058513,2.22228153 C14.6865234,2.34678839 14.8990219,3.06470877 14.4796691,3.48521478 C14.0147885,3.95137375 13.75,4.57867916 13.75,5.25 C13.75,6.42043414 14.5611837,7.42718287 15.6858365,7.68625206 C16.0559035,7.77149876 16.3038519,8.11989963 16.2631619,8.49747198 C16.2544079,8.57870262 16.25,8.66307444 16.25,8.75 C16.25,10.1307119 17.3692881,11.25 18.75,11.25 C19.4766017,11.25 20.151276,10.9392994 20.6235262,10.4053218 C21.0526462,9.92011177 21.8536336,10.1704416 21.9300905,10.8136579 C21.9765784,11.2047517 22,11.6008646 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,3.5 C7.30557963,3.5 3.5,7.30557963 3.5,12 C3.5,16.6944204 7.30557963,20.5 12,20.5 C16.4367197,20.5 20.0795061,17.1007677 20.4660785,12.7645841 L20.4850437,12.5084524 L20.492,12.351 L20.2985099,12.4390561 C19.9679152,12.5778546 19.6173377,12.672508 19.2549465,12.7182945 L18.9810657,12.743398 L18.75,12.75 C16.7439233,12.75 15.0827631,11.2732368 14.7943277,9.34751855 L14.7694285,9.14674696 L14.755,8.96 L14.6100904,8.89964226 C13.3259006,8.32272189 12.4198681,7.0959893 12.2714595,5.6656449 L12.2549278,5.44962193 L12.25,5.25 C12.25,4.80312661 12.3237894,4.36763736 12.4635899,3.95776709 L12.5553294,3.71503308 L12.64,3.525 L12.363736,3.50762946 L12,3.5 Z M15,16 C15.5522847,16 16,16.4477153 16,17 C16,17.5522847 15.5522847,18 15,18 C14.4477153,18 14,17.5522847 14,17 C14,16.4477153 14.4477153,16 15,16 Z M8,15 C8.55228475,15 9,15.4477153 9,16 C9,16.5522847 8.55228475,17 8,17 C7.44771525,17 7,16.5522847 7,16 C7,15.4477153 7.44771525,15 8,15 Z M12,11 C12.5522847,11 13,11.4477153 13,12 C13,12.5522847 12.5522847,13 12,13 C11.4477153,13 11,12.5522847 11,12 C11,11.4477153 11.4477153,11 12,11 Z M7,8 C7.55228475,8 8,8.44771525 8,9 C8,9.55228475 7.55228475,10 7,10 C6.44771525,10 6,9.55228475 6,9 C6,8.44771525 6.44771525,8 7,8 Z"
                      fill="#ffffff"></path>
            </svg>
        </button>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
