<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>


    <div class="page-footer__menu-row row">
        <?php foreach ($arResult as $arItem): ?>
            <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?php if ($arItem["SELECTED"]): ?>
                <div class="page-footer__menu-col col-md-4 col-4"><a class="page-footer__menu-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </div>
            <?php else: ?>
                <div class="page-footer__menu-col col-md-4 col-4"><a class="page-footer__menu-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
<? endif ?>
