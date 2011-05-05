<?php
/**
 * Elgg groups plugin language pack
 *
 * @package ElggGroups
 */

$french = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Groupes",
	'groups:owned' => "XXXXchanged on 1.8 (1.7=Groups you own)XXXXGroups I ownXXXXLes groupes que vous possedez",
	'groups:yours' => "XXXXchanged on 1.8 (1.7=Your groups)XXXXMy groupsXXXXVos groupes",
	'groups:user' => "Les groupes de %s",
	'groups:all' => "XXXXchanged on 1.8 (1.7=All site groups)XXXXAll groupsXXXXTous les groupes du site",
	'groups:add' => "XXXXnew on 1.8XXXXCreate a new groupXXXXgoogle:Créer un nouveau groupe",
	'groups:edit' => "Modifier le groupe",
	'groups:delete' => "Supprimer le groupe",
	'groups:membershiprequests' => "Gérer les membres souhaitant se joindre au groupe",
	'groups:invitations' => "Invitations du groupe",

	'groups:icon' => "Icone du groupe (ne rien inscrire pour laisser inchangé)",
	'groups:name' => "Nom du groupe",
	'groups:username' => "Nom court du goupe (Qui s'affichera dans l'URL : en caractères alphanumériques)",
	'groups:description' => "Description",
	'groups:briefdescription' => "Brève description",
	'groups:interests' => "Intérêts",
	'groups:website' => "Site web",
	'groups:members' => "Membres du groupe",
	'groups:members:title' => "XXXXnew on 1.8XXXXMembers of %sXXXXgoogle:Les membres de% s",
	'groups:members:more' => "XXXXchanged on 1.8 (1.7=View more members)XXXXView all membersXXXXVoir plus de membres",
	'groups:membership' => "Permissions d'accès au groupe",
	'groups:access' => "Permissions d'accès",
	'groups:owner' => "Propriétaire",
	'groups:widget:num_display' => "Nombre de groupes à afficher",
	'groups:widget:membership' => "Adhésion au groupe",
	'groups:widgets:description' => "Afficher les groupes dont vous êtes membre dans votre profil",
	'groups:noaccess' => "Vous n'avez pas accès au groupe",
	'groups:permissions:error' => "XXXXnew on 1.8XXXXYou do not have the permissions for thisXXXXgoogle:Vous n'avez pas les autorisations pour ce",
	'groups:ingroup' => "XXXXnew on 1.8XXXXin the groupXXXXgoogle:dans le groupe",
	'groups:cantedit' => "Vous ne pouvez pas modifier ce groupe",
	'groups:saved' => "Groupe enregistré",
	'groups:featured' => "Les groupes à la une",
	'groups:makeunfeatured' => "Enlever de la une",
	'groups:makefeatured' => "Mettre en une",
	'groups:featuredon' => "XXXXchanged on 1.8 (1.7=You have made this group a featured one.)XXXX%s is now a featured group.XXXXVous avez mis ce groupe à la une.",
	'groups:unfeatured' => "XXXXnew on 1.8XXXX%s has been removed from the featured groups.XXXXgoogle:s% a été enlevé par les groupes en vedette.",
	'groups:featured_error' => "XXXXnew on 1.8XXXXInvalid group.XXXXgoogle:groupe de Blancs.",
	'groups:joinrequest' => "Demander une adhésion au groupe",
	'groups:join' => "Rejoindre le groupe",
	'groups:leave' => "Quitter le groupe",
	'groups:invite' => "Inviter des contacts",
	'groups:invite:title' => "XXXXnew on 1.8XXXXInvite friends to this groupXXXXgoogle:Invitez vos amis à ce groupe",
	'groups:inviteto' => "Inviter des contacts au groupe '%s'",
	'groups:nofriends' => "Vous n'avez plus de contacts à inviter à ce groupe.",
	'groups:nofriendsatall' => "XXXXnew on 1.8XXXXYou have no friends to invite!XXXXgoogle:Vous n'avez pas d'amis à inviter!",
	'groups:viagroups' => "Via les groupes",
	'groups:group' => "Groupe",
	'groups:search:tags' => "Tag",
	'groups:search:title' => "XXXXnew on 1.8XXXXSearch for groups tagged with '%s'XXXXgoogle:Rechercher des groupes associés à '% s' avec",
	'groups:search:none' => "XXXXnew on 1.8XXXXNo matching groups were foundXXXXgoogle:Aucun groupe correspondant n'a été trouvé",

	'groups:activity' => "XXXXnew on 1.8XXXXGroup activityXXXXgoogle:L'activité du Groupe",
	'groups:enableactivity' => "XXXXnew on 1.8XXXXEnable group activityXXXXgoogle:activité de groupe Activer",
	'groups:activity:none' => "XXXXnew on 1.8XXXXThere is no group activity yetXXXXgoogle:Il n'y a pas encore d'activité du groupe",

	'groups:notfound' => "Le groupe n'a pas été trouvé",
	'groups:notfound:details' => "Le groupe que vous recherchez n'existe pas, ou alors vous n'avez pas la permission d'y accéder",

	'groups:requests:none' => "Il n'y a pas de membre demandant de rejoindre le groupe en ce moment.",

	'groups:invitations:none' => "Il n'y a pas d'invitations en attente.",

	'item:object:groupforumtopic' => "Sujets de discussion",

	'groupforumtopic:new' => "XXXXchanged on 1.8 (1.7=New discussion post)XXXXAdd discussion postXXXXUne nouvelle discussion a été publiée",

	'groups:count' => "groupe créé",
	'groups:open' => "groupe ouvert",
	'groups:closed' => "groupe fermé",
	'groups:member' => "membres",
	'groups:searchtag' => "Rechercher des groupes par des mots-clé",

	'groups:more' => "XXXXnew on 1.8XXXXMore groupsXXXXgoogle:Plus les groupes",
	'groups:none' => "XXXXnew on 1.8XXXXNo groupsXXXXgoogle:Aucun groupe",


	/*
	 * Access
	 */
	'groups:access:private' => "Fermé - Les utilisateurs doivent être invités",
	'groups:access:public' => "Ouvert - N'importe quel utilisateur peut rejoindre le groupe",
	'groups:access:group' => "XXXXnew on 1.8XXXXGroup members onlyXXXXgoogle:Les membres du groupe ne",
	'groups:closedgroup' => "Ce groupe est en adhésion privée.",
	'groups:closedgroup:request' => "Pour demander à être ajouté, cliquer le lien 'Demander une adhésion'.",
	'groups:visibility' => "Qui peut voir ce groupe?",

	/*
	Group tools
	*/
	'groups:enableforum' => "Activer le module 'discussion' du groupe",
	'groups:yes' => "oui",
	'groups:no' => "non",
	'groups:lastupdated' => "Dernière mise à jour %s par %s",
	'groups:lastcomment' => "Dernier commentaire %s by %s",

	/*
	Group discussion
	*/
	'discussion' => "XXXXnew on 1.8XXXXDiscussionXXXXgoogle:Discussion",
	'discussion:add' => "XXXXnew on 1.8XXXXAdd discussion topicXXXXgoogle:Ajouter le sujet de discussion",
	'discussion:latest' => "XXXXnew on 1.8XXXXLatest discussionXXXXgoogle:Dernières discussions",
	'discussion:group' => "XXXXnew on 1.8XXXXGroup discussionXXXXgoogle:Groupe de discussion",

	'discussion:topic:created' => "XXXXnew on 1.8XXXXThe discussion topic was created.XXXXgoogle:Le sujet de discussion a été créé.",
	'discussion:topic:updated' => "XXXXnew on 1.8XXXXThe discussion topic was updated.XXXXgoogle:Le sujet de discussion a été mis à jour.",
	'discussion:topic:deleted' => "XXXXnew on 1.8XXXXDiscussion topic has been deleted.XXXXgoogle:Sujet de discussion a été supprimée.",

	'discussion:topic:notfound' => "XXXXnew on 1.8XXXXDiscussion topic not foundXXXXgoogle:Sujet de discussion introuvable",
	'discussion:error:notsaved' => "XXXXnew on 1.8XXXXUnable to save this topicXXXXgoogle:Impossible d'enregistrer ce sujet",
	'discussion:error:missing' => "XXXXnew on 1.8XXXXBoth title and message are required fieldsXXXXgoogle:Les deux titre et le message sont obligatoires",
	'discussion:error:permissions' => "XXXXnew on 1.8XXXXYou do not have permissions to perform this actionXXXXgoogle:Vous n'avez pas les autorisations pour effectuer cette action",
	'discussion:error:notdeleted' => "XXXXnew on 1.8XXXXCould not delete the discussion topicXXXXgoogle:Impossible de supprimer le thème de discussion",

	'discussion:reply:deleted' => "XXXXnew on 1.8XXXXDiscussion reply has been deleted.XXXXgoogle:réponse de discussion a été supprimée.",
	'discussion:reply:error:notdeleted' => "XXXXnew on 1.8XXXXCould not delete the discussion replyXXXXgoogle:Impossible de supprimer la réponse de discussion",

	'reply:this' => "XXXXnew on 1.8XXXXReply to thisXXXXgoogle:Répondre à ce",

	'group:replies' => "Réponses",
	'groups:forum:created' => "XXXXnew on 1.8XXXXCreated %s with %d commentsXXXXgoogle:Créé% s avec% d commentaires",
	'groups:forum:created:single' => "XXXXnew on 1.8XXXXCreated %s with %d replyXXXXgoogle:Créé% s avec% d réponse",
	'groups:forum' => "XXXXchanged on 1.8 (1.7=Group discussion)XXXXDiscussionXXXXForum du groupe",
	'groups:addtopic' => "Ajouter un sujet",
	'groups:forumlatest' => "Dernière discussion",
	'groups:latestdiscussion' => "Dernières discussions",
	'groups:newest' => "Récents",
	'groups:popular' => "Populaires",
	'groupspost:success' => "XXXXchanged on 1.8 (1.7=Your comment was succesfully posted)XXXXYour reply was succesfully postedXXXXVotre commentaire a été publié avec succés",
	'groups:alldiscussion' => "Dernière discussion",
	'groups:edittopic' => "Modifier le sujet",
	'groups:topicmessage' => "Message du sujet",
	'groups:topicstatus' => "Statut du sujet",
	'groups:reply' => "Publier un commentaire",
	'groups:topic' => "Sujets",
	'groups:posts' => "Posts",
	'groups:lastperson' => "Dernière personne",
	'groups:when' => "Quand",
	'grouptopic:notcreated' => "Aucun sujet n'a été créé.",
	'groups:topicopen' => "Ouvert",
	'groups:topicclosed' => "Fermé",
	'groups:topicresolved' => "Résolu",
	'grouptopic:created' => "Votre sujet a été créé.",
	'groupstopic:deleted' => "Sujet supprimé",
	'groups:topicsticky' => "Sticky",
	'groups:topicisclosed' => "XXXXchanged on 1.8 (1.7=This topic is closed.)XXXXThis discussion is closed.XXXXCe sujet est fermé.",
	'groups:topiccloseddesc' => "XXXXchanged on 1.8 (1.7=This topic has now been closed and is not accepting new comments.)XXXXThis discussion is closed and is not accepting new comments.XXXXCe sujet a été fermé et n'accepte plus de nouveaux commentaires.",
	'grouptopic:error' => "Votre sujet n'a pas pu être créé. Merci d'essayer plus tard ou de contacter un administrateur du système.",
	'groups:forumpost:edited' => "Vous avez modifié ce billet avec succés.",
	'groups:forumpost:error' => "Il y a eu un problème lors de la modification du billet.",


	'groups:privategroup' => "Ce groupe est privé. Il est nécessaire de demander une adhésion.",
	'groups:notitle' => "Les groupes doivent avoir un titre",
	'groups:cantjoin' => "N'a pas pu rejoindre le groupe",
	'groups:cantleave' => "N'a pas pu quitter le groupe",
	'groups:addedtogroup' => "A ajouté avec succés l'utilisateur au groupe",
	'groups:joinrequestnotmade' => "La demande d'adhésion n'a pas pu être réalisée",
	'groups:joinrequestmade' => "La demande d'adhésion s'est déroulée avec succés",
	'groups:joined' => "Vous avez rejoint le groupe avec succés !",
	'groups:left' => "Vous avez quitter le groupe avec succés",
	'groups:notowner' => "Désolé, vous n'êtes pas le propriétaire du groupe.",
	'groups:notmember' => "Désolé, vous n'êtes pas membre de ce groupe.",
	'groups:alreadymember' => "Vous êtes déjà membre de ce groupe !",
	'groups:userinvited' => "L'utilisateur a été invité.",
	'groups:usernotinvited' => "L'utilisateur n'a pas pu être invité",
	'groups:useralreadyinvited' => "L'utilisateur a déjà été invité",
	'groups:invite:subject' => "%s vous avez été invité(e) à rejoindre %s!",
	'groups:updated' => "XXXXchanged on 1.8 (1.7=Last comment)XXXXLast reply by %s %sXXXXDernier commentaire",
	'groups:started' => "XXXXchanged on 1.8 (1.7=Started by)XXXXStarted by %sXXXXDémarré par",
	'groups:joinrequest:remove:check' => "Etes-vous sûr de vouloir supprimer cette demande d'adhésion ?",
	'groups:invite:remove:check' => "Etes-vous sûr de vouloir supprimer cette invitation?",
	'groups:invite:body' => "Bonjour %s,

