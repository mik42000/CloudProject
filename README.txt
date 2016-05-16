----- Services -----
Le Loan approval est compos� de 4 services dont 3 se trouvent sur Google App Engine et 1 sur Heroku.

Sur GAE se trouvent "AppManager", "AccManager" et "CheckAccount".
Sur Heroku se trouve le service "LoanApproval".

AppManager comporte 5 m�thodes:
-d'ajout d'approval (POST) : url -> https://loanapprovalproject-42.appspot.com/AppManager/approvals/add
-de suppression : url -> https://loanapprovalproject-42.appspot.com/AppManager/approvals/delete?id=2 (par exemple pour les arguments)
-de listing des approvals : url -> https://loanapprovalproject-42.appspot.com/AppManager/approvals/all
-de r�cup�ration de la r�ponse manuelle : url -> https://loanapprovalproject-42.appspot.com/AppManager/approvals/check
-de r�cup�ration du dernier ID dans la bdd : url -> https://loanapprovalproject-42.appspot.com/AppManager/approvals/lastId

AccManager comporte 4 m�thodes:
-d'ajout d'account (POST) : url -> https://loanapprovalproject-42.appspot.com/AccManager/accounts/add
-de suppression : url -> https://loanapprovalproject-42.appspot.com/AccManager/accounts/delete?id=2 (par exemple pour les arguments)
-de listing des accounts : url -> https://loanapprovalproject-42.appspot.com/AccManager/accounts/all
-de r�cup�ration du dernier ID dans la bdd : url -> https://loanapprovalproject-42.appspot.com/AccManager/accounts/lastId

CheckAccount comporte 1 m�thode:
-de r�cup�ration du risque pour un compte: url -> https://loanapprovalproject-42.appspot.com/CheckAccount/check/account?name=titi (par exemple pour les arguments)

LoanApproval est le service d�ploy� sur Heroku qui va appeler certains services sur GAE.
Voici l'url : https://sheltered-castle-38146.herokuapp.com/loanapproval?amount=100&name=Toto (par exemple pour les arguments)


----- Client -----
Nous avons aussi un client pour pouvoir tester tous les services cr��s (dossier /Client dans l'archive). Il suffit juste
d'ouvrir le fichier index.html pour les tester.


----- Qui a fait quoi ? -----
Nous nous sommes charg�s tous les deux du client ainsi que du service LoanApproval sur Heroku.
Dylan s'est charg� �galement du service AppManager.
Mika�l a fait les services AccManager et CheckAccount.

----- Tests -----
Afin de tester les diff�rents composants, nous avons utilis� Guzzle. 
En ex�cutant le fichier Guzzle, celui-ci affiche les codes de retour des diff�rentes urls test�es.