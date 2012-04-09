<?php

elgg_register_event_handler('init','system','trad_helper_init');

function trad_helper_init() {
	
}

/**
 * Given a message shortcode, returns an appropriately translated full-text string
 *
 * @param string $message_key The short message code
 * @param array  $args        An array of arguments to pass through vsprintf().
 * @param string $language    Optionally, the standard language code
 *                            (defaults to site/user default, then English)
 *
 * @return string Either the translated string, the English string,
 * or the original language string.
 */
function elgg_echo($message_key, $args = array(), $language = "") { //Be carefull ! Delete « HACK_ » and change name or comment elgg_echo function on engine/lib/languages.php line 96
	global $CONFIG;

	static $CURRENT_LANGUAGE;

	// old param order is deprecated
	if (!is_array($args)) {
		elgg_deprecated_notice(
			'As of Elgg 1.8, the 2nd arg to elgg_echo() is an array of string replacements and the 3rd arg is the language.',
			1.8
		);

		$language = $args;
		$args = array();
	}

	if (!$CURRENT_LANGUAGE) {
		$CURRENT_LANGUAGE = get_language();
	}
	if (!$language) {
		$language = $CURRENT_LANGUAGE;
	}

	if (isset($CONFIG->translations[$language][$message_key])) {
		$string = $CONFIG->translations[$language][$message_key];
	} else if (isset($CONFIG->translations["en"][$message_key])) {
		$string = $CONFIG->translations["en"][$message_key];
	} else {
		$string = $message_key;
	}

	// only pass through if we have arguments to allow backward compatibility
	// with manual sprintf() calls.
	if ($args) {
		$string = vsprintf($string, $args);
	}
	$translate = "<!-- translation=$message_key -->";
	return $translate . $string;
}
