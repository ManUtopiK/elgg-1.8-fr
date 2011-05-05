<?php
/**
 * An english language definition file
 */

$french = array(
	'twitter_api' => "XXXXnew on 1.8XXXXTwitter ServicesXXXXgoogle:Services Twitter",

	'twitter_api:requires_oauth' => "XXXXnew on 1.8XXXXTwitter Services requires the OAuth Libraries plugin to be enabled.XXXXgoogle:Twitter Services nécessite les bibliothèques OAuth plugin pour être activée.",

	'twitter_api:consumer_key' => "XXXXnew on 1.8XXXXConsumer KeyXXXXgoogle:Consommateurs Key",
	'twitter_api:consumer_secret' => "XXXXnew on 1.8XXXXConsumer SecretXXXXgoogle:Secret des consommateurs",

	'twitter_api:settings:instructions' => "XXXXnew on 1.8XXXXYou must obtain a consumer key and secret from <a href='https://twitter.com/oauth_clients' target='_blank'>Twitter</a>. Most of the fields are self explanatory, the one piece of data you will need is the callback url which takes the form http://[yoursite]/action/twitterlogin/return - [yoursite] is the url of your Elgg network.XXXXgoogle:Vous devez obtenir une clé de la consommation et le secret de <a href='https://twitter.com/oauth_clients' target='_blank'>Twitter</a> . La plupart des champs sont explicites, la pièce l'une des données que vous aurez besoin est l'url de rappel qui prend la forme http:// [VotreSite] / action / twitterlogin / retour - [VotreSite] est l'url de votre réseau Elgg.",

	'twitter_api:usersettings:description' => "XXXXnew on 1.8XXXXLink your %s account with Twitter.XXXXgoogle:Lien votre compte% s avec Twitter.",
	'twitter_api:usersettings:request' => "XXXXnew on 1.8XXXXYou must first <a href='%s'>authorize</a> %s to access your Twitter account.XXXXgoogle:Vous devez d'abord <a href='%s'>autoriser</a> % s pour accéder à votre compte Twitter.",
	'twitter_api:authorize:error' => "XXXXnew on 1.8XXXXUnable to authorize Twitter.XXXXgoogle:Impossible d'autoriser Twitter.",
	'twitter_api:authorize:success' => "XXXXnew on 1.8XXXXTwitter access has been authorized.XXXXgoogle:accéder à Twitter a été autorisée.",

	'twitter_api:usersettings:authorized' => "XXXXnew on 1.8XXXXYou have authorized %s to access your Twitter account: @%s.XXXXgoogle:Vous avez autorisé% s pour accéder à votre compte Twitter: @% s.",
	'twitter_api:usersettings:revoke' => "XXXXnew on 1.8XXXXClick <a href='%s'>here</a> to revoke access.XXXXgoogle:Cliquez <a href='%s'>ici</a> pour révoquer l'accès.",
	'twitter_api:revoke:success' => "XXXXnew on 1.8XXXXTwitter access has been revoked.XXXXgoogle:accéder à Twitter a été révoqué.",

	'twitter_api:login' => "XXXXnew on 1.8XXXXAllow existing users who have connected their Twitter account to sign in with Twitter?XXXXgoogle:Autoriser les utilisateurs existants qui ont relié leur compte Twitter pour vous connecter avec Twitter?",
	'twitter_api:new_users' => "XXXXnew on 1.8XXXXAllow new users to sign up using their Twitter account even if manual registration is disabled?XXXXgoogle:Permettre aux utilisateurs de nouvelles pour vous inscrire en utilisant leur compte Twitter, même si l'enregistrement manuel est désactivé?",
	'twitter_api:login:success' => "XXXXnew on 1.8XXXXYou have been logged in.XXXXgoogle:Vous avez été déconnecté en",
	'twitter_api:login:error' => "XXXXnew on 1.8XXXXUnable to login with Twitter.XXXXgoogle:Impossible de se connecter avec Twitter.",
	'twitter_api:login:email' => "XXXXnew on 1.8XXXXYou must enter a valid email address for your new %s account.XXXXgoogle:Vous devez entrer une adresse email valide pour votre compte% s nouvelles.",

	'twitter_api:deprecated_callback_url' => "XXXXnew on 1.8XXXXThe callback URL has changed for Twitter API to %s.  Please ask your administrator to change it.XXXXgoogle:L'URL de rappel a changé pour Twitter API pour% s. S'il vous plaît demandez à votre administrateur de le changer.",
);

add_translation("fr", $french);
