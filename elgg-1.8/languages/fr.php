<?php
/**
 * Core English Language
 *
 * @package Elgg.Core
 * @subpackage Languages.English
 */

$french = array(
/**
 * Sites
 */

	'item:site' => "Sites",

/**
 * Sessions
 */

	'login' => "Connexion",
	'loginok' => "Vous êtes désormais connecté(e).",
	'loginerror' => "XXXXchanged on 1.8 (1.7=We couldn't log you in. This may be because you haven't validated your account yet, the details you supplied were incorrect, or you have made too many incorrect login attempts. Make sure your details are correct and please try again.)XXXXWe couldn't log you in. Please check your credentials and try again.XXXXNous n'avons pas pu vous identifier. Cette erreur peut être due, soit, au fait que vous n'avez pas encore validé votre compte, que les informations entrées sont incorrectes ou que vous avez fait trop de tentatives de connexion. Assurez-vous que les informations que vous avez entrées sont correctes et réessayez.",
	'login:empty' => "XXXXnew on 1.8XXXXUsername and password are required.XXXXgoogle:Nom d'utilisateur et mot de passe sont requis.",
	'login:baduser' => "XXXXnew on 1.8XXXXUnable to load your user account.XXXXgoogle:Impossible de charger votre compte d'utilisateur.",
	'auth:nopams' => "XXXXnew on 1.8XXXXInternal error. No user authentication method installed.XXXXgoogle:Erreur interne. Aucune méthode d'authentification des utilisateurs installés.",

	'logout' => "Déconnexion",
	'logoutok' => "Vous avez été déconnecté(e).",
	'logouterror' => "Nous n'avons pas pu vous déconnecter. Essayez de nouveau.",

	'loggedinrequired' => "Vous devez être connecté pour voir cette page.",
	'adminrequired' => "Vous devez être administrateur pour voir cette page.",
	'membershiprequired' => "Vous devez être membre de ce groupe pour voir cette page.",


/**
 * Errors
 */
	'exception:title' => "XXXXchanged on 1.8 (1.7=Welcome to Elgg.)XXXXFatal Error.XXXXBienvenue sur Elgg.",

	'actionundefined' => "L'action demandée (%s) n'est pas définie par le système.",
	'actionnotfound' => "XXXXnew on 1.8XXXXThe action file for %s was not found.XXXXgoogle:Le fichier d'action pour %s n'a pas été trouvé.",
	'actionloggedout' => "Désolé, vous ne pouvez pas effectuer cette action sans être connecté.",
	'actionunauthorized' => "Vous n'êtes pas autorisé à effectuer cette action",

	'InstallationException:SiteNotInstalled' => "XXXXnew on 1.8XXXXUnable to handle this request. This site is not configured or the database is down.XXXXgoogle:Impossible de traiter cette requête. Ce site n'est pas configuré ou la base de données est en panne.",

	'InstallationException:MissingLibrary' => "XXXXnew on 1.8XXXXCould not load %sXXXXgoogle:Impossible de charger% s",
	'InstallationException:CannotLoadSettings' => "XXXXnew on 1.8XXXXElgg could not load the settings file. It does not exist or there is a file permissions issue.XXXXgoogle:Elgg n'a pas pu charger le fichier de paramètres. Il n'existe pas ou il ya un problème de fichier d'autorisations.",

	'SecurityException:Codeblock' => "Accès non autorisé pour la création de bloc de code.",
	'DatabaseException:WrongCredentials' => "XXXXchanged on 1.8 (1.7=Elgg couldn't connect to the database using the given credentials.)XXXXElgg couldn't connect to the database using the given credentials. Check the settings file.XXXXElgg n'a pas pu se connecter à la base de données avec les informations données.",
	'DatabaseException:NoConnect' => "Elgg n'a pas pu sélectionner la base de données '%s', merci de vérifier que la base de données est bien créée et que vous y avez accès.",
	'SecurityException:FunctionDenied' => "L'accès à la fonction privilégiée '%s' n'est pas autorisé.",
	'DatabaseException:DBSetupIssues' => "Il y a eu plusieurs problèmes :",
	'DatabaseException:ScriptNotFound' => "Elgg n'a pas pu trouver le script de la base de données a %s.",
	'DatabaseException:InvalidQuery' => "XXXXnew on 1.8XXXXInvalid queryXXXXgoogle:Requête non valide",

	'IOException:FailedToLoadGUID' => "Echec du chargement du nouveau %s avec le GUID:%d",
	'InvalidParameterException:NonElggObject' => "Passage d'un objet de type non-Elgg vers un constructeur d'objet Elgg !",
	'InvalidParameterException:UnrecognisedValue' => "Valeur non reconnue passés au constructeur.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d n'est pas valide %s",

	'PluginException:MisconfiguredPlugin' => "XXXXchanged on 1.8 (1.7=%s is a misconfigured plugin. It has been disabled. Please search the Elgg wiki for possible causes (http://docs.elgg.org/wiki/).)XXXX%s (guid: %s) is a misconfigured plugin. It has been disabled. Please search the Elgg wiki for possible causes (http://docs.elgg.org/wiki/).XXXX%s est un plugin non configuré. Il a été désactivé. Veuillez chercher dans le wiki d'Elgg pour connaitre les cause possibles (http://docs.elgg.org/wiki/).",
	'PluginException:CannotStart' => "XXXXnew on 1.8XXXX%s (guid: %s) cannot start.  Reason: %sXXXXgoogle: %s (GUID:% s) ne peut pas démarrer. Raison:% s",
	'PluginException:InvalidID' => "XXXXnew on 1.8XXXX%s is an invalid plugin ID.XXXXgoogle: %s est invalide plugin ID.",
	'PluginException:InvalidPath' => "XXXXnew on 1.8XXXX%s is an invalid plugin path.XXXXgoogle: %s est invalide plugin chemin.",
	'PluginException:InvalidManifest' => "XXXXnew on 1.8XXXXInvalid manifest file for plugin %sXXXXgoogle:Blancs fichier manifeste pour le plugin% s",
	'PluginException:InvalidPlugin' => "XXXXnew on 1.8XXXX%s is not a valid plugin.XXXXgoogle: %s n'est pas un plugin valable.",
	'PluginException:InvalidPlugin:Details' => "XXXXnew on 1.8XXXX%s is not a valid plugin: %sXXXXgoogle: %s n'est pas valide plugin:% s",

	'ElggPlugin:MissingID' => "XXXXnew on 1.8XXXXMissing plugin ID (guid %s)XXXXgoogle:Missing plugin ID (s% GUID)",
	'ElggPlugin:NoPluginPackagePackage' => "XXXXnew on 1.8XXXXMissing ElggPluginPackage for plugin ID %s (guid %s)XXXXgoogle:Missing ElggPluginPackage de plugin ID %s ( %s GUID)",

	'ElggPluginPackage:InvalidPlugin:MissingFile' => "XXXXnew on 1.8XXXXMissing file %s in packageXXXXgoogle: %s fichier manquant dans le paquet",
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => "XXXXnew on 1.8XXXXInvalid dependency type '%s'XXXXgoogle:type de dépendance Blancs &quot;% s&quot;",
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => "XXXXnew on 1.8XXXXInvalid provides type '%s'XXXXgoogle:Blancs offre type &quot;% s&quot;",
	'ElggPluginPackage:InvalidPlugin:CircularDep' => "XXXXnew on 1.8XXXXInvalid %s dependency '%s' in plugin %s.  Plugins cannot conflict with or require something they provide!XXXXgoogle: %s invalide dépendance &quot;% s&quot; dans le plugin% s. Les plugins peuvent pas en conflit avec ou besoin de quelque chose qu'ils offrent!",

	'ElggPlugin:Exception:CannotIncludeFile' => "XXXXnew on 1.8XXXXCannot include %s for plugin %s (guid: %s) at %s.  Check permissions!XXXXgoogle:Impossible d'inclure un plugin %s pour %s (GUID:% s) sur% s. Vérifiez les autorisations!",
	'ElggPlugin:Exception:CannotRegisterViews' => "XXXXnew on 1.8XXXXCannot open views dir for plugin %s (guid: %s) at %s.  Check permissions!XXXXgoogle:Impossible d'ouvrir le point de vue dir pour le plugin %s (GUID:% s) sur% s. Vérifiez les autorisations!",
	'ElggPlugin:Exception:CannotRegisterLanguages' => "XXXXnew on 1.8XXXXCannot register languages for plugin %s (guid: %s) at %s.  Check permissions!XXXXgoogle:Impossible d'enregistrer les langues pour le plugin %s (GUID:% s) sur% s. Vérifiez les autorisations!",
	'ElggPlugin:Exception:CannotRegisterClasses' => "XXXXnew on 1.8XXXXCannot register classes for plugin %s (guid: %s) at %s.  Check permissions!XXXXgoogle:Impossible d'enregistrer des classes pour plugin %s (GUID:% s) sur% s. Vérifiez les autorisations!",
	'ElggPlugin:Exception:NoID' => "XXXXnew on 1.8XXXXNo ID for plugin guid %s!XXXXgoogle:Aucun ID de plugin% guid s!",

	'PluginException:ParserError' => "XXXXnew on 1.8XXXXError parsing manifest with API version %s in plugin %s.XXXXgoogle:Erreur d'analyse manifeste avec la version %s API de plugin% s.",
	'PluginException:NoAvailableParser' => "XXXXnew on 1.8XXXXCannot find a parser for manifest API version %s in plugin %s.XXXXgoogle:Vous ne trouvez pas un analyseur syntaxique pour la version %s API manifeste dans le plugin% s.",
	'PluginException:ParserErrorMissingRequiredAttribute' => "XXXXnew on 1.8XXXXMissing required '%s' attribute in manifest for plugin %s.XXXXgoogle:L'attribut '% s' manquant nécessaire dans le manifeste pour le plugin% s.",

	'ElggPlugin:Dependencies:Requires' => "XXXXnew on 1.8XXXXRequiresXXXXgoogle:Requiert",
	'ElggPlugin:Dependencies:Suggests' => "XXXXnew on 1.8XXXXSuggestsXXXXgoogle:Suggère",
	'ElggPlugin:Dependencies:Conflicts' => "XXXXnew on 1.8XXXXConflictsXXXXgoogle:Conflits",
	'ElggPlugin:Dependencies:Conflicted' => "XXXXnew on 1.8XXXXConflictedXXXXgoogle:En conflit",
	'ElggPlugin:Dependencies:Provides' => "XXXXnew on 1.8XXXXProvidesXXXXgoogle:Fournit",
	'ElggPlugin:Dependencies:Priority' => "XXXXnew on 1.8XXXXPriorityXXXXgoogle:Priorité",

	'ElggPlugin:Dependencies:Elgg' => "XXXXnew on 1.8XXXXElgg versionXXXXgoogle:version Elgg",
	'ElggPlugin:Dependencies:PhpExtension' => "XXXXnew on 1.8XXXXPHP extension: %sXXXXgoogle:extension PHP:% s",
	'ElggPlugin:Dependencies:PhpIni' => "XXXXnew on 1.8XXXXPHP ini setting: %sXXXXgoogle:ini PHP:% s",
	'ElggPlugin:Dependencies:Plugin' => "XXXXnew on 1.8XXXXPlugin: %sXXXXgoogle:Plugin:% s",
	'ElggPlugin:Dependencies:Priority:After' => "XXXXnew on 1.8XXXXAfter %sXXXXgoogle:Après% s",
	'ElggPlugin:Dependencies:Priority:Before' => "XXXXnew on 1.8XXXXBefore %sXXXXgoogle:Avant% s",
	'ElggPlugin:Dependencies:Priority:Uninstalled' => "XXXXnew on 1.8XXXX%s is not installedXXXXgoogle: %s n'est pas installé",
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => "XXXXnew on 1.8XXXXMissingXXXXgoogle:Manquant",


	'InvalidParameterException:NonElggUser' => "Passage d'un utilisateur de type non-Elgg vers un constructeur d'utilisateur Elgg !",

	'InvalidParameterException:NonElggSite' => "Passage d'un site non-Elgg vers un constructeur de site Elgg !",

	'InvalidParameterException:NonElggGroup' => "Passage d'un groupe non-Elgg vers un constructeur de groupe Elgg !",

	'IOException:UnableToSaveNew' => "Impossible de sauvegarder le nouveau %s",

	'InvalidParameterException:GUIDNotForExport' => "GUID non spécifié durant l'export, ceci ne devrait pas se produire.",
	'InvalidParameterException:NonArrayReturnValue' => "La fonction de sérialisation de l'entité a retourné une valeur dont le type n'est pas un tableau",

	'ConfigurationException:NoCachePath' => "Le chemin du cache est vide !",
	'IOException:NotDirectory' => "%s n'est pas un répertoire.",

	'IOException:BaseEntitySaveFailed' => "Impossibilité de sauver les informations de base du nouvel objet !",
	'InvalidParameterException:UnexpectedODDClass' => "import() a passé un argument qui n'est pas du type ODD class",
	'InvalidParameterException:EntityTypeNotSet' => "Le type d'entité doit être renseigné.",

	'ClassException:ClassnameNotClass' => "%s n'est pas %s.",
	'ClassNotFoundException:MissingClass' => "La classe '%s' n'a pas été trouvée, le plugin serait-il manquant ?",
	'InstallationException:TypeNotSupported' => "Le type %s n'est pas supporté. Il y a une erreur dans votre installation, le plus souvent causé par une mise à jour non-complète.",

	'ImportException:ImportFailed' => "Impossible d'importer l'élément %d",
	'ImportException:ProblemSaving' => "Une erreur est survenue en sauvant %s",
	'ImportException:NoGUID' => "La nouvelle entité a été créée mais n'a pas de GUID, ceci ne devrait pas se produire.",

	'ImportException:GUIDNotFound' => "L'entité '%d' n'a pas été trouvée.",
	'ImportException:ProblemUpdatingMeta' => "Il y a eu un problème lors de la mise à jour de '%s' pour l'entité '%d'",

	'ExportException:NoSuchEntity' => "Il n'y a pas d'entité telle que GUID:%d",

	'ImportException:NoODDElements' => "Aucun élément OpenDD n'a été trouvé dans les données importées, l'importation a échoué.",
	'ImportException:NotAllImported' => "Tous les éléments n'ont pas été importés.",

	'InvalidParameterException:UnrecognisedFileMode' => "Mode de fichier non-reconnu : '%s'",
	'InvalidParameterException:MissingOwner' => "Tous les fichiers doivent avoir un propriétaire",
	'IOException:CouldNotMake' => "Impossible de faire %s",
	'IOException:MissingFileName' => "Vous devez spécifier un nom avant d'ouvrir un fichier.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Fichiers stockés non trouvés ou classes non sauvegardées avec le fichier !",
	'NotificationException:NoNotificationMethod' => "Aucune méthode de notification spécifiée.",
	'NotificationException:NoHandlerFound' => "Aucune fonction trouvée pour '%s' ou elle ne peut être appelée.",
	'NotificationException:ErrorNotifyingGuid' => "Une erreur s'est produite lors de la notification %d",
	'NotificationException:NoEmailAddress' => "Impossible de trouver une adresse e-mail pour GUID:%d",
	'NotificationException:MissingParameter' => "Un argument obligatoire a été omis, '%s'",

	'DatabaseException:WhereSetNonQuery' => "La requête where ne contient pas de WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Des champs sont manquants sur la requête de sélection.",
	'DatabaseException:UnspecifiedQueryType' => "Type de requête non-reconnue ou non-spécifiée.",
	'DatabaseException:NoTablesSpecified' => "Aucune table spécifiée pour la requête.",
	'DatabaseException:NoACL' => "Pas de liste d'accès fourni pour la requête",

	'InvalidParameterException:NoEntityFound' => "Aucune entité trouvée, soit elle est inexistante, soit vous n'y avez pas accès.",

	'InvalidParameterException:GUIDNotFound' => "GUID : %s n'a pas été trouvé ou vous n'y avez pas accès.",
	'InvalidParameterException:IdNotExistForGUID' => "Désolé, '%s' n'existe pas pour GUID : %d",
	'InvalidParameterException:CanNotExportType' => "Désolé, je ne sais pas comment exporter '%s'",
	'InvalidParameterException:NoDataFound' => "Aucune donnée trouvée.",
	'InvalidParameterException:DoesNotBelong' => "N'appartient pas à l'entité.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "N'appartient pas ou aucune référence à l'entité.",
	'InvalidParameterException:MissingParameter' => "Paramètre manquant, il faut fournir un GUID.",
	'InvalidParameterException:LibraryNotRegistered' => "XXXXnew on 1.8XXXX%s is not a registered libraryXXXXgoogle: %s n'est pas une bibliothèque enregistré",

	'APIException:ApiResultUnknown' => "Les résultats de API sont de types inconnus, ceci ne devrait pas se produire.",
	'ConfigurationException:NoSiteID' => "L'identifiant du site n'a pas été spécifié.",
	'SecurityException:APIAccessDenied' => "Désolé, l'accès API a été désactivé par l'administrateur.",
	'SecurityException:NoAuthMethods' => "Aucune méthode d'authentification n'a été trouvée pour cette requête API.",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Methode ou fonction non définie dans expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Le paramètre de structure 'array' est incorrect pour appeller to expose method '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Methode HTTP %s pour la methode API '%s' non reconnue",
	'APIException:MissingParameterInMethod' => "Argument %s manquant pour la méthode %s",
	'APIException:ParameterNotArray' => "%s n'est semble t-il pas un tableau.",
	'APIException:UnrecognisedTypeCast' => "Type %s non reconnu pour la variable '%s' pour la fonction '%s'",
	'APIException:InvalidParameter' => "Paramètre invalide pour '%s' pour la fonction '%s'.",
	'APIException:FunctionParseError' => "%s(%s) a une erreur d'analyse.",
	'APIException:FunctionNoReturn' => "%s(%s) ne retourne aucune valeur.",
	'APIException:APIAuthenticationFailed' => "Echec d'authentification d'API par l'appel de méthode",
	'APIException:UserAuthenticationFailed' => "Echec d'authentification d'utilisateur par l'appel de méthode",
	'SecurityException:AuthTokenExpired' => "Le jeton d'authentification est manquant, invalide ou expiré.",
	'CallException:InvalidCallMethod' => "%s doit être appelé en utilisant '%s'",
	'APIException:MethodCallNotImplemented' => "L'appel à la méthode '%s' n'a pas été implémenté.",
	'APIException:FunctionDoesNotExist' => "La fonction pour la methode '%s' n'est pas appellable",
	'APIException:AlgorithmNotSupported' => "L'algorithme '%s' n'est pas supporté ou a été désactivé.",
	'ConfigurationException:CacheDirNotSet' => "Le répertoire de cache 'cache_path' n'a pas été renseigné.",
	'APIException:NotGetOrPost' => "La méthode de requête doit être GET ou POST",
	'APIException:MissingAPIKey' => "Clé API manquante",
	'APIException:BadAPIKey' => "Mauvaise clé API",
	'APIException:MissingHmac' => "X-Elgg-hmac manquant dans l'entête",
	'APIException:MissingHmacAlgo' => "X-Elgg-hmac-algo manquant dans l'entête",
	'APIException:MissingTime' => "X-Elgg-time manquant dans l'entête",
	'APIException:MissingNonce' => "X-Elgg-nonce manquant dans l'entête",
	'APIException:TemporalDrift' => "X-Elgg-time est trop éloigné dans le temps. Epoch a échoué.",
	'APIException:NoQueryString' => "Aucune valeur dans la requête",
	'APIException:MissingPOSTHash' => "X-Elgg-posthash manquant dans l'entête",
	'APIException:MissingPOSTAlgo' => "X-Elgg-posthash_algo manquant dans l'entête",
	'APIException:MissingContentType' => "Le content-type est manquant pour les données postées",
	'SecurityException:InvalidPostHash' => "La signature des données POST est invalide.%s attendu mais %s reçu.",
	'SecurityException:DupePacket' => "La signature du paquet a déjà été envoyée.",
	'SecurityException:InvalidAPIKey' => "Clé API invalide ou non-reconnue.",
	'NotImplementedException:CallMethodNotImplemented' => "La méthode '%s' n'est pas supportée actuellement.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "L'appel à la méthode XML-RPC '%s' n'a pas été implémentée.",
	'InvalidParameterException:UnexpectedReturnFormat' => "L'appel à la méthode '%s' a retourné un résultat inattendu.",
	'CallException:NotRPCCall' => "L'appel ne semble pas être un appel XML-RPC valide",

	'PluginException:NoPluginName' => "Le nom du plugin n'a pas pu être trouvé",

	'SecurityException:authenticationfailed' => "Impossible d'authentifier l'utilisateur",

	'CronException:unknownperiod' => "%s n'est pas une période valide.",

	'SecurityException:deletedisablecurrentsite' => "Impossible de supprimer ou désactiver le site en cours !",

	'RegistrationException:EmptyPassword' => "Les champs du mot de passe ne peut pas être vide",
	'RegistrationException:PasswordMismatch' => "Les mots de passe doivent correspondre",
	'LoginException:BannedUser' => "XXXXnew on 1.8XXXXYou have been banned from this site and cannot log inXXXXgoogle:Vous avez été banni de ce site et ne peut pas se connecter",
	'LoginException:UsernameFailure' => "XXXXnew on 1.8XXXXWe could not log you in. Please check your username and password.XXXXgoogle:Nous n'avons pas pu vous connecter! S'il vous plaît vérifier votre nom d'utilisateur et mot de passe.",
	'LoginException:PasswordFailure' => "XXXXnew on 1.8XXXXWe could not log you in. Please check your username and password.XXXXgoogle:Nous n'avons pas pu vous connecter! S'il vous plaît vérifier votre nom d'utilisateur et mot de passe.",
	'LoginException:AccountLocked' => "XXXXnew on 1.8XXXXYour account has been locked for too many log in failures.XXXXgoogle:Votre compte a été verrouillé pour connecter un trop grand nombre à des échecs.",

	'memcache:notinstalled' => "Le module PHP memcache n'est pas installé. Vous devez installer php5-memcache",
	'memcache:noservers' => "Pas de serveur memcache défini, veuillez renseigner la variable",
	'memcache:versiontoolow' => "Memcache nécessite au minimum la version %s pour fonctionner, vous avez la version %s",
	'memcache:noaddserver' => "Le support de serveurs multiples est désactivé, vous avez peut-être besoin de mettre à jour votre bibliothèque memcache PECL",

	'deprecatedfunction' => "Attention : Ce code source utilise une fonction périmée '%s'. Il n'est pas compatible avec cette version de Elgg.",

	'pageownerunavailable' => "Attention : La page de l'utilisateur %d n'est pas accessible.",
	'viewfailure' => "XXXXnew on 1.8XXXXThere was an internal failure in the view %sXXXXgoogle:Il ya eu une défaillance interne du point de vue de%",
	'changebookmark' => "Veuillez changer votre favori pour cette page.",
/**
 * API
 */
	'system.api.list' => "Liste tous les appels API au système.",
	'auth.gettoken' => "Cet appel API permet à un utilisateur de se connecter, il retourne une clef d'authentification qui permet de rendre la tentative de connexion unique.",

/**
 * User details
 */

	'name' => "Nom à afficher",
	'email' => "Adresse e-mail",
	'username' => "Nom d'utilisateur",
	'loginusername' => "XXXXnew on 1.8XXXXUsername or emailXXXXgoogle:Nom d'utilisateur ou e-mail",
	'password' => "Mot de passe",
	'passwordagain' => "Confirmation du mot de passe",
	'admin_option' => "Définir cet utilisateur comme administrateur ?",

/**
 * Access
 */

	'PRIVATE' => "Privé",
	'LOGGED_IN' => "Utilisateurs connectés",
	'PUBLIC' => "Publique",
	'access:friends:label' => "Contacts",
	'access' => "Accès",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Tableau de bord",
	'dashboard:nowidgets' => "XXXXchanged on 1.8 (1.7=Your dashboard is your gateway into the site. Click 'Edit page' to add widgets to keep track of content and your life within the system.)XXXXYour dashboard lets you track the activity and content on this site that matters to you.XXXXVotre tableau de bord est votre page d'accueil sur le site. Cliquez sur 'Modifier cette page' pour ajouter des widgets pour garder un oeil sur le contenu et votre activité sur le site.",

	'widgets:add' => "XXXXchanged on 1.8 (1.7=Add widgets to your page)XXXXAdd widgetsXXXXAjouter des widgets à votre page",
	'widgets:add:description' => "XXXXchanged on 1.8 (1.7=Choose the features you want to add to your page by dragging them from the <b>Widget gallery</b> on the right, to any of the three widget areas below, and position them where you would like them to appear. !\n!  !\n! To remove a widget drag it back to the <b>Widget gallery</b>.)XXXXClick on any widget button below to add it to the page.XXXXChoisissez les fonctionnalités à faire apparaître en glissant un élément de <b>la liste de widgets</b> sur la droite, vers l'une des trois zones ci-dessous. Positionnez-les selon vos envies. Pour retirer un widget, glissez le vers <b>la liste de widgets</b>.",
	'widgets:position:fixed' => "(Position modifiée sur la page)",
	'widget:unavailable' => "XXXXnew on 1.8XXXXYou have already added this widgetXXXXgoogle:Vous avez déjà ajouté ce widget",
	'widget:numbertodisplay' => "XXXXnew on 1.8XXXXNumber of items to displayXXXXgoogle:Nombre d'éléments à afficher",

	'widget:delete' => "XXXXnew on 1.8XXXXRemove %sXXXXgoogle:Supprimer% s",
	'widget:edit' => "XXXXnew on 1.8XXXXCustomize this widgetXXXXgoogle:Personnaliser ce widget",

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "Le widget a été sauvegardé avec succès.",
	'widgets:save:failure' => "Un problème est survenu lors de l'enregistrement de votre widget. Veuillez recommencer.",
	'widgets:add:success' => "XXXXnew on 1.8XXXXThe widget was successfully added.XXXXgoogle:Le widget a été ajouté.",
	'widgets:add:failure' => "XXXXnew on 1.8XXXXWe could not add your widget.XXXXgoogle:Nous n'avons pas pu ajouter votre widget.",
	'widgets:move:failure' => "XXXXnew on 1.8XXXXWe could not store the new widget position.XXXXgoogle:Nous n'avons pas pu enregistrer la position nouveau widget.",
	'widgets:remove:failure' => "XXXXnew on 1.8XXXXUnable to remove this widgetXXXXgoogle:Impossible de supprimer ce widget",

/**
 * Groups
 */

	'group' => "Groupe",
	'item:group' => "Groupes",

/**
 * Users
 */

	'user' => "Utilisateur",
	'item:user' => "Utilisateurs",

/**
 * Friends
 */

	'friends' => "Contacts",
	'friends:yours' => "Vos contacts",
	'friends:owned' => "Les contacts de %s",
	'friend:add' => "Ajouter un contact",
	'friend:remove' => "Supprimer un contact",

	'friends:add:successful' => "Vous avez ajouté %s à vos contacts.",
	'friends:add:failure' => "%s n'a pas pu être ajouté(e) à vos contacts. Merci de réessayer ultérieurement.",

	'friends:remove:successful' => "Vous avez supprimé %s de vos contacts.",
	'friends:remove:failure' => "%s n'a pas pu être supprimé(e) de vos contacts. Merci de réessayer ultérieurement.",

	'friends:none' => "Cet utilisateur n'a pas encore ajouté de contact.",
	'friends:none:you' => "XXXXchanged on 1.8 (1.7=You haven't added anyone as a friend! Search for your interests to begin finding people to follow.)XXXXYou don't have any friends yet.XXXXVous n'avez pas ajouté de contact ! Recherchez des personnes qui partagent vos centre d'intérêt avec le moteur de recherche.",

	'friends:none:found' => "Aucun contact n'a été trouvé.",

	'friends:of:none' => "Personne n'a encore ajouté cet utilisateur comme contact.",
	'friends:of:none:you' => "Personne ne vous a encore ajouté comme contact. Commencez par remplir votre page profil et publiez du contenu pour que les gens vous trouvent !",

	'friends:of:owned' => "Les personnes qui ont %s dans leurs contacts",

	'friends:of' => "Contacts de",
	'friends:collections' => "XXXXchanged on 1.8 (1.7=Collections of friends)XXXXFriend collectionsXXXXGroupement de contacts",
	'collections:add' => "XXXXnew on 1.8XXXXNew collectionXXXXgoogle:Nouvelle collection",
	'friends:collections:add' => "Nouveau groupement de contacts",
	'friends:addfriends' => "XXXXchanged on 1.8 (1.7=Add friends)XXXXSelect friendsXXXXAjouter des contacts",
	'friends:collectionname' => "Nom du groupement",
	'friends:collectionfriends' => "Contacts dans le groupement",
	'friends:collectionedit' => "Modifier ce groupement",
	'friends:nocollections' => "XXXXchanged on 1.8 (1.7=You do not yet have any collections.)XXXXYou do not have any collections yet.XXXXVous n'avez pas encore de groupement de contacts.",
	'friends:collectiondeleted' => "Votre groupement de contacts a été supprimé.",
	'friends:collectiondeletefailed' => "Le groupement de contacts n'a pas été supprimer. Vous n'avez pas de droits suffisants, ou un autre problème peut-être en cause.",
	'friends:collectionadded' => "XXXXchanged on 1.8 (1.7=Your collection was successfuly created)XXXXYour collection was successfully createdXXXXVotre groupement de contact a été créé avec succès",
	'friends:nocollectionname' => "Vous devez nommer votre groupement de contact avant qu'il puisse être créé.",
	'friends:collections:members' => "Membres du groupement",
	'friends:collections:edit' => "Modifier le groupement de contacts",

	'friends:river:add' => "XXXXchanged on 1.8 (1.7=%s is now a friend with)XXXXis now a friend with %sXXXX%s est maintenant dans les contacts de",

	'friendspicker:chararray' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",

	'avatar' => "XXXXnew on 1.8XXXXAvatarXXXXgoogle:Avatar",
	'avatar:create' => "XXXXnew on 1.8XXXXCreate your avatarXXXXgoogle:Créez votre avatar",
	'avatar:edit' => "XXXXnew on 1.8XXXXEdit avatarXXXXgoogle:Modifier avatar",
	'avatar:preview' => "XXXXnew on 1.8XXXXPreviewXXXXgoogle:Extrait",
	'avatar:upload' => "XXXXnew on 1.8XXXXUpload a new avatarXXXXgoogle:Envoyer un nouvel avatar",
	'avatar:current' => "XXXXnew on 1.8XXXXCurrent avatarXXXXgoogle:avatar actuel",
	'avatar:crop:title' => "XXXXnew on 1.8XXXXAvatar cropping toolXXXXgoogle:Avatar de culture outil",
	'avatar:upload:instructions' => "XXXXnew on 1.8XXXXYour avatar is displayed throughout the site. You can change it as often as you'd like. (File formats accepted: GIF, JPG or PNG)XXXXgoogle:Votre avatar est affiché sur le site. Vous pouvez le changer aussi souvent que vous le souhaitez. (Formats de fichiers acceptés: GIF, JPG ou PNG)",
	'avatar:create:instructions' => "XXXXnew on 1.8XXXXClick and drag a square below to match how you want your avatar cropped. A preview will appear in the box on the right. When you are happy with the preview, click 'Create your avatar'. This cropped version will be used throughout the site as your avatar.XXXXgoogle:Cliquez et faites glisser un carré ci-dessous selon la façon dont vous voulez votre avatar recadrée. Un aperçu s'affiche dans la boîte sur la droite. Lorsque vous êtes satisfait de l'aperçu, cliquez sur «Créez votre avatar&quot;. Cette version recadrée seront utilisées sur le site en tant que votre avatar.",
	'avatar:upload:success' => "XXXXnew on 1.8XXXXAvatar successfully uploadedXXXXgoogle:Avatar téléchargé avec succès",
	'avatar:upload:fail' => "XXXXnew on 1.8XXXXAvatar upload failedXXXXgoogle:Avatar Échec de l'envoi",
	'avatar:resize:fail' => "XXXXnew on 1.8XXXXResize of the avatar failedXXXXgoogle:Redimensionner de l'avatar a échoué",
	'avatar:crop:success' => "XXXXnew on 1.8XXXXCropping the avatar succeededXXXXgoogle:Recadrage l'avatar réussi",
	'avatar:crop:fail' => "XXXXnew on 1.8XXXXAvatar cropping failedXXXXgoogle:Avatar de culture n'a pas",

	'profile:edit' => "XXXXnew on 1.8XXXXEdit profileXXXXgoogle:Modifier le profil",
	'profile:aboutme' => "XXXXnew on 1.8XXXXAbout meXXXXgoogle:A propos de moi",
	'profile:description' => "XXXXnew on 1.8XXXXAbout meXXXXgoogle:A propos de moi",
	'profile:briefdescription' => "XXXXnew on 1.8XXXXBrief descriptionXXXXgoogle:Brève description",
	'profile:location' => "XXXXnew on 1.8XXXXLocationXXXXgoogle:Lieu",
	'profile:skills' => "XXXXnew on 1.8XXXXSkillsXXXXgoogle:Compétences",
	'profile:interests' => "XXXXnew on 1.8XXXXInterestsXXXXgoogle:Intérêts",
	'profile:contactemail' => "XXXXnew on 1.8XXXXContact emailXXXXgoogle:Contact e-mail",
	'profile:phone' => "XXXXnew on 1.8XXXXTelephoneXXXXgoogle:Téléphone",
	'profile:mobile' => "XXXXnew on 1.8XXXXMobile phoneXXXXgoogle:Téléphone portable",
	'profile:website' => "XXXXnew on 1.8XXXXWebsiteXXXXgoogle:Site Web",
	'profile:twitter' => "XXXXnew on 1.8XXXXTwitter usernameXXXXgoogle:nom d'utilisateur Twitter",
	'profile:saved' => "XXXXnew on 1.8XXXXYour profile was successfully saved.XXXXgoogle:Votre profil a été correctement enregistré.",

	'admin:appearance:profile_fields' => "XXXXnew on 1.8XXXXEdit profile fieldsXXXXgoogle:Modifier les champs du profil",
	'profile:edit:default' => "XXXXnew on 1.8XXXXEdit profile fieldsXXXXgoogle:Modifier les champs du profil",
	'profile:label' => "XXXXnew on 1.8XXXXProfile labelXXXXgoogle:étiquette profil",
	'profile:type' => "XXXXnew on 1.8XXXXProfile typeXXXXgoogle:Type de profil",
	'profile:editdefault:delete:fail' => "XXXXnew on 1.8XXXXRemoved default profile item field failedXXXXgoogle:Enlevée champ d'élément par défaut le profil échoué",
	'profile:editdefault:delete:success' => "XXXXnew on 1.8XXXXDefault profile item deleted!XXXXgoogle:Point le profil par défaut supprimé!",
	'profile:defaultprofile:reset' => "XXXXnew on 1.8XXXXDefault system profile resetXXXXgoogle:réinitialisation par défaut profil système",
	'profile:resetdefault' => "XXXXnew on 1.8XXXXReset default profileXXXXgoogle:Voir le profil par défaut Reset",
	'profile:explainchangefields' => "XXXXnew on 1.8XXXXYou can replace the existing profile fields with your own using the form below. \n\n Give the new profile field a label, for example, 'Favorite team', then select the field type (eg. text, url, tags), and click the 'Add' button. To re-order the fields drag on the handle next to the field label. To edit a field label - click on the label's text to make it editable. \n\n At any time you can revert back to the default profile set up, but you will loose any information already entered into custom fields on profile pages.XXXXgoogle:Vous pouvez remplacer les champs de profil existant avec votre propre en utilisant le formulaire ci-dessous. Donner le domaine nouveau profil d'une étiquette, par exemple, «équipe préférée, puis sélectionnez le type de champ (par exemple, texte, url, balises), et cliquez sur le bouton&quot; Ajouter &quot;. Pour réordonner les champs glisser sur la poignée à côté de l'étiquette du champ. Pour modifier un champ d'étiquette - cliquez sur le texte de l'étiquette pour le rendre modifiable. A tout moment vous pouvez revenir au profil par défaut, mais vous perdrez toutes les informations déjà entrées dans des champs personnalisés dans les pages de profil.",
	'profile:editdefault:success' => "XXXXnew on 1.8XXXXItem successfully added to default profileXXXXgoogle:Point d'ajouter le profil par défaut",
	'profile:editdefault:fail' => "XXXXnew on 1.8XXXXDefault profile could not be savedXXXXgoogle:Voir le profil par défaut n'a pas pu être sauvé",


/**
 * Feeds
 */
	'feed:rss' => "XXXXchanged on 1.8 (1.7=Subscribe to feed)XXXXRSS feed for this pageXXXXS'abonner au fil RSS",
/**
 * Links
 */
	'link:view' => "voir le lien",
	'link:view:all' => "XXXXnew on 1.8XXXXView allXXXXgoogle:Voir tous",


/**
 * River
 */
	'river' => "River",
	'river:relationship:friend' => "est maintenant dans les contacts de",
	'river:noaccess' => "Vous n'avez pas la permission de voir cet élément.",
	'river:posted:generic' => "%s envoyé",
	'riveritem:single:user' => "un utilisateur",
	'riveritem:plural:user' => "des utilisateurs",
	'river:ingroup' => "XXXXnew on 1.8XXXXto the group %sXXXXgoogle:au groupe% s",
	'river:none' => "XXXXnew on 1.8XXXXNo activityXXXXgoogle:Aucune activité",

	'river:widget:title' => "XXXXnew on 1.8XXXXActivityXXXXgoogle:Activité",
	'river:widget:description' => "XXXXnew on 1.8XXXXDisplay latest activityXXXXgoogle:Activité la plus récente d'affichage",
	'river:widget:type' => "XXXXnew on 1.8XXXXType of activityXXXXgoogle:Type d'activité",
	'river:widgets:friends' => "XXXXnew on 1.8XXXXFriends activityXXXXgoogle:activité amis",
	'river:widgets:all' => "XXXXnew on 1.8XXXXAll site activityXXXXgoogle:Toutes les activités sur le site",

/**
 * Notifications
 */
	'notifications:usersettings' => "Configuration des messages du site",
	'notifications:methods' => "Choisissez votre mode de réception des messages du site.",

	'notifications:usersettings:save:ok' => "La configuration des messages du site a été enregistrée avec succès.",
	'notifications:usersettings:save:fail' => "Il y a eu un problème lors de la sauvegarde des paramètres de configuration des messages du site.",

	'user.notification.get' => "Renvoie les paramètres de messages du site pour un utilisateur donné.",
	'user.notification.set' => "Définir les paramètres de messages du site pour un utilisateur donné.",
/**
 * Search
 */

	'search' => "Rechercher",
	'searchtitle' => "Rechercher : %s",
	'users:searchtitle' => "Recherche des utilisateurs : %s",
	'groups:searchtitle' => "Rechercher des groupes : %s",
	'advancedsearchtitle' => "%s résultat(s) trouvé(s) pour %s",
	'notfound' => "Aucun résultat trouvé.",
	'next' => "Suivant",
	'previous' => "Précédent",

	'viewtype:change' => "XXXXchanged on 1.8 (1.7=Change listing type)XXXXChange list typeXXXXChanger le type de liste",
	'viewtype:list' => "Lister les vues",
	'viewtype:gallery' => "Galerie",

	'tag:search:startblurb' => "Eléments avec le(s) mot(s)-clé '%s' :",

	'user:search:startblurb' => "Utilisateurs avec le(s) mot(s)-clé '%s' :",
	'user:search:finishblurb' => "Cliquez ici pour plus de résultats...",

	'group:search:startblurb' => "Groupes qui vérifient le critère : %s",
	'group:search:finishblurb' => "Pour en savoir plus, cliquez ici.",
	'search:go' => "Rechercher",
	'userpicker:only_friends' => "Seulement les amis",

/**
 * Account
 */

	'account' => "Compte",
	'settings' => "Votre compte",
	'tools' => "Outils",

	'register' => "S'enregistrer",
	'registerok' => "Vous vous êtes enregistré avec succès sur %s.",
	'registerbad' => "XXXXchanged on 1.8 (1.7=Your registration was unsuccessful. The username may already exist, your passwords might not match, or your username or password may be too short.)XXXXYour registration was unsuccessful because of an unknown error.XXXXVotre création de compte n'a pas fonctionné. Le nom utilisateur existe peut-être déjà, vos mots de passe ne correspondent pas, ou votre nom d'utilisateur ou votre mot de passe est peut-être trop court (6 caractères min.)",
	'registerdisabled' => "La création de compte a été désactivé par l'administrateur du site.",

	'registration:notemail' => "L'adresse e-mail que vous avez renseigné n'apparaît pas comme valide.",
	'registration:userexists' => "Ce nom d'utilisateur existe déjà",
	'registration:usernametooshort' => "XXXXchanged on 1.8 (1.7=Your username must be a minimum of 4 characters long.)XXXXYour username must be a minimum of %u characters long.XXXXLe nom d'utilisateur doit faire 4 caractères au minimum.",
	'registration:passwordtooshort' => "XXXXchanged on 1.8 (1.7=The password must be a minimum of 6 characters long.)XXXXThe password must be a minimum of %u characters long.XXXXLe mot de passe doit faire 6 caractères au minimum.",
	'registration:dupeemail' => "Cette adresse e-mail est déjà utilisée.",
	'registration:invalidchars' => "Désolé, votre nom d'utilisateur contient les caractères invalides suivants: %s.  Tout ces caractères sont invalides: %s",
	'registration:emailnotvalid' => "Désolé, l'adresse e-mail que vous avez entré est invalide sur ce site.",
	'registration:passwordnotvalid' => "Désolé, le mot de passe que vous avez entré est invalide sur ce site.",
	'registration:usernamenotvalid' => "Désolé, le nom d'utilisateur que vous avez entré est invalide sur ce site.",

	'adduser' => "Ajouter un utilisateur",
	'adduser:ok' => "Vous avez ajouté un nouvel utilisateur avec succès.",
	'adduser:bad' => "Le nouvel utilisateur ne peut pas être créé.",

	'user:set:name' => "Nom",
	'user:name:label' => "XXXXchanged on 1.8 (1.7=Your name)XXXXMy display nameXXXXVotre nom",
	'user:name:success' => "Votre nom a été changé avec succès.",
	'user:name:fail' => "Impossible de changer votre nom. Assurez-vous que votre nom n'est pas trop long et essayez à nouveau.",

	'user:set:password' => "Mot de passe",
	'user:current_password:label' => "Mot de passe actuel",
	'user:password:label' => "Votre nouveau mot de passe",
	'user:password2:label' => "Veuillez retaper votre nouveau mot de passe",
	'user:password:success' => "Mot de passe modifié avec succès",
	'user:password:fail' => "Impossible de modifier votre mot de passe.",
	'user:password:fail:notsame' => "Les deux mots de passe ne correspondent pas !",
	'user:password:fail:tooshort' => "Le mot de passe est trop court !",
	'user:password:fail:incorrect_current_password' => "Le mot de passe actuel entré est incorrect.",
	'user:resetpassword:unknown_user' => "Utilisateur inconnu.",
	'user:resetpassword:reset_password_confirm' => "Après réinitialisation de votre mot de passe, celui-ci sera envoyé à votre adresse e-mail.",

	'user:set:language' => "Langue",
	'user:language:label' => "Votre langue",
	'user:language:success' => "Votre paramètre de langage a été mis à jour.",
	'user:language:fail' => "Votre paramètre de langage n'a pas pu être sauvegardé.",

	'user:username:notfound' => "Nom d'utilisateur %s non trouvé.",

	'user:password:lost' => "Mot de passe perdu ?",
	'user:password:resetreq:success' => "Vous avez demandé un nouveau mot de passe, un e-mail vous a été envoyé",
	'user:password:resetreq:fail' => "Impossible de demander un nouveau mot de passe.",

	'user:password:text' => "XXXXchanged on 1.8 (1.7=To generate a new password, enter your username below. We will send the address of a unique verification page to you via email.  Click on the link in the body of the message and a new password will be sent to you.)XXXXTo request a new password, enter your username below and click the Request button.XXXXPour générer un nouveau mot de passe, entrez votre nom d'utilisateur ci-dessous. Nous vous enverrons un lien par e-mail. Vous devrez cliquer sur le lien du message et un nouveau mot de passe vous sera donné.",

	'user:persistent' => "Se souvenir de moi",

	'walled_garden:welcome' => "XXXXnew on 1.8XXXXWelcome toXXXXgoogle:Bienvenue à",

/**
 * Administration
 */
	'menu:page:header:administer' => "XXXXnew on 1.8XXXXAdministerXXXXgoogle:Administrer",
	'menu:page:header:configure' => "XXXXnew on 1.8XXXXConfigureXXXXgoogle:Configurer",
	'menu:page:header:develop' => "XXXXnew on 1.8XXXXDevelopXXXXgoogle:Développer",

	'admin:view_site' => "XXXXnew on 1.8XXXXView siteXXXXgoogle:Voir le site",
	'admin:loggedin' => "XXXXnew on 1.8XXXXLogged in as %sXXXXgoogle:Connecté en tant que% s",
	'admin:menu' => "XXXXnew on 1.8XXXXMenuXXXXgoogle:Menu",

	'admin:configuration:success' => "Vos paramètres ont été sauvegardés.",
	'admin:configuration:fail' => "Vos paramètres n'ont pas pu être sauvegardés.",

	'admin:unknown_section' => "XXXXnew on 1.8XXXXInvalid Admin Section.XXXXgoogle:Blancs section Admin.",

	'admin' => "Administration",
	'admin:description' => "Le panneau d'administration vous permet de contrôler tous les aspects du système d'Elgg, de la gestion des utilisateurs à la gestion des outils installés. Choisissez une option dans le menu ci-contre pour commencer.",

	'admin:statistics' => "Statistiques",
	'admin:statistics:overview' => "XXXXnew on 1.8XXXXOverviewXXXXgoogle:Vue d'ensemble",

	'admin:appearance' => "XXXXnew on 1.8XXXXAppearanceXXXXgoogle:Apparence",
	'admin:utilities' => "XXXXnew on 1.8XXXXUtilitiesXXXXgoogle:Utilitaires",

	'admin:users' => "XXXXnew on 1.8XXXXUsersXXXXgoogle:Utilisateurs",
	'admin:users:online' => "XXXXnew on 1.8XXXXCurrently OnlineXXXXgoogle:Actuellement en ligne",
	'admin:users:newest' => "XXXXnew on 1.8XXXXNewestXXXXgoogle:Le plus récent",
	'admin:users:add' => "XXXXnew on 1.8XXXXAdd New UserXXXXgoogle:Ajouter un nouvel utilisateur",
	'admin:users:description' => "XXXXnew on 1.8XXXXThis admin panel allows you to control user settings for your site. Choose an option below to get started.XXXXgoogle:Ce panneau d'administration vous permet de contrôler les paramètres d'utilisation de votre site. Choisissez une option ci-dessous pour commencer.",
	'admin:users:adduser:label' => "XXXXnew on 1.8XXXXClick here to add a new user...XXXXgoogle:Cliquez ici pour ajouter un nouvel utilisateur ...",
	'admin:users:opt:linktext' => "XXXXnew on 1.8XXXXConfigure users...XXXXgoogle:Configurer des utilisateurs ...",
	'admin:users:opt:description' => "XXXXnew on 1.8XXXXConfigure users and account information. XXXXgoogle:Configurer les utilisateurs et les informations de compte.",
	'admin:users:find' => "XXXXnew on 1.8XXXXFindXXXXgoogle:Trouver",

	'admin:settings' => "XXXXnew on 1.8XXXXSettingsXXXXgoogle:Paramètres",
	'admin:settings:basic' => "XXXXnew on 1.8XXXXBasic SettingsXXXXgoogle:Réglages de base",
	'admin:settings:advanced' => "XXXXnew on 1.8XXXXAdvanced SettingsXXXXgoogle:Paramètres avancés",
	'admin:site:description' => "Ce menu vous permet de définir les paramètres principaux de votre site. Choisissez une option ci-dessous pour commencer.",
	'admin:site:opt:linktext' => "Configurer le site...",
	'admin:site:access:warning' => "Changer les paramètres d'accès n'affectera que les permissions de contenu créées dans le futur.",

	'admin:dashboard' => "XXXXnew on 1.8XXXXDashboardXXXXgoogle:Tableau de bord",
	'admin:widget:online_users' => "XXXXnew on 1.8XXXXOnline usersXXXXgoogle:Utilisateurs en ligne",
	'admin:widget:online_users:help' => "XXXXnew on 1.8XXXXLists the users currently on the siteXXXXgoogle:Affiche la liste des utilisateurs actuellement sur le site",
	'admin:widget:new_users' => "XXXXnew on 1.8XXXXNew usersXXXXgoogle:Les nouveaux utilisateurs",
	'admin:widget:new_users:help' => "XXXXnew on 1.8XXXXLists the newest usersXXXXgoogle:Listes des utilisateurs les plus récents",
	'admin:widget:content_stats' => "XXXXnew on 1.8XXXXContent statisticsXXXXgoogle:Contenu des statistiques",
	'admin:widget:content_stats:help' => "XXXXnew on 1.8XXXXKeep track of the content created by your usersXXXXgoogle:Gardez une trace du contenu créé par les utilisateurs",
	'widget:content_stats:type' => "XXXXnew on 1.8XXXXContent typeXXXXgoogle:Type de contenu",
	'widget:content_stats:number' => "XXXXnew on 1.8XXXXNumberXXXXgoogle:Nombre",

	'admin:widget:admin_welcome' => "XXXXnew on 1.8XXXXWelcomeXXXXgoogle:Bienvenue",
	'admin:widget:admin_welcome:help' => "XXXXnew on 1.8XXXXA short introduction to Elgg's admin areaXXXXgoogle:Une courte introduction à la zone admin Elgg",
	'admin:widget:admin_welcome:intro' =>
'Welcome to Elgg! Right now you are looking at the administration dashboard. It\'s useful for tracking what\'s happening on the site.',

	'admin:widget:admin_welcome:admin_overview' =>
"Navigation for the administration area is provide by the menu to the right. It is organized into"
. " three sections:
	<dl>
		<dt>Administer</dt><dd>Everyday tasks like monitoring reported content, checking who is online, and viewing statistics.</dd>
		<dt>Configure</dt><dd>Occasional tasks like setting the site name or activating a plugin.</dd>
		<dt>Develop</dt><dd>For developers who are building plugins or designing themes. (Requires a developer plugin.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => "XXXXnew on 1.8XXXX<br />Be sure to check out the resources available through the footer links and thank you for using Elgg!XXXXgoogle:<br /> Soyez sûr de vérifier les ressources disponibles via les liens de bas de page et vous remercier pour l'aide Elgg!",

	'admin:footer:faq' => "XXXXnew on 1.8XXXXAdministration FAQXXXXgoogle:Administration FAQ",
	'admin:footer:manual' => "XXXXnew on 1.8XXXXAdministration ManualXXXXgoogle:Guide sur l'administration",
	'admin:footer:community_forums' => "XXXXnew on 1.8XXXXElgg Community ForumsXXXXgoogle:Forums de la communauté Elgg",
	'admin:footer:blog' => "XXXXnew on 1.8XXXXElgg BlogXXXXgoogle:Elgg blog",

	'admin:plugins:category:all' => "XXXXnew on 1.8XXXXAll pluginsXXXXgoogle:Tous les plugins",
	'admin:plugins:category:admin' => "XXXXnew on 1.8XXXXAdminXXXXgoogle:Admin",
	'admin:plugins:category:bundled' => "XXXXnew on 1.8XXXXBundledXXXXgoogle:Bundle",
	'admin:plugins:category:content' => "XXXXnew on 1.8XXXXContentXXXXgoogle:Contenu",
	'admin:plugins:category:development' => "XXXXnew on 1.8XXXXDevelopmentXXXXgoogle:Développement",
	'admin:plugins:category:extension' => "XXXXnew on 1.8XXXXExtensionsXXXXgoogle:Extensions",
	'admin:plugins:category:service' => "XXXXnew on 1.8XXXXService/APIXXXXgoogle:Service / API",

	'admin:plugins:markdown:unknown_plugin' => "XXXXnew on 1.8XXXXUnknown plugin.XXXXgoogle:Inconnu plugin.",
	'admin:plugins:markdown:unknown_file' => "XXXXnew on 1.8XXXXUnknown file.XXXXgoogle:fichier inconnu.",


	'admin:notices:could_not_delete' => "XXXXnew on 1.8XXXXCould not delete notice.XXXXgoogle:Impossible de supprimer le préavis.",

	'admin:options' => "XXXXnew on 1.8XXXXAdmin optionsXXXXgoogle:options Admin",


/**
 * Plugins
 */
	'plugins:settings:save:ok' => "Le paramètrage du plugin %s a été enregistré.",
	'plugins:settings:save:fail' => "Il y a eu un problème lors de l'enregistrement des paramètres du plugin %s.",
	'plugins:usersettings:save:ok' => "Le paramètrage du plugin a été enregistré avec succès.",
	'plugins:usersettings:save:fail' => "Il y a eu un problème lors de l'enregistrement du paramètrage du plugin %s.",
	'item:object:plugin' => "XXXXchanged on 1.8 (1.7=Plugin configuration settings)XXXXPluginsXXXXParamètres de configuration du plugin",

	'admin:plugins' => "XXXXchanged on 1.8 (1.7=Tool Administration)XXXXPluginsXXXXAdministrer les outils",
	'admin:plugins:activate_all' => "XXXXnew on 1.8XXXXActivate AllXXXXgoogle:Activer tous les",
	'admin:plugins:deactivate_all' => "XXXXnew on 1.8XXXXDeactivate AllXXXXgoogle:Désactiver toutes les",
	'admin:plugins:description' => "Ce menu vous permet de contrôler et de configurer les outils installés sur votre site.",
	'admin:plugins:opt:linktext' => "Configurer les outils...",
	'admin:plugins:opt:description' => "Configurer les outils installés sur le site.",
	'admin:plugins:label:author' => "Auteur",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => "XXXXnew on 1.8XXXXCategoriesXXXXgoogle:Catégories",
	'admin:plugins:label:licence' => "Licence",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => "Plus d'informations",
	'admin:plugins:label:version' => "Version",
	'admin:plugins:label:location' => "XXXXnew on 1.8XXXXLocationXXXXgoogle:Lieu",
	'admin:plugins:label:dependencies' => "XXXXnew on 1.8XXXXDependenciesXXXXgoogle:Dépendances",

	'admin:plugins:warning:elgg_version_unknown' => "XXXXnew on 1.8XXXXThis plugin uses a legacy manifest file and does not specify a compatible Elgg version. It probably will not work!XXXXgoogle:Ce plugin utilise un fichier héritage manifeste et ne précise pas une version compatible Elgg. Il ne fonctionnera probablement pas!",
	'admin:plugins:warning:unmet_dependencies' => "XXXXnew on 1.8XXXXThis plugin has unmet dependencies and cannot be activated. Check dependencies under more info.XXXXgoogle:Ce plugin a des dépendances non satisfaites et ne peut être activé. Vérifiez les dépendances en vertu de plus d'infos.",
	'admin:plugins:warning:invalid' => "XXXXnew on 1.8XXXX%s is not a valid Elgg plugin.  Check <a href='http://docs.elgg.org/Invalid_Plugin'>the Elgg documentation</a> for troubleshooting tips.XXXXgoogle: %s n'est pas un plugin valide Elgg. Vérifiez <a href='http://docs.elgg.org/Invalid_Plugin'>la documentation Elgg</a> les conseils de dépannage.",
	'admin:plugins:cannot_activate' => "XXXXnew on 1.8XXXXcannot activateXXXXgoogle:ne pouvez pas activer",

	'admin:plugins:set_priority:yes' => "XXXXnew on 1.8XXXXReordered %s.XXXXgoogle:% Réordonné art",
	'admin:plugins:set_priority:no' => "XXXXnew on 1.8XXXXCould not reorder %s.XXXXgoogle:Impossible de réorganiser% s.",
	'admin:plugins:deactivate:yes' => "XXXXnew on 1.8XXXXDeactivated %s.XXXXgoogle:Désactivé% s.",
	'admin:plugins:deactivate:no' => "XXXXnew on 1.8XXXXCould not deactivate %s.XXXXgoogle:Impossible de désactiver% s.",
	'admin:plugins:activate:yes' => "XXXXnew on 1.8XXXXActivated %s.XXXXgoogle:Activated% s.",
	'admin:plugins:activate:no' => "XXXXnew on 1.8XXXXCould not activate %s.XXXXgoogle:Impossible d'activer le% s.",
	'admin:plugins:categories:all' => "XXXXnew on 1.8XXXXAll categoriesXXXXgoogle:Toutes les catégories",
	'admin:plugins:plugin_website' => "XXXXnew on 1.8XXXXPlugin websiteXXXXgoogle:Plugin site",
	'admin:plugins:author' => "XXXXnew on 1.8XXXX%sXXXXgoogle:% S",
	'admin:plugins:version' => "XXXXnew on 1.8XXXXVersion %sXXXXgoogle:La version% s",
	'admin:plugins:simple' => "XXXXnew on 1.8XXXXSimpleXXXXgoogle:Simple",
	'admin:plugins:advanced' => "XXXXnew on 1.8XXXXAdvancedXXXXgoogle:Avancée",
	'admin:plugin_settings' => "XXXXnew on 1.8XXXXPlugin SettingsXXXXgoogle:Plugin Settings",
	'admin:plugins:simple_simple_fail' => "XXXXnew on 1.8XXXXCould not save settings.XXXXgoogle:Impossible d'enregistrer les paramètres.",
	'admin:plugins:simple_simple_success' => "XXXXnew on 1.8XXXXSettings saved.XXXXgoogle:Paramètres sauvegardés.",
	'admin:plugins:simple:cannot_activate' => "XXXXnew on 1.8XXXXCannot activate this plugin. Check the advanced plugin admin area for more information.XXXXgoogle:Impossible d'activer ce plugin. Vérifiez la pointe plugin zone d'administration pour plus d'informations.",

	'admin:plugins:dependencies:type' => "XXXXnew on 1.8XXXXTypeXXXXgoogle:Type",
	'admin:plugins:dependencies:name' => "XXXXnew on 1.8XXXXNameXXXXgoogle:Nom",
	'admin:plugins:dependencies:expected_value' => "XXXXnew on 1.8XXXXTested ValueXXXXgoogle:Testé valeur",
	'admin:plugins:dependencies:local_value' => "XXXXnew on 1.8XXXXActual valueXXXXgoogle:La valeur réelle",
	'admin:plugins:dependencies:comment' => "XXXXnew on 1.8XXXXCommentXXXXgoogle:Commentaire",

	'admin:statistics:description' => "Cette page est un résumé des statistiques de votre site. Si vous avez besoin de statistiques plus détaillées, une version professionnelle d'administration est disponible.",
	'admin:statistics:opt:description' => "Voir des informations statistiques sur les utilisateurs et les objets de votre site.",
	'admin:statistics:opt:linktext' => "Voir statistiques...",
	'admin:statistics:label:basic' => "Statistiques basiques du site",
	'admin:statistics:label:numentities' => "Entités sur le site",
	'admin:statistics:label:numusers' => "Nombre d'utilisateurs",
	'admin:statistics:label:numonline' => "Nombre d'utilisateurs en ligne",
	'admin:statistics:label:onlineusers' => "Utilisateurs en ligne actuellement",
	'admin:statistics:label:version' => "Version d'Elgg",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Version",

	'admin:user:label:search' => "Trouver des utilisateurs :",
	'admin:user:label:searchbutton' => "Chercher",

	'admin:user:ban:no' => "Cet utilisateur ne peut pas être banni",
	'admin:user:ban:yes' => "Utilisateur banni.",
	'admin:user:self:ban:no' => "XXXXnew on 1.8XXXXYou cannot ban yourselfXXXXgoogle:Vous ne pouvez pas vous interdire",
	'admin:user:unban:no' => "Cet utilisateur ne peut pas être réintégré",
	'admin:user:unban:yes' => "XXXXchanged on 1.8 (1.7=User un-banned.)XXXXUser unbanned.XXXXUtilisateur réintégré.",
	'admin:user:delete:no' => "Cet utilisateur ne peut pas être supprimé",
	'admin:user:delete:yes' => "Utilisateur supprimé",
	'admin:user:self:delete:no' => "XXXXnew on 1.8XXXXYou cannot delete yourselfXXXXgoogle:Vous ne pouvez pas vous supprimer",

	'admin:user:resetpassword:yes' => "Mot de passe réinitialisé, utilisateur notifié.",
	'admin:user:resetpassword:no' => "Le mot de passe n'a pas pu être réinitialisé.",

	'admin:user:makeadmin:yes' => "L'utilisateur est maintenant un administrateur.",
	'admin:user:makeadmin:no' => "Nous ne pouvons pas faire de cet utilisateur un administrateur.",

	'admin:user:removeadmin:yes' => "L'utilisateur n'est plus administrateur.",
	'admin:user:removeadmin:no' => "Nous ne pouvons pas supprimer les privilèges d'administrateur à cet utilisateur.",
	'admin:user:self:removeadmin:no' => "XXXXnew on 1.8XXXXYou cannot remove your own administrator privileges.XXXXgoogle:Vous ne pouvez pas supprimer vos propres privilèges d'administrateur.",

	'admin:appearance:menu_items' => "XXXXnew on 1.8XXXXMenu ItemsXXXXgoogle:Les éléments de menu",
	'admin:menu_items:configure' => "XXXXnew on 1.8XXXXConfigure main menu itemsXXXXgoogle:Configurer les éléments du menu principal",
	'admin:menu_items:description' => "XXXXnew on 1.8XXXXSelect which menu items you want to show as featured links.  Unused items will be added as 'More' at the end of the list.XXXXgoogle:Sélectionnez les éléments de menu que vous voulez montrer que des liens aussi. articles inutilisés seront ajoutées en tant «Plus» à la fin de la liste.",
	'admin:menu_items:hide_toolbar_entries' => "XXXXnew on 1.8XXXXRemove links from tool bar menu?XXXXgoogle:Supprimer les liens dans le menu barre d'outils?",
	'admin:menu_items:saved' => "XXXXnew on 1.8XXXXMenu items saved.XXXXgoogle:Les éléments de menu sauvé.",
	'admin:add_menu_item' => "XXXXnew on 1.8XXXXAdd a custom menu itemXXXXgoogle:Ajouter un élément de menu personnalisé",
	'admin:add_menu_item:description' => "XXXXnew on 1.8XXXXFill out the Display name and URL to add custom items to your navigation menu.XXXXgoogle:Remplissez le nom et l'URL d'affichage pour ajouter des éléments personnalisés à votre menu de navigation.",

	'admin:appearance:default_widgets' => "XXXXnew on 1.8XXXXDefault WidgetsXXXXgoogle:Widgets par défaut",
	'admin:default_widgets:unknown_type' => "XXXXnew on 1.8XXXXUnknown widget typeXXXXgoogle:type de widget Inconnue",
	'admin:default_widgets:instructions' => "XXXXnew on 1.8XXXXAdd, remove, position, and configure default widgets for the selected widget page. These changes will apply only to new content on the site.XXXXgoogle:Ajoutez, supprimez, la position et configurer les widgets par défaut pour la page widget sélectionnés. Ces changements s'appliqueront uniquement aux nouveaux contenus sur le site.",


/**
 * User settings
 */
	'usersettings:description' => "Le panneau de configuration vous permet de contrôler tous vos paramètres et vos plugins. Choisissez une option ci-dessous pour continuer.",

	'usersettings:statistics' => "Vos statistiques",
	'usersettings:statistics:opt:description' => "VVisualiser les statistiques des utilisateurs et des objets sur votre espace.",
	'usersettings:statistics:opt:linktext' => "Statistiques de votre compte.",

	'usersettings:user' => "Vos paramètres",
	'usersettings:user:opt:description' => "Ceci vous permet de contrôler vos paramètres.",
	'usersettings:user:opt:linktext' => "Changer vos paramètres",

	'usersettings:plugins' => "Outils",
	'usersettings:plugins:opt:description' => "Configurer vos paramètres (s'il y en a) pour activer vos outils.",
	'usersettings:plugins:opt:linktext' => "Configurer vos outils",

	'usersettings:plugins:description' => "Ce panneau de configuration vous permez de mettre à jour les options de vos outils installés par l'administrateur.",
	'usersettings:statistics:label:numentities' => "Vos entités",

	'usersettings:statistics:yourdetails' => "Vos informations",
	'usersettings:statistics:label:name' => "Votre nom",
	'usersettings:statistics:label:email' => "E-mail",
	'usersettings:statistics:label:membersince' => "Membre depuis",
	'usersettings:statistics:label:lastlogin' => "Dernière connexion",

/**
 * Activity river
 */
	'river:all' => "XXXXnew on 1.8XXXXAll Site ActivityXXXXgoogle:Toute l'activité du site",
	'river:mine' => "XXXXnew on 1.8XXXXMy ActivityXXXXgoogle:Mon activité",
	'river:friends' => "XXXXnew on 1.8XXXXFriends ActivtyXXXXgoogle:Amis activty",
	'river:select' => "XXXXnew on 1.8XXXXShow %sXXXXgoogle:Afficher% s",
	'river:comments:more' => "XXXXnew on 1.8XXXX+%u moreXXXXgoogle:+% U plus",
	'river:generic_comment' => "XXXXnew on 1.8XXXXcommented on %s %sXXXXgoogle:a commenté sur% s% s",

	'friends:widget:description' => "XXXXnew on 1.8XXXXDisplays some of your friends.XXXXgoogle:Affiche certains de vos amis.",
	'friends:num_display' => "XXXXnew on 1.8XXXXNumber of friends to displayXXXXgoogle:Nombre d'amis à afficher",
	'friends:icon_size' => "XXXXnew on 1.8XXXXIcon sizeXXXXgoogle:Taille des icônes",
	'friends:tiny' => "XXXXnew on 1.8XXXXtinyXXXXgoogle:minuscules",
	'friends:small' => "XXXXnew on 1.8XXXXsmallXXXXgoogle:petits",

/**
 * Generic action words
 */

	'save' => "Enregistrer",
	'reset' => "XXXXnew on 1.8XXXXResetXXXXgoogle:Reset",
	'publish' => "Publier",
	'cancel' => "Annuler",
	'saving' => "Enregistrement en cours",
	'update' => "Mettre à jour",
	'edit' => "Modifier",
	'delete' => "Supprimer",
	'accept' => "Accepter",
	'load' => "Charger",
	'upload' => "Charger",
	'ban' => "Bannir",
	'unban' => "Réintégrer",
	'banned' => "XXXXnew on 1.8XXXXBannedXXXXgoogle:Banni",
	'enable' => "Activer",
	'disable' => "Désactiver",
	'request' => "Requête",
	'complete' => "Complété",
	'open' => "Ouvrir",
	'close' => "Fermer",
	'reply' => "Répondre",
	'more' => "Plus",
	'comments' => "Commentaires",
	'import' => "Importer",
	'export' => "Exporter",
	'untitled' => "Sans titre",
	'help' => "Aide",
	'send' => "Envoyer",
	'post' => "Poster",
	'submit' => "Soumettre",
	'comment' => "XXXXnew on 1.8XXXXCommentXXXXgoogle:Commentaire",
	'upgrade' => "XXXXnew on 1.8XXXXUpgradeXXXXgoogle:Mise à niveau",

	'site' => "Site",
	'activity' => "XXXXnew on 1.8XXXXActivityXXXXgoogle:Activité",
	'members' => "XXXXnew on 1.8XXXXMembersXXXXgoogle:Membres",

	'up' => "Monter",
	'down' => "Descendre",
	'top' => "Au dessus",
	'bottom' => "Au dessous",

	'invite' => "Inviter",

	'resetpassword' => "Réinitialiser le mot de passe",
	'makeadmin' => "Rendre l'utilisateur administrateur",
	'removeadmin' => "Supprimer les droits administrateur de l'utilisateur",

	'option:yes' => "Oui",
	'option:no' => "Non",

	'unknown' => "Inconnu",

	'active' => "Activé",
	'total' => "Total",

	'learnmore' => "Cliquer ici pour en apprendre plus.",

	'content' => "contenu",
	'content:latest' => "Dernière activité",
	'content:latest:blurb' => "Vous pouvez également cliquer ici pour voir les dernières modifications effectuées sur le site.",

	'link:text' => "voir le lien",
/**
 * Generic questions
 */

	'question:areyousure' => "Etês-vous sûr ?",

/**
 * Generic data words
 */

	'title' => "Titre",
	'description' => "Description",
	'tags' => "Tags",
	'spotlight' => "Projecteur sur",
	'all' => "Tous",
	'mine' => "XXXXnew on 1.8XXXXMineXXXXgoogle:Mine",

	'by' => "par",

	'annotations' => "Annotations",
	'relationships' => "Relations",
	'metadata' => "Metadonnées",
	'tagcloud' => "XXXXnew on 1.8XXXXTag cloudXXXXgoogle:Nuage de tags",
	'tagcloud:allsitetags' => "XXXXnew on 1.8XXXXAll site tagsXXXXgoogle:Tous les tags site",

/**
 * Entity actions
 */
	'edit:this' => "XXXXnew on 1.8XXXXEdit thisXXXXgoogle:Modifier cette",
	'delete:this' => "XXXXnew on 1.8XXXXDelete thisXXXXgoogle:Supprimer ce",
	'comment:this' => "XXXXnew on 1.8XXXXComment on thisXXXXgoogle:Réagir à cette",

/**
 * Input / output strings
 */

	'deleteconfirm' => "Etes-vous sur de voloir supprimer cet élément ?",
	'fileexists' => "Un fichier a déjà été chargé. Pour le remplacer sélectionner le ci-dessous :",

/**
 * User add
 */

	'useradd:subject' => "Compte de l'utilisateur créé",
	'useradd:body' => "
%s,

Un compte utilisateur vous a été créé a %s. Pour vous connecter, rendez-vous :

%s

Et connectez vous avec les identifiants suivant :

Nom d'utilisateur : %s
Mot de passe : %s

Une fois que vous vous êtes connecté(e), nous vous conseillons fortement de changer votre mot de passe.
",

/**
 * System messages
 **/

	'systemmessages:dismiss' => "Cliquer pour fermer",


/**
 * Import / export
 */
	'importsuccess' => "L'import des données a été réalisée avec succès",
	'importfail' => "L'import OpenDD des données a échouée.",

/**
 * Time
 */

	'friendlytime:justnow' => "à l'instant",
	'friendlytime:minutes' => "il y a %s minutes",
	'friendlytime:minutes:singular' => "il y a une minute",
	'friendlytime:hours' => "il y a %s heures",
	'friendlytime:hours:singular' => "il y a une heure",
	'friendlytime:days' => "Il y a %s jours",
	'friendlytime:days:singular' => "hier",
	'friendlytime:date_format' => "j F Y @ g:ia",

	'date:month:01' => "Janvier %s",
	'date:month:02' => "Février %s",
	'date:month:03' => "Mars %s",
	'date:month:04' => "Avril %s",
	'date:month:05' => "Mai %s",
	'date:month:06' => "Juin %s",
	'date:month:07' => "Juillet %s",
	'date:month:08' => "Août %s",
	'date:month:09' => "Septembre %s",
	'date:month:10' => "Octobre %s",
	'date:month:11' => "Novembre %s",
	'date:month:12' => "Décembre %s",


/**
 * System settings
 */

	'installation:sitename' => "XXXXchanged on 1.8 (1.7=The name of your site (eg 'My social networking site'):)XXXXThe name of your site:XXXXNom du site (par exemple 'Mon site de réseau social') :",
	'installation:sitedescription' => "XXXXchanged on 1.8 (1.7=Short description of your site (optional))XXXXShort description of your site (optional):XXXXBrève description du site (facultatif)",
	'installation:wwwroot' => "XXXXchanged on 1.8 (1.7=The site URL, followed by a trailing slash:)XXXXThe site URL:XXXXAdresse du site internet :",
	'installation:path' => "XXXXchanged on 1.8 (1.7=The full path to your site root on your disk, followed by a trailing slash:)XXXXThe full path of the Elgg installation:XXXXChemin physique des fichiers sur le serveur :",
	'installation:dataroot' => "XXXXchanged on 1.8 (1.7=The full path to the directory where uploaded files will be stored, followed by a trailing slash:)XXXXThe full path of the data directory:XXXXChemin complet où héberger les fichiers uploadés par les utilisateurs :",
	'installation:dataroot:warning' => "XXXXchanged on 1.8 (1.7=You must create this directory manually. It should sit in a different directory to your Elgg installation.)XXXXYou must create this directory manually. It should be in a different directory to your Elgg installation.XXXXVous devez créer ce répertoire manuellement. Il doit se situer dans un répertoire différent de votre installation de Elgg.",
	'installation:sitepermissions' => "Les permissions d'accés par défaut :",
	'installation:language' => "La langue par défaut de votre site :",
	'installation:debug' => "Le mode de débogage permet de mettre en évidence certaines erreurs de fonctionnement, cependant il ralenti l'accès au site, il est à utiliser uniquement en cas de problème :",
	'installation:debug:none' => "Désactive le mode debug (recommandé)",
	'installation:debug:error' => "Afficher seulement les erreurs critiques",
	'installation:debug:warning' => "Afficher les erreurs et les avertissements",
	'installation:debug:notice' => "Log toutes les erreurs, les avertissements et les avis",

	// Walled Garden support
	'installation:registration:description' => "XXXXnew on 1.8XXXXUser registration is enabled by default. Turn this off if you do not want new users to be able to register on their own.XXXXgoogle:Enregistrement d'un utilisateur est activée par défaut. Désactivez cette option si vous ne voulez pas de nouveaux utilisateurs à être en mesure de s'inscrire eux-mêmes.",
	'installation:registration:label' => "XXXXnew on 1.8XXXXAllow new users to registerXXXXgoogle:Permettre aux utilisateurs d'enregistrer de nouveaux",
	'installation:walled_garden:description' => "XXXXnew on 1.8XXXXEnable the site to run as a private network. This will not allow non logged-in users to view any site pages other than those specifically marked as public.XXXXgoogle:Activer le site de fonctionner comme un réseau privé. Cela ne permettra pas non connecté utilisateurs d'afficher les pages du site autres que celles expressément marqué comme public.",
	'installation:walled_garden:label' => "XXXXnew on 1.8XXXXRestrict pages to logged-in usersXXXXgoogle:Restreindre pages d'utilisateurs enregistrés",

	'installation:httpslogin' => "Activer ceci afin que les utilisateurs puissent se connecter via le protocole https. Vous devez avoir https activé sur votre serveur afin que cela fonctionne.",
	'installation:httpslogin:label' => "Activer les connexions HTTPS",
	'installation:view' => "Entrer le nom de la vue qui sera utilisée automatiquement pour l'affichage du site (par exemple : 'mobile'), laissez par défaut en cas de doute :",

	'installation:siteemail' => "XXXXchanged on 1.8 (1.7=Site email address (used when sending system emails))XXXXSite email address (used when sending system emails):XXXXL'adresse e-mail de l'administrateur (utilisée lors d'envoi d'e-mail par le système)",

	'installation:disableapi' => "XXXXchanged on 1.8 (1.7=The RESTful API is a flexible and extensible interface that enables applications to use certain Elgg features remotely.)XXXXElgg provides an API for building web services so that remote applications can interact with your site.XXXXL'API RESTful est une interface qui permet à des applications d'utiliser certaines caractéristiques de Elgg à distance.",
	'installation:disableapi:label' => "XXXXchanged on 1.8 (1.7=Enable the RESTful API)XXXXEnable Elgg's web services APIXXXXActiver l'API RESTful",

	'installation:allow_user_default_access:description' => "Si coché, les utilisateurs pourront modifier leur niveau d'accés par défaut et pourront surpasser le niveau d'accés mis en place par défaut dans le système.",
	'installation:allow_user_default_access:label' => "Autoriser un niveau d'accés par défaut pour l'utilisateur",

	'installation:simplecache:description' => "Le cache simple augmente les performances en mettant en cache du contenu statique comme des CSS et des fichiers Javascripts. Normalement vous ne devriez pas avoir besoin de l'activer.",
	'installation:simplecache:label' => "Utiliser un cache simple (recommandé)",

	'installation:viewpathcache:description' => "Le cache utilisé pour stocker les chemins vers les vues des greffons réduit le temps de chargement de ces derniers.",
	'installation:viewpathcache:label' => "Utiliser le cache de stockage des chemins vers les vues des greffons (recommandé)",

	'upgrading' => "Mise à jour en cours",
	'upgrade:db' => "Votre base de données a été mise à jour.",
	'upgrade:core' => "Votre installation de Elgg a été mise à jour",
	'upgrade:unable_to_upgrade' => "XXXXnew on 1.8XXXXUnable to upgrade.XXXXgoogle:Impossible de mettre à niveau.",
	'upgrade:unable_to_upgrade_info' =>
		'This installation cannot be upgraded because legacy views
		were detected in the Elgg core views directory. These views have been deprecated and need to be
		removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
		simply delete the views directory and replace it with the one from the latest
		package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

		If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Upgrading Elgg documentation</a>.  If you require assistance, please post to the
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',

	'update:twitter_api:deactivated' => "XXXXnew on 1.8XXXXTwitter API (previously Twitter Service) was deactivated during the upgrade. Please activate it manually if required.XXXXgoogle:Twitter API (précédemment Twitter Service) a été désactivé lors de la mise à niveau. S'il vous plaît activer manuellement si nécessaire.",
	'update:oauth_api:deactivated' => "XXXXnew on 1.8XXXXOAuth API (previously OAuth Lib) was deactivated during the upgrade.  Please activate it manually if required.XXXXgoogle:OAuth API (précédemment OAuth Lib) a été désactivé lors de la mise à niveau. S'il vous plaît activer manuellement si nécessaire.",

	'deprecated:function' => "XXXXnew on 1.8XXXX%s() was deprecated by %s()XXXXgoogle: %s () a été désapprouvée par %s ()",

/**
 * Welcome
 */

	'welcome' => "Bienvenue",
	'welcome:user' => "Bienvenue %s",

/**
 * Emails
 */
	'email:settings' => "Paramètres e-mail",
	'email:address:label' => "Votre adresse e-mail",

	'email:save:success' => "Votre nouvelle adresse e-mail a été enregistrée, vous allez recevoir un e-mail de confirmation.",
	'email:save:fail' => "Votre nouvelle adresse e-mail n'a pas pu être enregistrée.",

	'friend:newfriend:subject' => "%s vous a ajouté comme contact !",
	'friend:newfriend:body' => "%s vous a ajouté comme contact!

Pour voir son profil cliquer sur le lien ci-dessous

	%s

Vous ne pouvez pas répondre à cet e-mail.",



	'email:resetpassword:subject' => "Réinitialisation du mot de passe !",
	'email:resetpassword:body' => "Bonjour %s,

Votre nouveau mot de passe est : %s",


	'email:resetreq:subject' => "Demander un nouveau mot de passe.",
	'email:resetreq:body' => "Bonjour %s,

Quelqu'un (avec l'adresse IP %s) a demandé un nouveau mot de passe pour son compte.

Si vous avez demandé ce changement veuillez cliquer sur le lien ci-dessous, sinon ignorez cet e-mail.

%s
",

/**
 * user default access
 */

'default_access:settings' => "Votre niveau d'accés par défaut",
'default_access:label' => "Accés par défaut",
'user:default_access:success' => "Votre nouveau niveau d'accés par défaut a été enregistré.",
'user:default_access:failure' => "Votre nouveau niveau d'accés par défaut n'a pu être enregistré.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Input data missing",

/**
 * Comments
 */

	'comments:count' => "%s commentaire(s)",

	'riveraction:annotation:generic_comment' => "%s a écrit un commentaire sur %s",

	'generic_comments:add' => "XXXXchanged on 1.8 (1.7=Add a comment)XXXXLeave a commentXXXXAjouter un commentaire",
	'generic_comments:post' => "XXXXnew on 1.8XXXXPost commentXXXXgoogle:Poster un commentaire",
	'generic_comments:text' => "Commentaire",
	'generic_comments:latest' => "XXXXnew on 1.8XXXXLatest commentsXXXXgoogle:Derniers commentaires",
	'generic_comment:posted' => "Votre commentaire a été publié avec succés.",
	'generic_comment:deleted' => "XXXXchanged on 1.8 (1.7=Your comment was successfully deleted.)XXXXThe comment was successfully deleted.XXXXVotre commentaire a été supprimé avec succés.",
	'generic_comment:blank' => "Désolé; vous devez remplir votre commentaire avant de pouvoir l'enregistrer.",
	'generic_comment:notfound' => "Désolé; l'élément recherché n'a pas été trouvé.",
	'generic_comment:notdeleted' => "Désolé; le commentaire n'a pu être supprimé.",
	'generic_comment:failure' => "Une erreur est survenue lors de l'ajout de votre commentaire. Veillez réessayer.",
	'generic_comment:none' => "XXXXnew on 1.8XXXXNo commentsXXXXgoogle:Pas de commentaires",

	'generic_comment:email:subject' => "Vous avez un nouveau commentaire !",
	'generic_comment:email:body' => "Vous avez un nouveau commentaire sur l'élément '%s' de %s. Voici son contenu :


%s


Pour répondre ou voir le contenu de référence, suivez le lien :

%s

Pour voir le profil de %s, suivez ce lien :

%s

Ne répondez pas à cet e-mail.",

/**
 * Entities
 */
	'byline' => "XXXXnew on 1.8XXXXBy %sXXXXgoogle:En% s",
	'entity:default:strapline' => "Créé le %s par %s",
	'entity:default:missingsupport:popup' => "Cette entité ne peut pas être affichée correctement. C'est peut-être du à un plugin qui a été supprimé.",

	'entity:delete:success' => "L'entité %s a été effacée",
	'entity:delete:fail' => "L'entité %s n'a pas pu être effacée",


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => "Il manque les champs __token ou __ts dans le formulaire.",
	'actiongatekeeper:tokeninvalid' => "Une erreur est survenue. Cela veut probablement dire que la page que vous utilisiez a expirée. Merci de réessayer",
	'actiongatekeeper:timeerror' => "La page a expiré, rafraichissez et recommencez à nouveau.",
	'actiongatekeeper:pluginprevents' => "Une extension a empêché ce formulaire d'être envoyé",


/**
 * Word blacklists
 */
	'word:blacklist' => "and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever",

/**
 * Tag labels
 */

	'tag_names:tags' => "Tags",
	'tags:site_cloud' => "XXXXnew on 1.8XXXXSite Tag CloudXXXXgoogle:Tag Cloud du site",

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => "XXXXnew on 1.8XXXXCannot contact %s. You may experience problems saving content.XXXXgoogle:Impossible de contacter% s. Vous pouvez rencontrer des problèmes pour enregistrer le contenu.",
	'js:security:token_refreshed' => "XXXXnew on 1.8XXXXConnection to %s restored!XXXXgoogle:La connexion à %s restauré!",

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhaze",
	"af" => "Afrikaans",
	"am" => "Amharique",
	"ar" => "Arabe",
	"as" => "Assamais",
	"ay" => "Aymara",
	"az" => "Azéri",
	"ba" => "Bachkir",
	"be" => "Biélorusse",
	"bg" => "Bulgare",
	"bh" => "Bihari",
	"bi" => "Bichelamar",
	"bn" => "Bengalî",
	"bo" => "Tibétain",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corse",
	"cs" => "Tchèque",
	"cy" => "Gallois",
	"da" => "Danois",
	"de" => "Allemand",
	"dz" => "Dzongkha",
	"el" => "Grec",
	"en" => "Anglais",
	"eo" => "Espéranto",
	"es" => "Espagnol",
	"et" => "Estonien",
	"eu" => "Basque",
	"fa" => "Persan",
	"fi" => "Finnois",
	"fj" => "Fidjien",
	"fo" => "Féringien",
	"fr" => "Français",
	"fy" => "Frison",
	"ga" => "Irlandais",
	"gd" => "Écossais",
	"gl" => "Galicien",
	"gn" => "Guarani",
	"gu" => "Gujarâtî",
	"he" => "Hébreu",
	"ha" => "Haoussa",
	"hi" => "Hindî",
	"hr" => "Croate",
	"hu" => "Hongrois",
	"hy" => "Arménien",
	"ia" => "Interlingua",
	"id" => "Indonésien",
	"ie" => "Occidental",
	"ik" => "Inupiaq",
	//"in" => "Indonesian",
	"is" => "Islandais",
	"it" => "Italien",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japonais",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanais",
	"ka" => "Géorgien",
	"kk" => "Kazakh",
	"kl" => "Kalaallisut",
	"km" => "Khmer",
	"kn" => "Kannara",
	"ko" => "Coréen",
	"ks" => "Kashmiri",
	"ku" => "Kurde",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Lao",
	"lt" => "Lituanien",
	"lv" => "Letton",
	"mg" => "Malgache",
	"mi" => "Māori",
	"mk" => "Macédonien",
	"ml" => "Malayalam",
	"mn" => "Mongol",
	"mo" => "Moldave",
	"mr" => "Marâthî",
	"ms" => "Malais",
	"mt" => "Maltais",
	"my" => "Birman",
	"na" => "Nauruan",
	"ne" => "Népalais",
	"nl" => "Néerlandais",
	"no" => "Norvégien",
	"oc" => "Occitan",
	"om" => "Oromo",
	"or" => "Oriya",
	"pa" => "Panjâbî",
	"pl" => "Polonais",
	"ps" => "Pachto",
	"pt" => "Portugais",
	"qu" => "Quechua",
	"rm" => "Romanche",
	"rn" => "Kirundi",
	"ro" => "Roumain",
	"ru" => "Russe",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sango",
	"sh" => "Serbo-Croatian",
	"si" => "Cingalais",
	"sk" => "Slovaque",
	"sl" => "Slovène",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanais",
	"sr" => "Serbe",
	"ss" => "Siswati",
	"st" => "Sotho",
	"su" => "Soundanais",
	"sv" => "Suédois",
	"sw" => "Swahili",
	"ta" => "Tamoul",
	"te" => "Télougou",
	"tg" => "Tadjik",
	"th" => "Thaï",
	"ti" => "Tigrinya",
	"tk" => "Turkmène",
	"tl" => "Tagalog",
	"tn" => "Tswana",
	"to" => "Tongien",
	"tr" => "Turc",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Ouïghour",
	"uk" => "Ukrainien",
	"ur" => "Ourdou",
	"uz" => "Ouzbek",
	"vi" => "Vietnamien",
	"vo" => "Volapük",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zhuang",
	"zh" => "Chinois",
	"zu" => "Zoulou",
);

add_translation("fr",$french);
