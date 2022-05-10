# Artcle Wiki PGP - Maisin Edouard 2TL2


## Introduction 

Avant de rentrer dans le vif du sujet en détails, il est intéressant de d'abord nous resituer dans le Contexte et se poser la question : "Qu'est ce que PGP ?".<br>

Inventé en 1991, PGP ou "Pretty Good Privacy" est un système de chiffrement utilisé pour crypter des données, chiffrer des emails (via OpenPGP) et des fichiers sensibles. PGP s'impose rapidement comme un standard pour la sécurité des emails et se popularité repose sur 2 avantages significatifs. <br>
Premièrement, PGP est un "freeware" ou "logiciel gratuit" pour (pour les francophones) qui lui a permis de se propager assez rapidement parmi les utilisateurs désirant un niveau de sécurité supplémentaire sur leur transfert d'emails.<br>
Deuxièmement, PGP utilise le système de chiffrement symétrique et par clé publique ce qui permet aux utilisateurs de communiquer de facon chiffré sans échanger leurs clés privées ce qui est un réel avantage en terme de sécurité et à moindre cout et assure le chiffrement de bout en bout des communications.

## Fonctionnement et Concepts Théoriques 

PGP possède certaines caractéristiques avec d'autres systèmes de chiffrement tels que Kerberos, S/MIME ou encore un peu plus populaire : SSL. A un niveau basique le chiffrement PGP utilise une combinaison de 2 types de chiffrements càd, le chiffrement symétrique et asymétrique que l'on peut qualifier comme "a clef de sessions".

Avant de continuer, il est intéréssant de se renseigner sur que signifie les termes chiffrer, déchiffrer, crypter, décrypter et j'en passe car ses termes sont très souvent utilisés dans le domaine de l'informatique mais le signification ne sont pas exactement les memes et beaucoup d'entre nous n'utilise pas ses termes correctement.<br>

L'ensemble de ses termes font partie du domaine de la cryptographie, c'est à dire l'ensemble des techniques qui permettent de rendre un message inintelligible. Le chiffrement des données consiste en l’utilisation d’une technique de cryptographie pour rendre un message clair illisible à l’aide d’une clé de chiffrement. Le principe fondamental est que cette clé doit être connue par le destinataire pour permettre le déchiffrement du message. c'est sur ce principe que repose le logiciel PGP. il éxiste plusieurs types de clés et chaque appareil ou utilisateur dispose de sa propre clé.<br>

Contrairement au chiffrement, le cryptage est souvent une confusion vis à vis du terme "chiffrement" ou l'on associe trop souvent les 2 termes et pour autant "chiffrer" n'est pas "crypter". en Effet, prenom le terme "décrypter", décrypter consiste à retrouver le texte original à partir d’un message chiffré sans posséder la clé de (dé)chiffrement. Décrypter ne peut accepter d’antonyme : il est en effet impossible de créer un message chiffré sans posséder de clé de chiffrement. c'est pourquoi le terme "crypter" est une simple erreur venant sans doute du mot "cryptographie" et qui est, en effet, une erreur de vocabulaire.

Revenons à notre chiffrement PGP et son Fonctionnement : 

Tout d'abord, PGP génère une clé de session aléatoire en utilisant un premier alogrithme. Cette clé est un très long nombre qui ne peut pas être deviné, et ne peut être utilisé qu’une seule fois.<br>

Ensuite, cette clé de session est chiffrée. Cette opération est réalisée à l'aide de la clé publique du destinataire du message. La clé publique est liée à l'identité d'une personne particulière et n'importe qui peut l'utiliser pour lui envoyer un message. L'expéditeur envoie sa clé de session PGP chiffrée au destinataire et celui-ci est en mesure de le déchiffrer à l'aide de sa clé privée.  En utilisant la clé de session, le destinataire peut finalement déchiffrer le message.

Enfin, pourquoi ne pas utiliser une simple méthode de chiffrement symétrique ? En effet, le chiffrement symétrique est une technique plus rapide et plus facile à mettre en place mais l'inconvénient est que la clé commune à l'expéditeur et au destinataire nécéssite d'etre partagée en texte brut, ce qui n'est pas sur du tout...
C’est la raison pour laquelle on utilise une clé de chiffrement publique pour chiffrer la clé de session. Ainsi, PGP combine l’efficacité du chiffrement symétrique et la sécurité du chiffrement par clé publique.

<br>

## A quoi sert PGP ?

### le chiffrement de Mails

Le chiffrement des emails est le cas d'usage principal de PGP est utilisé pour toute personne souhaitant effectuer des communication sécurisées et préserver la confidentialité des données.


