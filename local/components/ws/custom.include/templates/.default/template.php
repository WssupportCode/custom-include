<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arResult
 * @var array $arParams
 */

?>
<!-- Верстка включаемой области -->
<?php if ($arParams["ACTIVE"] == "Y"): ?>
    <div class="sAbout__col col-lg-6">
        <div class="sAbout__wrap">
            <?php if (!empty($arParams["HEADER"])): ?>
                <div class="sAbout__title">
                    <!-- Вставка макроса из параметров -->
                    <?=$arParams["HEADER"]?>
                </div>
            <?php endif; ?>
            <div class="sAbout__links">
                <!-- Вставка макроса из APP_STORE_LINK -->
                <?php if (!empty($arParams["HEADER"])): ?>
                    <a target="_blank" class="sAbout__link" href="<?=$arParams["APP_STORE_LINK"]?>">
                        <img class="res-i" src="/static/img/@2x/appstore.png" alt=""/>
                    </a>
                <?php endif; ?>
                <!-- Вставка макроса из параметров -->
                <?php if (!empty($arParams["GPLAY_LINK"])): ?>
                    <a target="_blank" class="sAbout__link" href="<?=$arParams["GPLAY_LINK"]?>">
                        <img class="res-i" src="/static/img/@2x/gplay.png" alt=""/>
                    </a>
                <?php endif; ?>
            </div>
            <picture class="lazy">
                <source srcset="#" data-srcset="/static/img/@2x/webp/api.webp" type="image/webp" media="(min-width:576px)"/>
                <source srcset="#" data-srcset="/static/img/@1x/webp/api.webp" type="image/webp"/>
                <source srcset="#" data-srcset="/static/img/@2x/api.png" type="image/png" media="(min-width:576px)"/>
                <source srcset="#" data-srcset="/static/img/@1x/api.png" type="image/png"/><img src="#" data-src="/static/img/@2x/api.png" alt=""/>
            </picture>
        </div>
    </div>
<?php endif; ?>
<!-- Конец верстки включаемой области -->