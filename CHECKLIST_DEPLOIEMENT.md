# Checklist de Déploiement IPRIJE - Passage de iprij.test à iprije.fr

## Problèmes identifiés

### 1. Configuration de l'environnement
- ✅ `.env.production` existe avec `APP_URL=https://iprije.fr`
- ⚠️ `.env` local utilise encore `APP_URL=http://iprij.test`
- ⚠️ Paramètres à compléter dans `.env.production` :
  - `DB_DATABASE=u123456789_iprije` (à remplacer par le vrai nom)
  - `DB_USERNAME=u123456789_user` (à remplacer)
  - `DB_PASSWORD=VOTRE_MOT_DE_PASSE_BDD` (à définir)
  - `MAIL_PASSWORD=VOTRE_MOT_DE_PASSE_OFFICE365` (à définir)

### 2. Configuration du domaine
- ⚠️ Vérifier que le domaine `iprije.fr` pointe vers votre serveur Hostinger
- ⚠️ Vérifier la configuration DNS
- ⚠️ Vérifier le certificat SSL

### 3. Configuration Hostinger

#### A. Structure des dossiers Hostinger
```
/home/uXXXXXXXXX/
├── public_html/          # ← Doit pointer vers votre dossier public Laravel
│   ├── index.php
│   ├── css/
│   ├── js/
│   └── images/
├── iprije/               # ← Racine de votre application Laravel
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/           # ← Ce dossier doit être lié à public_html
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   └── vendor/
```

#### B. Vérifications nécessaires sur Hostinger
1. **Version PHP** : Laravel 11 nécessite PHP 8.2+
2. **Extensions PHP requises** :
   - BCMath
   - Ctype
   - cURL
   - DOM
   - Fileinfo
   - JSON
   - Mbstring
   - OpenSSL
   - PCRE
   - PDO
   - Tokenizer
   - XML

3. **Base de données** :
   - Créer une base MySQL sur Hostinger
   - Noter le nom de la base, l'utilisateur et le mot de passe

### 4. Procédure de déploiement

#### Étape 1 : Préparer l'environnement de production
1. Se connecter en SSH à Hostinger
2. Naviguer vers le répertoire de l'application
3. S'assurer que `.env.production` est présent

#### Étape 2 : Mettre à jour les URLs dans le code
Vérifier si des URLs en dur existent dans le code :
```bash
grep -r "iprij.test" resources/ app/ routes/
```

#### Étape 3 : Compiler les assets en production
```bash
npm run build
```
Les assets compilés référenceront automatiquement les bonnes URLs grâce à `VITE_APP_NAME` dans le `.env.production`.

#### Étape 4 : Exécuter le script de déploiement
```bash
chmod +x deploy.sh
./deploy.sh
```

#### Étape 5 : Configuration du serveur web
Créer ou modifier `.htaccess` dans `public_html/` :
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### 5. Problèmes courants et solutions

#### Erreur 500 - Internal Server Error
- **Cause** : Permissions incorrectes
- **Solution** :
  ```bash
  chmod -R 755 storage/
  chmod -R 755 bootstrap/cache/
  ```

#### Assets ne se chargent pas
- **Cause** : URLs incorrectes dans les vues
- **Solution** : Utiliser `asset()` ou `url()` au lieu de chemins en dur
  ```php
  // ❌ Mauvais
  <link href="/css/app.css">
  
  // ✅ Bon
  <link href="{{ asset('css/app.css') }}">
  ```

#### Erreur de connexion à la base de données
- **Cause** : Credentials incorrects dans `.env.production`
- **Solution** : Vérifier les informations dans le panneau Hostinger

#### Cache problématique
- **Solution** :
  ```bash
  php artisan config:clear
  php artisan cache:clear
  php artisan route:clear
  php artisan view:clear
  ```

### 6. Vérifications post-déploiement

- [ ] Le site est accessible sur `https://iprije.fr`
- [ ] Le certificat SSL fonctionne (cadenas vert)
- [ ] Les assets (CSS, JS, images) se chargent correctement
- [ ] Les formulaires fonctionnent
- [ ] L'envoi d'email fonctionne
- [ ] La base de données est accessible
- [ ] Les logs ne montrent pas d'erreurs critiques
- [ ] Le mode debug est désactivé (`APP_DEBUG=false`)

### 7. Commandes utiles pour le diagnostic

```bash
# Vérifier la configuration
php artisan config:show

# Vérifier la connexion à la base de données
php artisan db:show

# Voir les logs en temps réel
tail -f storage/logs/laravel.log

# Tester les routes
php artisan route:list

# Vérifier l'environnement
php artisan env
```

## Actions à effectuer maintenant

1. **Compléter les credentials dans `.env.production`** :
   - Base de données (nom, utilisateur, mot de passe)
   - Mot de passe email Office 365

2. **Vérifier la configuration DNS** :
   - Le domaine `iprije.fr` pointe-t-il vers Hostinger ?
   - Les enregistrements A/CNAME sont-ils corrects ?

3. **Vérifier la structure des dossiers sur Hostinger** :
   - `public_html/` est-il un lien symbolique vers `iprije/public/` ?
   - Ou avez-vous copié les fichiers ?

4. **Compiler les assets localement** (si vous ne pouvez pas le faire sur le serveur) :
   ```bash
   npm run build
   ```
   Puis transférer le dossier `public/build/` sur le serveur.

5. **Exécuter le script de déploiement sur le serveur** :
   ```bash
   ./deploy.sh
   ```

## Besoin d'aide ?

Dites-moi :
1. À quelle étape êtes-vous bloqué ?
2. Quel message d'erreur voyez-vous ?
3. Avez-vous accès SSH à votre serveur Hostinger ?
4. Les credentials de la base de données sont-ils configurés ?
