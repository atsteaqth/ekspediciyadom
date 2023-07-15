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

<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "newshouse",
    Array(
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "NAME",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CATEGORY_CODE" => "CATEGORY",
        "CATEGORY_IBLOCK" => array(),
        "CATEGORY_ITEMS_COUNT" => "5",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE","DATE_ACTIVE_FROM",""),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("",""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_AS_RATING" => "rating",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FILTER_FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "FILTER_PROPERTY_CODE" => array("",""),
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE","DATE_ACTIVE_FROM",""),
        "LIST_PROPERTY_CODE" => array("",""),
        "MAX_VOTE" => "5",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "6",
        "NUM_DAYS" => "30",
        "NUM_NEWS" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/news",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array("detail"=>"/news/#SECTION_CODE#/#ELEMENT_CODE#/","news"=>"/news","section"=>"/news/#SECTION_CODE#/"),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N",
        "VOTE_NAMES" => array("1","2","3","4","5",""),
        "YANDEX" => "N"
    )
);?>


<!-- Start Timeline Work Section -->
<section id="timelineWork" class="timelineWork pddt100">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="mt-minus-10 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Куда сходить?</h2>
                    <h4 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">на отдыхе</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">


                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "place",
                        array(
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
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "ID",
                                1 => "CODE",
                                2 => "XML_ID",
                                3 => "NAME",
                                4 => "TAGS",
                                5 => "SORT",
                                6 => "PREVIEW_TEXT",
                                7 => "PREVIEW_PICTURE",
                                8 => "DETAIL_TEXT",
                                9 => "DETAIL_PICTURE",
                                10 => "DATE_ACTIVE_FROM",
                                11 => "ACTIVE_FROM",
                                12 => "DATE_ACTIVE_TO",
                                13 => "ACTIVE_TO",
                                14 => "SHOW_COUNTER",
                                15 => "SHOW_COUNTER_START",
                                16 => "IBLOCK_TYPE_ID",
                                17 => "IBLOCK_ID",
                                18 => "IBLOCK_CODE",
                                19 => "IBLOCK_NAME",
                                20 => "IBLOCK_EXTERNAL_ID",
                                21 => "DATE_CREATE",
                                22 => "CREATED_BY",
                                23 => "CREATED_USER_NAME",
                                24 => "TIMESTAMP_X",
                                25 => "MODIFIED_BY",
                                26 => "USER_NAME",
                                27 => "",
                            ),
                            "FILTER_NAME" => '',
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "500",
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
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
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
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "place"
                        ),
                        false
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Timeline Work Section -->


