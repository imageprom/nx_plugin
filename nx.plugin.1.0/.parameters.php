<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		
		"CACHE_TIME"  =>  Array("DEFAULT"=>300),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),		
	)
);