<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



$this->setFrameMode(true); ?>



<? while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>



    <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]+1):?>



        <div style="width:100%;text-align:center;">


            <div class="b-news__more">
                <a class="NewShowElement" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>">Больше</a>
        </div>



    <?endif?>



    <?$arResult["nStartPage"]++;?>



<?endwhile;?>