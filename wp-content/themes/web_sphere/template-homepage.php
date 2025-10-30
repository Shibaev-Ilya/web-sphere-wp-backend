<?php
/**
 * Template name: Homepage template
 */

get_header();
?>

    <section class="intro">
        <div class="container intro__inner">
            <div class="intro__text-block">
                <p class="intro__title focus-in-fast">Web <span class="brand-color">Sphere</span></p>
                <p class="focus-in intro__subtitle">we develop web-sites</p>
            </div>
            <canvas class="sphere-canvas" id="sphereCanvas" width="600" height="600"></canvas>
        </div>
    </section>

    <section class="intro-text">
        <div class="container">
            <h1 class="header-2">Сайты <span class="brand-color">для бизнеса</span>, которые приносят заявки</h1>
            <p>Разрабатываем современные сайты на WordPress, MODX и быстрые лендинги. От идеи до результата.</p>
            <div class="intro-text__buttons">
                <button class="button js-open-modal" data-modal-id="callback">
                    <span>Обсудить проект</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                        <path d="M2.375 1.5L8.375 7.5L2.375 13.5" stroke="#111111" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="header-2 js-scroll-animate scroll-animate">Какие <span class="brand-color bold">сайты</span> мы
                делаем?</h2>
            <div class="services__list">
                <div class="services__item services__item_wide js-open-modal js-scroll-animate scroll-animate scroll-animate_top"
                     data-modal-id="callback">
                    <div class="services__image">
                        <picture>
                            <source type="image/webp"
                                    srcSet="<?php echo get_template_directory_uri() ?>/dist/img/content/landings.webp"/>
                            <img class="services__landings-img"
                                 src="<?php echo get_template_directory_uri() ?>/dist/img/content/landings.jpg" alt=""
                                 width="396"
                                 height="360">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3">Landing Page</h3>
                        <p>Профессиональная разработка Landing Page для запуска рекламы. Высокая конверсия в заявки и
                            продажи. Быстрые сроки и результат под ключ.</p>
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
                                 height="360">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3">Корпоративные сайты и сайты-визитки</h3>
                        <p>Разрабатываем современные корпоративные сайты и сайты-визитки. Увеличиваем доверие к бренду и
                            привлекаем клиентов через поисковые системы. Под ключ.</p>
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
                                 height="360">
                        </picture>
                    </div>
                    <div class="services__item-inner">
                        <h3 class="header-3">Интернет-магазины</h3>
                        <p>Создаем высококонверсионные интернет-магазины с удобной навигацией и интеграцией с платежными
                            системами на самой популярной системе управления контентом Wordpress. SEO-оптимизация для
                            роста продаж.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="marquee js-scroll-animate scroll-animate">
        <div class="container">
            <div class="marquee__inner">
                <div class="marquee__items">
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                </div>
                <div class="marquee__items">
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                </div>
            </div>
            <div class="marquee__inner">
                <div class="marquee__items marquee__items_reverse">
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                </div>
                <div class="marquee__items marquee__items_reverse">
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                    <div class="marquee__item">Get best offer!</div>
                    <div class="marquee__item">Web Sphere</div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section" id="contact-us">
        <div class="container">
            <p class="form-section__title header-2 js-scroll-animate scroll-animate">Напишите нам</p>
            <p class="form-section__subtitle js-scroll-animate scroll-animate">И мы свяжемся с вами в ближайшее время и
                обсудим детали работ</p>
            <form class="form js-scroll-animate scroll-animate">
                <input type="hidden" name="type" value="form">
                <input type="hidden" name="form_id" value="callback">
                <input type="hidden" name="form_name" value="Callback">
                <label>
                    <input class="form__input" type="text" name="name" placeholder="Имя"/>
                </label>
                <label>
                    <input class="form__input" type="tel" name="phone" placeholder="Телефон*">
                </label>
                <label>
                    <input class="form__input" type="email" name="email" placeholder="Email">
                </label>
                <label>
                    <textarea class="form__input" name="message" cols="30" rows="5"
                              placeholder="Дополнительная информация о проекте"></textarea>
                </label>
                <label class="form__checkbox-label">
                    <input class="form__checkbox" type="checkbox" name="agree" required/>
                    <span>
                        Согласен на <a href="/agreement" target="_blank">обработку персональных данных</a>
                    </span>
                </label>
                <label class="form__checkbox-label">
                    <input class="form__checkbox" type="checkbox" name="agree" required/>
                    <span>
                        Ознакомлен с <a href="/policy" target="_blank" class="">политикой конфиденциальности</a>
                    </span>
                </label>
                <button type="submit" class="form__submit-button simple-button simple-button_light">Отправить</button>
            </form>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="advantages__inner">
                <h2 class="header-2 js-scroll-animate scroll-animate">Почему <span class="brand-color">с нами</span>
                    работают?</h2>

                <ul class="advantages__list">
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b>Никакой абонентской платы</b>
                        </p>
                        <p>За простые проекты — только единоразовая оплата. Вы платите за результат, а не за "место в
                            интернете".</p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b>Честные сроки и гарантии</b>
                        </p>
                        <p>Четко прописываем сроки в договоре и даем гарантию 1 год на все работы.</p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b>Говорим на одном языке</b>
                        </p>
                        <p>Объясняем все процессы просто и понятно. Вы всегда в курсе этапов разработки.</p>
                    </li>
                    <li class="js-scroll-animate scroll-animate">
                        <p class="advantages__item-title">
                            <svg>
                                <use xlink:href="img/sprites/sprite.svg#award"></use>
                            </svg>
                            <b>Скорость и оптимизация</b>
                        </p>
                        <p>Наши сайты быстро загружаются, что важно для SEO и удобства пользователей.</p>
                    </li>

                </ul>
            </div>
        </div>

    </section>

<?php
get_footer();
