<?php
/*
* init
*/

// absolut path
define('ABSPATH', dirname(__FILE__).'/');

// add firebug
require_once(ABSPATH . 'FirePHP.class.php');
global $fb;
$fb = FirePHP::getInstance(true);

// short-circuit of add_translation
function add_translation() {}

// mark in text 
global $mark;
$mark = "XXXX";

// names of plugins
$nameMods = array('blog', 'bookmarks', 'categories', 'custom_index', 'diagnostics', 'embed', 'externalpages', 'file', 'garbagecollector', 'groups', 'invitefriends', 'logbrowser', 'logrotate', 'members', 'messageboard', 'messages', 'notifications', 'pages', 'profile', 'reportedcontent', 'search', 'thewire', 'tinymce', 'twitter', 'uservalidationbyemail');
$newMods = array('invitefriends');//developers', 'likes', 'tagcloud', 'twitter_api');

?>


<!--
* Execute
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<title>ElggAutoTrad</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>

<?php

foreach ( $newMods as $mod ) {
	// Verify
	echo $mod . '<br/>';
	//echo trad_diff(ABSPATH . 'elgg-1.7.8/mod/' . $mod . '/languages/en.php', ABSPATH . 'elgg-1.7.7-fr/mod/' . $mod . '/languages/fr.php');

	//$frenchFile18 = translator(ABSPATH . '../Elgg/languages/en.php', ABSPATH . 'Elgg-1.7.8/languages/en.php', ABSPATH . 'elgg-1.7.7-fr/languages/fr.php');
	$frenchFile18 = translator(ABSPATH . '../Elgg/mod/' . $mod . '/languages/en.php', ABSPATH . 'elgg-1.7.8/mod/' . $mod . '/languages/en.php', ABSPATH . 'elgg-1.7.7-fr/mod/' . $mod . '/languages/fr.php');
	//$frenchFile18 = translatorWithoutOldVersion(ABSPATH . '../Elgg/mod/' . $mod . '/languages/en.php');
	//$file = fopen (ABSPATH . 'elgg-1.8/languages/fr.php', 'a+');
	$file = fopen (ABSPATH . 'elgg-1.8/mod/' . $mod . '/languages/fr.php', 'a+');
	foreach ( $frenchFile18 as $key => $value ) {
		fwrite($file, $value);
	}
	fclose($file);

}

?>

	</body>
</html>

<?php
/*
* Functions
*/

// Translator
function translator($PATHenglishFile18, $PATHenglishFile17, $PATHfrenchFile17) {
global $mark;
	// load file of 1.8 version in english
	$english18 = file($PATHenglishFile18);

	// load array of 1.8 version in english
	require($PATHenglishFile18);
	$array18 = $english;

	// load array of 1.7 version in english
	require($PATHenglishFile17);

	// load array of 1.7 version in french
	require($PATHfrenchFile17);

	$french18 = array();
	foreach ( $array18 as $key => $value ) {
		if ( array_key_exists($key, $english) ) {
			if ( $array18[$key] !== $english[$key] ) {
				$french18[$key] = $mark . 'changed on 1.8 (1.7=' . str_replace(CHR(10), " !\\n! ", $english[$key]) . ')' . $mark .  $value . $mark . $french[$key];
			} else {
				$french18[$key] = $french[$key];
			}
		} else {
			$translatevalue = translateTexts(array($value,''), 'en', 'fr');
			$french18[$key] = $mark . 'new on 1.8' . $mark . str_replace("\"", "'", str_replace("\n", "\\n",$value)) . $mark . 'google:' . str_replace("&#39;", "'", $translatevalue[0]);
		}
	}

	foreach ( $english18 as $key => $value ) {
		if ( preg_match('/(.*) => (.*)/', $value, $matches) ) {
			$ArrayKey = trim(str_replace(array("'", "\"", " "), "", $matches[1]));
			if ( preg_match('/\/\//', $ArrayKey) ) {
				$frenchFile18[$key] = $value;
			} else {
				$frenchFile18[$key] = $matches[1] . ' => "' . $french18[$ArrayKey] . '",' . CHR(13);
			}
		} elseif ( preg_match('/\$english =/', $value) ) {
			$frenchFile18[$key] = preg_replace('/\$english/', '$french', $value);
		} elseif ( preg_match('/add_translation/', $value) ) {
			$frenchFile18[$key] = 'add_translation("fr", $french);';
		} elseif ( $value === CHR(13) || $value === CHR(10) ) {
			$frenchFile18[$key] = CHR(13);
		} else {
			$frenchFile18[$key] = $value;
		}
	}

	return $frenchFile18;
}

