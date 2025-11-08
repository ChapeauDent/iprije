<?php

namespace App\Helpers;

class ServiceMetadata
{
    /**
     * Génère les données Organization complètes pour Schema.org
     */
    public static function getOrganizationSchema(): array
    {
        return [
            "@type" => "Organization",
            "name" => "IPRIJ",
            "url" => "https://nicolasraymond.fr",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://nicolasraymond.fr/images/logo.svg"
            ],
            "description" => "Architecte de solutions numériques et formateur spécialisé en transformation digitale",
            "email" => "nicolasraymond@iprij.com",
            "telephone" => "+33-6-XX-XX-XX-XX",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "",
                "addressLocality" => "Vernon",
                "postalCode" => "27200",
                "addressRegion" => "Normandie",
                "addressCountry" => "FR"
            ],
            "areaServed" => [
                [
                    "@type" => "City",
                    "name" => "Vernon",
                    "containedIn" => [
                        "@type" => "AdministrativeArea",
                        "name" => "Normandie"
                    ]
                ],
                [
                    "@type" => "AdministrativeArea",
                    "name" => "Normandie"
                ],
                [
                    "@type" => "AdministrativeArea",
                    "name" => "Île-de-France"
                ],
                [
                    "@type" => "Country",
                    "name" => "France"
                ]
            ],
            "founder" => [
                "@type" => "Person",
                "name" => "Nicolas Raymond",
                "jobTitle" => "Architecte de Solutions Numériques & Formateur IA",
                "url" => "https://nicolasraymond.fr"
            ],
            "sameAs" => [
                "https://www.linkedin.com/in/nicolas-raymond-iprij/",
                "https://github.com/nicolasraymond"
            ]
        ];
    }

    /**
     * Génère le schéma LocalBusiness pour améliorer le GEO
     */
    public static function getLocalBusinessSchema(): array
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => "IPRIJ",
            "image" => "https://nicolasraymond.fr/images/logo.svg",
            "description" => "Conseil en transformation digitale, développement web GEO, formation IA et accompagnement Office 365 pour TPE/PME",
            "url" => "https://nicolasraymond.fr",
            "email" => "nicolasraymond@iprij.com",
            "telephone" => "+33-6-XX-XX-XX-XX",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "",
                "addressLocality" => "Vernon",
                "postalCode" => "27200",
                "addressRegion" => "Normandie",
                "addressCountry" => "FR"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => "49.0933",
                "longitude" => "1.4844"
            ],
            "areaServed" => [
                [
                    "@type" => "City",
                    "name" => "Vernon"
                ],
                [
                    "@type" => "AdministrativeArea",
                    "name" => "Normandie"
                ],
                [
                    "@type" => "AdministrativeArea",
                    "name" => "Île-de-France"
                ],
                [
                    "@type" => "Country",
                    "name" => "France"
                ]
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens" => "09:00",
                    "closes" => "18:00"
                ]
            ],
            "priceRange" => "€€",
            "founder" => [
                "@type" => "Person",
                "name" => "Nicolas Raymond",
                "jobTitle" => "Architecte de Solutions Numériques & Formateur IA"
            ]
        ];
    }

    /**
     * Génère le schéma Service avec l'organization complète
     */
    public static function generateServiceSchema(array $serviceData): string
    {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => $serviceData['type'] ?? "Service",
            "name" => $serviceData['name'],
            "description" => $serviceData['description'],
            "provider" => static::getOrganizationSchema(),
            "serviceType" => $serviceData['serviceType'] ?? null,
            "offers" => $serviceData['offers'] ?? [],
        ];

        // Ajouter hasOfferCatalog si disponible
        if (isset($serviceData['hasOfferCatalog'])) {
            $schema['hasOfferCatalog'] = $serviceData['hasOfferCatalog'];
        }

        // Ajouter audience si disponible
        if (isset($serviceData['audience'])) {
            $schema['audience'] = $serviceData['audience'];
        }

        // Ajouter additionalType si disponible
        if (isset($serviceData['additionalType'])) {
            $schema['additionalType'] = $serviceData['additionalType'];
        }

        // Ajouter knowsAbout si disponible
        if (isset($serviceData['knowsAbout'])) {
            $schema['knowsAbout'] = $serviceData['knowsAbout'];
        }

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Génère le Breadcrumb Schema.org pour une page service
     */
    public static function generateBreadcrumbSchema(string $serviceName, string $serviceSlug): string
    {
        $breadcrumb = [
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Accueil",
                    "item" => route('home')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Services",
                    "item" => route('home') . '#services'
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $serviceName,
                    "item" => route('services.' . $serviceSlug)
                ]
            ]
        ];

        return json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
