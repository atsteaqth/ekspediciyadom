<?php



foreach ($arResult['ITEMS'] as &$item) {
    if ($item['PROPERTIES']['SHOW_MAIN']['VALUE'] === 'Y') {
        $arResult['FOR_DISPLAY'][] = $item;
    }

}
