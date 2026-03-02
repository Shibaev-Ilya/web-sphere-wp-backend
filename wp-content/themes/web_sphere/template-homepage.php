<?php
/**
 * Template name: Homepage template
 */

get_header();
?>

    <section class="intro">
        <div class="container intro__inner">
            <div class="intro__text-block">
                <p class="intro__title focus-in-fast">ВЕБ <span class="brand-color">СФЕРА</span></p>
                <p class="focus-in intro__subtitle">разработка сайтов</p>
            </div>
            <canvas class="sphere-canvas" id="sphereCanvas" width="600" height="600"></canvas>
        </div>
    </section>

    <section class="intro-text">
        <div class="container">
            <h1 class="header-2">
                <?php
                printf(
                        __( 'Сайты %s, которые приносят заявки', 'web_sphere' ),
                        sprintf(
                                '<span class="brand-color">%s</span>',
                                __( 'для бизнеса', 'web_sphere' )
                        )
                );
                ?>
            </h1>
            <p><?php _e( 'Разрабатываем современные и быстрые сайты. От идеи до результата.', 'web_sphere' ) ?></p>
            <div class="intro-text__buttons">
                <button class="button js-open-modal" data-modal-id="callback">
                    <span><?php _e( 'Обсудить проект', 'web_sphere' ) ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                        <path d="M2.375 1.5L8.375 7.5L2.375 13.5" stroke="#111111" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="header-2 js-scroll-animate scroll-animate">
                <?php
                printf(
                        __( 'Какие %s, мы делаем?', 'web_sphere' ),
                        sprintf(
                                '<span class="brand-color bold">%s</span>',
                                __( 'сайты', 'web_sphere' )
                        )
                );
                ?>
            </h2>
            <div class="services__list">
                <div class="services__item services__item_wide js-open-modal js-scroll-animate scroll-animate scroll-animate_top"
                     data-modal-id="callback">
                    <div class="services__image">
                        <picture>
                            <source type="image/webp"
                                    srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/landings-mob.webp"
                                    media="(max-width: 500px)"/>
                            <source srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/landings-mob.jpg"
                                    media="(max-width: 500px)"/>
                            <source type="image/webp"
                                    srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/landings.webp"/>
                            <img class="services__landings-img"
                                 src="<?php echo get_template_directory_uri() ?>/dist/img/content/landings.jpg" alt=""
                                 width="396"
                                 height="360"
                                 loading="lazy">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3">Одностраничный сайт</h3>
                        <p>
                            <?php _e( 'Профессиональная разработка одностраничных сайтов для запуска рекламы. Высокая конверсия в заявки и
                            продажи. Быстрые сроки и результат под ключ.', 'web_sphere' ) ?>
                        </p>
                    </div>
                </div>
                <div class="services__item js-open-modal js-scroll-animate scroll-animate scroll-animate_left"
                     data-modal-id="callback">
                    <div class="services__image">
                        <picture>
                            <source type="image/webp"
                                    srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/com.webp"/>
                            <img class="services__landings-img"
                                 src="<?php echo get_template_directory_uri() ?>/dist/img/content/com.jpg" alt=""
                                 width="396"
                                 height="360"
                                 loading="lazy">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3">
                            <?php _e( 'Корпоративные сайты и сайты-визитки', 'web_sphere' ) ?>
                        </h3>
                        <p>
                            <?php _e( 'Разрабатываем современные корпоративные сайты и сайты-визитки. Увеличиваем доверие к бренду и
                            привлекаем клиентов через поисковые системы. Под ключ.', 'web_sphere' ) ?>
                        </p>
                    </div>
                </div>
                <div class="services__item js-open-modal js-scroll-animate scroll-animate scroll-animate_right"
                     data-modal-id="callback">
                    <div class="services__image">
                        <picture>
                            <source type="image/webp"
                                    srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/ecomerce.webp"/>
                            <img class="services__landings-img"
                                 src="<?php echo get_template_directory_uri() ?>/dist/img/content/ecomerce.jpg" alt=""
                                 width="396"
                                 height="360"
                                 loading="lazy">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3"><?php _e( 'Интернет-магазины', 'web_sphere' ) ?></h3>
                        <p><?php _e( 'Создаем высококонверсионные интернет-магазины с удобной навигацией и интеграцией с платежными
                            системами на самой популярной системе управления контентом Wordpress. SEO-оптимизация для
                            роста продаж.', 'web_sphere' ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="marquee js-scroll-animate scroll-animate">
        <div class="container">
            <div class="marquee__inner">
                <div class="marquee__items">
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                </div>
                <div class="marquee__items">
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                </div>
            </div>
            <div class="marquee__inner">
                <div class="marquee__items marquee__items_reverse">
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                </div>
                <div class="marquee__items marquee__items_reverse">
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                    <div class="marquee__item">Получите лучшее предложение!</div>
                    <div class="marquee__item">/ Веб Сфера /</div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section" id="contact-us">
        <div class="container">
            <div class="form-section__form-wrap">
                <p class="form-section__title header-2 js-scroll-animate scroll-animate">
                    <?php _e( 'Напишите нам', 'web_sphere' ) ?>
                </p>
                <p class="form-section__subtitle js-scroll-animate scroll-animate">
                    <?php _e( 'И мы свяжемся с вами в ближайшее время и обсудим детали работ', 'web_sphere' ) ?></p>
                <?php echo do_shortcode( '[contact-form-7 id="f2d1433" title="Contact us" html_class="form js-scroll-animate scroll-animate"]' ); ?>
            </div>
            <div class="form-section__text-wrap">
                <p class="form-section__text js-scroll-animate scroll-animate">ВЕБ <br>СФЕРА</p>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="advantages__inner">
                <h2 class="header-2 js-scroll-animate scroll-animate">
                    <?php
                    printf(
                            __( 'Почему %s, работают?', 'web_sphere' ),
                            sprintf(
                                    '<span class="brand-color">%s</span>',
                                    __( 'с нами', 'web_sphere' )
                            )
                    );
                    ?>
                </h2>

                <ul class="advantages__list">
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b><?php _e( 'Никакой абонентской платы', 'web_sphere' ) ?></b>
                        </p>
                        <p><?php _e( 'За простые проекты — только единоразовая оплата. Вы платите за результат, а не за "место в
                            интернете".', 'web_sphere' ) ?></p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b><?php _e( 'Честные сроки и гарантии', 'web_sphere' ) ?></b>
                        </p>
                        <p><?php _e( 'Четко прописываем сроки в договоре и даем гарантию 1 год на все работы.', 'web_sphere' ) ?></p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b><?php _e( 'Говорим на одном языке', 'web_sphere' ) ?></b>
                        </p>
                        <p><?php _e( 'Объясняем все процессы просто и понятно. Вы всегда в курсе этапов разработки.', 'web_sphere' ) ?></p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b><?php _e( 'Скорость и оптимизация', 'web_sphere' ) ?></b>
                        </p>
                        <p><?php _e( 'Наши сайты быстро загружаются, что важно для SEO и удобства пользователей.', 'web_sphere' ) ?></p>
                    </li>

                </ul>
            </div>
        </div>

    </section>

<?php
get_footer();
