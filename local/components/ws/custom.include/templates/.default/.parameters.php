<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
    "ACTIVE" =>  array(
        "NAME" =>  GetMessage("ACTIVE"),
        "TYPE" =>  "STRING",
    ),
    "HEADER" =>  array(
        "NAME" =>  GetMessage("HEADER"),
        "TYPE" =>  "STRING",
    ),
    "APP_STORE_LINK" =>  array(                   /** Символьный код параметра */
        "NAME" =>  GetMessage("APP_STORE_LINK"),  /** Название макроса */
        "TYPE" =>  "STRING",                      /** Тип параметра, всегда STRING */
    ),
    "GPLAY_LINK" =>  array(                       /** Символьный код параметра */
        "NAME" =>  GetMessage("GPLAY_LINK"),      /** Название макроса */
        "TYPE" =>  "STRING",                      /** Тип параметра, всегда STRING */
    ),
);