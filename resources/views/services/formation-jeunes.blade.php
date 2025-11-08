@extends('layouts.site')

@section('title', 'Formation des Jeunes - IPRIJ')
@section('meta_description', 'Ateliers IA, Programmation et Robotique pour les 8-18 ans. Apprentissage ludique et créatif des technologies du futur.')

@push('meta')
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": ["Service", "EducationalOrganization"],
  "name": "Formation des Jeunes - Ateliers Technologie",
  "description": "Accompagnement des jeunes de 8 à 18 ans dans l'apprentissage des technologies du futur : intelligence artificielle, programmation et robotique. Ateliers ludiques et créatifs développant la logique, la créativité et les compétences numériques essentielles.",
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
  "serviceType": "Formation jeunesse technologie",
  "educationalCredentialAwarded": "Certification CDUI formateur",
  "offers": [
    {
      "@type": "Offer",
      "name": "Atelier Découverte",
      "description": "Initiation à un thème (IA, Code ou Robotique), 2 heures, groupe 4-8 jeunes",
      "price": "35",
      "priceCurrency": "EUR",
      "priceSpecification": {
        "@type": "PriceSpecification",
        "price": "35",
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
      "name": "Stage Vacances",
      "description": "Projet complet sur un thème au choix, 3 jours (2h/jour), groupe 4-8 jeunes",
      "price": "95",
      "priceCurrency": "EUR",
      "priceSpecification": {
        "@type": "PriceSpecification",
        "price": "95",
        "priceCurrency": "EUR",
        "eligibleDuration": {
          "@type": "QuantitativeValue",
          "value": "6",
          "unitText": "HOUR"
        }
      }
    },
    {
      "@type": "Offer",
      "name": "Cours Réguliers",
      "description": "Progression sur l'année scolaire, 1h30/semaine, groupe 4-6 jeunes",
      "price": "120",
      "priceCurrency": "EUR",
      "priceSpecification": {
        "@type": "UnitPriceSpecification",
        "price": "120",
        "priceCurrency": "EUR",
        "unitText": "MONTH"
      }
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Ateliers Technologie Jeunes",
    "itemListElement": [
      {
        "@type": "Course",
        "name": "Atelier Intelligence Artificielle",
        "description": "Découverte IA génératives (ChatGPT, DALL-E). Création images avec IA. Prompt engineering jeunes. Projets créatifs : histoires, BD, vidéos. Éthique et responsabilité numérique.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Collège/Lycée",
        "typicalAgeRange": "12-18",
        "audience": {
          "@type": "EducationalAudience",
          "educationalRole": "student",
          "audienceType": "Adolescents"
        },
        "teaches": "Intelligence Artificielle et créativité numérique"
      },
      {
        "@type": "Course",
        "name": "Atelier Programmation",
        "description": "Scratch : programmation visuelle ludique (8-12 ans). Python : premiers pas en code (12-15 ans). Création jeux vidéo simples. Développement web HTML/CSS (14-18 ans). Projets personnels accompagnés.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Primaire/Collège/Lycée",
        "typicalAgeRange": "8-18",
        "audience": {
          "@type": "EducationalAudience",
          "educationalRole": "student",
          "audienceType": "Enfants et adolescents"
        },
        "teaches": "Programmation et création numérique",
        "programmingLanguage": ["Scratch", "Python", "HTML", "CSS"]
      },
      {
        "@type": "Course",
        "name": "Atelier Robotique",
        "description": "Découverte robotique éducative. Programmation robots (LEGO Mindstorms, micro:bit). Capteurs et actionneurs. Projets collaboratifs : défis robotiques. Introduction électronique.",
        "provider": {
          "@type": "Organization",
          "name": "IPRIJ"
        },
        "educationalLevel": "Collège",
        "typicalAgeRange": "10-18",
        "audience": {
          "@type": "EducationalAudience",
          "educationalRole": "student",
          "audienceType": "Pré-adolescents et adolescents"
        },
        "teaches": "Robotique et électronique"
      }
    ]
  },
  "knowsAbout": ["Intelligence Artificielle jeunes", "Programmation Scratch", "Python débutants", "Robotique éducative", "LEGO Mindstorms", "micro:bit", "Pédagogie numérique"],
  "audience": {
    "@type": "EducationalAudience",
    "educationalRole": "student",
    "audienceType": "Enfants et adolescents 8-18 ans"
  },
  "instructor": {
    "@type": "Person",
    "name": "Nicolas Raymond",
    "jobTitle": "Formateur certifié et pédagogue",
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Certification professionnelle",
      "name": "CDUI - Conception et Développement d'Unités d'Instruction"
    },
    "alumniOf": {
      "@type": "Organization",
      "name": "Institut du Cerveau",
      "description": "Background scientifique en neurosciences"
    }
  },
  "availableChannel": {
    "@type": "ServiceChannel",
    "availableLanguage": "fr",
    "serviceLocation": {
      "@type": "Place",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Vernon",
        "addressRegion": "Normandie",
        "addressCountry": "FR"
      }
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
      "name": "Formation des Jeunes",
      "item": "https://nicolasraymond.fr/services/formation-jeunes"
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
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
            </div>
            <h1>Formation des Jeunes</h1>
            <p class="service-tagline">Ateliers IA, Programmation et Robotique pour les 8-18 ans</p>
        </div>
    </div>
</section>

<!-- Description -->
<section class="service-intro">
    <div class="container">
        <div class="intro-content">
            <p class="lead">
                J'accompagne les jeunes de 8 à 18 ans dans la découverte et l'apprentissage des technologies 
                du futur : intelligence artificielle, programmation et robotique. Des ateliers ludiques et 
                créatifs qui développent la logique, la créativité et les compétences numériques essentielles.
            </p>
        </div>
    </div>
</section>

<!-- Ateliers -->
<section class="service-details">
    <div class="container">
        <div class="details-grid">
            <!-- IA -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 16v-4"/>
                        <path d="M12 8h.01"/>
                    </svg>
                </div>
                <h3>Atelier Intelligence Artificielle</h3>
                <p class="age-range">À partir de 12 ans</p>
                <ul>
                    <li>Découverte des IA génératives (ChatGPT, DALL-E)</li>
                    <li>Création d'images avec l'IA</li>
                    <li>Prompt engineering pour les jeunes</li>
                    <li>Projets créatifs : histoires, BD, vidéos</li>
                    <li>Éthique et responsabilité numérique</li>
                </ul>
            </div>

            <!-- Programmation -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <h3>Atelier Programmation</h3>
                <p class="age-range">À partir de 8 ans</p>
                <ul>
                    <li>Scratch : programmation visuelle ludique (8-12 ans)</li>
                    <li>Python : premiers pas en code (12-15 ans)</li>
                    <li>Création de jeux vidéo simples</li>
                    <li>Développement web (HTML/CSS) (14-18 ans)</li>
                    <li>Projets personnels accompagnés</li>
                </ul>
            </div>

            <!-- Robotique -->
            <div class="detail-card">
                <div class="detail-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="4" y="4" width="16" height="16" rx="2"/>
                        <rect x="9" y="9" width="6" height="6"/>
                        <line x1="9" y1="1" x2="9" y2="4"/>
                        <line x1="15" y1="1" x2="15" y2="4"/>
                        <line x1="9" y1="20" x2="9" y2="23"/>
                        <line x1="15" y1="20" x2="15" y2="23"/>
                        <line x1="20" y1="9" x2="23" y2="9"/>
                        <line x1="20" y1="14" x2="23" y2="14"/>
                        <line x1="1" y1="9" x2="4" y2="9"/>
                        <line x1="1" y1="14" x2="4" y2="14"/>
                    </svg>
                </div>
                <h3>Atelier Robotique</h3>
                <p class="age-range">À partir de 10 ans</p>
                <ul>
                    <li>Découverte de la robotique éducative</li>
                    <li>Programmation de robots (LEGO Mindstorms, micro:bit)</li>
                    <li>Capteurs et actionneurs</li>
                    <li>Projets collaboratifs : défis robotiques</li>
                    <li>Introduction à l'électronique</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Formats -->
<section class="service-formats">
    <div class="container">
        <div class="section-header">
            <h2>Formats d'Ateliers</h2>
        </div>
        <div class="formats-grid">
            <div class="format-card">
                <h3>Atelier Découverte</h3>
                <p class="duration">2 heures</p>
                <p>Initiation à un thème (IA, Code ou Robotique)</p>
                <div class="price">35€/jeune</div>
                <p class="format-detail">Groupe 4-8 jeunes</p>
            </div>
            <div class="format-card featured">
                <div class="badge">Recommandé</div>
                <h3>Stage Vacances</h3>
                <p class="duration">3 jours (2h/jour)</p>
                <p>Projet complet sur un thème au choix</p>
                <div class="price">95€/jeune</div>
                <p class="format-detail">Groupe 4-8 jeunes</p>
            </div>
            <div class="format-card">
                <h3>Cours Réguliers</h3>
                <p class="duration">1h30/semaine</p>
                <p>Progression sur l'année scolaire</p>
                <div class="price">120€/mois</div>
                <p class="format-detail">Groupe 4-6 jeunes</p>
            </div>
        </div>
    </div>
</section>

<!-- Pédagogie -->
<section class="service-pedagogy">
    <div class="container">
        <div class="section-header">
            <h2>Approche Pédagogique</h2>
        </div>
        <div class="pedagogy-content">
            <div class="pedagogy-grid">
                <div class="pedagogy-item">
                    <div class="pedagogy-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h4>Apprentissage Ludique</h4>
                    <p>Apprendre en s'amusant avec des projets concrets et motivants</p>
                </div>
                <div class="pedagogy-item">
                    <div class="pedagogy-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h4>Petits Groupes</h4>
                    <p>Maximum 8 jeunes pour un accompagnement personnalisé</p>
                </div>
                <div class="pedagogy-item">
                    <div class="pedagogy-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h4>À Son Rythme</h4>
                    <p>Progression adaptée au niveau et aux envies de chaque jeune</p>
                </div>
                <div class="pedagogy-item">
                    <div class="pedagogy-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <h4>Projets Concrets</h4>
                    <p>Création de jeux, sites web, robots : fierté du travail accompli</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certification formateur -->
<section class="service-certification">
    <div class="container">
        <div class="cert-content">
            <div class="cert-icon">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
            </div>
            <div class="cert-text">
                <h3>Formateur Certifié & Passionné</h3>
                <p>
                    <strong>Certification CDUI</strong> (Conception et Développement d'Unités d'Instruction) 
                    et <strong>background scientifique</strong> (Institut du Cerveau). Une approche pédagogique 
                    éprouvée pour transmettre ma passion des technologies aux jeunes générations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Infos pratiques -->
<section class="service-info">
    <div class="container">
        <div class="section-header">
            <h2>Informations Pratiques</h2>
        </div>
        <div class="info-grid">
            <div class="info-card">
                <h4>Lieu</h4>
                <p>Vernon et environs (30km)<br>Possibilité d'ateliers en ligne pour certains formats</p>
            </div>
            <div class="info-card">
                <h4>Matériel</h4>
                <p>Tout le matériel est fourni (ordinateurs, robots, tablettes)<br>Les projets restent accessibles après les ateliers</p>
            </div>
            <div class="info-card">
                <h4>Inscriptions</h4>
                <p>Places limitées à 8 jeunes par atelier<br>Réservation obligatoire</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="service-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Intéressé par les ateliers jeunes ?</h2>
            <p>Contactez-moi pour connaître les prochaines sessions et inscrire votre enfant</p>
            <a href="#contact" class="btn btn-primary btn-lg">Prendre contact</a>
        </div>
    </div>
</section>
@endsection
