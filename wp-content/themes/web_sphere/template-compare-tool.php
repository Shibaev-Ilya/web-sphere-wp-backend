<?php
/**
 * Template name: Compare tool page template
 */

get_header();
?>

    <div class="container compare-tool">
        <h1 class="header-1"><?php the_title(); ?></h1>
        <p>Наш онлайн‑инструмент поможет вам быстро найти различия между двумя текстами.<br>
            Просто вставьте исходный и изменённый варианты в соответствующие поля — и система наглядно покажет все изменения.</p>
        <div class="compare-tool__inner">
            <div class="compare-tool__item">
                <label for="text1">Исходный текст</label>
                <textarea rows="4" id="text1" placeholder="Введите первый текст..."></textarea>
            </div>
            <div class="compare-tool__item">
                <label for="text2">Измененный текст</label>
                <textarea rows="4" id="text2" placeholder="Введите второй текст..."></textarea>
            </div>
            <button class="js-compare simple-button compare-tool__submit-button">Сравнить тексты</button>
            <button class="js-reset simple-button compare-tool__reset-button">Стереть</button>
        </div>
        <div class="compare-tool__results" data-results>
            <p class="header-3">Результат сравнения:</p>
            <p class="compare-tool__result-description">Удаленные <span class="diff-deleted inline-block"></span> /
                Добавленные <span class="diff-inserted inline-block"></span></p>
            <div id="result" class="compare-tool__result"></div>
            <div id="stats" class="compare-tool__stats"></div>
        </div>
        <?php the_content(); ?>
    </div>

<?php

get_footer();