<section id="review-app" class="timelineWork pddt100">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="mt-minus-10 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Отзывы</h2>
                    <h4 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">от наших клиентов</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="post-comments">
                    <div class="post-comments-content">
                        <div class="comments-wrapper">
                            <ul class="comments-lists">

                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "comments",
                                    array(
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
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(
                                            0 => "ID",
                                            1 => "CODE",
                                            2 => "XML_ID",
                                            3 => "NAME",
                                            4 => "TAGS",
                                            5 => "SORT",
                                            6 => "PREVIEW_TEXT",
                                            7 => "PREVIEW_PICTURE",
                                            8 => "DETAIL_TEXT",
                                            9 => "DETAIL_PICTURE",
                                            10 => "DATE_ACTIVE_FROM",
                                            11 => "ACTIVE_FROM",
                                            12 => "DATE_ACTIVE_TO",
                                            13 => "ACTIVE_TO",
                                            14 => "SHOW_COUNTER",
                                            15 => "SHOW_COUNTER_START",
                                            16 => "IBLOCK_TYPE_ID",
                                            17 => "IBLOCK_ID",
                                            18 => "IBLOCK_CODE",
                                            19 => "IBLOCK_NAME",
                                            20 => "IBLOCK_EXTERNAL_ID",
                                            21 => "DATE_CREATE",
                                            22 => "CREATED_BY",
                                            23 => "CREATED_USER_NAME",
                                            24 => "TIMESTAMP_X",
                                            25 => "MODIFIED_BY",
                                            26 => "USER_NAME",
                                            27 => "",
                                        ),
                                        "FILTER_NAME" => '',
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "4",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "N",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "500",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => "news",
                                        "PAGER_TITLE" => "Отзывы",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(
                                            0 => "ATT_SERVICE",
                                            1 => "ATT_PLACING",
                                            2 => "ATT_CLEAR",
                                            3 => "ATT_PRICE",
                                            4 => "ATT_EMAIL",
                                        ),
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
                                        "STRICT_SECTION_CHECK" => "N",
                                        "COMPONENT_TEMPLATE" => "place"
                                    ),
                                    false
                                );

                                ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >

                <div class="reply-comments wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title">
                        <h4>Оставьте свой отзыв</h4>
                    </div>
                    <div class="reply-comment-content box-sidebar">
                        <form id="sendReply" action="/ajax/sendReply.php" method="post">
                            <input type="hidden" name="service">
                            <input type="hidden" name="placing">
                            <input type="hidden" name="clear">
                            <input type="hidden" name="price">
                            <div class="row">
                                <!-- Start Single Input -->
                                <div class="col-12">
                                    <div class="stars">
                                        <div class="stars__name">Сервис</div>
                                        <div class="stars__wrapper">
                                            <div class="fa fa-star stars__item" data-value="1" data-name="service"></div>
                                            <div class="fa fa-star stars__item" data-value="2" data-name="service"></div>
                                            <div class="fa fa-star stars__item" data-value="3" data-name="service"></div>
                                            <div class="fa fa-star stars__item" data-value="4" data-name="service"></div>
                                            <div class="fa fa-star stars__item" data-value="5" data-name="service"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <div class="stars__name">Размещение</div>
                                        <div class="stars__wrapper">
                                            <div class="fa fa-star stars__item" data-value="1" data-name="placing"></div>
                                            <div class="fa fa-star stars__item" data-value="2" data-name="placing"></div>
                                            <div class="fa fa-star stars__item" data-value="3" data-name="placing"></div>
                                            <div class="fa fa-star stars__item" data-value="4" data-name="placing"></div>
                                            <div class="fa fa-star stars__item" data-value="5" data-name="placing"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <div class="stars__name">Чистота</div>
                                        <div class="stars__wrapper">
                                            <div class="fa fa-star stars__item" data-value="1" data-name="clear"></div>
                                            <div class="fa fa-star stars__item" data-value="2" data-name="clear"></div>
                                            <div class="fa fa-star stars__item" data-value="3" data-name="clear"></div>
                                            <div class="fa fa-star stars__item" data-value="4" data-name="clear"></div>
                                            <div class="fa fa-star stars__item" data-value="5" data-name="clear"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <div class="stars__name">Соотношение цены и качества</div>
                                        <div class="stars__wrapper">
                                            <div class="fa fa-star stars__item" data-value="1" data-name="price"></div>
                                            <div class="fa fa-star stars__item" data-value="2" data-name="price"></div>
                                            <div class="fa fa-star stars__item" data-value="3" data-name="price"></div>
                                            <div class="fa fa-star stars__item" data-value="4" data-name="price"></div>
                                            <div class="fa fa-star stars__item" data-value="5" data-name="price"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="reply-input">
                                        <input type="text" id="name-reply" name="name" placeholder="Имя" required="">
                                    </div>
                                </div>
                                <!-- End Single Input -->
                                <!-- Start Single Input -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="reply-input">
                                        <input type="email" id="email-reply" name="email" placeholder="E-Mail" required="">
                                    </div>
                                </div>
                                <!-- End Single Input -->
                                <!-- Start Single Textarea -->
                                <div class="col-md-12">
                                    <div class="reply-textarea">
                                        <textarea id="msg-reply" name="message" placeholder="Комментарий" required=""></textarea>
                                    </div>
                                </div>
                                <!-- End Single Textarea -->
                                <!-- Start Single Button -->
                                <div class="col-md-12">
                                    <div class="button-MSG">
                                        <button type="submit" class="bttn-vanda-gradient">
                                            <i class="fa fa-comment"></i>
                                            <span>Отправить</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Single Button -->
                            </div>
                        </form>
                        <div id="sendResult"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>