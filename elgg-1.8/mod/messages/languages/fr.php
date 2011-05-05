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
	'messages:user' => "XXXXchanged on 1.8 (1.7=Your inbox)XXXX%s's inboxXXXXVotre boîte de réception",
	'messages:posttitle' => "Messages de %s : %s",
	'messages:inbox' => "Boîte de réception",
	'messages:send' => "XXXXchanged on 1.8 (1.7=Send a message)XXXXSendXXXXEnvoyer une message",
	'messages:sent' => "XXXXchanged on 1.8 (1.7=Sent messages)XXXXSentXXXXMessages envoyés",
	'messages:message' => "Message",
	'messages:title' => "XXXXchanged on 1.8 (1.7=Title)XXXXSubjectXXXXTitre",
	'messages:to' => "Pour",
	'messages:from' => "De",
	'messages:fly' => "Envoyer",
	'messages:replying' => "Message en réponse à",
	'messages:inbox' => "Boîte de réception",
	'messages:sendmessage' => "Envoyer un message",
	'messages:compose' => "Ecrire un message",
	'messages:add' => "XXXXnew on 1.8XXXXCompose a messageXXXXgoogle:Composer un message",
	'messages:sentmessages' => "Messages envoyés",
	'messages:recent' => "Messages reçus",
	'messages:original' => "Message d'origine",
	'messages:yours' => "Votre message",
	'messages:answer' => "Répondre",
	'messages:toggle' => "Tout basculer",
	'messages:markread' => "Marquer comme lu",
	'messages:recipient' => "XXXXnew on 1.8XXXXChoose a recipient&hellip;XXXXgoogle:Choisissez un destinataire ...",
	'messages:to_user' => "XXXXnew on 1.8XXXXTo: %sXXXXgoogle:Pour:% s",

	'messages:new' => "Nouveau message",

	'notification:method:site' => "XXXXchanged on 1.8 (1.7=Site)XXXXMessagesXXXXSite",

	'messages:error' => "Un problème est survenu lors de l'enregistrement de votre message. Veuillez réessayer.",

	'item:object:messages' => "Messages",

	/**
	* Status messages
	*/

	'messages:posted' => "Votre message a bien été envoyé.",
	'messages:success:delete:single' => "XXXXnew on 1.8XXXXMessage was deletedXXXXgoogle:Message a été supprimé",
	'messages:success:delete' => "XXXXnew on 1.8XXXXMessages deletedXXXXgoogle:Les messages supprimés",
	'messages:success:read' => "XXXXnew on 1.8XXXXMessages marked as readXXXXgoogle:Les messages marqués comme lus",
	'messages:error:messages_not_selected' => "XXXXnew on 1.8XXXXNo messages selectedXXXXgoogle:Aucun message sélectionné",
	'messages:error:delete:single' => "XXXXnew on 1.8XXXXUnable to delete the messageXXXXgoogle:Impossible de supprimer le message",

	/**
	* Email messages
	*/

	'messages:email:subject' => "Vous avez reçu un nouveau message !",
	'messages:email:body' => "XXXXchanged on 1.8 (1.7=You have a new message from %s. It reads: !\n!  !\n! 			 !\n! %s !\n!  !\n!  !\n! To view your messages, click here: !\n!  !\n! 	%s !\n!  !\n! To send %s a message, click here: !\n!  !\n! 	%s !\n!  !\n! You cannot reply to this email.)XXXXYou have a new message from %s. It reads:


	%s


	To view your messages, click here:

	%s

	To send %s a message, click here:

	%s

	You cannot reply to this email.XXXXVous avez un nouveau message de %s. Il est écrit :

			
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
	'messages:nomessages' => "XXXXchanged on 1.8 (1.7=There are no messages to display.)XXXXThere are no messages.XXXXIl n'y a aucun message à afficher.",
	'messages:user:nonexist' => "Le destinataire n'a pu être trouvé dans la base de données des utilisateurs.",
	'messages:user:blank' => "Vous n'avez sélectionné personne à qui envoyer ce message.",
);
		
add_translation("fr", $french);
