@extends('layouts.site')

@section('title', 'IPRIJE - Intelligence Artificielle & Programmation par le Jeu | Formation & Solutions')
@section('meta_description', 'IPRIJE : Intelligence Artificielle, Programmation, Robotique, Initié par le Jeu. Solutions innovantes pour Entreprises et Écoles. Vernon, Normandie, France.')

@push('meta')
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "IPRIJE",
  "url": "https://nicolasraymond.fr",
  "logo": {
    "@type": "ImageObject",
    "url": "https://nicolasraymond.fr/images/logo.svg"
  },
  "description": "IPRIJE : Intelligence Artificielle, Programmation, Robotique, Initié par le Jeu. Solutions innovantes et formations pour Entreprises et Écoles par la pédagogie ludique.",
  "email": "nicolasraymond@iprije.com",
  "telephone": "+33-6-XX-XX-XX-XX",
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
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Services IPRIJ",
    "itemListElement": [
      {
        "@type": "OfferCatalog",
        "name": "Office 365 Business + IA",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Package STARTUP",
              "description": "Audit, architecture Microsoft 365, installation complète et formation 2 sessions pour TPE 1-5 salariés",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "2500",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/office-365-business"
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Package CROISSANCE",
              "description": "Audit complet, architecture Microsoft 365 avec intégrations, formation équipes (4 sessions) et accompagnement 3 mois pour PME 6-20 salariés",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "4500",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/office-365-business"
          }
        ]
      },
      {
        "@type": "OfferCatalog",
        "name": "Création Web & Apps GEO",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Site Vitrine",
              "description": "Design professionnel, 5-7 pages optimisées GEO/SEO, responsive mobile, formation gestion",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "2000",
              "priceCurrency": "EUR"
            },
            "url": "https://nicolasraymond.fr/services/creation-web-apps"
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Site Pro + GEO",
              "description": "Design System complet, architecture optimisée, optimisation GEO avancée, blog intégré, formation complète, support 3 mois",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "4500",
              "priceCurrency": "EUR"
            },
            "url": "https://nicolasraymond.fr/services/creation-web-apps"
          }
        ]
      },
      {
        "@type": "OfferCatalog",
        "name": "Stratégie Marketing & Design System",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Audit Stratégique",
              "description": "Analyse marché et concurrence, audit positionnement actuel, recommandations stratégiques",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "1500",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/strategie-marketing"
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Accompagnement Complet",
              "description": "Stratégie marketing complète, Design System et charte graphique, plan d'action 6 mois",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "4500",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/strategie-marketing"
          }
        ]
      },
      {
        "@type": "OfferCatalog",
        "name": "Formation IA Génératives",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Atelier Découverte",
              "description": "Introduction aux IA génératives et cas d'usage pratiques, 2 heures",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "180",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/formation-ia"
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Formation Complète",
              "description": "Programme complet 3 jours : IA Code, IA Images, IA Textes, prompt engineering avancé",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "1800",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/formation-ia"
          }
        ]
      },
      {
        "@type": "OfferCatalog",
        "name": "Formation des Jeunes",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Atelier Découverte Jeunes",
              "description": "Initiation à un thème (IA, Code ou Robotique), 2 heures, groupe 4-8 jeunes",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "35",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/formation-jeunes"
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Stage Vacances",
              "description": "Programme intensif 5 jours sur un thème (IA, Programmation ou Robotique)",
              "provider": {
                "@type": "Organization",
                "name": "IPRIJE"
              }
            },
            "price": "350",
            "priceCurrency": "EUR",
            "url": "https://nicolasraymond.fr/services/formation-jeunes"
          }
        ]
      }
    ]
  },
  "priceRange": "€€",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "18:00"
    }
  ]
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
    }
  ]
}
@endverbatim
</script>
@endpush

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="highlight">Intelligence Artificielle</span> & Programmation par le Jeu
                </h1>
                <p class="hero-subtitle">
                    <strong>IPRIJE</strong> : Intelligence Artificielle, Programmation, Robotique, Initié par le Jeu.<br>
                    Solutions innovantes et formations ludiques pour <strong>Entreprises</strong> et <strong>Écoles</strong>.
                </p>
                <div class="hero-cta">
                    <a href="#services" class="btn btn-outline btn-lg">Découvrir mes Services</a>
                    <a href="/contact" class="btn btn-primary btn-lg">
                        On prend un café ?
                        <img src="{{ asset('images/tasse_cafe.svg') }}" alt="Café" class="btn-icon">
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <!-- Logo IPRIJ -->
                <div class="logo-animation">
                    <img src="{{ asset('images/logo.svg') }}" alt="IPRIJ Logo" class="animated-logo-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Aperçu -->
