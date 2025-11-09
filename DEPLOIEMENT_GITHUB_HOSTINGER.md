# 🚀 Guide de Déploiement IPRIJE - GitHub + Hostinger

## 📋 **Étapes complètes de A à Z**

### **1. Créer le Repository GitHub**

1. **Aller sur GitHub.com** et se connecter
2. **Cliquer sur "New repository"**
3. **Configurer :**
   - Repository name : `iprije`
   - Description : `IPRIJE - Intelligence Artificielle & Programmation par le Jeu`
   - Public ou Private (selon votre choix)
   - ✅ Cocher "Add a README file" (déjà fait)

4. **Créer le repository**

### **2. Connecter votre projet local à GitHub**

```bash
# Ajouter l'origine GitHub (remplacez par votre URL)
git remote add origin https://github.com/VOTRE-USERNAME/iprije.git

# Pousser vers GitHub
git branch -M main
git push -u origin main
```

### **3. Configuration Hostinger - Git Repository**

#### **Dans hPanel Hostinger :**

1. **Aller dans "Git Repository"** (section Developers)
2. **Cliquer "Create Repository"**
3. **Configurer :**
   - Repository URL : `https://github.com/VOTRE-USERNAME/iprije.git`
   - Branch : `main`
   - Target path : `/domains/votre-domaine.com/public_html`

4. **Authentification GitHub :**
   - Username : votre nom d'utilisateur GitHub
   - Token : créer un Personal Access Token GitHub

#### **Créer le Personal Access Token GitHub :**

1. **GitHub → Settings → Developer settings → Personal access tokens → Tokens (classic)**
2. **Generate new token (classic)**
3. **Permissions nécessaires :**
   - ✅ `repo` (Full control of private repositories)
   - ✅ `workflow` (Update GitHub Action workflows)
4. **Copier le token** (vous ne le reverrez plus !)

### **4. Structure des fichiers sur Hostinger**

```
/domains/votre-domaine.com/
├── public_html/                    # Racine web accessible
│   ├── index.php                   # Copier depuis /public/index.php
│   ├── css/                        # Assets compilés
│   ├── js/                         # Assets compilés  
│   ├── images/                     # Images du site
│   └── build/                      # Assets Vite
├── laravel/                        # Code Laravel (non accessible web)
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── vendor/
│   ├── .env
│   └── artisan
```

### **5. Adapter l'index.php pour Hostinger**

Après le clone, **remplacer le contenu** de `public_html/index.php` par :

```php
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance check
if (file_exists($maintenance = __DIR__.'/../laravel/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader
require __DIR__.'/../laravel/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__.'/../laravel/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
```

### **6. Configuration de la Base de Données**

#### **Créer la BDD dans hPanel :**

1. **MySQL Databases → Create Database**
2. **Nom :** `u123456789_iprije` (préfixe automatique)
3. **Utilisateur :** `u123456789_user`
4. **Mot de passe :** Générer un mot de passe fort
5. **Privilèges :** Tous

#### **Mettre à jour le .env :**

```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=u123456789_iprije
DB_USERNAME=u123456789_user
DB_PASSWORD=VotreMotDePasseGenere
```

### **7. Déploiement Initial**

#### **Via Terminal SSH Hostinger :**

```bash
# Aller dans le dossier Laravel
cd /domains/votre-domaine.com/laravel

# Exécuter le script de déploiement
chmod +x deploy.sh
./deploy.sh
```

#### **Ou manuellement :**

```bash
# Installation dépendances
composer install --no-dev --optimize-autoloader

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migration BDD
php artisan migrate --force

# Lien storage
php artisan storage:link

# Permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### **8. Configuration Email Office 365**

#### **Variables à mettre dans .env production :**

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.office365.com
MAIL_PORT=587
MAIL_USERNAME=contact@iprije.com
MAIL_PASSWORD=VotreMotDePasseOffice365
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contact@iprije.com
MAIL_FROM_NAME="IPRIJE"
```

#### **Test de l'email :**

Créer une route temporaire pour tester :

```php
Route::get('/test-email-production', function () {
    try {
        Mail::raw('Test IPRIJE Production', function ($message) {
            $message->to('votre-email@test.com')
                   ->subject('Test Email IPRIJE');
        });
        return 'Email envoyé avec succès !';
    } catch (Exception $e) {
        return 'Erreur: ' . $e->getMessage();
    }
});
```

### **9. Configuration DNS (Office 365)**

#### **Dans Office 365 Admin Center :**

```dns
# Pointer le domaine vers Hostinger
Type: A
Nom: @
Valeur: [IP fournie par Hostinger]
TTL: 300

Type: CNAME
Nom: www
Valeur: votre-domaine.com
TTL: 300

# Garder les MX existants pour les emails
Type: MX
Priorité: 0
Valeur: votre-domaine-com.mail.protection.outlook.com
```

### **10. Déploiement Automatique**

#### **Configuration Auto-Deploy Hostinger :**

1. **Git Repository → Settings**
2. **Auto Deploy :** Activé
3. **Branch :** main
4. **Deploy Path :** `/domains/votre-domaine.com/public_html`

#### **Script de déploiement personnalisé :**

Dans Hostinger, vous pouvez ajouter des commandes post-déploiement :

```bash
# Après chaque pull Git automatique
cd /domains/votre-domaine.com/laravel
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm ci --only=production
npm run build
```

### **11. Vérifications Finales**

#### **Checklist de mise en ligne :**

- [ ] Site accessible via https://votre-domaine.com
- [ ] SSL activé (gratuit avec Hostinger)
- [ ] Formulaire de contact fonctionnel  
- [ ] Email de contact reçu sur Office 365
- [ ] Images et assets chargés correctement
- [ ] Pages services accessibles
- [ ] Administration accessible (/login)
- [ ] Base de données connectée et migrée

#### **Tests à effectuer :**

1. **Navigation :** Toutes les pages
2. **Contact :** Formulaire + réception email
3. **Admin :** Connexion + création article
4. **Responsive :** Mobile, tablet, desktop
5. **Performance :** Temps de chargement
6. **SEO :** Balises meta, schema.org

### **12. Maintenance Continue**

#### **Workflow de développement :**

```bash
# Développement local
git add .
git commit -m "Nouvelle fonctionnalité"
git push origin main

# → Déploiement automatique sur Hostinger ✨
```

#### **Monitoring :**

- **Logs erreurs :** `/domains/votre-domaine.com/laravel/storage/logs/`
- **Performance :** hPanel Hostinger Analytics
- **Uptime :** Services externes (UptimeRobot, etc.)

---

## 🎯 **Commandes de déploiement rapide**

```bash
# 1. Connecter à GitHub
git remote add origin https://github.com/VOTRE-USERNAME/iprije.git
git push -u origin main

# 2. Configurer Hostinger Git Repository avec votre URL GitHub

# 3. Premier déploiement
cd /domains/votre-domaine.com/laravel
chmod +x deploy.sh && ./deploy.sh

# 4. Tester le site !
```

**Votre site IPRIJE sera en ligne ! 🚀🎮**