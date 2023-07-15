<? use Bitrix\Main\Page\Asset;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . "/css/plugins.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/scss/stars.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/colors/theme-color.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/jquery.fancybox.css?v=2.1.5");

$asset->addJs(SITE_TEMPLATE_PATH . "/js/modernizr.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.1.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.pack.js?v=2.1.5");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

global $APPLICATION
?>



<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="База отдыха Экспедиция">
    <meta name="description" content="Что может быть лучше отдыха на природе? Только времяпрепровождение на уютной и гостеприимной базе отдыха Экспедиция в Тульской области!
Расположенная в 120 км от Москвы и в 60 км от Тулы. Базы отдыха является прекрасным местом, как для спокойного семейного отдыха, так и для большой компании.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <? $APPLICATION->ShowPanel(); ?>
</head>
<body>



<header id="home" class="home <?=$APPLICATION->GetCurPage() === '/' ? 'bg-image' : 'header-blog'?>">
    <div class="overlay">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default nav-sec navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="navbar-collapse collapse" aria-expanded="false" style="">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?=$APPLICATION->GetCurPage() == '/' ? 'active' : ''?>"><a href="/"><span>Главная</span></a></li>
                        <li class="<?=$APPLICATION->GetCurPage() == '/doma/' ? 'active' : ''?>"><a href="/doma/"><span>Дома</span></a></li>
                        <li><a href="/#history-app"><span>О нас</span></a></li>
                        <li><a href="/#review-app"><span>Отзывы</span></a></li>
                        <li><a href="/#news-app"><span>Новости</span></a></li>
                        <li><a href="/#timelineWork"><span>Куда сходить</span></a></li>
                        <li><a href="/#contact"><span>Контакты</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->

        <? if ($APPLICATION->GetCurPage() != '/'): ?>

            <div class="container">
            <div class="row">
                <!-- Start Text Header -->
                <div class="col-sm-12">
                    <div class="blog-inner">
                        <div class="blog-content">
                            <div class="page-title">
                                <h2 class="h1 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s"><?$APPLICATION->ShowTitle()?></h2>
                            </div>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "with.bg",
                                array(
                                    "COMPONENT_TEMPLATE" => "with.bg",
                                    "START_FROM" => "0",
                                    "PATH" => "",
                                    "SITE_ID" => "s1"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
                <!-- End Text Header -->
            </div>
        </div>

        <?endif; ?>


