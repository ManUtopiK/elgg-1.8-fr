<?php
/**
 * Elgg developer tools English language file.
 *
 */

$french = array(
	// menu
	'admin:developers' => "Les développeurs",
	'admin:developers:settings' => "Paramètres développeur",
	'admin:developers:preview' => "Prévisualisation thème",

	// settings
	'developers:label:simple_cache' => "Utiliser le cache simple",
	'developers:help:simple_cache' => "Désactiver le fichier cache lors du développement. Autrement, les changements que vous verrez (y compris les css) seront ignorés.",
	'developers:label:view_path_cache' => "Utiliser voir le chemin du cache",
	'developers:help:view_path_cache' => "Désactivez cette option lors du développement. Autrement, les nouveaux aspects de vos plugins ne seront pas enregistrés.",
	'developers:label:debug_level' => "Niveau de suivi des traces",
	'developers:help:debug_level' => "Contrôle la quantité d'informations enregistrées. Voir elgg_log() pour plus d'informations.",
	'developers:label:display_errors' => "Affichage des erreurs PHP fatales",
	'developers:help:display_errors' => "Par défaut, le fichier .htaccess d'Elgg supprime l'affichage des erreurs fatales.",

	'developers:debug:off' => "Off",
	'developers:debug:error' => "Erreur",
	'developers:debug:warning' => "Avertissement",
	'developers:debug:notice' => "Avis",

	// theme preview
	'theme_preview:buttons' => "Boutons",
	'theme_preview:components' => "Composants",
	'theme_preview:forms' => "Formulaires",
	'theme_preview:grid' => "Grille",
	'theme_preview:icons' => "Icônes",
	'theme_preview:modules' => "Modules",
	'theme_preview:navigation' => "Navigation",
	'theme_preview:typography' => "Typographie",
);

add_translation("fr", $french);