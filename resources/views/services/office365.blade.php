@extends('layouts.site')

@section('title', 'Office 365 Business + IA - IPRIJ')
@section('meta_description', 'Installation, configuration et optimisation Office 365 Business avec IA. Formation Copilot, Power Automate et accompagnement de vos équipes.')

@push('meta')
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Office 365 Business + IA",
  "description": "Installation, configuration et optimisation complète de votre infrastructure Office 365 Business avec intégration de l'intelligence artificielle. Formation Copilot Microsoft 365, Power Automate et accompagnement personnalisé de vos équipes pour maximiser leur productivité.",
  "provider": {
    "@type": "Organization",
    "name": "IPRIJ",
    "url": "https://nicolasraymond.fr",
    "logo": {
      "@type": "ImageObject",
      "url": "https://nicolasraymond.fr/images/logo.svg"
    },
    "description": "Architecte de solutions numériques et formateur spécialisé en transformation digitale",
    "email": "nicolasraymond@iprij.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "",
      "addressLocality": "Vernon",
      "postalCode": "27200",
      "addressRegion": "Normandie",
      "addressCountry": "FR"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "49.0933",
      "longitude": "1.4844"
    },
    "areaServed": [
      {
        "@type": "City",
        "name": "Vernon",
        "containedIn": {
          "@type": "AdministrativeArea",
          "name": "Normandie"
        }
      },
      {
        "@type": "AdministrativeArea",
        "name": "Normandie"
      },
      {
        "@type": "AdministrativeArea",
        "name": "Île-de-France"
      },
      {
        "@type": "Country",
        "name": "France"
      }
    ],
    "founder": {
      "@type": "Person",
      "name": "Nicolas Raymond",
      "jobTitle": "Architecte de Solutions Numériques & Formateur IA",
      "url": "https://nicolasraymond.fr"
    },
    "sameAs": [
      "https://www.linkedin.com/in/nicolas-raymond-iprij/",
      "https://github.com/nicolasraymond"
    ]
  },
  "serviceType": "Conseil et formation Microsoft 365",
  "offers": [
    {
      "@type": "Offer",
      "name": "Package STARTUP",
      "description": "Audit, architecture Microsoft 365, installation complète et formation 2 sessions pour TPE 1-5 salariés",
      "price": "2500",
      "priceCurrency": "EUR",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Package CROISSANCE",
      "description": "Audit complet, architecture Microsoft 365 avec intégrations, formation équipes (4 sessions) et accompagnement 3 mois pour PME 6-20 salariés",
      "price": "4500",
      "priceCurrency": "EUR",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Tarif Horaire",
      "description": "Intervention sur-mesure : audit, installation, formation ou migration complexe",
      "priceSpecification": {
        "@type": "PriceSpecification",
        "minPrice": "70",
        "maxPrice": "85",
        "priceCurrency": "EUR",
        "unitText": "HOUR"
      }
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Services Office 365 Business",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Installation & Configuration avec IA",
          "description": "Configuration Office 365 Business (domaine, utilisateurs, licences), paramétrage intelligent Teams, SharePoint, OneDrive, optimisation workflows avec Copilot Microsoft 365, automatisation Power Automate + IA"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Formation des Utilisateurs",
          "description": "Formation complète Office 365 Business, maîtrise Microsoft Copilot (Word, Excel, PowerPoint, Teams), ateliers pratiques d'automatisation IA, guide personnalisé, support continu"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Optimisation Continue",
          "description": "Audit d'utilisation et recommandations IA, optimisation processus métiers avec IA, solutions sur-mesure, accompagnement stratégique adoption"
        }
      }
    ]
  },
  "audience": {
    "@type": "Audience",
    "audienceType": "TPE/PME"
  }
}
@endverbatim
</script>

<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Accueil",
      "item": "https://nicolasraymond.fr"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "https://nicolasraymond.fr/#services"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Office 365 Business + IA",
      "item": "https://nicolasraymond.fr/services/office-365-business"
    }
  ]
}
@endverbatim
</script>
@endpush

