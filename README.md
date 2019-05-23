# moduleDrupal
Les fichiers de l'application Drupal complète, avec les caches désactivés (à voir dans le fichier sites/default/settings.local.php ) pour un développement plus rapide. 
Le module se trouve dans Modules, son nom est distant_searcher.

Nous avons séparé le module en trois fonctionnalités distinctes, la barre de recherche sous forme de formulaire récupérant les éléments entrés par l’utilisateur, la fonctionnalité requêtant l’API distante dans Requester, la fonctionnalité affichant les données récupérées dans Displayer. 
Afin d’ajouter une base de donnée à requêter nous ajoutons l’url de l’API implémentée sur le nouveau site cible dans le fichier config_distant-searcher. L’application va prendre automatiquement cette nouvelle cible.

