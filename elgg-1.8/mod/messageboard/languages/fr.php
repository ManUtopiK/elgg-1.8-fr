<?php

$french = array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "Forum",
	'messageboard:messageboard' => "forum",
	'messageboard:viewall' => "Voir tout",
	'messageboard:postit' => "Envoyer",
	'messageboard:history:title' => "Historique",
	'messageboard:none' => "Il n'y a encore rien dans le forum",
	'messageboard:num_display' => "Nombre de messages à afficher",
	'messageboard:desc' => "Ceci est un forum que vous pouvez ajouter sur votre profil, et où les autres utilisateurs peuvent laisse un message.",

	'messageboard:user' => "Forum de %s",

	'messageboard:replyon' => "réponse sur",
	'messageboard:history' => "historique",

	'messageboard:owner' => "XXXXnew on 1.8XXXX%s's message boardXXXXgoogle:forum% s de",
	'messageboard:owner_history' => "XXXXnew on 1.8XXXX%s's posts on %s's message boardXXXXgoogle:% s de messages sur le forum de l% de",

	/**
	 * Message board widget river
	 */
	'messageboard:river:added' => "XXXXchanged on 1.8 (1.7=%s posted on)XXXXposted onXXXX%s a écrit sur ",
	'messageboard:river:user' => "XXXXnew on 1.8XXXX%s'sXXXXgoogle:% S de",
	'messageboard:river:messageboard' => "forum",


	/**
	 * Status messages
	 */

	'messageboard:posted' => "Votre message a bien été envoyé sur le forum.",
	'messageboard:deleted' => "Votre message a bien été supprimé.",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => "Vous avez un nouveau message sur le forum !",
	'messageboard:email:body' => "XXXXchanged on 1.8 (1.7=You have a new message board comment from %s. It reads: !\n!  !\n! 			 !\n! %s !\n!  !\n!  !\n! To view your message board comments, click here: !\n!  !\n! 	%s !\n!  !\n! To view %s's profile, click here: !\n!  !\n! 	%s !\n!  !\n! You cannot reply to this email.)XXXXYou have a new message board comment from %s. It reads:


%s


To view your message board comments, click here:

	%s

To view %s's profile, click here:

	%s

You cannot reply to this email.XXXXVous avez reçu un nouveau message de %s sur votre forum. Il est écrit :


%s


Pour voir vos messages de forum, cliquez sur :

	%s

Pour voir le profil de %s, cliquez sur :

	%s

Vous ne pouvez pas répondre à cet email.",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "Désolé, vous devez écrire quelque chose dans le corps du message avant de pouvoir l'enregistrer.",
	'messageboard:notfound' => "Désolé, l'élément spécifié n'a pu être trouvé.",
	'messageboard:notdeleted' => "Désolé, le message n'a pu être supprimé.",
	'messageboard:somethingwentwrong' => "Quelque chose a tourné court lors de l'enregistrement de votre message, veuillez vérifier que vous avez bien écrit un message.",

	'messageboard:failure' => "Une erreur imprévue s'est produite lors de l'ajout de votre message. Veuillez réeessayer.",

);

add_translation("fr", $french);
