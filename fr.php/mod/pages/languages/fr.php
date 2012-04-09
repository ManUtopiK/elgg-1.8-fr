<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$french = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Pages",
	'pages:owner' => "Pages de s%",
	'pages:friends' => "Pages de amis ",
	'pages:all' => "Toutes les pages du site",
	'pages:add' => "Ajouter une page",

	'pages:group' => "Pages du groupe",
	'groups:enablepages' => "Autoriser les pages de Groupe",

	'pages:edit' => "Editer cette page",
	'pages:delete' => "Effacer cette page",
	'pages:history' => "Historique",
	'pages:view' => "Voir la page",
	'pages:revision' => "Révision",

	'pages:navigation' => "Navigation",
	'pages:via' => "via les pages",
	'item:object:page_top' => "Page de plus haut niveau",
	'item:object:page' => "Pages",
	'pages:nogroup' => "Ce groupe ne comporte encore aucune page",
	'pages:more' => "Plus de pages",
	'pages:none' => "Aucune page créé pour l'instant",

	/**
	* River
	**/

	'pages:river:create' => "La page crée",
	'pages:river:created' => "%s a écrit",
	'pages:river:updated' => "%s mis à jour",
	'pages:river:posted' => "%s posté",
	'pages:river:update' => "une page intitulée",
	'river:commented:object:page' => "la page",
	'river:commented:object:page_top' => "la page",

	/**
	 * Form fields
	 */

	'pages:title' => "Titre de la page",
	'pages:description' => "Texte de la page",
	'pages:tags' => "Tags",
	'pages:access_id' => "Accès en lecture",
	'pages:write_access_id' => "Accès en écriture",

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => "Pas d'accès à cette page",
	'pages:cantedit' => "Vous ne pouvez pas éditer cette page",
	'pages:saved' => "Pages enregistrées",
	'pages:notsaved' => "La page n'a pu être enregistrée",
	'pages:error:no_title' => "Vous devez spécifier un titre pour cette page.",
	'pages:delete:success' => "Votre page a bien été effacée.",
	'pages:delete:failure' => "Votre page n'a pu être effacée.",

	/**
	 * Page
	 */
	'pages:strapline' => "Dernière mise à jour le %s par %s",

	/**
	 * History
	 */
	'pages:revision:subtitle' => "Révision créé %s par %s",

	/**
	 * Widget
	 **/

	'pages:num' => "Nombre de pages à afficher",
	'pages:widget:description' => "Voici la liste des vos pages.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Voir la page",
	'pages:label:edit' => "Editer la page",
	'pages:label:history' => "Historique de la page",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Cette page",
	'pages:sidebar:children' => "Sous-pages",
	'pages:sidebar:parent' => "Parent",

	'pages:newchild' => "Créer une sous-page",
	'pages:backtoparent' => "Retour à '%s'",
);

add_translation("fr", $french);