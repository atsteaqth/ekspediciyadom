<?php




$arSelect = ['ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL'];
$arFilter = [
    'IBLOCK_ID' => 1,
    'ACTIVE_DATE' => 'Y',
    'ACTIVE' => 'Y',
    '!ID' => $arResult['ID']
];
$rs = CIBlockElement::GetList(['sort' => 'asc'], $arFilter, false, false, $arSelect);
while($arFields = $rs->GetNext())
{
//    pre($arFields);
    $arResult['OTHERS'][$arFields['ID']]['NAME'] = $arFields['NAME'];
    $arResult['OTHERS'][$arFields['ID']]['DETAIL_PAGE_URL'] = $arFields['DETAIL_PAGE_URL'];
    $arResult['OTHERS'][$arFields['ID']]['PREVIEW_PICTURE'] = CFile::GetPath($arFields['PREVIEW_PICTURE']);

}

//pre($arResult);
