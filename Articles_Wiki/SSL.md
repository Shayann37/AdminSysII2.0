# SSL
## Introduction

Avant d'aborder le sujet, il est important de s'attarder sur l'origine et la définition de SSL. 
Qu'est-ce que c'est ? SSL (Secure Socket Layer) est un protocole de sécurité standard permettant de protéger les échanges d'informations internes et externes à un réseau.
## Utilisation et mise en place
Le protocole SSL fonctionne sous forme de certificat.
Pour être mis en place, il faut effectuer les manipulations suivantes sur le serveur choisi:

1. Générer une CSR (Certificate Signing Request (Demande de Signature de Certificat)). Il s’agit d’un bloc de texte chiffré qui précise de manière unique qui vous êtes et quel nom de domaine (et quel(s) sous-domaine(s)) vous voulez protéger avec ce certificat. Il va être également demander de choisir un "Common Name", autrement dit, le domaine principal qui doit être sécurisé par ce certificat. En générant le CSR, il devra contenir les informations suivantes : 
* Common Name (CN) (Nom de domaine)
* Organization
* Organizational Unit
* City/Locality
* State/County/Region
* Country
* Email Address	
* RSA public key
* Signature of RSA private key
* Key size
Ce certificat est sauvegardé au format PEM encodé sous forme base64
2. Valider le nom de domaine associé au certicat ssl (Domain Control Validation, DCV)
Il existe 3 méthodes de validations :
A. Par DNS : un enregistrement CNAME doit être ajouter dans la zone DNS du domaine
B. Par mail : un email est envoyé à l’adresse « admin​@example​​.​com » (remplacez example.com par le domaine concerné)
C. Par fichier : un fichier texte (.txt) contenant une clef de validation doit être mis dans le répertoire suivant du serveur web : .well-known/pki-validation/filename.txt
3. Télécharger le certificat SSL

Note : il est bien sûr possible de générèrer un certificat SSL autosigné avec OpenSSL

## Fonctionnement 

[https://www.thawte.fr/resources/ssl-information-center/get-started-with-ssl/how-ssl-works/]
Un navigateur tente de se connecter à un site Web sécurisé par SSL. Le navigateur demande au serveur Web de s'identifier.
Le serveur envoie au navigateur une copie de son certificat SSL.
Le navigateur vérifie s'il fait confiance à ce certificat SSL. Si oui, il envoie un message au serveur.
Le serveur renvoie une acceptation avec signature numérique confirmant le démarrage d'une session SSL cryptée.
Les données cryptées sont échangées entre le navigateur et le serveur.

## Sources :

* Consulté le 10/05/2022 : [Gandi](https://docs.gandi.net/fr/ssl/operations_courantes/csr.html)
* Consulté le 10/05/2022 : [Gandi](https://docs.gandi.net/fr/ssl/operations_courantes/dcv.html#sommaire)
* Consulté le 10/05/2022 : [Gandi](https://docs.gandi.net/fr/ssl/operations_courantes/recuperer_certificat.html)
* Consulté le 10/05/2022 : [Gandi](https://docs.gandi.net/fr/ssl/ssl_c_est_quoi/index.html)
* Consulté le 10/05/2022 : [Gandi](https://docs.gandi.net/fr/ssl/description/index.html)
* Consulté le 10/05/2022 : [digicert](https://www.websecurity.digicert.com/security-topics/what-is-ssl-tls-https#:~:text=SSL%20stands%20for%20Secure%20Sockets,transferred%2C%20including%20potential%20personal%20details.)
* Consulté le 10/05/2022 : [globalsign](https://www.globalsign.com/fr/centre-information-ssl/definition-certificat-ssl)
* Consulté le 10/05/2022 : [globalsign](https://www.globalsign.com/fr/centre-information-ssl/definition-ssl)
* Consulté le 10/05/2022 : [digicert](https://www.websecurity.digicert.com/fr/fr/security-topics/how-does-ssl-handshake-work)
* Consulté le 10/05/2022 : [thawte](https://www.thawte.fr/resources/ssl-information-center/get-started-with-ssl/how-ssl-works/)
* Consulté le 10/05/2022 : [wikihow](https://fr.wikihow.com/installer-un-certificat-SSL#:~:text=certificat%20(CSR).-,Avant%20de%20pouvoir%20acheter%20et%20installer%20un%20certificat%20SSL%2C%20vous,la%20ligne%20de%20commande%20Apache.)
* Consulté le 10/05/2022 : [globalsign](https://www.globalsign.com/fr/blog/qu-est-ce-qu-une-demande-de-signature-de-certificat-csr)
* Consulté le 10/05/2022 : [certeurope](https://www.certeurope.fr/blog/guide-csr-certificat/#:~:text=Comment%20s'utilise%20une%20CSR,qu'il%20gardera%20secr%C3%A8te)
* Consulté le 10/05/2022 : [ibm](https://www.ibm.com/docs/fr/api-connect/5.0.x?topic=profiles-generating-self-signed-certificate-using-openssl)
