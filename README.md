# <center>Les Design-Pattern

## <center>test de différents design pattern

>Ce document à surtout vocation à expliquer ce que j'ai compris/appris des différents design pattern que j'étudie. 
Il n'a aucune valeur pédagogique, il permet juste de mettre en lumière différents patterns de concéption permettant de solutionner un problèeme avec une architecture simple, lisible et modulable. 
>N'hésitez pas au besoin ou en cas d'erreur de ma part à apporter des suggestions d'ajouts ou de modifications.

### <u><center>Le design pattern Factory</u>


Intitulé du problème: ***Nous souhaitons pouvoir créér plusieurs véhicule ayant pour chacun diffénte caractéristiques communes (ou génerique), une moto, un avion, une voiture,  sont des objets ayant pour chacun un moteur, des roues(ou pas), un nombre défini de passagers, un facteur lié à la vitesse, bref tout un tas d'élements nous amenant à utiliser <u>le design Pattern Factory</u> afin d'avoir une usine permettant la création de ces véhicules***

1- en premier lieu on crée une classe abstraite [*AbstractVehicule*](/design%20pattern/src/Factory/AbstractVehicule.php) prenant en compte toutes les méthodes génériques pouvant être étendus dans plusieurs class enfants du type véhicule. 

>***"Si l'on souhaite obliger les class enfants à appeler certaines méthodes contenues dans la classe abstraite il faudra penser à declarer les methodes dans Vehicule comme abstraite ex: abstract public function".***

1- On créé une interface [*VehiculeInterface*](/design%20pattern/src/Factory/VehiculeInterface.php) c'est un contrat obligeant les class qui l'étendent d'implémenter de manière stricte les méthodes dont elle se compose. 
>***"on peut implémenter plusieurs interface mais n'étendre que d'une class***".

2- En second on créé plusieurs class ***Voiture,Moto,hélicoptère*** implementant **VehiculInterface** et étendant d'**AbstractVehicule**

3 En troisième on crée un [*VehiculeFactory*](/design%20pattern/src/Factory/VehiculeFactory.php) qui sera notre usine nous permettant de créer nos différents véhicules.

4 le tout est montré en exemple dans [l'index.php]

