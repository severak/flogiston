<?php
// builds minified CSS
$usedModules = ['normalize', 'flogiston-page', 'flogiston-article', 'font-cyklop', 'flogiston-skin', 'flogiston-print'];
$signature = 'FLOGISTON - an Anchor CMS theme (see https://github.com/severak/flogiston)';

if (php_sapi_name()!='cli')
	die('Only for CLI');

$cssDir = realpath(__DIR__ . '/../css');

$output = '/* ' . $signature . ' */' . PHP_EOL;
foreach ($usedModules as $module) {
	$css = file_get_contents($cssDir . '/' . $module . '.css');
	$css = minify_css($css);
	$output .= $css;
}
file_put_contents($cssDir . '/flogiston.min.css', $output);
echo 'flogiston.min.css built OK' . PHP_EOL;

// taken from github.com/vrana/adminer
// author: Jakub Vrána
function minify_css($text)
{
	return preg_replace('~\\s*([:;{},])\\s*~', '\\1', preg_replace('~/\\*.*\\*/~sU', '', $text));
}
