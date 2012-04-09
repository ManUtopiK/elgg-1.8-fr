<?php
	/**
	 * Elgg diagnostics language pack.
	 *
	 * @package ElggDiagnostics
	 */

	$french = array(

			'admin:utilities:diagnostics' => "Diagnostic du système",
			'diagnostics' => "Diagnostics du système",
			'diagnostics:report' => "Rapport de Diagnostic",
			'diagnostics:unittester' => "Tests d'unités",

			'diagnostics:description' => "Le rapport de diagnostic suivant est utile pour diagnostiquer tout problème avec Elgg, et devrait être inclus dans tout rapport d'erreur que vous rapportez.",
			'diagnostics:unittester:description' => "Les tests d'unités contrôlent le Core de Elgg en cas d'APIs cassés ou défectueux.",

			'diagnostics:unittester:description' => "Les tests d'unités contrôlent le Core de Elgg en cas d'APIs cassés ou défectueux.",
			'diagnostics:unittester:debug' => "Le site doit être en mode debug pour lancer les tests d'unités.",
			'diagnostics:unittester:warning' => "ATTENTION: ces tests peuvent laisser des éléments de débogage dans votre base de données.<br /> NE PAS UTILISER SUR UN SITE DE PRODUCTION !",

			'diagnostics:test:executetest' => "Exécuter le test",
			'diagnostics:test:executeall' => "Tout exécuter",
			'diagnostics:unittester:notests' => "Désolé, il n'y a pas de module d'unité de test installé actuellement.",
			'diagnostics:unittester:testnotfound' => "Désolé, le rapport ne peut être généré, le test correspondant n'a pas été trouvé",

			'diagnostics:unittester:testresult:nottestclass' => "Echec - le résultat n'est pas une classe de test",
			'diagnostics:unittester:testresult:fail' => "Echec",
			'diagnostics:unittester:testresult:success' => "Succes",

			'diagnostics:unittest:example' => "Exemple de test d'unité, seulement disponible en mode debug.",

			'diagnostics:unittester:report' => "Rapport de test pour %s",

			'diagnostics:download' => "Télécharger le fichier '.txt'",


			'diagnostics:header' => "========================================================================
Elgg Diagnostic Report
Généré %s par %s
========================================================================

",
			'diagnostics:report:basic' => "
Elgg Release %s, version %s

------------------------------------------------------------------------",
			'diagnostics:report:php' => "
PHP info:
%s
------------------------------------------------------------------------",
			'diagnostics:report:plugins' => "
Plugins installés et détails:

%s
------------------------------------------------------------------------",
			'diagnostics:report:md5' => "
Fichiers installés et checksums:

%s
------------------------------------------------------------------------",
			'diagnostics:report:globals' => "
Variables globales:

%s
------------------------------------------------------------------------",

	);

add_translation("fr", $french);
?>
