# 🎯 Favicons IPRIJE

## 📁 Fichiers créés

### Favicons principaux
- `favicon.svg` - Favicon principal au format SVG (121x203 original)
- `favicon-32x32.svg` - Version optimisée 32x32 px
- `favicon-16x16.svg` - Version optimisée 16x16 px

### Supports spéciaux
- `apple-touch-icon.svg` - Icône Apple Touch (180x180)
- `site.webmanifest` - Manifeste de l'application web
- `browserconfig.xml` - Configuration Microsoft Edge/IE

## 🎨 Design

### Couleurs utilisées
- **Primaire** : `#2B4F75` (Bleu IPRIJE)
- **Secondaire** : `#387B79` (Vert IPRIJE)

### Concept
Le favicon reprend l'identité visuelle IPRIJE avec :
- Formes géométriques représentant la programmation
- Couleurs de la charte graphique
- Lisibilité optimisée aux petites tailles

## 🔧 Intégration

Le favicon est intégré dans `resources/views/layouts/site.blade.php` avec :

```html
<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
<link rel="icon" href="{{ asset('favicon-32x32.svg') }}" type="image/svg+xml" sizes="32x32">
<link rel="icon" href="{{ asset('favicon-16x16.svg') }}" type="image/svg+xml" sizes="16x16">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.svg') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<meta name="theme-color" content="#2B4F75">
```

## 📱 Compatibilité

- ✅ **Navigateurs modernes** : SVG natif
- ✅ **Safari iOS** : Apple Touch Icon
- ✅ **Chrome Android** : Web App Manifest
- ✅ **Microsoft Edge** : browserconfig.xml
- ✅ **PWA Ready** : Manifeste intégré

## 🚀 Déploiement

Tous les fichiers sont prêts pour le déploiement sur Hostinger et sont inclus dans le repository Git.

---

*Favicon IPRIJE - Identité visuelle cohérente sur tous les supports* 🎮✨