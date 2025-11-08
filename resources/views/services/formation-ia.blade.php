@extends('layouts.site')

@section('title', 'Formation IA Génératives - IPRIJ')
@section('meta_description', 'Formation professionnelle aux IA génératives : code (Copilot), images (DALL-E, Midjourney), textes (ChatGPT). Maîtrisez le prompt engineering.')

@push('meta')
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": ["Service", "EducationalOrganization"],
  "name": "Formation IA Génératives",
  "description": "Formation professionnelle aux intelligences artificielles génératives pour la création de code, d'images et de textes. Formations pratiques axées sur le prompt engineering et l'intégration des IA dans vos workflows professionnels.",
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
  "serviceType": "Formation professionnelle continue",
  "educationalCredentialAwarded": "Certification CDUI (Conception et Développement d'Unités d'Instruction)",
  "offers": [
    {
      "@type": "Offer",
      "name": "Atelier Découverte",
      "description": "Introduction aux IA génératives et cas d'usage pratiques, 2 heures",
      "price": "180",
      "priceCurrency": "EUR",
      "priceSpecification": {
        "@type": "PriceSpecification",
        "price": "180",
        "priceCurrency": "EUR",
        "eligibleDuration": {
          "@type": "QuantitativeValue",
          "value": "2",
          "unitText": "HOUR"
        }
      }
    },
    {
      "@type": "Offer",
      "name": "Formation Demi-Journée",
      "description": "Approfondissement sur un type d'IA (code, images ou textes) avec exercices pratiques, 4 heures",
      "price": "360",
      "priceCurrency": "EUR",
      "priceSpecification": {
        "@type": "PriceSpecification",
        "price": "360",
        "priceCurrency": "EUR",
        "eligibleDuration": {
          "@type": "QuantitativeValue",
          "value": "4",
          "unitText": "HOUR"
        }
      }
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Formations IA Génératives",
    "itemListElement": [
      {
        "@type": "Course",
        "name": "Formation IA Générative pour le Code",
        "description": "GitHub Copilot, Cursor, Claude, ChatGPT pour développeurs. Techniques prompt engineering code. Génération, debug et optimisation code avec IA. Bonnes pratiques et limites des IA code. Cas pratiques projets réels.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Professionnel",
        "teaches": "Prompt engineering pour la génération de code",
        "hasCourseInstance": {
          "@type": "CourseInstance",
          "courseMode": "Blended",
          "courseWorkload": "PT4H"
        }
      },
      {
        "@type": "Course",
        "name": "Formation IA Générative pour les Images",
        "description": "DALL-E, Midjourney, Stable Diffusion. Création visuels professionnels avec IA. Prompt engineering images qualité. Retouche et optimisation images IA. Cas usage marketing et communication.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Professionnel",
        "teaches": "Création d'images avec IA génératives",
        "hasCourseInstance": {
          "@type": "CourseInstance",
          "courseMode": "Blended",
          "courseWorkload": "PT4H"
        }
      },
      {
        "@type": "Course",
        "name": "Formation IA Générative pour les Textes",
        "description": "ChatGPT, Claude, Gemini pour contenu professionnel. Rédaction marketing, emails, articles blog. Optimisation SEO/GEO avec IA. Création prompts efficaces réutilisables. Automatisation production contenu.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Professionnel",
        "teaches": "Rédaction et optimisation de contenu avec IA",
        "hasCourseInstance": {
          "@type": "CourseInstance",
          "courseMode": "Blended",
          "courseWorkload": "PT4H"
        }
      },
      {
        "@type": "Course",
        "name": "Optimisation des Processus avec IA",
        "description": "Audit processus automatisables. Intégration IA outils quotidiens. Création workflows IA sur-mesure. Formation personnalisée par métier. ROI et mesure performance.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Professionnel",
        "teaches": "Automatisation et optimisation avec IA"
      }
    ]
  },
  "knowsAbout": ["Intelligence Artificielle", "IA Générative", "Prompt Engineering", "ChatGPT", "Claude", "GitHub Copilot", "DALL-E", "Midjourney", "Automatisation"],
  "audience": {
    "@type": "Audience",
    "audienceType": "Professionnels et entreprises"
  },
  "instructor": {
    "@type": "Person",
    "name": "Nicolas Raymond",
    "jobTitle": "Formateur certifié CDUI et expert IA",
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Certification professionnelle",
      "name": "CDUI - Conception et Développement d'Unités d'Instruction"
    }
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
      "name": "Formation IA Génératives",
      "item": "https://nicolasraymond.fr/services/formation-ia"
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
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
            </div>
            <h1>Formation IA Génératives</h1>
            <p class="service-tagline">Maîtrisez les IA génératives pour booster votre productivité</p>
        </div>
    </div>
</section>

<!-- Description -->
<section class="service-intro">
    <div class="container">
        <div class="intro-content">
            <p class="lead">
                Je forme vos équipes à l'utilisation des intelligences artificielles génératives pour 
                la création de code, d'images et de textes. Des formations pratiques axées sur le 
                prompt engineering et l'intégration des IA dans vos workflows professionnels.
            </p>
        </div>
    </div>
</section>

<!-- Services détaillés -->
<section class="service-details">
    <div class="container">
        <div class="details-grid">
            <!-- IA Code -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <h3>Formation IA Générative pour le Code</h3>
                <ul>
                    <li>GitHub Copilot, Cursor, Claude, ChatGPT pour développeurs</li>
                    <li>Techniques de prompt engineering pour le code</li>
                    <li>Génération, debug et optimisation de code avec IA</li>
                    <li>Bonnes pratiques et limites des IA de code</li>
                    <li>Cas pratiques sur vos projets réels</li>
                </ul>
                <div class="price-tag">90€/heure</div>
            </div>

            <!-- IA Images -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <circle cx="8.5" cy="8.5" r="1.5"/>
                        <polyline points="21 15 16 10 5 21"/>
                    </svg>
                </div>
                <h3>Formation IA Générative pour les Images</h3>
                <ul>
                    <li>DALL-E, Midjourney, Stable Diffusion</li>
                    <li>Création de visuels professionnels avec IA</li>
                    <li>Prompt engineering pour images de qualité</li>
                    <li>Retouche et optimisation d'images IA</li>
                    <li>Cas d'usage marketing et communication</li>
                </ul>
                <div class="price-tag">90€/heure</div>
            </div>

            <!-- IA Textes -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h3>Formation IA Générative pour les Textes</h3>
                <ul>
                    <li>ChatGPT, Claude, Gemini pour contenu professionnel</li>
                    <li>Rédaction marketing, emails, articles de blog</li>
                    <li>Optimisation SEO/GEO avec IA</li>
                    <li>Création de prompts efficaces et réutilisables</li>
                    <li>Automatisation de la production de contenu</li>
                </ul>
                <div class="price-tag">90€/heure</div>
            </div>

            <!-- Optimisation -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3>Optimisation des Processus avec IA</h3>
                <ul>
                    <li>Audit des processus automatisables</li>
                    <li>Intégration IA dans vos outils quotidiens</li>
                    <li>Création de workflows IA sur-mesure</li>
                    <li>Formation personnalisée par métier</li>
                    <li>ROI et mesure de performance</li>
                </ul>
                <div class="price-tag">100€/heure</div>
            </div>
        </div>
    </div>
</section>

<!-- Formats de formation -->
<section class="service-formats">
    <div class="container">
        <div class="section-header">
            <h2>Formats de Formation</h2>
        </div>
        <div class="formats-grid">
            <div class="format-card">
                <h3>Atelier Découverte</h3>
                <p class="duration">2 heures</p>
                <p>Introduction aux IA génératives et cas d'usage pratiques pour votre métier</p>
                <div class="price">180€</div>
            </div>
            <div class="format-card">
                <h3>Formation Demi-Journée</h3>
                <p class="duration">4 heures</p>
                <p>Approfondissement sur un type d'IA (code, images ou textes) avec exercices pratiques</p>
                <div class="price">360€</div>
            </div>
            <div class="format-card">
                <h3>Formation Complète</h3>
                <p class="duration">1-2 jours</p>
                <p>Maîtrise complète des IA génératives avec cas pratiques sur vos projets</p>
                <div class="price">Sur devis</div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="service-certification">
    <div class="container">
        <div class="cert-content">
            <div class="cert-icon">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
            </div>
            <div class="cert-text">
                <h3>Formateur Certifié</h3>
                <p>
                    Certification CDUI (Conception et Développement d'Unités d'Instruction) – 
                    Expertise reconnue en ingénierie pédagogique et formation professionnelle
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="service-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Prêt à maîtriser les IA génératives ?</h2>
            <p>Planifions ensemble votre formation sur-mesure</p>
            <a href="#contact" class="btn btn-primary btn-lg">Prendre rendez-vous</a>
        </div>
    </div>
</section>
@endsection
