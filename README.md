# Projet 4 : Systeme de Gestion Scolaire (similaire a Google classroom)
# Objectif du Projet
Ce projet a pour objectif de développer une plateforme éducative centralisée, inspirée de Google Classroom, destinée à faciliter l’apprentissage en ligne et à améliorer la communication entre professeurs et étudiants.\
La plateforme permettra le partage de ressources pédagogiques telles que cours, documents et vidéos, la gestion des devoirs avec des dates limites et une soumission en ligne, ainsi que la correction et la notation accompagnées de feedback personnalisé.\
Elle intégre également des outils de communication via des annonces et des espaces de discussion, tout en offrant un suivi clair et structuré de la progression des étudiants.

# Membres du groupe et leurs roles:
    
| Nom | Rôle |
|----|------|
| **AITAOUICHA YASSINE** | Responsable de la sécurité, de la conception et de l'initialisation du projet |
| **MOURABIT HAMZA** | Responsable des contrôleurs et des vues de l'étudiant |
| **BAKR DAKHIL** | Responsable des contrôleurs et des vues du professeur |
| **OTHMAN BOUAYAD** | Responsable des contrôleurs et des vues du professeur |
| **HAYTAM HANNOUN** | Responsable des contrôleurs et des vues de l'administrateur |


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

    Documentation UI: Documentation UI : https://docs.tabler.io/ui
