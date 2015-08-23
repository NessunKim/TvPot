<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'TvPot' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['TvPot'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for Cite extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the TvPot extension requires MediaWiki 1.25+' );
}
