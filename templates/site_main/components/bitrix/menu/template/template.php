<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>


    <div class="page-header__menu">
        <?php foreach ($arResult as $arItem): ?>
            <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?php if ($arItem["SELECTED"]): ?>
                <a class="page-header__menu-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <?php else: ?>
                <a class="page-header__menu-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?>е</a>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
<? endif ?>
