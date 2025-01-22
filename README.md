# ecole

# Projet Microservices - Documentation

## Description
Ce projet implémente une architecture microservices comprenant :
- Un frontend statique (HTML, CSS) accessible via un navigateur.
- Un backend (PHP) exposant une API REST pour gérer les produits.
- Une base de données MySQL pour stocker les informations des produits.
- Un reverse proxy (Nginx) pour rediriger le trafic et gérer les certificats SSL.
- Des outils de monitoring et de documentation des endpoints.

## Composants

### Frontend
- **Technologie** : HTML, CSS.
- **Description** : Interface utilisateur pour afficher et ajouter des produits.
- **Port exposé** : `8080`.

### Backend
- **Technologie** : PHP.
- **Description** : API REST avec des endpoints pour récupérer et ajouter des produits.
- **Endpoints principaux** :
  - `GET /get_products.php` : Liste des produits.
  - `POST /add_product.php` : Ajout d'un produit.
- **Port exposé** : `8081`.

### Base de données
- **Technologie** : MySQL.
- **Description** : Stockage des informations des produits.
- **Port exposé** : `3306`.

### Reverse Proxy (Nginx)
- **Technologie** : Nginx.
- **Description** : Gère le trafic vers le frontend et le backend, et intègre SSL avec Let's Encrypt.
- **Ports exposés** : `80` (HTTP), `443` (HTTPS).

### Monitoring
- **Prometheus** : Collecte des métriques.
  - **Port exposé** : `9090`.
- **Grafana** : Visualisation des métriques.
  - **Port exposé** : `3000`.
- **Cadvisor** : Surveillance des conteneurs Docker.
  - **Port exposé** : `8085` (ou autre).

### Documentation
- **Swagger UI** : Documentation interactive des endpoints backend.
  - **Port exposé** : `8082`.

### Messagerie (optionnelle)
- **RabbitMQ** : Gestion des files d'attente.
  - **Ports exposés** : `15672` (interface web), `5672` (messagerie).

## Prérequis
- Docker et Docker Compose installés.
- Un domaine ou une IP publique si vous utilisez SSL.

## Instructions d'installation
1. Clonez le dépôt :
   ```bash
   git clone <URL_DU_DEPOT>
   cd <NOM_DU_PROJET>
   ```
2. Configurez vos fichiers nécessaires :
   - `nginx.conf` : Configuration du reverse proxy.
   - `prometheus.yml` : Configuration de Prometheus.

3. Lancez les services avec Docker Compose :
   ```bash
   docker-compose up --build -d
   ```

## Accès aux services
- **Frontend** : [http://localhost:8080](http://localhost:8080)
- **Backend** : [http://localhost:8081](http://localhost:8081)
- **Prometheus** : [http://localhost:9090](http://localhost:9090)
- **Grafana** : [http://localhost:3000](http://localhost:3000)
- **Cadvisor** : [http://localhost:8085](http://localhost:8085)
- **Swagger UI** : [http://localhost:8082](http://localhost:8082)
- **RabbitMQ** : [http://localhost:15672](http://localhost:15672) (si configuré).

## Fonctionnalités principales
1. **Afficher les produits** :
   - Route : `/products.html`.
2. **Ajouter un produit** :
   - Route : `/add_product.html`.
3. **Monitoring** :
   - Visualisez les performances et métriques des conteneurs Docker.



![image](https://github.com/user-attachments/assets/d32a9c70-8aa6-495e-87cd-905219420169)