<section id="services" class="services-overview">
    <div class="container">
        <div class="section-header">
            <h2>Nos Solutions IPRIJE</h2>
            <p>Intelligence Artificielle et Programmation par le Jeu - Pour Entreprises et Écoles</p>
        </div>
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-image">
                    <img src="{{ $service['image'] }}" alt="{{ $service['alt'] }}" loading="lazy">
                    <div class="service-overlay"></div>
                </div>
                <div class="service-content">
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                    <a href="{{ $service['link'] }}" class="service-link">En savoir plus →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Approche méthodologique -->
<section class="methodology">
    <div class="container">
        <div class="section-header">
            <h2>Notre Approche Ludique</h2>
            <p>Apprendre par le jeu : une méthode innovante pour maîtriser l'IA et la programmation</p>
        </div>
        <div class="methodology-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Audit & Diagnostic</h3>
                <p>Analyse de votre existant, besoins et objectifs</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Stratégie & Planning</h3>
                <p>Définition de la stratégie et architecture de solution</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Mise en Place</h3>
                <p>Déploiement technique et optimisation IA</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Formation</h3>
                <p>Formation pratique de vos équipes aux outils</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step">
                <div class="step-number">5</div>
                <h3>Accompagnement</h3>
                <p>Support continu et optimisation</p>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi IPRIJ -->
<section class="why-iprij">
    <div class="container-fluid px-0">
        <div class="section-header">
            <h2>Pourquoi choisir IPRIJ ?</h2>
        </div>
        <div class="features-slanted-grid">
            @foreach($features as $feature)
            <div class="feature-slanted-item">
                <img src="{{ $feature['image'] }}" alt="{{ $feature['alt'] }}" class="feature-background">
                <div class="feature-overlay"></div>
                <div class="feature-content">
                    <h3 class="feature-title">{{ $feature['title'] }}</h3>
                    <div class="feature-hover-content">
                        <p class="feature-short">{{ $feature['short_description'] }}</p>
                        <p class="feature-detailed">{{ $feature['detailed_description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Zone d'intervention -->
<section class="zone-intervention">
    <div class="container">
        <div class="section-header">
            <h2>Zone d'intervention</h2>
        </div>
        <div class="zones-grid">
            <div class="zone-card">
                <div class="zone-header">
                    <img src="{{ asset('images/zones/normandie.svg') }}" alt="Normandie" class="zone-icon">
                    <h3>Local</h3>
                </div>
                <p><strong>Vernon et environs</strong></p>
                <p>Interventions sur site pour un accompagnement personnalisé</p>
            </div>
            <div class="zone-card">
                <div class="zone-header">
                    <img src="{{ asset('images/zones/normandie.svg') }}" alt="Normandie" class="zone-icon">
                    <img src="{{ asset('images/zones/ile-de-france.svg') }}" alt="Île-de-France" class="zone-icon">
                    <h3>Régional</h3>
                </div>
                <p><strong>Normandie & Île-de-France</strong></p>
                <p>Mixte présentiel et distanciel selon vos besoins</p>
            </div>
            <div class="zone-card">
                <div class="zone-header">
                    <img src="{{ asset('images/zones/france.svg') }}" alt="France" class="zone-icon">
                    <h3>National</h3>
                </div>
                <p><strong>France entière</strong></p>
                <p>Accompagnement 100% distanciel, aussi efficace que sur site</p>
            </div>
        </div>
    </div>
</section>


<!-- Articles Récents du Blog -->
<section class="recent-blog">
    <div class="container">
        <div class="section-header">
            <h2>Derniers Articles</h2>
            <p>Découvrez nos réflexions sur la transformation digitale et l'intelligence artificielle</p>
        </div>
        @if($recentPosts->count() > 0)
        <div class="blog-grid">
            @foreach($recentPosts as $post)
            <article class="blog-card">
                @if($post->featured_image)
                <div class="blog-card-image">
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <img src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                    </a>
                    <div class="blog-card-overlay"></div>
                </div>
                @endif
                <div class="blog-card-content">
                    @if($post->category)
                    <span class="blog-card-category">{{ $post->category }}</span>
                    @endif
                    <h3 class="blog-card-title">
                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="blog-card-excerpt">{{ $post->excerpt }}</p>
                    <div class="blog-card-meta">
                        <span class="blog-card-date">
                            <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3zm2 1.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            {{ $post->published_at ? $post->published_at->format('d/m/Y') : $post->created_at->format('d/m/Y') }}
                        </span>
                        @if($post->reading_time)
                        <span class="blog-card-reading-time">
                            <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-13v5.5l4.24 2.55-.84 1.39L7 9.7V3h1.5z"/>
                            </svg>
                            {{ $post->reading_time }} min
                        </span>
                        @endif
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}" class="blog-card-link">Lire la suite →</a>
                </div>
            </article>
            @endforeach
        </div>
        <div class="blog-cta">
            <a href="{{ route('blog.index') }}" class="btn btn-outline btn-lg">Découvrir le Blog</a>
        </div>
        @else
        <p class="text-center">Aucun article disponible pour le moment.</p>
        @endif
    </div>
</section>

<!-- Call-to-Action Final -->
<section class="cta-final">
    <div class="container">
        <div class="cta-content">
            <h2>Transformons votre entreprise digitale ensemble</h2>
            <p>Premier audit gratuit de 1h - 1h30  pour analyser vos besoins et définir la meilleure stratégie</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-primary btn-lg">
                    On prend un café ?
                    <img src="{{ asset('images/tasse_cafe.svg') }}" alt="Café" class="btn-icon">
                </a>
            </div>
            <div class="cta-contact">
                <p>
                    <strong>Email :</strong> <a href="mailto:contact@iprije.fr">contact@iprije.fr</a> | 
                    <strong>Zone :</strong> Vernon, Normandie, Île-de-France, National (distanciel)
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
