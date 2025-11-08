#!/bin/bash

# ================================================
# SCRIPT DE DÉPLOIEMENT IPRIJE - HOSTINGER
# ================================================

echo "🚀 Déploiement IPRIJE sur Hostinger..."

# 1. Installation des dépendances PHP (sans dev)
echo "📦 Installation des dépendances PHP..."
composer install --optimize-autoloader --no-dev --no-interaction

# 2. Optimisation de l'autoloader
echo "⚡ Optimisation de l'autoloader..."
composer dump-autoload --optimize

# 3. Installation des dépendances Node.js
echo "📦 Installation des dépendances Node.js..."
npm ci --only=production

# 4. Compilation des assets
echo "🎨 Compilation des assets..."
npm run build

# 5. Génération de la clé d'application (si nécessaire)
if [ ! -f .env ]; then
    echo "🔑 Configuration de l'environnement..."
    cp .env.production .env
    php artisan key:generate --force
fi

# 6. Cache des configurations
echo "🔧 Mise en cache des configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Migrations de la base de données
echo "🗄️  Migration de la base de données..."
php artisan migrate --force

# 8. Création du lien symbolique pour le storage
echo "🔗 Création du lien symbolique storage..."
php artisan storage:link

# 9. Définition des permissions
echo "🔒 Configuration des permissions..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod -R 755 public/

echo "✅ Déploiement IPRIJE terminé avec succès !"
echo "🌐 Votre site est maintenant en ligne !"