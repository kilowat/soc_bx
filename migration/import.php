<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php'); 
include("bm.php");
$arResult = Array (
    '0' => Array (
        'LID' => 'ru',
        'NAME' => 'Контент',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'content',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Контент',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '1',
                'CODE' => 'news',
                'NAME' => 'События и мероприятия',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '',
                'DETAIL_PAGE_URL' => '/events/#CODE#.html',
                'SECTION_PAGE_URL' => '',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Материалы',
                'ELEMENT_NAME' => 'Материал',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'MORE_PHOTO' => Array (
                        'NAME' => 'Фотографии',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'MORE_PHOTO',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'Y',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'formula-uspekha-2019',
                                'EXTERNAL_ID' => '1',
                                'NAME' => 'Формула успеха 2019 ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => 'Специалисты отделения помощи семье и детям государственного бюджетного учреждения социального обслуживания Краснодарского края «Динской комплексный центр социального обслуживания населения» 21.11.2019 года в ст. Динской на базе спорткомплекса «Аполлон» приняли участие в ежегодном молодежном фестивале «Формула успеха», направленном на профориентацию несовершеннолетних. В фестивале приняло участие 200 несовершеннолетних, из которых 30 состоят на различных формах профилактического учета.

Специалистами была организована станция «Младший воспитатель», на которой команды участников собирали ребенка (куклу) на прогулку. Все участники смогли проверить свои навыки в обращении с маленькими детьми и умение работать в команде.',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '28.02.2020 16:00:24',
                                'TIMESTAMP_X' => '28.02.2020 16:00:24',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'MORE_PHOTO' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => Array (
                                            '0' => '1',
                                            '1' => '2',
                                            '2' => '3',
                                            '3' => '4',
                                        ),
                                        'FILE' => Array (
                                            'NEW_SRC' => '.',
                                        ),
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'konkurs-den-materi-',
                                'EXTERNAL_ID' => '2',
                                'NAME' => 'Конкурс день матери ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => 'В рамках проведения Дня матери специалистами отделения помощи семье и детям государственного бюджетного учреждения социального обслуживания Краснодарского края «Динской комплексный центр социального обслуживания населения» 20.11.2019 был организован и проведен второй районный конкурс среди женщин, состоящих на профилактическом учете, «Самая обаятельная и привлекательная». В жюри были приглашены представители органов системы профилактики Динского района.

В конкурсе приняли участие 9 женщин: из них 7 из семей ТЖС и 2 из семьи СОП. Участницы конкурса рассказали о себе в конкурсном задании «Визитка», в «Творческом  конкурсе» читали стихи, демонстрировали сценки, танцевали со своими детьми и замечательно пели.

В творческом задании «Женский образ» каждая из участниц создала свой портрет с помощью цветной бумаги и красок. Все портреты получились яркие, необычные и очень похожие на своих авторов. Участницы смогли проявить свою индивидуальность и мастерство.

В конкурсе «Вопрос-ответ» конкурсантки  узнали об увлечениях детей, их мечты и желания.

В заключительном конкурсе «Дефиле» все женщины удивили жюри умением держаться на сцене, показали свои лучшие наряды, перебороли свой страх выступления на публике. В итоге все получили массу впечатлений и ярких эмоций.

Все участницы получили призы и дипломы, а победительница конкурса корону.',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '28.02.2020 17:19:06',
                                'TIMESTAMP_X' => '03.03.2020 13:21:55',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'MORE_PHOTO' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => Array (
                                            '0' => '9',
                                            '1' => '10',
                                        ),
                                        'FILE' => Array (
                                            'NEW_SRC' => '.',
                                        ),
                                    ),
                                ),
                            ),
                            '2' => Array (
                                'CODE' => 'testovyy-material',
                                'EXTERNAL_ID' => '22',
                                'NAME' => 'Тестовый материал',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '02.03.2020 23:12:00',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 23:12:34',
                                'TIMESTAMP_X' => '05.03.2020 23:12:34',
                                'TAGS' => '',
                            ),
                        ),
                    ),
                ),
            ),
            '1' => Array (
                'ID' => '3',
                'CODE' => 'links',
                'NAME' => 'Полезные ссылки',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/content/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '#SITE_DIR#/content/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/content/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'LINK' => Array (
                        'NAME' => 'Ссылка',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'LINK',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_3',
                                'EXTERNAL_ID' => '3',
                                'NAME' => 'Гос услуги',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '7',
                                    'TIMESTAMP_X' => '09.03.2020 13:06:02',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '77',
                                    'WIDTH' => '75',
                                    'FILE_SIZE' => '2769',
                                    'CONTENT_TYPE' => 'image/jpeg',
                                    'SUBDIR' => 'iblock/faa',
                                    'FILE_NAME' => 'faacace8421dbc4324256b44251dd2da.jpg',
                                    'ORIGINAL_NAME' => 'gu.jpg',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => 'badaf0cadf25cdc51bd0f4f6c2de0847',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/faa/faacace8421dbc4324256b44251dd2da.jpg',
                                    'NEW_SRC' => '7.jpg',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '01.03.2020 23:51:52',
                                'TIMESTAMP_X' => '09.03.2020 13:06:02',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'https://www.gosuslugi.ru/',
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_59',
                                'EXTERNAL_ID' => '59',
                                'NAME' => 'Министерство труда и социального развития Краснодарского края',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '24',
                                    'TIMESTAMP_X' => '09.03.2020 13:07:19',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '168',
                                    'WIDTH' => '168',
                                    'FILE_SIZE' => '17807',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/0fa',
                                    'FILE_NAME' => '0faa51e6b58ebbabf769a6f9ac272434.png',
                                    'ORIGINAL_NAME' => 'logo.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => '2c68e943e06fadee9a651daefd0847fa',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/0fa/0faa51e6b58ebbabf769a6f9ac272434.png',
                                    'NEW_SRC' => '24.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:07:19',
                                'TIMESTAMP_X' => '09.03.2020 13:07:19',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'http://www.sznkuban.ru',
                                    ),
                                ),
                            ),
                            '2' => Array (
                                'CODE' => 'OLD_ID_60',
                                'EXTERNAL_ID' => '60',
                                'NAME' => 'МинТруд',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '25',
                                    'TIMESTAMP_X' => '09.03.2020 13:10:49',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '57',
                                    'WIDTH' => '59',
                                    'FILE_SIZE' => '10524',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/21d',
                                    'FILE_NAME' => '21d748e5f98da121f5581a185208ffc1.png',
                                    'ORIGINAL_NAME' => '83164b7f51249048f08eaf1a23a34e06.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => 'dc3f3bf60584e99b52b1447ff7f715b2',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/21d/21d748e5f98da121f5581a185208ffc1.png',
                                    'NEW_SRC' => '25.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:10:49',
                                'TIMESTAMP_X' => '09.03.2020 13:10:49',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'https://rosmintrud.ru',
                                    ),
                                ),
                            ),
                            '3' => Array (
                                'CODE' => 'OLD_ID_61',
                                'EXTERNAL_ID' => '61',
                                'NAME' => 'Национальные проекты',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '26',
                                    'TIMESTAMP_X' => '09.03.2020 13:11:36',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '900',
                                    'WIDTH' => '900',
                                    'FILE_SIZE' => '137119',
                                    'CONTENT_TYPE' => 'image/jpeg',
                                    'SUBDIR' => 'iblock/c00',
                                    'FILE_NAME' => 'c005504f8449105fd141048209e475de.jpg',
                                    'ORIGINAL_NAME' => '34-_2_ (1).jpg',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => '02360de0d1b01ca7f899c5a5a02204bf',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/c00/c005504f8449105fd141048209e475de.jpg',
                                    'NEW_SRC' => '26.jpg',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:11:36',
                                'TIMESTAMP_X' => '09.03.2020 13:11:36',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'https://np.krasnodar.ru/',
                                    ),
                                ),
                            ),
                            '4' => Array (
                                'CODE' => 'OLD_ID_62',
                                'EXTERNAL_ID' => '62',
                                'NAME' => 'Администрация Краснодарского края',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '27',
                                    'TIMESTAMP_X' => '09.03.2020 13:12:33',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '53',
                                    'WIDTH' => '42',
                                    'FILE_SIZE' => '5040',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/ae5',
                                    'FILE_NAME' => 'ae5ce37544c2d07f64d25631c4a81469.png',
                                    'ORIGINAL_NAME' => 'e20365c251e20ed836984614d3b1cb31.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => '220af50a0a9d8239e39835350f326660',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/ae5/ae5ce37544c2d07f64d25631c4a81469.png',
                                    'NEW_SRC' => '27.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:12:33',
                                'TIMESTAMP_X' => '09.03.2020 13:12:33',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'https://admkrai.krasnodar.ru',
                                    ),
                                ),
                            ),
                            '5' => Array (
                                'CODE' => 'OLD_ID_63',
                                'EXTERNAL_ID' => '63',
                                'NAME' => 'Роскомнадзор',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '28',
                                    'TIMESTAMP_X' => '09.03.2020 13:13:20',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '400',
                                    'WIDTH' => '650',
                                    'FILE_SIZE' => '70583',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/c91',
                                    'FILE_NAME' => 'c9187ad071ce14d87b0ff2cbe4c66e26.png',
                                    'ORIGINAL_NAME' => 'RKN_site_logo.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => 'fbf1d3177d1cf3904180bceb0aafa785',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/c91/c9187ad071ce14d87b0ff2cbe4c66e26.png',
                                    'NEW_SRC' => '28.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:13:20',
                                'TIMESTAMP_X' => '09.03.2020 13:13:20',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'https://rkn.gov.ru/',
                                    ),
                                ),
                            ),
                            '6' => Array (
                                'CODE' => 'OLD_ID_64',
                                'EXTERNAL_ID' => '64',
                                'NAME' => 'Реестр поставщиков социальных услуг',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '29',
                                    'TIMESTAMP_X' => '09.03.2020 13:14:15',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '66',
                                    'WIDTH' => '74',
                                    'FILE_SIZE' => '14364',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/fec',
                                    'FILE_NAME' => 'fecf8d0aaa593acfad4491a5bf90a36a.png',
                                    'ORIGINAL_NAME' => 'edaf0d4aa0e14798434caca2a00c8af0.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => 'e1549ae16419b0f6a69c4715932b1ad5',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/fec/fecf8d0aaa593acfad4491a5bf90a36a.png',
                                    'NEW_SRC' => '29.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 13:14:15',
                                'TIMESTAMP_X' => '09.03.2020 13:14:15',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'http://rpsu.krasnodar.ru:8080',
                                    ),
                                ),
                            ),
                            '7' => Array (
                                'CODE' => 'OLD_ID_67',
                                'EXTERNAL_ID' => '67',
                                'NAME' => 'Интерактивный портал социальной защиты населения',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '30',
                                    'TIMESTAMP_X' => '10.03.2020 12:11:34',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '139',
                                    'WIDTH' => '139',
                                    'FILE_SIZE' => '21132',
                                    'CONTENT_TYPE' => 'image/png',
                                    'SUBDIR' => 'iblock/b31',
                                    'FILE_NAME' => 'b311e6e2f564a778ff6f9ac203560402.png',
                                    'ORIGINAL_NAME' => 'image.png',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => 'a9f49ba73f9a7a9c15bc98a6a08a1004',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/b31/b311e6e2f564a778ff6f9ac203560402.png',
                                    'NEW_SRC' => '30.png',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '10.03.2020 12:11:34',
                                'TIMESTAMP_X' => '10.03.2020 12:11:34',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'LINK' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'http://soc23.ru',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '2' => Array (
                'ID' => '21',
                'CODE' => 'info_materials',
                'NAME' => 'Информационные материалы',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '',
                'DETAIL_PAGE_URL' => '/informatsionnye-materialy/#SECTION_CODE#/#CODE#.html',
                'SECTION_PAGE_URL' => '/informatsionnye-materialy/#SECTION_CODE#/',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'TIMESTAMP_X' => '07.03.2020 14:52:40',
                        'DATE_CREATE' => '07.03.2020 14:50:17',
                        'IBLOCK_SECTION_ID' => '',
                        'ACTIVE' => 'Y',
                        'GLOBAL_ACTIVE' => 'Y',
                        'SORT' => '500',
                        'NAME' => 'Приказы и законы',
                        'PICTURE' => Array (
                            'ID' => '17',
                            'TIMESTAMP_X' => '07.03.2020 14:52:40',
                            'MODULE_ID' => 'iblock',
                            'HEIGHT' => '128',
                            'WIDTH' => '128',
                            'FILE_SIZE' => '4274',
                            'CONTENT_TYPE' => 'image/png',
                            'SUBDIR' => 'iblock/e10',
                            'FILE_NAME' => 'e1003bc4a9aacad70d224c861ed68a9e.png',
                            'ORIGINAL_NAME' => 'section-orders-v1.png',
                            'DESCRIPTION' => '',
                            'HANDLER_ID' => '',
                            'EXTERNAL_ID' => 'ae0c88fd3fc55b900f6a58d39ae84129',
                            '~src' => '',
                            'SRC' => '/upload/iblock/e10/e1003bc4a9aacad70d224c861ed68a9e.png',
                            'NEW_SRC' => '17.png',
                        ),
                        'LEFT_MARGIN' => '7',
                        'RIGHT_MARGIN' => '8',
                        'DEPTH_LEVEL' => '1',
                        'DESCRIPTION' => '',
                        'DESCRIPTION_TYPE' => 'text',
                        'SEARCHABLE_CONTENT' => 'ПРИКАЗЫ И ЗАКОНЫ
',
                        'CODE' => 'prikazi',
                        'XML_ID' => '',
                        'DETAIL_PICTURE' => '',
                        'EXTERNAL_ID' => '',
                        'ELEMENTS' => Array (
                        ),
                    ),
                    '1' => Array (
                        'TIMESTAMP_X' => '07.03.2020 14:53:09',
                        'DATE_CREATE' => '07.03.2020 14:53:09',
                        'IBLOCK_SECTION_ID' => '',
                        'ACTIVE' => 'Y',
                        'GLOBAL_ACTIVE' => 'Y',
                        'SORT' => '500',
                        'NAME' => 'Буклеты',
                        'PICTURE' => Array (
                            'ID' => '19',
                            'TIMESTAMP_X' => '07.03.2020 14:53:09',
                            'MODULE_ID' => 'iblock',
                            'HEIGHT' => '128',
                            'WIDTH' => '128',
                            'FILE_SIZE' => '4300',
                            'CONTENT_TYPE' => 'image/png',
                            'SUBDIR' => 'iblock/a8e',
                            'FILE_NAME' => 'a8e75a54057e589c0e2729e25a6c9c0a.png',
                            'ORIGINAL_NAME' => 'section-buklet-v1.png',
                            'DESCRIPTION' => '',
                            'HANDLER_ID' => '',
                            'EXTERNAL_ID' => '8f7265dd6eebdf977a161a255a52f040',
                            '~src' => '',
                            'SRC' => '/upload/iblock/a8e/a8e75a54057e589c0e2729e25a6c9c0a.png',
                            'NEW_SRC' => '19.png',
                        ),
                        'LEFT_MARGIN' => '1',
                        'RIGHT_MARGIN' => '2',
                        'DEPTH_LEVEL' => '1',
                        'DESCRIPTION' => '',
                        'DESCRIPTION_TYPE' => 'text',
                        'SEARCHABLE_CONTENT' => 'БУКЛЕТЫ
',
                        'CODE' => 'bucklets',
                        'XML_ID' => '',
                        'DETAIL_PICTURE' => '',
                        'EXTERNAL_ID' => '',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'testovyy-dokument',
                                'EXTERNAL_ID' => '25',
                                'NAME' => 'Тестовый документ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '07.03.2020 15:18:17',
                                'TIMESTAMP_X' => '07.03.2020 15:37:03',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '23',
                                        'FILE' => Array (
                                            'ID' => '23',
                                            'TIMESTAMP_X' => '07.03.2020 15:18:17',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '481',
                                            'WIDTH' => '640',
                                            'FILE_SIZE' => '108770',
                                            'CONTENT_TYPE' => 'image/jpeg',
                                            'SUBDIR' => 'iblock/ec0',
                                            'FILE_NAME' => 'ec04b6fd6587d887591e95cd722ac6e1.jpg',
                                            'ORIGINAL_NAME' => 'about-pic.jpg',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '6cb2b666eb1b09acbf2ff776f94aff5f',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/ec0/ec04b6fd6587d887591e95cd722ac6e1.jpg',
                                            'NEW_SRC' => '23.jpg',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    '2' => Array (
                        'TIMESTAMP_X' => '07.03.2020 14:59:49',
                        'DATE_CREATE' => '07.03.2020 14:59:49',
                        'IBLOCK_SECTION_ID' => '',
                        'ACTIVE' => 'Y',
                        'GLOBAL_ACTIVE' => 'Y',
                        'SORT' => '500',
                        'NAME' => 'Награды и грамоты',
                        'PICTURE' => Array (
                            'ID' => '20',
                            'TIMESTAMP_X' => '07.03.2020 14:59:49',
                            'MODULE_ID' => 'iblock',
                            'HEIGHT' => '128',
                            'WIDTH' => '128',
                            'FILE_SIZE' => '3065',
                            'CONTENT_TYPE' => 'image/png',
                            'SUBDIR' => 'iblock/8e5',
                            'FILE_NAME' => '8e56a1b9f67a065c640e41b77eb4c3da.png',
                            'ORIGINAL_NAME' => 'section-cert-v1.png',
                            'DESCRIPTION' => '',
                            'HANDLER_ID' => '',
                            'EXTERNAL_ID' => '48ba28a6d3bc0fb758318ec9299f0a32',
                            '~src' => '',
                            'SRC' => '/upload/iblock/8e5/8e56a1b9f67a065c640e41b77eb4c3da.png',
                            'NEW_SRC' => '20.png',
                        ),
                        'LEFT_MARGIN' => '5',
                        'RIGHT_MARGIN' => '6',
                        'DEPTH_LEVEL' => '1',
                        'DESCRIPTION' => '',
                        'DESCRIPTION_TYPE' => 'text',
                        'SEARCHABLE_CONTENT' => 'НАГРАДЫ И ГРАМОТЫ
',
                        'CODE' => 'nagrady-i-gramoty',
                        'XML_ID' => '',
                        'DETAIL_PICTURE' => '',
                        'EXTERNAL_ID' => '',
                        'ELEMENTS' => Array (
                        ),
                    ),
                    '3' => Array (
                        'TIMESTAMP_X' => '07.03.2020 15:10:55',
                        'DATE_CREATE' => '07.03.2020 15:10:55',
                        'IBLOCK_SECTION_ID' => '',
                        'ACTIVE' => 'Y',
                        'GLOBAL_ACTIVE' => 'Y',
                        'SORT' => '500',
                        'NAME' => 'Дополнительная информация',
                        'PICTURE' => Array (
                            'ID' => '22',
                            'TIMESTAMP_X' => '07.03.2020 15:10:55',
                            'MODULE_ID' => 'iblock',
                            'HEIGHT' => '128',
                            'WIDTH' => '128',
                            'FILE_SIZE' => '4986',
                            'CONTENT_TYPE' => 'image/png',
                            'SUBDIR' => 'iblock/d1a',
                            'FILE_NAME' => 'd1a0e0bb1e2f765e413ead89ee924872.png',
                            'ORIGINAL_NAME' => 'section-info-v1.png',
                            'DESCRIPTION' => '',
                            'HANDLER_ID' => '',
                            'EXTERNAL_ID' => '060ea38123e68b08b720841a3756c89e',
                            '~src' => '',
                            'SRC' => '/upload/iblock/d1a/d1a0e0bb1e2f765e413ead89ee924872.png',
                            'NEW_SRC' => '22.png',
                        ),
                        'LEFT_MARGIN' => '3',
                        'RIGHT_MARGIN' => '4',
                        'DEPTH_LEVEL' => '1',
                        'DESCRIPTION' => '',
                        'DESCRIPTION_TYPE' => 'text',
                        'SEARCHABLE_CONTENT' => 'ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ
',
                        'CODE' => 'dopolnitelnaya-informatsiya',
                        'XML_ID' => '',
                        'DETAIL_PICTURE' => '',
                        'EXTERNAL_ID' => '',
                        'ELEMENTS' => Array (
                        ),
                    ),
                ),
            ),
        ),
    ),
    '1' => Array (
        'LID' => 'ru',
        'NAME' => 'Финансово-хозяйственная деятельность',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'fin_hos',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Финансово-хозяйственная деятельность',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '14',
                'CODE' => 'gos_zadanie',
                'NAME' => 'Государственное задание',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/fin_hos/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/finansovo-khozyaystvennaya-deyatelnost/gosudarstvennoe-zadanie/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/fin_hos/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
            '1' => Array (
                'ID' => '15',
                'CODE' => 'plan_fin',
                'NAME' => 'План финансово-хозяйственной деятельности',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/fin_hos/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/finansovo-khozyaystvennaya-deyatelnost/plan-finansovo-khozyaystvennoy-deyatelnosti/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/fin_hos/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
        ),
    ),
    '2' => Array (
        'LID' => 'ru',
        'NAME' => 'Общие сведения о поставщике социальных услуг',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'main_info',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Общие сведения о поставщике социальных услуг',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '2',
                'CODE' => 'company',
                'NAME' => 'Общие данные',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/main_info/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '#SITE_DIR#/main_info/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/main_info/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'TITLE' => Array (
                        'NAME' => 'Заголовок',
                        'ACTIVE' => 'Y',
                        'SORT' => '300',
                        'CODE' => 'TITLE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'ADDRESS' => Array (
                        'NAME' => 'Адрес',
                        'ACTIVE' => 'Y',
                        'SORT' => '418',
                        'CODE' => 'ADDRESS',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'PHONE' => Array (
                        'NAME' => 'Тел.',
                        'ACTIVE' => 'Y',
                        'SORT' => '407',
                        'CODE' => 'PHONE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'FAX' => Array (
                        'NAME' => 'Факс',
                        'ACTIVE' => 'Y',
                        'SORT' => '408',
                        'CODE' => 'FAX',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'EMAIL' => Array (
                        'NAME' => 'Email',
                        'ACTIVE' => 'Y',
                        'SORT' => '409',
                        'CODE' => 'EMAIL',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'NAME' => Array (
                        'NAME' => 'Полное наименование учреждения',
                        'ACTIVE' => 'Y',
                        'SORT' => '400',
                        'CODE' => 'NAME',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'SHORT_NAME' => Array (
                        'NAME' => 'Краткое наименование учреждения',
                        'ACTIVE' => 'Y',
                        'SORT' => '401',
                        'CODE' => 'SHORT_NAME',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'COMPANY_TYPE' => Array (
                        'NAME' => 'Тип организации',
                        'ACTIVE' => 'Y',
                        'SORT' => '402',
                        'CODE' => 'COMPANY_TYPE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'MUNICIPAL_OBRAZOVANIE' => Array (
                        'NAME' => 'Муниципальное образование',
                        'ACTIVE' => 'Y',
                        'SORT' => '403',
                        'CODE' => 'MUNICIPAL_OBRAZOVANIE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'DATE_REGISTRATION' => Array (
                        'NAME' => 'Дата гос. регистрации',
                        'ACTIVE' => 'Y',
                        'SORT' => '404',
                        'CODE' => 'DATE_REGISTRATION',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'UR_ADDRESS' => Array (
                        'NAME' => 'Юридический адрес',
                        'ACTIVE' => 'Y',
                        'SORT' => '405',
                        'CODE' => 'UR_ADDRESS',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'FACT_ADDRESS' => Array (
                        'NAME' => 'Фактический адрес',
                        'ACTIVE' => 'Y',
                        'SORT' => '406',
                        'CODE' => 'FACT_ADDRESS',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'INN' => Array (
                        'NAME' => 'ИНН ',
                        'ACTIVE' => 'Y',
                        'SORT' => '410',
                        'CODE' => 'INN',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'OGRN' => Array (
                        'NAME' => 'ОГРН ',
                        'ACTIVE' => 'Y',
                        'SORT' => '411',
                        'CODE' => 'OGRN',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'OKPO' => Array (
                        'NAME' => 'ОКПО ',
                        'ACTIVE' => 'Y',
                        'SORT' => '412',
                        'CODE' => 'OKPO',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'OKVD' => Array (
                        'NAME' => 'ОКВЭД ',
                        'ACTIVE' => 'Y',
                        'SORT' => '413',
                        'CODE' => 'OKVD',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'DIRECTOR' => Array (
                        'NAME' => 'Директор учреждения',
                        'ACTIVE' => 'Y',
                        'SORT' => '414',
                        'CODE' => 'DIRECTOR',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'ZAM_DIRECTOR' => Array (
                        'NAME' => 'Заместители директора',
                        'ACTIVE' => 'Y',
                        'SORT' => '415',
                        'CODE' => 'ZAM_DIRECTOR',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'UPALNAMOCH_ORGAN' => Array (
                        'NAME' => 'Уполномоченный территориальный орган',
                        'ACTIVE' => 'Y',
                        'SORT' => '416',
                        'CODE' => 'UPALNAMOCH_ORGAN',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'HTML',
                    ),
                    'MAP' => Array (
                        'NAME' => 'Как нас найти',
                        'ACTIVE' => 'Y',
                        'SORT' => '419',
                        'CODE' => 'MAP',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'map_yandex',
                    ),
                    'WORK_TIME' => Array (
                        'NAME' => 'График работы',
                        'ACTIVE' => 'Y',
                        'SORT' => '417',
                        'CODE' => 'WORK_TIME',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'Y',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => 'directory',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_4',
                                'EXTERNAL_ID' => '4',
                                'NAME' => 'Описание учреждения',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '8',
                                    'TIMESTAMP_X' => '10.03.2020 20:39:00',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '481',
                                    'WIDTH' => '640',
                                    'FILE_SIZE' => '108770',
                                    'CONTENT_TYPE' => 'image/jpeg',
                                    'SUBDIR' => 'iblock/a57',
                                    'FILE_NAME' => 'a57e610d4865739aeb9a7bc83bc6f2ca.jpg',
                                    'ORIGINAL_NAME' => 'about-pic.jpg',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => '02c1e6e587cb09a2526d5ad0a2fe3ab3',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/a57/a57e610d4865739aeb9a7bc83bc6f2ca.jpg',
                                    'NEW_SRC' => '8.jpg',
                                ),
                                'PREVIEW_TEXT' => '&lt;p&gt;Сайт учреждения создан в целях обеспечения информационной открытости. Здесь Вы можете узнать о направлениях деятельности и работе структурных подразделений учреждения, ознакомиться с нормативно-правовыми документами, регламентирующими его деятельность и вопросами предоставления социальных услуг, а также быть в курсе свежих новостей. Мы надеемся, что на сайте Вы найдете всю необходимую для Вас информацию.&lt;/p&gt;

&lt;p&gt;На территории Туапсинского муниципального района проживает более 126 000 человек, из них 20,6% граждане пожилого возраста.&lt;/p&gt;

&lt;p&gt;Основными задачами деятельности ГБУ СО КК «Туапсинский КЦСОН» является повышение качества, объема, доступности, адресное предоставления социальных услуг. Учреждение работает на рынке социальных услуг 30 лет. За эти годы приобретен обширный опыт работы в сфере оказании социальных услуг, предоставляемых отделениями социального обслуживания на дому, отделениями срочного социального обслуживания, отделением помощи семье и детям, отделением ночного пребывания.&lt;/p&gt;',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '02.03.2020 13:01:36',
                                'TIMESTAMP_X' => '10.03.2020 20:39:00',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'TITLE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Добро пожаловать на сайт государственного бюджетного учреждения социального обслуживания Краснодарского края «Туапсинский комплексный центр социального обслуживания населения».',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                    'NAME' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Государственное бюджетное учреждение социального обслуживания Краснодарского края «Динской комплексный центр социального обслуживания населения»',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                    'SHORT_NAME' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ГБУ СО КК «Туапсинский КЦСОН»',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'COMPANY_TYPE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Комплексный центр социального обслуживания населения',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                    'MUNICIPAL_OBRAZOVANIE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Туапсинский муниципальный район',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'DATE_REGISTRATION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '30.09.1996 г.',
                                    ),
                                    'UR_ADDRESS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '352800, Россия, Краснодарский край, Туапсинский район, город Туапсе, улица Коммунистическая, д. 18.',
                                    ),
                                    'FACT_ADDRESS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '352800, Россия, Краснодарский край, Туапсинский район, город Туапсе, площадь Ильича, д. 1б',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '8 861 32 2-23-44',
                                    ),
                                    'FAX' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '8 861 32 2-23-44',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'msrsp@krasnodar.ru',
                                    ),
                                    'INN' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '2365000356',
                                    ),
                                    'OGRN' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '1042313061812 от 13.10.2004',
                                    ),
                                    'OKPO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '74254199',
                                    ),
                                    'OKVD' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '88.10, 88.99, 87.90',
                                    ),
                                    'DIRECTOR' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Сабенгус Кирилл Владимирович, телефон +7 (86167) 2-36-41, e-mail: cso_chernomor@mtsr.krasnodar.ru',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'ZAM_DIRECTOR' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Бузина Оксана Викторовна, телефон +7(86167)2-42-52, e-mail: cso_chernomor@mtsr.krasnodar.ru

Гирш Евгений Викторович, телефон +7(86167)2-14-65, e-mail: cso_chernomor@mtsr.krasnodar.ru

Михайлова Оксана Валерьевна, телефон +7(86167)2-24-1, e-mail: cso_chernomor@mtsr.krasnodar.ru',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'UPALNAMOCH_ORGAN' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'Управление социальной защиты населения министерства труда и социального развития Краснодарского края в Туапсинском районе

Юридический адрес: 352800, г. Туапсе, ул. Карла Маркса, д. 27

Телефоны: +7(86167) 2-59-68, +7(86167) 2-14-80, +7(86167) 2-37-55
e-mail: uszn_tuapser@mtsr.krasnodar.ru',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'WORK_TIME' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            '0' => 'qG7ePmaM',
                                            '1' => 'd0ntGakb',
                                            '2' => 'zORQTDH6',
                                            '3' => 'PcWRR5nd',
                                            '4' => 's22tYqVN',
                                            '5' => 'y3Os1mg8',
                                            '6' => 'PsvKdOIa',
                                        ),
                                    ),
                                    'ADDRESS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'г. Краснодар, ул. им. Чапаева, д. 60',
                                    ),
                                    'MAP' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '45.049352244325,38.979054980105',
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_58',
                                'EXTERNAL_ID' => '58',
                                'NAME' => 'Описание министерства',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '&lt;p&gt;Сайт учреждения создан в целях обеспечения информационной открытости. Здесь Вы можете узнать о направлениях деятельности и работе структурных подразделений учреждения, ознакомиться с нормативно-правовыми документами, регламентирующими его деятельность и вопросами предоставления социальных услуг, а также быть в курсе свежих новостей. Мы надеемся, что на сайте Вы найдете всю необходимую для Вас информацию.&lt;/p&gt;

&lt;p&gt;На территории Туапсинского муниципального района проживает более 126 000 человек, из них 20,6% граждане пожилого возраста.&lt;/p&gt;

&lt;p&gt;Основными задачами деятельности ГБУ СО КК «Туапсинский КЦСОН» является повышение качества, объема, доступности, адресное предоставления социальных услуг. Учреждение работает на рынке социальных услуг 30 лет. За эти годы приобретен обширный опыт работы в сфере оказании социальных услуг, предоставляемых отделениями социального обслуживания на дому, отделениями срочного социального обслуживания, отделением помощи семье и детям, отделением ночного пребывания.&lt;/p&gt;',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:50:24',
                                'TIMESTAMP_X' => '08.03.2020 19:53:50',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'NAME' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'УЧРЕДИТЕЛЬ: Министерство труда и социального развития Краснодарского края',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '8 861 32 2-23-44',
                                    ),
                                    'FAX' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '8 861 32 2-23-44',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'msrsp@krasnodar.ru',
                                    ),
                                    'ZAM_DIRECTOR' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'rasnodar.ru',
                                            'TYPE' => 'HTML',
                                        ),
                                    ),
                                    'WORK_TIME' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            '0' => 'qG7ePmaM',
                                            '1' => 'd0ntGakb',
                                            '2' => 'zORQTDH6',
                                            '3' => 'PcWRR5nd',
                                            '4' => 's22tYqVN',
                                            '5' => 'y3Os1mg8',
                                            '6' => 'PsvKdOIa',
                                        ),
                                    ),
                                    'ADDRESS' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'г. Краснодар, ул. им. Чапаева, д. 58',
                                    ),
                                    'MAP' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => '45.049352244325,38.979054980105',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '1' => Array (
                'ID' => '4',
                'CODE' => 'kadrovoe_obespechenie',
                'NAME' => 'Кадровое обеспечение',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/main_info/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/obshchie-svedeniya/kadrovoe-obespechenie/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/main_info/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_5',
                                'EXTERNAL_ID' => '5',
                                'NAME' => 'Список сотрудников учреждения на 1.07.2019г.',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '04.03.2020 11:12:55',
                                'TIMESTAMP_X' => '04.03.2020 11:12:55',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '11',
                                        'FILE' => Array (
                                            'ID' => '11',
                                            'TIMESTAMP_X' => '04.03.2020 11:12:55',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '406721',
                                            'CONTENT_TYPE' => 'application/pdf',
                                            'SUBDIR' => 'iblock/ae1',
                                            'FILE_NAME' => 'ae196b583ca2b208ca09c418013f4d40.pdf',
                                            'ORIGINAL_NAME' => 'Spisok-sotrudnikov-uchrezhdeniya-na-1.07.2019g..pdf',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '3ae93aa31a5c1f1afbcbfaa87c21d506',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/ae1/ae196b583ca2b208ca09c418013f4d40.pdf',
                                            'NEW_SRC' => '11.pdf',
                                        ),
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_6',
                                'EXTERNAL_ID' => '6',
                                'NAME' => 'Название новое документа длинное название документа очень длинное название',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '04.03.2020 12:43:42',
                                'TIMESTAMP_X' => '10.03.2020 20:49:15',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '12',
                                        'FILE' => Array (
                                            'ID' => '12',
                                            'TIMESTAMP_X' => '04.03.2020 12:43:42',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '104841',
                                            'CONTENT_TYPE' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                            'SUBDIR' => 'iblock/12a',
                                            'FILE_NAME' => '12a314ed4b534b502e196a2b82fbd184.xlsx',
                                            'ORIGINAL_NAME' => 'words(1).xlsx',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => 'f8f3cce0ccae7f0fe9c393ae215c323a',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/12a/12a314ed4b534b502e196a2b82fbd184.xlsx',
                                            'NEW_SRC' => '12.xlsx',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '2' => Array (
                'ID' => '5',
                'CODE' => 'normativnaya-dokumentatsiya',
                'NAME' => 'Нормативная документация',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/main_info/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/obshchie-svedeniya/normativnaya-dokumentatsiya/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/main_info/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_7',
                                'EXTERNAL_ID' => '7',
                                'NAME' => 'Название документа',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '04.03.2020 13:43:03',
                                'TIMESTAMP_X' => '04.03.2020 13:43:03',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '13',
                                        'FILE' => Array (
                                            'ID' => '13',
                                            'TIMESTAMP_X' => '04.03.2020 13:43:03',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '464125',
                                            'CONTENT_TYPE' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                            'SUBDIR' => 'iblock/d95',
                                            'FILE_NAME' => 'd955423d90d909abdb28f92148f52d0d.xlsx',
                                            'ORIGINAL_NAME' => 'words.xlsx',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '1cea73d8d093bc10cce68690fefbe46a',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/d95/d955423d90d909abdb28f92148f52d0d.xlsx',
                                            'NEW_SRC' => '13.xlsx',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '3' => Array (
                'ID' => '6',
                'CODE' => 'materialno_tekhnicheskoe_obespechenie_sotsialnykh',
                'NAME' => 'Материально-техническое обеспечение социальных услуг',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/main_info/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/obshchie-svedeniya/materialno-tekhnicheskoe-obespechenie-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/main_info/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_9',
                                'EXTERNAL_ID' => '9',
                                'NAME' => 'Основное описание',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '100',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => ' Административное здание оснащено автоматической пожарной и охранной сигнализацией, а также системой видеонаблюдения.&lt;br&gt;
&lt;br&gt;
Учреждению принадлежат несколько зданий. Кабинеты оснащены необходимой мебелью и компьютерной техникой.&lt;br&gt;
&lt;br&gt;
Количество автотранспорта в учреждении 17 единиц, из них 1 автомобиль для перевозки пассажиров с ограниченными физическими возможностями.&lt;br&gt;
&lt;br&gt;
Для обучения граждан пожилого возраста компьютерной грамотности оборудован компьютерный класс на 10 мест (автоматизированные рабочие станции, мультимедийное оборудование).&lt;br&gt;
&lt;br&gt;
На базе учреждения осуществляет деятельность социальный пункт проката технических средств реабилитации и адаптации. ',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 12:51:44',
                                'TIMESTAMP_X' => '05.03.2020 13:20:52',
                                'TAGS' => '',
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_12',
                                'EXTERNAL_ID' => '12',
                                'NAME' => 'Оборудованные помещения',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 13:16:35',
                                'TIMESTAMP_X' => '05.03.2020 17:09:13',
                                'TAGS' => '',
                            ),
                        ),
                    ),
                ),
            ),
            '4' => Array (
                'ID' => '7',
                'CODE' => 'struktura',
                'NAME' => 'Структура и органы управления',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/main_info/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/obshchie-svedeniya/struktura-i-organy-upravleniya/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/main_info/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_14',
                                'EXTERNAL_ID' => '14',
                                'NAME' => 'Структура',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '400',
                                'PREVIEW_PICTURE' => Array (
                                    'ID' => '14',
                                    'TIMESTAMP_X' => '05.03.2020 16:26:22',
                                    'MODULE_ID' => 'iblock',
                                    'HEIGHT' => '740',
                                    'WIDTH' => '1058',
                                    'FILE_SIZE' => '218576',
                                    'CONTENT_TYPE' => 'image/jpeg',
                                    'SUBDIR' => 'iblock/586',
                                    'FILE_NAME' => '586105f165d2ba62301679cdb3de2c24.jpg',
                                    'ORIGINAL_NAME' => 'structura.png.jpg',
                                    'DESCRIPTION' => '',
                                    'HANDLER_ID' => '',
                                    'EXTERNAL_ID' => '7935cdcd42b12d695bd7dd9a0a30785f',
                                    '~src' => '',
                                    'SRC' => '/upload/iblock/586/586105f165d2ba62301679cdb3de2c24.jpg',
                                    'NEW_SRC' => '14.jpg',
                                ),
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 16:23:42',
                                'TIMESTAMP_X' => '05.03.2020 16:26:22',
                                'TAGS' => '',
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_16',
                                'EXTERNAL_ID' => '16',
                                'NAME' => 'Структурные подразделения',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '&lt;table width=&quot;733&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;1&quot;&gt;
&lt;tbody&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			&lt;strong&gt;Наименование структурного подразделения&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			&lt;strong&gt;Ф.И.О. руководителя структурного подразделения&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			&lt;strong&gt;Должность руководителя структурного подразделения&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			&lt;strong&gt;Контактная информация (адрес, телефон)&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отдел кадров
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Ешенкова Татьяна Ивановна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Начальник отдела кадров
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 13
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 1
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Солодкая Наталья Анатольевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 3
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Дубова
		&lt;/p&gt;
		&lt;p&gt;
			Лилия Валерьевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 4
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Еременко
		&lt;/p&gt;
		&lt;p&gt;
			Светлана Ивановна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 5
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Бондарева Элеонора Владимировна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 6
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Харченко Анастасия Валентиновна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 7
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Даненко Наталья Сергеевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 8
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Склярова Ирина Викторовна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 9
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Ильницкая Татьяна Николаевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Архангельская,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Ленина, д. 21
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-27-62
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 10
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Степанова Виктория Юрьевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Алексеевская, ул. Ленина, д. 36 тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 11
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Гнетько Юлия Сергеевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Фастовецкая, ул. Азина, 8
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 12
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Проскурина Наталья Евгеньевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Новорождественская,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Первомайская, д. 23
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-68-95
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 13
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Хлопотова Лариса Ивановна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Архангельская,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Ленина, д. 21
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-27-62
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 14
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Фоменко Татьяна Юрьевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Фастовецкая, ул. Азина, 8
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 15
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Денисова Светлана Евгеньевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Новорождественская,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Первомайская, д. 23
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-68-95
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 16
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Шевченко Елена Викторовна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Терновская, ул. Суворова, д. 8 тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 17
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Болгова Анна Олеговна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			пос. Парковый, г. Тихорецк,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Энгельса, д. 174
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 7-00-18
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 18
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Киселева Елена Борисовна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			пос. Парковый, г. Тихорецк,
		&lt;/p&gt;
		&lt;p&gt;
			ул. Энгельса, д. 174
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 7-00-18
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение социального обслуживания № 19
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Леонова Людмила Викторовна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			ст. Алексеевская, ул. Ленина, д. 36 тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение срочного социального обслуживания № 1
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Глухачева Лариса Эдуардовна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк
		&lt;/p&gt;
		&lt;p&gt;
			ул. Подвойского, 113/1
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(952) 81-74-878
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение срочного социального обслуживания № 2
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Агошкова Маргарита Владимировна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк
		&lt;/p&gt;
		&lt;p&gt;
			ул. Подвойского, 113/1
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(952) 81-74-878
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Организационно-методическое отделение
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Бондарева Елена Ахмадулаевна
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк, ул. Короткая, 12
		&lt;/p&gt;
		&lt;p&gt;
			тел. 8(86196) 4-13-68
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;185&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Отделение помощи семье и детям
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;170&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Тищенко Наталия Дмитриевна
		&lt;/p&gt;
		&lt;p&gt;
			&amp;nbsp;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;149&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			Специалист по социальной работе
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;230&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			г. Тихорецк,&amp;nbsp;ул. Мира, д. 3А
		&lt;/p&gt;
		&lt;p&gt;
			тел.: 8 (86196) 5-64-59&amp;nbsp;
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 16:39:08',
                                'TIMESTAMP_X' => '10.03.2020 21:02:28',
                                'TAGS' => '',
                            ),
                            '2' => Array (
                                'CODE' => 'OLD_ID_17',
                                'EXTERNAL_ID' => '17',
                                'NAME' => 'Тестовый документ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 16:41:31',
                                'TIMESTAMP_X' => '05.03.2020 17:28:30',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '15',
                                        'FILE' => Array (
                                            'ID' => '15',
                                            'TIMESTAMP_X' => '05.03.2020 16:42:45',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '231966',
                                            'CONTENT_TYPE' => 'application/pdf',
                                            'SUBDIR' => 'iblock/a18',
                                            'FILE_NAME' => 'a182f25bdf187aa181f192394fbd927e.pdf',
                                            'ORIGINAL_NAME' => '555.pdf',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '49a53170c8b2abf6f0f4a40e810a2298',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/a18/a182f25bdf187aa181f192394fbd927e.pdf',
                                            'NEW_SRC' => '15.pdf',
                                        ),
                                    ),
                                ),
                            ),
                            '3' => Array (
                                'CODE' => 'OLD_ID_72',
                                'EXTERNAL_ID' => '72',
                                'NAME' => 'Документ',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '10.03.2020 21:02:50',
                                'TIMESTAMP_X' => '10.03.2020 21:02:50',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '38',
                                        'FILE' => Array (
                                            'ID' => '38',
                                            'TIMESTAMP_X' => '10.03.2020 21:02:50',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '406721',
                                            'CONTENT_TYPE' => 'application/pdf',
                                            'SUBDIR' => 'iblock/93b',
                                            'FILE_NAME' => '93b10b7778be466cda4d501733e8c3a9.pdf',
                                            'ORIGINAL_NAME' => 'Spisok-sotrudnikov-uchrezhdeniya-na-1.07.2019g..pdf',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '9c2583470ae35b6935ea6252af4aab07',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/93b/93b10b7778be466cda4d501733e8c3a9.pdf',
                                            'NEW_SRC' => '38.pdf',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    '3' => Array (
        'LID' => 'ru',
        'NAME' => 'Получатели социальных услуг',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'poluchateli_sotsialnykh_uslug',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Получатели социальных услуг',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '10',
                'CODE' => 'Chislenost',
                'NAME' => 'Численность',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/poluchateli-sotsialnykh-uslug/chislennost/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_21',
                                'EXTERNAL_ID' => '21',
                                'NAME' => 'Показатели',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '&lt;p&gt;
	 Численность обслуженных получателей социальных услуг за 2020 года
&lt;/p&gt;
&lt;table width=&quot;649&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;1&quot;&gt;
&lt;tbody&gt;
&lt;tr&gt;
	&lt;td rowspan=&quot;2&quot; width=&quot;319&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;&lt;em&gt;Виды услуг&lt;/em&gt;&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td colspan=&quot;3&quot; width=&quot;330&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;&lt;em&gt;Количество человек:&lt;/em&gt;&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;110&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;&lt;em&gt;Всего&lt;/em&gt;&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot;&gt;
		&lt;p&gt;
 &lt;em&gt;из них бесплатно&lt;/em&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot;&gt;
		&lt;p&gt;
 &lt;em&gt;из них платно&lt;/em&gt;
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;319&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 Социально-бытовые услуги
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;2670&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 770
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 1930
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;319&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 Социально-медицинские услуги
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;2573&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 720
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 1853
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;319&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 Социально-психологические услуги
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;2259&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 633
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 1626
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td width=&quot;319&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 Социально-правовые услуги
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
 &lt;strong&gt;209&lt;/strong&gt;
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 59
		&lt;/p&gt;
	&lt;/td&gt;
	&lt;td width=&quot;110&quot; valign=&quot;top&quot;&gt;
		&lt;p&gt;
			 150
		&lt;/p&gt;
	&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 17:58:23',
                                'TIMESTAMP_X' => '10.03.2020 20:57:57',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'HIDE_NAME' => Array (
                                        'PROPERTY_TYPE' => 'L',
                                        'VALUE' => 'ДА',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '1' => Array (
                'ID' => '11',
                'CODE' => 'colischestvo_mest',
                'NAME' => 'Количество свободных мест',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/poluchateli-sotsialnykh-uslug/kolichestvo-svobodnykh-mest/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
            '2' => Array (
                'ID' => '12',
                'CODE' => 'obem_uslug',
                'NAME' => 'Объём предоставляемых социальных услуг',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/poluchateli-sotsialnykh-uslug/obyem-predostavlyaemykh-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
            '3' => Array (
                'ID' => '13',
                'CODE' => 'info_for_users',
                'NAME' => 'Информация для получателей социальных услуг',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/poluchateli-sotsialnykh-uslug/informatsiya-dlya-poluchateley-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/poluchateli_sotsialnykh_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
        ),
    ),
    '4' => Array (
        'LID' => 'ru',
        'NAME' => 'Попечительский совет',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'popechitelsk_sovet',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Попечительский совет',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '18',
                'CODE' => 'pop_sovet',
                'NAME' => 'Попечительский совет',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/popechitelsk_sovet/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/popechitelskiy-sovet/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/popechitelsk_sovet/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
        ),
    ),
    '5' => Array (
        'LID' => 'ru',
        'NAME' => 'Предписания органов государственного контроля и оценка качества',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'predpisania_organov',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Предписания органов государственного контроля и оценка качества',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '16',
                'CODE' => 'predpisania_organov',
                'NAME' => 'Предписания органов государственного контроля',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/predpisania_organov/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/predpisaniya-organov-gosudarstvennogo-kontrolya-i-otsenka-kachestva/predpisaniya-organov-gosudarstvennogo-kontrolya/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/predpisania_organov/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
            '1' => Array (
                'ID' => '17',
                'CODE' => 'nezavisimaia_ocenka',
                'NAME' => 'Независимая оценка качества оказанных социальных услуг',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/predpisania_organov/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/predpisaniya-organov-gosudarstvennogo-kontrolya-i-otsenka-kachestva/nezavisimaya-otsenka-kachestva-okazannykh-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/predpisania_organov/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
        ),
    ),
    '6' => Array (
        'LID' => 'ru',
        'NAME' => 'Противодействие коррупции',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'protive_corup',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Противодействие коррупции',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '19',
                'CODE' => 'protiv_corupcii',
                'NAME' => 'Противодействие коррупции',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/protive_corup/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/protivodeystvie-korruptsii/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/protive_corup/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                ),
            ),
        ),
    ),
    '7' => Array (
        'LID' => 'ru',
        'NAME' => 'Служебные',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'service',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Служебные',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '22',
                'CODE' => 'feeback',
                'NAME' => 'Форма обратной связи',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/service/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '#SITE_DIR#/service/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/service/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'FIO' => Array (
                        'NAME' => 'Фио',
                        'ACTIVE' => 'Y',
                        'SORT' => '400',
                        'CODE' => 'FIO',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'Y',
                        'USER_TYPE' => '',
                    ),
                    'EMAIL' => Array (
                        'NAME' => 'Email',
                        'ACTIVE' => 'Y',
                        'SORT' => '401',
                        'CODE' => 'EMAIL',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'Y',
                        'USER_TYPE' => '',
                    ),
                    'PHONE' => Array (
                        'NAME' => 'Телефон',
                        'ACTIVE' => 'Y',
                        'SORT' => '402',
                        'CODE' => 'PHONE',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'QUESTION' => Array (
                        'NAME' => 'Вопрос',
                        'ACTIVE' => 'Y',
                        'SORT' => '403',
                        'CODE' => 'QUESTION',
                        'PROPERTY_TYPE' => 'S',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'Y',
                        'USER_TYPE' => 'HTML',
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_51',
                                'EXTERNAL_ID' => '51',
                                'NAME' => 'Вопрос 08.03.2020 17:41:04',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:41:04',
                                'TIMESTAMP_X' => '08.03.2020 19:41:04',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'd',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'd',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'd',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_52',
                                'EXTERNAL_ID' => '52',
                                'NAME' => 'Вопрос 08.03.2020 17:41:05',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:41:05',
                                'TIMESTAMP_X' => '08.03.2020 19:41:05',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'd',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'd',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'd',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '2' => Array (
                                'CODE' => 'OLD_ID_53',
                                'EXTERNAL_ID' => '53',
                                'NAME' => 'Вопрос 08.03.2020 17:42:40',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:42:40',
                                'TIMESTAMP_X' => '08.03.2020 19:42:40',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '3' => Array (
                                'CODE' => 'OLD_ID_54',
                                'EXTERNAL_ID' => '54',
                                'NAME' => 'Вопрос 08.03.2020 17:42:41',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:42:41',
                                'TIMESTAMP_X' => '08.03.2020 19:42:41',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '4' => Array (
                                'CODE' => 'OLD_ID_55',
                                'EXTERNAL_ID' => '55',
                                'NAME' => 'Вопрос 08.03.2020 17:43:39',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:43:39',
                                'TIMESTAMP_X' => '08.03.2020 19:43:39',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'fff',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ffff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '5' => Array (
                                'CODE' => 'OLD_ID_56',
                                'EXTERNAL_ID' => '56',
                                'NAME' => 'Вопрос 08.03.2020 17:43:39',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:43:39',
                                'TIMESTAMP_X' => '08.03.2020 19:43:39',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'fff',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'f',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ffff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '6' => Array (
                                'CODE' => 'OLD_ID_57',
                                'EXTERNAL_ID' => '57',
                                'NAME' => 'Вопрос 08.03.2020 17:44:38',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '08.03.2020 19:44:38',
                                'TIMESTAMP_X' => '08.03.2020 19:44:38',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'v',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'v',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'v',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'v',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '7' => Array (
                                'CODE' => 'OLD_ID_65',
                                'EXTERNAL_ID' => '65',
                                'NAME' => 'Вопрос 09.03.2020 19:53:57',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 21:53:57',
                                'TIMESTAMP_X' => '09.03.2020 21:53:57',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'dd',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'dd',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                            '8' => Array (
                                'CODE' => 'OLD_ID_66',
                                'EXTERNAL_ID' => '66',
                                'NAME' => 'Вопрос 09.03.2020 20:10:15',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '09.03.2020 22:10:15',
                                'TIMESTAMP_X' => '09.03.2020 22:10:15',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'FIO' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'dd',
                                    ),
                                    'EMAIL' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'ff',
                                    ),
                                    'PHONE' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => 'dd',
                                    ),
                                    'QUESTION' => Array (
                                        'PROPERTY_TYPE' => 'S',
                                        'VALUE' => Array (
                                            'TEXT' => 'ff',
                                            'TYPE' => 'TEXT',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    '8' => Array (
        'LID' => 'ru',
        'NAME' => 'Социальные услуги',
        'SECTION_NAME' => '',
        'ELEMENT_NAME' => '',
        'ID' => 'sotsialnye_uslug',
        'SECTIONS' => 'Y',
        'SORT' => '500',
        'LANG' => Array (
            'ru' => Array (
                'NAME' => 'Социальные услуги',
                'SECTION_NAME' => '',
                'ELEMENT_NAME' => '',
            ),
        ),
        'IBLOCKS' => Array (
            '0' => Array (
                'ID' => '8',
                'CODE' => 'formy_vidy_sotsialnykh_uslug',
                'NAME' => 'Формы и виды социальных услуг',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/sotsialnye_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/sotsialnye-uslugi/formy-i-vidy-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/sotsialnye_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_18',
                                'EXTERNAL_ID' => '18',
                                'NAME' => 'Услуги социального обслуживания',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '400',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => ' Форма социального обслуживания: социальное обслуживание на дому, полустационарное.&lt;br&gt;
&lt;br&gt;
Виды социальных услуг:&lt;br&gt;
&lt;br&gt;
Услуги, предоставляемые комплексными центрами социального обслуживания населения, утверждены Законом Краснодарского края от 26 декабря 2014 года N° 3087-КЗ &quot;Об утверждении перечня социальных услуг, предоставляемых поставщиками социальных услуг на территории Краснодарского края&quot; &lt;br&gt;
&lt;br&gt;
1. Услуги, предоставляемые отделениями социального обслуживания на дому:&lt;br&gt;
&lt;br&gt;
1) социально-бытовые услуги;&lt;br&gt;
2) социально-медицинские услуги;&lt;br&gt;
3) социально-психологические услуги;&lt;br&gt;
4) социально-правовые услуги.&lt;br&gt;
&lt;br&gt;
2. Услуги, предоставляемые отделениями срочного социального обслуживания:&lt;br&gt;
&lt;br&gt;
1) социально-бытовые услуги;&lt;br&gt;
2) социально-медицинские услуги;&lt;br&gt;
3) социально-правовые услуги;&lt;br&gt;
4) социально-психологические услуги.&lt;br&gt;
&lt;br&gt;
3. Услуги, предоставляемые отделением ночного пребывания:&lt;br&gt;
&lt;br&gt;
1) социально-бытовые услуги;&lt;br&gt;
2) социально-медицинские услуги;&lt;br&gt;
3) социально-трудовые услуги;&lt;br&gt;
4) социально-правовые услуги;&lt;br&gt;
5) социально-психологические услуги;&lt;br&gt;
&lt;br&gt;
4. Услуги, предоставляемые отделениями профилактики семейного неблагополучия:&lt;br&gt;
&lt;br&gt;
1) социально-бытовые услуги;&lt;br&gt;
2) социально-медицинские услуги;&lt;br&gt;
3) социально-психологические услуги;&lt;br&gt;
4) социально-педагогические услуги;&lt;br&gt;
5) социально-трудовые услуги;&lt;br&gt;
6) социально-правовые услуги. ',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 17:17:11',
                                'TIMESTAMP_X' => '05.03.2020 17:49:18',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'HIDE_NAME' => Array (
                                        'PROPERTY_TYPE' => 'L',
                                        'VALUE' => 'ДА',
                                    ),
                                ),
                            ),
                            '1' => Array (
                                'CODE' => 'OLD_ID_19',
                                'EXTERNAL_ID' => '19',
                                'NAME' => 'Приказ о внесении изменений в приказ министерства социального развития и семейной политики Краснодарского края от 5 декабря 2014 года № 981',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '',
                                'PREVIEW_TEXT_TYPE' => 'text',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 17:28:13',
                                'TIMESTAMP_X' => '05.03.2020 17:30:11',
                                'TAGS' => '',
                                'PROPERTY_VALUES' => Array (
                                    'DOC' => Array (
                                        'PROPERTY_TYPE' => 'F',
                                        'VALUE' => '16',
                                        'FILE' => Array (
                                            'ID' => '16',
                                            'TIMESTAMP_X' => '05.03.2020 17:29:52',
                                            'MODULE_ID' => 'iblock',
                                            'HEIGHT' => '0',
                                            'WIDTH' => '0',
                                            'FILE_SIZE' => '2023628',
                                            'CONTENT_TYPE' => 'application/pdf',
                                            'SUBDIR' => 'iblock/104',
                                            'FILE_NAME' => '104eafc4f9dd8eec007fe80787329459.pdf',
                                            'ORIGINAL_NAME' => 'Приказ № 2011 от 29.12.2017 О внесении изменений в приказ министерства социального развития и семейной политики Краснодарского края от 15 января 2015 года № 14.pdf',
                                            'DESCRIPTION' => '',
                                            'HANDLER_ID' => '',
                                            'EXTERNAL_ID' => '2f133e7af88ee2c335ef17bb59836f42',
                                            '~src' => '',
                                            'SRC' => '/upload/iblock/104/104eafc4f9dd8eec007fe80787329459.pdf',
                                            'NEW_SRC' => '16.pdf',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            '1' => Array (
                'ID' => '9',
                'CODE' => '',
                'NAME' => 'Тарифы на социальные услуги',
                'ACTIVE' => 'Y',
                'SORT' => '500',
                'LIST_PAGE_URL' => '#SITE_DIR#/sotsialnye_uslug/index.php?ID=#IBLOCK_ID#',
                'DETAIL_PAGE_URL' => '/sotsialnye-uslugi/formy-i-vidy-sotsialnykh-uslug/detail.php?ID=#ELEMENT_ID#detail.php?ID=#ELEMENT_ID#',
                'SECTION_PAGE_URL' => '#SITE_DIR#/sotsialnye_uslug/list.php?SECTION_ID=#SECTION_ID#',
                'INDEX_ELEMENT' => 'Y',
                'INDEX_SECTION' => 'Y',
                'WORKFLOW' => 'N',
                'BIZPROC' => 'N',
                'SECTION_CHOOSER' => 'L',
                'LIST_MODE' => '',
                'RIGHTS_MODE' => 'S',
                'VERSION' => '1',
                'EDIT_FILE_BEFORE' => '',
                'EDIT_FILE_AFTER' => '',
                'SECTIONS_NAME' => 'Разделы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENTS_NAME' => 'Элементы',
                'ELEMENT_NAME' => 'Элемент',
                'SITE_ID' => Array (
                    '0' => 's1',
                ),
                'PROPS' => Array (
                    'DOC' => Array (
                        'NAME' => 'Документ',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'DOC',
                        'PROPERTY_TYPE' => 'F',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                    ),
                    'HIDE_NAME' => Array (
                        'NAME' => 'Скрыть название',
                        'ACTIVE' => 'Y',
                        'SORT' => '500',
                        'CODE' => 'HIDE_NAME',
                        'PROPERTY_TYPE' => 'L',
                        'MULTIPLE' => 'N',
                        'FILE_TYPE' => '',
                        'MULTIPLE_CNT' => '5',
                        'LINK_IBLOCK_ID' => '0',
                        'IS_REQUIRED' => 'N',
                        'USER_TYPE' => '',
                        'VALUES' => Array (
                            '0' => Array (
                                'VALUE' => 'ДА',
                                'DEF' => 'N',
                                'SORT' => '500',
                                'EXTERNAL_ID' => 'YES',
                            ),
                        ),
                    ),
                ),
                'SECTIONS' => Array (
                    '0' => Array (
                        'IS_ROOT' => 'Y',
                        'ELEMENTS' => Array (
                            '0' => Array (
                                'CODE' => 'OLD_ID_20',
                                'EXTERNAL_ID' => '20',
                                'NAME' => 'Предоставление социальных услуг бесплатно',
                                'ACTIVE' => 'Y',
                                'DATE_ACTIVE_FROM' => '',
                                'SORT' => '500',
                                'PREVIEW_PICTURE' => '',
                                'PREVIEW_TEXT' => '1. Социальные услуги в форме социального обслуживания на дому, в полустационарной и стационарной формах социального обслуживания предоставляются бесплатно:&lt;br&gt;
&lt;br&gt;
1) несовершеннолетним детям;&lt;br&gt;
&lt;br&gt;
2) лицам, пострадавшим в результате чрезвычайных ситуаций, вооруженных межнациональных (межэтнических) конфликтов.&lt;br&gt;
&lt;br&gt;
2. Социальные услуги в форме социального обслуживания на дому и в полустационарной форме социального обслуживания предоставляются бесплатно, если на дату обращения среднедушевой доход получателя социальных услуг, рассчитанный в соответствии с нормативными правовыми актами Российской Федерации, ниже предельной величины или равен предельной величине среднедушевого дохода для предоставления социальных услуг бесплатно, установленной настоящим Законом.&lt;br&gt;
&lt;br&gt;
3. Законами Краснодарского края могут быть предусмотрены иные категории граждан, которым социальные услуги предоставляются бесплатно.&lt;br&gt;
&lt;br&gt;
Статья 6. Закона Краснодарского края от 05.11.2014 N° 3051-КЗ &quot;О социальном обслуживании населения на территории Краснодарского края&quot;.&lt;br&gt;
&lt;br&gt;
Размер ежемесячной платы за предоставление социальных услуг в форме социального облуживания на дому и в полустационарной форме социального обслуживания рассчитывается на основе тарифов на социальные услуги, но не может превышать пятьдесят процентов разницы между величиной среднедушевого дохода получателя социальной услуги и предельной величиной среднедушевого дохода, установленной в Краснодарском крае, за исключением участников и инвалидов Великой Отечественной войны.&lt;br&gt;
&lt;br&gt;
Размер ежемесячной платы за предоставление социальных услуг в стационарной форме социального обслуживания рассчитывается на основе тарифов на социальные услуги, но не может превышать семьдесят пять процентов среднедушевого дохода получателя социальных услуг, рассчитанного в соответствии с действующим законодательством, за исключением участников и инвалидов Великой Отечественной войны.&lt;br&gt;
&lt;br&gt;
Приказ министерства социального развития и семейной политики Краснодарского края от 5 декабря 2014 г. N° 981 &quot;Об утверждении размера платы за предоставление социальных услуг на территории Краснодарского края и порядка ее взимания (в ред. приказа министерства социального развития и семейной политики краснодарского края от 15.01.2015 N° 13). ',
                                'PREVIEW_TEXT_TYPE' => 'html',
                                'DETAIL_PICTURE' => '',
                                'DETAIL_TEXT' => '',
                                'DETAIL_TEXT_TYPE' => 'text',
                                'DATE_CREATE' => '05.03.2020 17:35:31',
                                'TIMESTAMP_X' => '05.03.2020 17:35:52',
                                'TAGS' => '',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
$bm = new BitrixMigration(__FILE__);
$bm->sStoreFilesDir = '/bm_files/';
$bm->uploadArray($arResult);
?>