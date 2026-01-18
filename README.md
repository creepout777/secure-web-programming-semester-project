

    Documentation UI : https://docs.tabler.io/ui

 # Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants sur votre machine :
```
    PHP ≥ 8.1

    Composer

    Node.js ≥ 18 (+ npm ou yarn)

    MySQL
```
 # Installation

Suivez ces étapes pour configurer le projet localement :
1. Clonage du projet

```
git clone <url-du-repo>
cd <nom-du-repo>
```
2. Installation des dépendances

PHP :

```
composer install
```
Node.js :

```
npm install
```
3. Compilation des assets

```
npm run dev
```
4. Configuration de la base de données

Créez une base de données MySQL nommée semester_project.

Copiez le fichier d'exemple et configurez vos accès dans le fichier .env :
Code snippet
```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=semester_project

DB_USERNAME=root

DB_PASSWORD=votre_mot_de_passe
```
5. Migrations et Données


## Lancer les migrations
```
php artisan migrate
```
## (Optionnel) Seed des données initiales
```
php artisan db:seed
```
6. Lancer l'application
```
php artisan serve
```
Accédez à l'interface via : http://127.0.0.1:8000
# Charte Graphique

    Principal : Vert, Bleu, Blanc (Basé sur le logo de l’école).

    Alertes : Rouge (Actions destructives, erreurs, alertes critiques).

# Workflow de Développement

Le projet suit l'architecture MVC (Modèle-Vue-Contrôleur) de Laravel :

    Modèles : Définis dans app/Models.

    Logique métier : Gérée dans app/Http/Controllers.

    Vues : Situées dans resources/views/ et segmentées par rôle :

        resources/views/admin

        resources/views/professeur

        resources/views/etudiant

    Note importante : Toutes les vues doivent impérativement utiliser les composants Tabler UI pour maintenir l'uniformité visuelle du projet.