### la vérification de signatures numériques

Outre le cas des mails, PGP est aussi utilisé pour la vérification de signature numériques, c'est à dire la vérification de l'identité d'un expéditeur d'un email. "Une signature numérique repose sur l’utilisation d’un algorithme pour combiner la clé de l’expéditeur avec les données qu’il envoie. Cette combinaison génère une  » fonction hash  » : un autre algorithme permettant de convertir un message en un bloc de données à taille fixe. Ce bloc est ensuite chiffré à l’aide de la clé privée de l’expéditeur." [lebigdata.fr/pgp-tout-savoir]

le destinataire du message est alors capable de déchiffrer les données en utilisant la clé publique de l'expéditeur. Si un caractère du message à été altéré pendant l'échange du message, alors cela signifie que l'expéditeur n'est peut etre pas celui qu'il prétend...

### le chiffrement de fichiers

Le chiffrement des fichiers est un autre cas d'usage de PGP est utilisé pour toute personne souhaitant effectuer des échanges de dossiers ou fichiers sécurisées et préserver la confidentialité des données.

<br>

## PGP, OpenPGP et GnuPG

en raison des problèmes de brevets de PGP dans les années 90, PGP n'était pas toujours la solution la plus pratique à l'internationale, le Groupe de travail OpenPGP fur crée après la diffusion du code source de PGP, lui, protégé. OpenPGP est basé sur le système de chiffrement PGP et est lui aussi, une méthode de chiffrement basé sur un système de clés. OpenPGP est largement uutilisé pour sécuriser les communications par courrier électronique, mais sa technologie peut également être appliquée au transfert de fichier via FTP.

GnuPG, lui, est une autre norme de chiffrement libre que les entreprises peuvent utiliser, basée sur OpenPGP. La principale différence avec le PGP réside dans les algorithmes pris en charges. GnuPG est un outil utilisé pour la communication et le stockage de données en toute sécurité. Il dispose d’un système de gestion des clés robuste et s’intègre facilement à d’autres applications. Il prend en charge : le chiffrement, la signature des données, S/MIME et SSH.

<br>

## Quelle sécurité fournie par PGP ?

Il est assez difficile de certifier à qu'une méthode de chiffrement est à 100% infaillible. Cela dit, PGP à maintenant plus de 30 ans et peu de vulnérabilités ont été détecter dans l'implémentation de base du système. De plus, son système de à 2 clés, son système de signature et le fait qu'il soit open-source contribuent tous à sa réputation comme l'un des meilleurs protocoles de cryptage.


## Algorithmes de chiffrement PGP

Différents types d'algorithmes de chiffrements peuvent etre utilisés avec PGP bien que le populaire "RSA" soit l'un des plus courants étant donné sa robustesse. L'on peut noté d'autres algorithmes courament utilisés comme AES et autres. 


## Avantages et Inconvénients ?

Le principal avantage de PGP est qu'il est presque impossible de contourner son chiffrement, ce qui explique sa populairité encore à l'heure actuelle.

De plus, ses différentes extensions et les solutions qu'il apporte en fonction du type d'objet à chiffrer font de lui un logiciel très polyvalent.

Néanmoins, le plus gros inconvénient de PGP reste sa compléxetité d'utilisation assez complexe et peut induire des failles de sécurité si celui-ci n'est pas utilisé correctement.

à l'heure actuelle des solutions pretes à l'emploi sont disponibles, et il ne faut pas oublier que PGP n'offre malheureusement pas l'anonymat... En effet, meme si le contenu des messages est chiffré, il est possible de remonter jusqu'a l'identité de l'expéditeur


























## Sources 
https://fr.wikipedia.org/wiki/Chiffrement_RSA
https://fr1.buffalo-mn.org/pgp-me-pretty-good-privacy-explained-4745
https://tutox.fr/2017/04/28/chiffrer-nest-crypter/
https://www.malekal.com/le-chiffrement-pgp-comment-ca-marche/
https://www.varonis.com/fr/blog/pgp-encryption
https://www.lebigdata.fr/pgp-tout-savoir
https://www.clicours.com/cours-fonctionnement-de-pgp-programme-de-cryptage/
https://www.seald.io/fr/blog/crypter-un-fichier-chiffrer-proteger-qui-dit-quoi
https://blog.mailfence.com/fr/difference-chiffrement-symetrique-asymetrique/
https://docs.microsoft.com/fr-fr/system-center/orchestrator/standard-activities/pgp-encrypt-file?view=sc-orch-2022
https://fr1.buffalo-mn.org/pgp-me-pretty-good-privacy-explained-4745
