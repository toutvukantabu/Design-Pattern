# <center>Design-Pattern

## <center>test de différents design pattern

>Ce document à surtout vocation à expliquer ce que j'ai compris/appris des différents design pattern que j'étudie. 
Il n'a aucune valeur pédagogique, il permet juste de mettre des mots simple à une solution donnée. 

N'hésitez pas au besoin ou en cas d'erreur de ma part à apporter des suggestions d'ajouts ou de modifications.
<center>Le design pattern Factory


>Le design Factory permet de créer plusieurs objets ayant pour la plupart des caractéristiques communes.

1- en premier lieu on crée une ***classe abstraite AbstractVehicule*** prenant en compte toutes les méthodes génériques pouvant être étendus dans plusieurs class enfants du type véhicule. 

>Si l'on souhaite obliger les class enfants à appeler certaines méthodes contenues dans la classe abstraite il faudra penser à declarer les methodes dans Vehicule comme abstraite ex: abstract public function


2- En second on créé plusieurs class implementant **VehiculInterface** et étendant d'***AbstractVehicule*** 

3 En troisième on crée un ***VehiculeFactory*** qui sera en quelque sorte l'usine qui nous permettera de créer nos différents véhicules

