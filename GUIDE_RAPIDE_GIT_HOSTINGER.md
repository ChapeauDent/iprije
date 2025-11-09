# 🔍 Guide Express : Trouver Git sur Hostinger

## Étapes Rapides

### 1. Connexion à Hostinger
- Allez sur : https://hpanel.hostinger.com
- Connectez-vous avec vos identifiants

### 2. Sélection du Site
- Cliquez sur votre domaine/site web dans la liste
- Vous arrivez sur le tableau de bord du site

### 3. Recherche de Git - Essayez ces emplacements :

#### Option A: Sidebar principale
```
hPanel Dashboard
├── Website
│   ├── Overview
│   ├── Files
│   │   ├── File Manager
│   │   └── Git Version Control  ← REGARDEZ ICI
│   └── Advanced
│       └── Git Repository       ← OU ICI
```

#### Option B: Section Developer
```
└── Developer Tools
    ├── Git
    ├── Version Control
    └── Repository Management
```

#### Option C: Section Files avancée
```
Files
├── File Manager
├── FTP Accounts
└── Git Version Control  ← OU LÀ
```

### 4. Si Git n'apparaît nulle part :

#### Recherche par mot-clé
1. Utilisez la **barre de recherche** en haut du hPanel
2. Tapez : "git", "repository", ou "version control"

#### Vérification du plan
- Git n'est pas disponible sur tous les plans Hostinger
- Plans qui incluent Git : **Premium**, **Business**, **Cloud Startup** et plus
- Plan **Single** : Git non disponible

### 5. Solutions alternatives si pas de Git :

#### Option 1: Upload manuel (immédiat)
1. **hPanel** > **Files** > **File Manager**
2. Naviguez vers `/public_html`
3. **Upload** > Sélectionnez vos fichiers Laravel
4. Ou uploadez un ZIP et extrayez-le

#### Option 2: Contact support
- **Chat en ligne** : Bouton en bas à droite du hPanel
- Demandez : "Comment activer Git pour mon hébergement ?"
- Support disponible 24/7

## 🎯 Actions Immédiates

**SI VOUS TROUVEZ GIT :**
1. Cliquez sur "Create Repository" ou "Add Repository"
2. URL : `https://github.com/ChapeauDent/iprije.git`
3. Branch : `master`
4. Path : `/public_html`

**SI VOUS NE TROUVEZ PAS GIT :**
1. Utilisez File Manager pour upload manuel
2. Contactez le support pour activer Git
3. Considérez un upgrade de plan si nécessaire

## 📞 Support Direct
- **Chat Hostinger** : Available dans hPanel (coin en bas à droite)
- **Question type** : "Where is Git Version Control in my hPanel?"
- **Ou en français** : "Où se trouve le contrôle de version Git dans mon interface ?"