@section('content')
<!-- Hero Service -->
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-icon-large">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="3" width="7" height="7" fill="#EA3E23"/>
                    <rect x="3" y="13" width="7" height="7" fill="#0078D4"/>
                    <rect x="13" y="3" width="7" height="7" fill="#7FBA00"/>
                    <rect x="13" y="13" width="7" height="7" fill="#FFB900"/>
                </svg>
            </div>
            <h1>Office 365 Business + IA</h1>
            <p class="service-tagline">Votre écosystème collaboratif optimisé par l'intelligence artificielle</p>
        </div>
    </div>
</section>

<!-- Description -->
<section class="service-intro">
    <div class="container">
        <div class="intro-content">
            <p class="lead">
                Je vous accompagne dans la mise en place et l'optimisation de votre infrastructure Office 365 Business, 
                en intégrant les dernières technologies d'intelligence artificielle (Copilot, Power Automate) 
                pour maximiser la productivité de vos équipes.
            </p>
        </div>
    </div>
</section>

<!-- Services détaillés -->
<section class="service-details">
    <div class="container">
        <div class="details-grid">
            <!-- Installation & Configuration -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>Installation & Configuration avec IA</h3>
                <ul>
                    <li>Configuration Office 365 Business (domaine, utilisateurs, licences)</li>
                    <li>Paramétrage intelligent Teams, SharePoint, OneDrive</li>
                    <li>Optimisation des workflows avec Copilot Microsoft 365</li>
                    <li>Automatisation avancée avec Power Automate + IA</li>
                    <li>Intégration intelligente avec vos outils existants</li>
                </ul>
            </div>

            <!-- Formation -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
                <h3>Formation des Utilisateurs</h3>
                <ul>
                    <li>Formation complète Office 365 Business</li>
                    <li>Maîtrise de Microsoft Copilot (Word, Excel, PowerPoint, Teams)</li>
                    <li>Ateliers pratiques d'automatisation IA</li>
                    <li>Guide d'utilisation personnalisé pour votre équipe</li>
                    <li>Support continu et montée en compétence</li>
                </ul>
            </div>

            <!-- Optimisation -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3>Optimisation Continue</h3>
                <ul>
                    <li>Audit d'utilisation et recommandations IA</li>
                    <li>Optimisation des processus métiers avec l'IA</li>
                    <li>Mise en place de solutions sur-mesure</li>
                    <li>Accompagnement stratégique dans l'adoption</li>
                    <li>Support et évolution continue</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tarifs -->
<section class="service-pricing">
    <div class="container">
        <div class="section-header">
            <h2>Tarifs & Packages</h2>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Package STARTUP</h3>
                <div class="price">2 500€</div>
                <p class="price-subtitle">TPE 1-5 salariés</p>
                <ul>
                    <li>Audit + Architecture Microsoft 365</li>
                    <li>Installation complète</li>
                    <li>Formation 2 sessions</li>
                    <li>Documentation personnalisée</li>
                </ul>
            </div>

            <div class="pricing-card featured">
                <div class="badge">Populaire</div>
                <h3>Package CROISSANCE</h3>
                <div class="price">4 500€</div>
                <p class="price-subtitle">PME 6-20 salariés</p>
                <ul>
                    <li>Audit complet</li>
                    <li>Architecture Microsoft 365 + intégrations</li>
                    <li>Formation équipes (4 sessions)</li>
                    <li>Accompagnement 3 mois</li>
                    <li>Support prioritaire</li>
                </ul>
            </div>

            <div class="pricing-card">
                <h3>Tarif Horaire</h3>
                <div class="price">70-85€/h</div>
                <p class="price-subtitle">Selon complexité</p>
                <ul>
                    <li>Audit & Architecture : 80€/h</li>
                    <li>Installation & Config : 70€/h</li>
                    <li>Formation équipes : 75€/h</li>
                    <li>Migration complexe : 85€/h</li>
                    <li>Facturation par tranche de 4h minimum</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="service-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Prêt à optimiser votre Office 365 ?</h2>
            <p>Discutons de votre projet et de vos besoins spécifiques</p>
            <a href="#contact" class="btn btn-primary btn-lg">Prendre rendez-vous</a>
        </div>
    </div>
</section>
@endsection
