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

<div class="timeline">
    <span class="timeline-icon"></span>
    <span class="year">
        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="" class="img-responsive wow fadeInLeft" data-wow-duration="1s">
    </span>
    <div class="timeline-content wow fadeInRight" data-wow-duration="1s">
        <h2><?=$arItem['NAME']?></h2>
        <p class="description"><?=$arItem['PREVIEW_TEXT']?></p>
    </div>
</div>
<?endforeach;?>



