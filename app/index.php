<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><!-- Start Container -->
<!-- Start Container -->
<div class="container">
    <div class="row">
        <!-- Start Text Header -->
        <div class="col-md-9 col-sm-12">
            <div class="header-inner">
                <div class="header-content">
                    <h1 class="home-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">Приветствуем Вас на официальном сайте базы отдыха <span>Экспедиция</span></h1>
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">Что может быть лучше отдыха на природе? Только времяпрепровождение на уютной и гостеприимной базе отдыха Экспедиция в Тульской области!</h4>
                    <div class="bttn-head wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <a href="/doma/" class="bttn-vanda-gradient">
                            <span>Посмотреть дома</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Text Header -->
        <!-- Start Photo Here -->
        <div class="col-md-4 col-sm-12 hidden-sm hidden-xs">

        </div>
        <!-- End Photo Here -->
    </div>
</div>
<!-- End Container -->
</div>
</header>
<!-- End Header -->
<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"house",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "house",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"ID",1=>"CODE",2=>"XML_ID",3=>"NAME",4=>"TAGS",5=>"SORT",6=>"PREVIEW_TEXT",7=>"PREVIEW_PICTURE",8=>"DETAIL_TEXT",9=>"DETAIL_PICTURE",10=>"DATE_ACTIVE_FROM",11=>"ACTIVE_FROM",12=>"DATE_ACTIVE_TO",13=>"ACTIVE_TO",14=>"SHOW_COUNTER",15=>"SHOW_COUNTER_START",16=>"IBLOCK_TYPE_ID",17=>"IBLOCK_ID",18=>"IBLOCK_CODE",19=>"IBLOCK_NAME",20=>"IBLOCK_EXTERNAL_ID",21=>"DATE_CREATE",22=>"CREATED_BY",23=>"CREATED_USER_NAME",24=>"TIMESTAMP_X",25=>"MODIFIED_BY",26=>"USER_NAME",27=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "news",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"SHOW_MAIN",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

</section>

<!-- Start History Section -->
<section id="history-app" class="history-app">
    <div class="overlay">
        <div class="container pddb20">
            <!-- Start Our History -->
            <div class="our-history">
                <div class="row" style="display: flex; align-items: center">
                    <div class="col-md-8 wow fadeInLeft" data-wow-duration="1s">
                        <div class="text-history">
                            <h4 class="title-hist mt-minus-10">О нас</h4>
                            <p class="title-hist-p">Расположенная в 120 км от Москвы и в 60 км от Тулы. Базы отдыха является прекрасным местом, как для спокойного семейного отдыха, так и для большой компании.</p>
                            <div class="numberfeat">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content">
                                            <!-- Start Single #1 -->
                                            <div class="tab-pane active" id="home-v">
                                                <p><i class="fa fa-check"></i>Естественная красота Заокского района, отличный уровень сервиса, недорогая стоимость размещения делают базу отдыха Экспедиция  лучшим местом для поездки загород с любой целью. Всего 250 метров до реки Оки с песчаным пляжем и местом для купания. Вокруг - лес с красивейшими деревьями-сосны, березы, ель и многие другие!!! Так же если вам не хочется ленивого отдыха, всего в 3 км от базы находится знаменитый Музей-заповедник В.Д. Поленова. Это отличное место для экскурсий, для фотосессии и просто для прогулки по замечательной локации!</p>
                                            </div>
                                            <!-- End Single #1 -->
                                        </div>
                                        <div class="tab-content">
                                            <!-- Start Single #1 -->
                                            <div class="tab-pane active" id="home-v">
                                                <p><i class="fa fa-check"></i>Помимо того, что Экспедиция предлагает своим гостям удачные варианты размещения по выгодным ценам, у нас можно еще и хорошо провести время. Хотите расслабиться на природе с семьей и друзьями, организовать выездное мероприятие или устроить незабываемый корпоратив? Любые Ваши желания зимой и летом сможет исполнить база отдыха Экспедиция! </p>
                                            </div>
                                            <!-- End Single #1 -->
                                        </div>
                                        <div class="tab-content">
                                            <!-- Start Single #1 -->
                                            <div class="tab-pane active" id="home-v">
                                                <p><i class="fa fa-check"></i>Для размещения в Экспедиции есть разные коттеджи, вмещающие от 1 до 18 человек! С уютными спальнями, санузлом, кухней, удобной гостиной, мангальной заной, баней, собственной, закрытой территорией, детской площадкой, охраняемой парковкой и Wi-Fi по всей территории базы! Здесь есть вся необходимая мебель, посуда, телевизор, холодильник, микроволновая печь, детские кроватки! Так же есть возможность размещения и большего количества гостей за отдельную плату.</p>
                                            </div>
                                            <!-- End Single #1 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start History Zoom Photo -->
                    <div class="col-md-4 hidden-xs hidden-sm wow fadeInRight" data-wow-duration="1s">
                        <div class="history-photo">
                            <div class="zoom-frame">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/besed.jpg" alt="Vanda" class="zoom-bg img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- End History Zoom Photo -->
                </div>
            </div>
            <!-- End Our History -->
        </div>
        <!-- Start Our Clients Slider -->
        <div class="our-clients wow fadeInUp" data-wow-duration="1s">
            <div class="clients-slider owl-carousel owl-theme">
                <!-- Start Single #1 -->
                <div class="item">
                    <a href="home-1.html#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/clients/client-0.png" alt="Vanda">
                    </a>
                </div>
                <!-- End Single #1 -->
                <!-- Start Single #2 -->
                <div class="item">
                    <a href="home-1.html#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/clients/client-1.png" alt="Vanda">
                    </a>
                </div>
                <!-- End Single #2 -->
                <!-- Start Single #3 -->
                <div class="item">
                    <a href="home-1.html#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/clients/client-2.png" alt="Vanda">
                    </a>
                </div>
                <!-- End Single #3 -->
                <!-- Start Single #4 -->
                <div class="item">
                    <a href="home-1.html#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/clients/client-3.png" alt="Vanda">
                    </a>
                </div>
                <!-- End Single #4 -->
                <!-- Start Single #5 -->
                <div class="item">
                    <a href="home-1.html#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/clients/client-4.png" alt="Vanda">
                    </a>
                </div>
                <!-- End Single #5 -->
            </div>
        </div>
        <!-- End Our Clients Slider -->
    </div>
</section>
<!-- End History Section -->


<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>