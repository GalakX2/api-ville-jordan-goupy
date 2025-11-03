# API et Framework PHP FOAD CDWFS 2025
## Objectif

    L’objectif de ce TP est de créer à partir d'un framework Backend une API capable de délivrer aux différents clients des informations tirées d'une table de données fournie au format json.
    
## Technologies utilisées

    Un des framework PHP/Composer suivant :
    - Symfony
    - Laravel
    Une base de donnée MySQL

## Données de base

    La structure de données json devra toujours retourner les champs suivants :

    Table : villes_france_free

    ville_id	                    	        Identifiant unique de la ville
    ville_nom	                    	        Nom de la ville
    ville_code_postal	            	        Code postal
    ville_departement	            	        Code du département
    ville_longitude_deg	            	        Longitude
    ville_latitude_deg	            	        Latitude
    ville_population_2012	        	        Population en 2012

## Fonctionnalités à implémenter

    1 - http://localhost:8000/villes_de_france/ville?ville=vezoule
        ou http://localhost:8000/villes_de_france/ville/vezoule

        Devra retourner un json contenant les informations concernant la ou les villes dont le nom comporte le string "vezoule".

    2 - http://localhost:8000/villes_de_france/departemant?departement=76
        ou http://localhost:8000/villes_de_france/departement/76

        Devra retourner un json contenant les informations concernant toutes les villes de Seine maritime.

    3 - http://localhost:8000/villes_de_france/code?code=76200
        ou http://localhost:8000/villes_de_france/code/76200

        Devra retourner un json contenant les informations concernant toutes les villes de Seine maritime.

    4 - Bonus (facultatif)

        - Une view (template) devra permettre a travers un formulaire GET d'acceder à chacune de ces 3 routes.
        - Le 'navigator.geolocation' peut être utilisé pour donner à l'utilisateur sa ville la plus proche.

    Les exemples ci-dessus sont biensur à titre indicatifs et devront pouvoir appeler d'autres villes, departements, etc. De plus l'utilisation des 2 url decrites ne sont pas obligatoires (l'une ou l'autre conviennent). 

