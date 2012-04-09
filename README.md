# Traduction française de Elgg 1.8.3

## Copier les traductions

**Pour copier les traductions fr.php :**

Placez-vous dans votre répertoire Elgg :<br>
`cd Elgg`<br>
puis faites une copie récursive :<br>
`cp -Rv ../elgg-1.8-fr/fr.php/. ./`

**Pour copier les traductions manifest.xml : (visible uniquement dans la partie admin)**

Placez-vous dans votre répertoire Elgg :<br>
`cd Elgg`<br>
puis faites une copie récursive :<br>
`cp -Rv ../elgg-1.8-fr/manifest.xml/. ./`

## Traduire plus facilement

1. Installez le répertoire trad-helper dans le répertoire mod de votre Elgg.
+ Affichez la page des plugins dans l'administration.
+ Changez le nom de la function elgg_echo dans engine/lib/languages.php line 96 par qqch comme XXX_elgg_echo
+ activer le pugin trad-helper

Vous pourrez ensuite voir dans le code html de vos pages une balise de commentaire indiquant la clé utilisée pour la traduction.
