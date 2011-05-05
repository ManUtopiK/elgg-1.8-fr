<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$french = array(
	'logrotate:period' => "A quelle fréquence souhaitez-vous archiver les logs du système ?",

	'logrotate:weekly' => "Une fois par semaine",
	'logrotate:monthly' => "Une fois par mois",
	'logrotate:yearly' => "Une fois par an",

	'logrotate:logrotated' => "Rotation du log effectuée\n",
	'logrotate:lognotrotated' => "Erreur lors de la rotation du log\n",
	
	'logrotate:date' => "XXXXnew on 1.8XXXXDelete archived logs older than aXXXXgoogle:Supprimer les journaux archivés plus d'un",

	'logrotate:week' => "XXXXnew on 1.8XXXXweekXXXXgoogle:semaine",
	'logrotate:month' => "XXXXnew on 1.8XXXXmonthXXXXgoogle:mois",
	'logrotate:year' => "XXXXnew on 1.8XXXXyearXXXXgoogle:année",
		
	'logrotate:logdeleted' => "XXXXnew on 1.8XXXXLog deleted\nXXXXgoogle:Connectez-vous supprimé",
	'logrotate:lognotdeleted' => "XXXXnew on 1.8XXXXError deleting log\nXXXXgoogle:Erreur de suppression journal",
);

add_translation("fr", $french);
