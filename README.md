# Laravel

## Récupérer ce projet
Se mettre dans le dossier souhaité, puis utiliser cette commande :
```bash
https://github.com/pazapopo/Laravel-DWM14.git.
```
Faire une copie du ```.env.example``` et la nommer ```.env```, puis :
```bash
composer install
php artisan migrate --seed
```


## Prérequis

- Créer une base de données (peu importe le nom )
- Aller dans le fichier ```.env``` pour y modifier les lignes suivantes:
    -  DB_DATABASE='nom_de_votre_DATABASE'
    -  DB_PASSWORD='votre_mot_de_passe'

## Fonctionnaltitées du site


### Liste des Personnages
- Visualisé les personnages enregistré dans la base de donnée
- Il vous est possible de modifier les informations des personnages voir même de les supprimer instantanément.
  
### Liste des Dessinateurs
- Visualisé les dessinateurs enregistré dans la base de donnée
- Il vous est possible de modifier les informations des dessinateurs voir même de les supprimer instantanément.

### Ajouter un personnage
-  Vous avez le pouvoir d'ajouter un personnage avec toute les informations nécessaire pour l'enregistrer dans la base de donnée . Bien sur il apparaitra directement dans la liste concernée où vous serez redirigé automatiquement

### Ajouter un dessinateur
-  Vous avez le pouvoir d'ajouter un dessinateur avec toute les informations nécessaire pour l'enregistrer dans la base de donnée . Bien sur il apparaitra directement dans la liste concernée où vous serez redirigé automatiquement

# BONNE DECOUVERTE EN ESPERANT QUE CELA VOUS PLAISE