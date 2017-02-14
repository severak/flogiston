<?php
function flogiston_translations(){

// english
$T['en']['date format'] = 'F j, Y H:i:s';
$T['en']['not found'] = 'Not found';
$T['en']['back home'] = 'Page not found. Please, return to the {homepage}.';
$T['en']['read more'] = 'read more »';
$T['en']['newer posts'] = 'newer';
$T['en']['older posts'] = 'older';
$T['en']['prev article'] = '« previous article';
$T['en']['next article'] = 'next article »';
$T['en']['blog empty'] = 'There are no articles yet.';

// czech
$T['cs']['date format'] = 'j.n.Y H:i:s';
$T['cs']['not found'] = 'Nenalezeno';
$T['cs']['back home'] = 'Stránka nenalezena. Prosím, vraťte se na {začátek}.';
$T['cs']['read more'] = 'celý článek »';
$T['cs']['newer posts'] = 'novější články';
$T['cs']['older posts'] = 'starší články';
$T['cs']['prev article'] = '« předchozí článek';
$T['cs']['next article'] = 'následující článek »';
$T['cs']['blog empty'] = 'Zatím nebyly napsány žádné články.';

	$currentLang = site_meta('flogiston_locale', 'en');
	return isset($T[$currentLang]) ? $T[$currentLang] : $T['en'];
}

function flogiston_translate($key, $replace=array())
{
	$translations = flogiston_translations();
	if (!isset($translations[$key])) {
		throw new Exception('Translation of "' . $key  . '" not found.');
	}
	return str_replace(array_keys($replace), array_values($replace), $translations[$key]);
}

function flogiston_server_uri()
{
	$s = !empty($_SERVER['HTTPS']) ? 's' : '';
	return 'http'.$s.'://' . $_SERVER['HTTP_HOST'];
}