function translatorWithoutOldVersion($PATHenglishFile18) {
global $mark;
	// load file of 1.8 version in english
	$english18 = file($PATHenglishFile18);

	// load array of 1.8 version in english
	require($PATHenglishFile18);
	$array18 = $english;

	$french18 = array();
	foreach ( $array18 as $key => $value ) {
		$translatevalue = translateTexts(array($value,''), 'en', 'fr');
		$french18[$key] = $mark . 'new on 1.8' . $mark . str_replace("\"", "'", str_replace("\n", "\\n",$value)) . $mark . 'google:' . str_replace("&#39;", "'", $translatevalue[0]);
	}

	foreach ( $english18 as $key => $value ) {
		if ( preg_match('/(.*) => (.*)/', $value, $matches) ) {
			$ArrayKey = trim(str_replace(array("'", "\"", " "), "", $matches[1]));
			if ( preg_match('/\/\//', $ArrayKey) ) {
				$frenchFile18[$key] = $value;
			} else {
				$frenchFile18[$key] = $matches[1] . ' => "' . $french18[$ArrayKey] . '",' . CHR(13);
			}
		} elseif ( preg_match('/\$english =/', $value) ) {
			$frenchFile18[$key] = preg_replace('/\$english/', '$french', $value);
		} elseif ( preg_match('/add_translation/', $value) ) {
			$frenchFile18[$key] = 'add_translation("fr", $french);';
		} elseif ( $value === CHR(13) || $value === CHR(10) ) {
			$frenchFile18[$key] = CHR(13);
		} else {
			$frenchFile18[$key] = $value;
		}
	}

	return $frenchFile18;
}


// Size of arrays are the same ?
function trad_diff($PATHenglishFile17, $PATHfrenchFile17) {

	// load array of 1.7 version in english
	require_once($PATHenglishFile17);

	// load array of 1.7 version in french
	require_once($PATHfrenchFile17);

	if ( count($english) !== count($french) ) {
		$results = "La taille des tableaux n'est pas la même : \$english = " . count($english) . " et \$french = " . count($french) . "<br/>";
		$results .= "<b>Différences :</b><br/>";
		foreach ( array_diff_key($english, $french) as $key => $value ) {
			$results .= "'" . $key . "' => '" . $value . "'<br/>";
		}
	} else {
		$results = 'Same size';
	}
	return $results;
}

// Translate a array. Don't work with one value. In fine, Google accept multiple request. I don't use this function in array mode.
function translateTexts($src_texts = array(), $src_lang, $dest_lang) {

	//setting language pair
	$lang_pair = $src_lang.'|'.$dest_lang;

	$src_texts_query = '';
	foreach ($src_texts as $src_text){
		$src_texts_query .= '&q='.urlencode($src_text);
	}
	$url = 'http://ajax.googleapis.com/ajax/services/language/translate?v=1.0'.$src_texts_query.'&langpair='.urlencode($lang_pair);

	// sendRequest
	// note how referer is set manually

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, 'http://www.YOURWEBSITE.com');
	$body = curl_exec($ch);
	curl_close($ch);

	// now, process the JSON string
	$json = json_decode($body, true);
	if ($json['responseStatus'] != 200) return false;

	$results = $json['responseData'];

	$return_array = array();

	foreach ($results as $result) {
		if ($result['responseStatus'] == 200) {
			$return_array[] = $result['responseData']['translatedText'];
		} else {
			$return_array[] = false;
		}
	}

	//return translated text
	return $return_array;
}

?>
