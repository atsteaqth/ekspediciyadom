<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $arItem):?>


    <li class="comment-content wow fadeInUp" data-wow-duration="1s">
        <div class="author-details">
            <h4><a ><?=$arItem['NAME']?></a></h4>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <div class="col-12" style="margin-bottom: 30px">
                <div class="stars stars--comment">
                    <div class="stars__name">Сервис</div>
                    <div class="stars__wrapper">
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_SERVICE']['VALUE'] >= 1 ? 'fill' : ''?>" data-value="1" data-name="service"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_SERVICE']['VALUE'] >= 2 ? 'fill' : ''?>" data-value="2" data-name="service"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_SERVICE']['VALUE'] >= 3 ? 'fill' : ''?>" data-value="3" data-name="service"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_SERVICE']['VALUE'] >= 4 ? 'fill' : ''?>" data-value="4" data-name="service"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_SERVICE']['VALUE'] >= 5 ? 'fill' : ''?>" data-value="5" data-name="service"></div>
                    </div>
                </div>
                <div class="stars stars--comment">
                    <div class="stars__name">Размещение</div>
                    <div class="stars__wrapper">
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PLACING']['VALUE'] >= 1 ? 'fill' : ''?>" data-value="1" data-name="placing"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PLACING']['VALUE'] >= 2 ? 'fill' : ''?>" data-value="2" data-name="placing"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PLACING']['VALUE'] >= 3 ? 'fill' : ''?>" data-value="3" data-name="placing"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PLACING']['VALUE'] >= 4 ? 'fill' : ''?>" data-value="4" data-name="placing"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PLACING']['VALUE'] >= 5 ? 'fill' : ''?>" data-value="5" data-name="placing"></div>
                    </div>
                </div>
                <div class="stars stars--comment">
                    <div class="stars__name">Чистота</div>
                    <div class="stars__wrapper">
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_CLEAR']['VALUE'] >= 1 ? 'fill' : ''?>" data-value="1" data-name="clear"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_CLEAR']['VALUE'] >= 2 ? 'fill' : ''?>" data-value="2" data-name="clear"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_CLEAR']['VALUE'] >= 3 ? 'fill' : ''?>" data-value="3" data-name="clear"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_CLEAR']['VALUE'] >= 4 ? 'fill' : ''?>" data-value="4" data-name="clear"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_CLEAR']['VALUE'] >= 5 ? 'fill' : ''?>" data-value="5" data-name="clear"></div>
                    </div>
                </div>
                <div class="stars stars--comment">
                    <div class="stars__name">Соотношение цены и качества</div>
                    <div class="stars__wrapper">
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'] >= 1 ? 'fill' : ''?>" data-value="1" data-name="price"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'] >= 2 ? 'fill' : ''?>" data-value="2" data-name="price"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'] >= 3 ? 'fill' : ''?>" data-value="3" data-name="price"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'] >= 4 ? 'fill' : ''?>" data-value="4" data-name="price"></div>
                        <div class="fa fa-star stars__item <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'] >= 5 ? 'fill' : ''?>" data-value="5" data-name="price"></div>
                    </div>
                </div>
            </div>
            <div class="comment-date">
                <span><?=$arItem['DATE_CREATE']?></span>
            </div>
        </div>
    </li>

<?endforeach;?>





