<?php
/**
 * Blog English language file.
 *
 */

$french = array(
	'blog' => "Blogs",
	'blog:blogs' => "Blogs",
	'blog:revisions' => "Révisions",
	'blog:archives' => "Archives",
	'blog:blog' => "Blog",
	'item:object:blog' => "Blogs",

	'blog:title:user_blogs' => "Blog de %s",
	'blog:title:all_blogs' => "Tous les blogs du site",
	'blog:title:friends' => "Blogs des contacts",

	'blog:group' => "Blog de groupe",
	'blog:enableblog' => "Activer le blog du groupe",
	'blog:write' => "Écrivez un article",

	// Editing
	'blog:add' => "Ajouter un article",
	'blog:edit' => "Modifier l'article",
	'blog:excerpt' => "Extrait",
	'blog:body' => "Corps de l'article",
	'blog:save_status' => "Dernier enregistrement :",
	'blog:never' => "jamais",

	// Statuses
	'blog:status' => "Statut",
	'blog:status:draft' => "Brouillon",
	'blog:status:published' => "Publié",
	'blog:status:unsaved_draft' => "Brouillon non enregistré",

	'blog:revision' => "Révision",
	'blog:auto_saved_revision' => "Révision enregistrée automatiquement",

	// messages
	'blog:message:saved' => "Article enregistré.",
	'blog:error:cannot_save' => ":Impossible d'enregistrer l'article.",
	'blog:error:cannot_write_to_container' => "Accès insuffisant pour enregistrer l'article pour ce groupe.",
	'blog:error:post_not_found' => "Cet article a été supprimé, est invalide, ou vous n'avez pas la permission de le voir.",
	'blog:messages:warning:draft' => "Il y a un brouillon non enregistré pour cet article !",
	'blog:edit_revision_notice' => "(Ancienne version)",
	'blog:message:deleted_post' => "Article supprimé.",
	'blog:error:cannot_delete_post' => "Impossible de supprimer l'article.",
	'blog:none' => "Aucun article",
	'blog:error:missing:title' => "Vous devez donner un titre à votre article !",
	'blog:error:missing:description' => "Le corps de votre article est vide !",
	'blog:error:cannot_edit_post' => "Cet article peut ne pas exister ou vous n'ayez pas les autorisations pour le modifier.",
	'blog:error:revision_not_found' => "Impossible de trouvez cette révision.",

	// river
	'blog:river:create' => "Publier un article",
	'river:commented:object:blog' => "le blog",

	// widget
	'blog:widget:description' => "Ce widget affiche vos derniers articles de blog.",
	'blog:moreblogs' => "Plus d'articles du blog",
	'blog:numbertodisplay' => "Nombre d'articles du blog à afficher",
	'blog:noblogs' => "Aucun blog",
);

add_translation("fr", $french);
