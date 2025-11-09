# Guide de Déploiement GitHub vers Hostinger

## 🎯 Objectif
Importer et déployer automatiquement votre repository GitHub IPRIJE sur votre hébergement Hostinger.

## 📋 Prérequis
- [x] Compte Hostinger avec hébergement web
- [x] Repository GitHub avec le code IPRIJE
- [x] Fichiers Laravel prêts pour la production

## 🔧 Méthodes de Déploiement sur Hostinger

### Méthode 1: Git Intégré Hostinger (Recommandée)

#### Étape 1: Accès au cPanel Hostinger
1. Connectez-vous à votre compte Hostinger
2. Allez dans **hPanel** (panel d'administration)
3. Sélectionnez votre domaine/site web
4. Cherchez la section **Fichiers** ou **File Manager**

#### Étape 2: Accès au Git sur Hostinger
Dans le hPanel, recherchez :
- **"Git"** ou **"Version Control"** ou **"Repository"**
- Parfois dans la section **"Developer Tools"** ou **"Advanced"**
- Ou dans **"Website"** > **"Git Version Control"**

#### Étape 3: Configuration du Repository
1. Cliquez sur **"Create Repository"** ou **"Import Repository"**
2. Entrez l'URL de votre repository GitHub :
   ```
   https://github.com/ChapeauDent/iprije.git
   ```
3. **Branch** : `master` ou `main`
4. **Path** : `/public_html` (pour le domaine principal)
5. **Repository Name** : `iprije`

#### Étape 4: Authentification GitHub
- Si repository public : pas d'authentification nécessaire
- Si repository privé : 
  - Générez un **Personal Access Token** sur GitHub
  - Settings > Developer Settings > Personal Access Tokens
  - Utilisez ce token comme mot de passe

### Méthode 2: File Manager + Upload ZIP

#### Si vous ne trouvez pas Git dans Hostinger :

1. **Télécharger le repository en ZIP**
   - Sur GitHub, cliquez sur **Code** > **Download ZIP**
   - Extrayez le ZIP localement

2. **Upload via File Manager**
   - Hostinger hPanel > **File Manager**
   - Naviguez vers `/public_html`
   - **Upload** > Sélectionnez les fichiers Laravel
   - **OU** uploadez le ZIP et extrayez-le

### Méthode 3: Terminal SSH (Avancée)

#### Si votre plan Hostinger inclut SSH :

```bash
# Connexion SSH
ssh username@yourdomain.com

# Navigation
cd public_html

# Clone du repository
git clone https://github.com/ChapeauDent/iprije.git .

# Installation des dépendances
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

## 🔍 Où Trouver Git sur Hostinger

### Interface hPanel récente :
- **Sidebar** > **Website** > **Git Version Control**
- **Files** > **Git Repository**
- **Advanced** > **Git**
- **Developer Tools** > **Version Control**

### Interface hPanel classique :
- **Files** > **Git Version Control**
- **Software** > **Git Version Control**
- **Advanced** > **Git**

### Si Git n'est pas visible :
1. Vérifiez votre **plan d'hébergement** (certains plans de base n'incluent pas Git)
2. Contactez le **support Hostinger** pour activer Git
3. Utilisez la **Méthode 2** (Upload manuel)

## ⚙️ Configuration Post-Déploiement

### 1. Fichier .env de production
Créez/modifiez `.env` sur le serveur :
```env
APP_NAME=IPRIJE
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://votredomaine.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=votre_base
DB_USERNAME=votre_user
DB_PASSWORD=votre_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.office365.com
MAIL_PORT=587
MAIL_USERNAME=contact@iprije.com
MAIL_PASSWORD=votre_password_office365
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contact@iprije.com
MAIL_FROM_NAME="IPRIJE"
```

### 2. Permissions des dossiers
Via File Manager ou SSH :
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### 3. Installation des dépendances
Si vous avez accès SSH :
```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📱 Guide Visuel pour Hostinger

### Recherche de Git dans hPanel :

1. **Connexion hPanel**
   - URL : https://hpanel.hostinger.com
   - Login avec vos identifiants

2. **Navigation**
   ```
   Tableau de bord
   ├── Website (votre domaine)
   │   ├── Overview
   │   ├── Files
   │   │   └── File Manager
   │   │   └── Git Version Control ← CHERCHEZ ICI
   │   ├── Advanced
   │   │   └── Git Repository ← OU ICI
   │   └── Developer Tools
   │       └── Version Control ← OU LÀ
   ```

3. **Si introuvable**
   - Cherchez **"Git"** dans la barre de recherche du hPanel
   - Vérifiez dans **"Files" > "Advanced"**
   - Contactez le support via le chat

## 🆘 Dépannage

### Problème : Git non disponible
**Solution** : Votre plan ne supporte peut-être pas Git
- Vérifiez votre plan d'hébergement
- Upgradez si nécessaire
- Utilisez l'upload manuel en attendant

### Problème : Erreur d'authentification GitHub
**Solution** : 
- Repository privé nécessite un token
- Générez un Personal Access Token sur GitHub
- Utilisez token comme mot de passe

### Problème : Erreur 500 après déploiement
**Solution** :
- Vérifiez le fichier `.env`
- Générez une nouvelle `APP_KEY`
- Vérifiez les permissions des dossiers

## 📞 Support

### Support Hostinger
- **Chat** : Disponible 24/7 dans hPanel
- **Documentation** : https://support.hostinger.com
- **Recherche** : "Git deployment" ou "GitHub integration"

### Questions Fréquentes
- **"Je ne vois pas Git"** → Vérifiez votre plan ou contactez le support
- **"Repository non trouvé"** → Vérifiez l'URL et les permissions
- **"Erreur de déploiement"** → Vérifiez la structure Laravel

---

**💡 Conseil** : Si vous ne trouvez pas Git, commencez par la Méthode 2 (upload manuel) pour avoir votre site en ligne rapidement, puis configurez Git pour les mises à jour futures.