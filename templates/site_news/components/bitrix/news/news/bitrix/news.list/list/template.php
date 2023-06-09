<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
	<div class="news-list">
		<b><?=$arResult["NAME"]?></b>
        <div class="loadmore_wrap">
		<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li><a class="loadmore_item" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
		<?endforeach;?>
		</ul>
        </div>
	</div>
<?endif?>
