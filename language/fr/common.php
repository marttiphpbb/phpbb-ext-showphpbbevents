<?php

/**
*
* Show phpBB Events extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2019 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'MARTTIPHPBB_SHOWPHPBBEVENTS_SHOW'				=> 'Afficher',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_SHOW_EXPLAIN'		=> 'Permet d’afficher les évènements de phpBB',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_HIDE'				=> 'Masquer',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_HIDE_EXPLAIN'		=> 'Permet de masquer les évènements de phpBB',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_PHP_EVENT_NAME'	=> 'Évènement PHP',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_PHP_EVENT_COUNT'	=> 'Nombre',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_SINCE'				=> 'Depuis',
	'MARTTIPHPBB_SHOWPHPBBEVENTS_FILENAME'			=> 'Nom du fichier',
]);