Vous avez été invité(e) à rejoindre le groupe '%s' cliquez sur le lien ci-dessous pour confirmer:

%s",

	'groups:welcome:subject' => "Bienvenue dans le groupe %s !",
	'groups:welcome:body' => "Bonjour %s!
		
Vous êtes maintenant membre du groupe '%s' ! Cliquez le lien ci-dessous pour commencer à participer !

%s",

	'groups:request:subject' => "%s a demandé une adhésion à %s",
	'groups:request:body' => "Bonjour %s,

%s a demandé à rejoindre le groupe '%s', cliquez le lien ci-dessous pour voir son profil :

%s

ou cliquez le lien ci-dessous pour confirmer son adhésion :

%s",

	/*
		Forum river items
	*/

	'groups:river:create' => "XXXXchanged on 1.8 (1.7=%s has created the group)XXXXcreated the groupXXXX%s a créer le groupe",
	'groups:river:join' => "XXXXnew on 1.8XXXXjoined the groupXXXXgoogle:a rejoint le groupe",
	'forumtopic:river:create' => "XXXXnew on 1.8XXXXadded a new discussion topicXXXXgoogle:a ajouté un nouveau sujet de discussion",
	'groups:river:reply' => "XXXXnew on 1.8XXXXreplied on the discussion topicXXXXgoogle:a répondu sur le sujet de discussion",
	
	'groups:nowidgets' => "Aucun widget n'ont été défini pour ce groupe.",


	'groups:widgets:members:title' => "Membres du groupe",
	'groups:widgets:members:description' => "Lister les membres d'un groupe.",
	'groups:widgets:members:label:displaynum' => "Lister les membres d'un groupe.",
	'groups:widgets:members:label:pleaseedit' => "Merci de configurer ce widget.",

	'groups:widgets:entities:title' => "Objets dans le groupe",
	'groups:widgets:entities:description' => "Lister les objets enregistré dans ce groupe",
	'groups:widgets:entities:label:displaynum' => "Lister les objets d'un groupe.",
	'groups:widgets:entities:label:pleaseedit' => "Merci de configurer ce widget.",

	'groups:forumtopic:edited' => "Sujet du forum modifié avec succés.",

	'groups:allowhiddengroups' => "Voulez-vous permettre les groupes privés (invisibles)?",

	/**
	 * Action messages
	 */
	'group:deleted' => "Contenus du groupe et groupe supprimés",
	'group:notdeleted' => "Le groupe n'a pas pu être supprimé",

	'group:notfound' => "XXXXnew on 1.8XXXXCould not find the groupXXXXgoogle:Impossible de trouver le groupe",
	'grouppost:deleted' => "La publication dans le groupe a été effacée",
	'grouppost:notdeleted' => "La publication dans le groupe n'a pas pu être effacée",
	'groupstopic:deleted' => "Sujet supprimé",
	'groupstopic:notdeleted' => "Le sujet n'a pas pu être supprimé",
	'grouptopic:blank' => "Pas de sujet",
	'grouptopic:notfound' => "Le sujet n'a pu être trouvé",
	'grouppost:nopost' => "Pas d'articles",
	'groups:deletewarning' => "Etes-vous sur de vouloir supprimer ce groupe ? Cette action est irréversible !",

	'groups:invitekilled' => "L'invitation a été supprimée",
	'groups:joinrequestkilled' => "La demande d'adhésion a été supprimée.",

	// ecml
	'groups:ecml:discussion' => "XXXXnew on 1.8XXXXGroup DiscussionsXXXXgoogle:Discussions de groupe",
	'groups:ecml:groupprofile' => "XXXXnew on 1.8XXXXGroup profilesXXXXgoogle:Les profils de groupe",

);

add_translation("fr", $french);
