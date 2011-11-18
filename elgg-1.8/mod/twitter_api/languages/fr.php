<?php
/**
 * An english language definition file
 */

$french = array(
	'twitter_api' => "Services Twitter",

	'twitter_api:requires_oauth' => "Twitter Services nécessitent les bibliothèques OAuth plugin pour être activés.",

	'twitter_api:consumer_key' => "Clé Consommateur",
	'twitter_api:consumer_secret' => "Secret du consommateur",

	'twitter_api:settings:instructions' => "Vous devez obtenir une clé client et le code secret à partir de <a href='https://twitter.com/oauth_clients' target='_blank'>Twitter</a> . La plupart des champs sont explicites, la principale donnée dont vous aurez besoin est l'url de retour qui prend la forme http://[VotreSite]/action/twitterlogin/return - [VotreSite] est l'url de votre réseau Elgg.",

	'twitter_api:usersettings:description' => "Lier votre compte %s avec Twitter.",
	'twitter_api:usersettings:request' => "Vous devez d'abord <a href='%s'>autoriser</a> %s pour accéder à votre compte Twitter.",
	'twitter_api:authorize:error' => "Impossible d'autoriser Twitter.",
	'twitter_api:authorize:success' => "L'accès à Twitter a été autorisé.",

	'twitter_api:usersettings:authorized' => "Vous avez autorisé %s à accéder à votre compte Twitter : @%s.",
	'twitter_api:usersettings:revoke' => "Cliquez <a href='%s'>ici</a> pour révoquer l'accès.",
	'twitter_api:revoke:success' => "L'accès à Twitter a été révoqué.",

	'twitter_api:login' => "XXXXnew on 1.8XXXXAllow existing users who have connected their Twitter account to sign in with Twitter?XXXXgoogle:Autoriser les utilisateurs existants qui ont lié leur compte Twitter de signer avec Twitter ?",
	'twitter_api:new_users' => "Permet aux nouveaux utilisateurs de s'inscrire en utilisant leur compte Twitter, même si l'enregistrement manuel est désactivé ?",
	'twitter_api:login:success' => "Vous êtes connecté",
	'twitter_api:login:error' => "Impossible de se connecter à Twitter.",
	'twitter_api:login:email' => "Vous devez entrer une adresse email valide pour votre nouveau compte %s.",

	'twitter_api:deprecated_callback_url' => "L'URL de retour de l'API Twitter est modifié comme suit %s. Merci de demandez à votre administrateur de le changer.",
);

add_translation("fr", $french);
