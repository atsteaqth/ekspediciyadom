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
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="mt-minus-10 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Дома</h2>
                    <h4 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">для вашего отдыха</h4>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <div class="row">
            <?foreach($arResult["FOR_DISPLAY"] as $arItem):?>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                <div class="single-article">
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
            <?endforeach;?>
        </div>
        <div class="row" style="display: flex; justify-content: center; margin-top: 80px">
            <div>
                <a href="/doma/" class="bttn-vanda-gradient">
                    <span>посмотреть все дома</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->

