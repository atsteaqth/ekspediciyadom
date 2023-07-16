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

<?php if (!empty($arResult['ITEMS'])): ?>

<section id="news-app" class="blog pdd100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="mt-minus-10 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s"><?=$arResult['NAME']?></h2>
                    <h4 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s"><?=$arResult['DESCRIPTION']?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($arResult['ITEMS'] as $arItem) : ?>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                <div class="single-article">
                    <div class="article-img">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Vanda">
                            <span class="date"><?=switchDate($arItem['ACTIVE_FROM'])?></span>
                    </div>
                    <div class="article-text">
                        <span class="article-category">Mobile</span>
                        <h4><?=$arItem['NAME']?></h4>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php endif; ?>






