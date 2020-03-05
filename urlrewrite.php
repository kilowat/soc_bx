<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/events/([0-9a-zA-Z_/-]+).html(\\?(.*))?#',
    'RULE' => 'ELEMENT_CODE=$1&$2',
    'ID' => '',
    'PATH' => '/events/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
