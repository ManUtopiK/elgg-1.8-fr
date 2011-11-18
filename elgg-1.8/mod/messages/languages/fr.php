<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$french = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Messages",
	'messages:back' => "Retour aux messages",
	'messages:user' => "Boîte de réception de %s",
	'messages:posttitle' => "Messages de %s : %s",
	'messages:inbox' => "Boîte de réception",
	'messages:send' => "Envoyer un message",
	'messages:sent' => "Envoyé",
	'messages:message' => "Message",
	'messages:title' => "Sujet",
	'messages:to' => "Pour",
	'messages:from' => "De",
	'messages:fly' => "Envoyer",
	'messages:replying' => "Message en réponse à",
	'messages:inbox' => "Boîte de réception",
	'messages:sendmessage' => "Envoyer un message",
	'messages:compose' => "Ecrire un message",
	'messages:add' => "Composer un message",
	'messages:sentmessages' => "Messages envoyés",
	'messages:recent' => "Messages reçus",
	'messages:original' => "Message d'origine",
	'messages:yours' => "Votre message",
	'messages:answer' => "Répondre",
	'messages:toggle' => "Tout basculer",
	'messages:markread' => "Marquer comme lu",
	'messages:recipient' => "Choisissez un destinataire &hellip",
	'messages:to_user' => "Pour : %s",

	'messages:new' => "Nouveau message",

	'notification:method:site' => "Messages",

	'messages:error' => "Un problème est survenu lors de l'enregistrement de votre message. Veuillez réessayer.",

	'item:object:messages' => "Messages",

	/**
	* Status messages
	*/

	'messages:posted' => "Votre message a bien été envoyé.",
	'messages:success:delete:single' => "Le message a été supprimé",
	'messages:success:delete' => "Les messages ont été supprimés",
	'messages:success:read' => "Les messages ont été marqués comme lus",
	'messages:error:messages_not_selected' => "Aucun message sélectionné",
	'messages:error:delete:single' => "Impossible de supprimer le message",

	/**
	* Email messages
	*/

	'messages:email:subject' => "Vous avez reçu un nouveau message !",
	'messages:email:body' => "Vous avez un nouveau message de %s. Il est écrit :


	%s


Pour voir vos messages, cliquez sur :

	%s

Pour envoyer un message, cliquez sur :

	%s

Vous ne pouvez pas répondre à cet email.",

	/**
	* Error messages
	*/

	'messages:blank' => "Désolé, vous devez écrire quelque chose dans votre message avant de pouvoir l'enregistrer.",
	'messages:notfound' => "Désolé, le message spécifié n'a pu être trouvé.",
	'messages:notdeleted' => "Désolé, ce message n'a pu être effacé.",
	'messages:nopermission' => "Vous n'avez pas l'autorisation de modifier ce message.",
	'messages:nomessages' => "Il n'y a aucun message.",
	'messages:user:nonexist' => "Le destinataire n'a pu être trouvé dans la base de données des utilisateurs.",
	'messages:user:blank' => "Vous n'avez sélectionné personne à qui envoyer ce message.",
);
		
add_translation("fr", $french);
