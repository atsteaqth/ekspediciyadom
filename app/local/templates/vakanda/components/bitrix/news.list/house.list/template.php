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

<!-- Start Blog Section -->
<section id="blog" class="blog pdd100">
    <div class="container">

        <div class="row" style="display: flex; flex-wrap: wrap">
            <?php foreach($arResult["ITEMS"] as $arItem):?>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s" style="margin-top: 40px">
                <div class="single-article" style="height: 100%; background: #ffffff;">
                    <div class="article-img">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                        </a>
                    </div>
                    <div class="article-text">
                        <h4><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h4>
						<p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>

                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!-- End Blog Section -->

