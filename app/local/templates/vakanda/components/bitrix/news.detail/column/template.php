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

<section id="blogP02-content" class="blogP02-content post-page02">
    <div class="container">
        <div class="row">
            <!-- Start Right Side -->
            <div class="col-lg-8 col-md-8 col-12">
                <!-- Start Single Post -->
                <div class="single-article02 mgbtt50 wow fadeInUp" data-wow-duration="1s" style="background: #ffffff;">
                    <div class="article-img">
                        <a href="#">
                            <img
                                src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                                alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                                title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                            >
                        </a>
                    </div>
                    <div class="article-text">
                        <h4><a href="#"><?=$arResult['NAME']?></a></h4>
                        <div><?=$arResult['DETAIL_TEXT']?></div>
                    </div>
                    <div class="article-footer">

                        <div class="tags-post">
                            <?foreach ($arResult['PROPERTIES']['ATT_TAGS']['VALUE'] as $tag):?>
                                <a><?=$tag?></a>
                            <?endforeach;?>
                        </div>
                        <div style="display: inline-flex;">
                            <a href="https://booking-expedition.agast.ru/" target="_blank" style="
    background: linear-gradient(-45deg, #FFAE40, #FFC473) !important;
    border-radius: 50px;
    color: #FFF;
    padding: 10px;
    font-size: 16px;
    font-weight: 600;
"> Забронировать </a>
						</div>
                        <div class="bookmark-link">
                            <a href="#" title="Like"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Right Side -->
            <!-- Start Right Side -->
            <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-sidebar">



                    <!-- Start Gallery Sidebar -->
                    <div class="gallery-sidebar sidebar-flr48 box-sidebar02 wow fadeInUp" data-wow-duration="1s">
                        <div class="sidebar-title02">
                            <h4><i class="ion-images"></i>Фотографии</h4>
                        </div>
                        <div class="gallery-sidebar-content">
                            <div class="gallery-feed">
                                <? foreach ($arResult['DISPLAY_PROPERTIES']['ATT_PHOTO']['FILE_VALUE'] as $photo): ?>
                                    <a class="fancybox" href="<?=$photo['SRC']?>" data-fancybox-group="gallery">
                                        <i class="ion-ios-search-strong"></i>
                                        <img src="<?=$photo['SRC']?>" alt="" />
                                    </a>
                                <?endforeach;?>

                            </div>
                        </div>
                    </div>
                    <!-- End Gallery Sidebar -->

                    <!-- Start Recent Posts Sidebar -->
                    <div class="recentposts-sidebar sidebar-fll48 wow fadeInUp" data-wow-duration="1s">
                        <div class="recentposts-sidebar-content box-sidebar">
                            <div class="tab-recentposts">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#" aria-controls="home" role="tab" data-toggle="tab">Другие дома</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Start Single Tab #1 -->
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <? foreach ($arResult['OTHERS'] as $other): ?>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?=$other['DETAIL_PAGE_URL']?>">
                                                        <img class="media-object" src="<?=$other['PREVIEW_PICTURE']?>" alt="<?=$other['NAME']?>">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="<?=$other['DETAIL_PAGE_URL']?>"><?=$other['NAME']?></a></h4>
                                                </div>
                                            </div>
                                        <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Posts Sidebar -->

                </div>
            </div>
            <!-- End Right Side -->
        </div>
    </div>
</section>
