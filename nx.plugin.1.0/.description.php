<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	'NAME' => GetMessage('IP_COMPONENT_NAME'),
	'DESCRIPTION' => GetMessage('IP_COMPONENT_DESC'),
	'ICON' => '/images/include.gif',
	'PATH' => array(
		'ID' => 'my_components',
		'NAME' => GetMessage('IP_COMPONENTS_TITLE'),
		'CHILD' => array(
			'ID' => 'utility',
			'NAME' => GetMessage('IP_COMPONENTS_GROUP')
		)
	),
);
