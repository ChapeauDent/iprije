<?php

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Support\Str;

class GeoMetadata
{
    /**
     * Génère le JSON-LD Schema.org pour un article
     */
    public static function generateArticleSchema(Post $post): string
    {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => $post->schema_type,
            "headline" => $post->meta_title ?? $post->title,
            "description" => $post->meta_description ?? $post->excerpt,
            "datePublished" => $post->published_at?->toIso8601String() ?? $post->created_at->toIso8601String(),
            "dateModified" => $post->updated_at->toIso8601String(),
        ];

        // Ajouter l'image uniquement si elle est publiquement accessible
        if ($post->featured_image && static::isPublicUrl($post->featured_image)) {
            $schema["image"] = $post->featured_image;
        }

        // Date de révision si disponible
        if ($post->last_reviewed_date) {
            $schema["dateReviewed"] = $post->last_reviewed_date->toIso8601String();
        }

        // Informations auteur
        if ($post->author_name) {
            $schema["author"] = [
                "@type" => "Person",
                "name" => $post->author_name,
                "url" => $post->author_url ?? "https://nicolasraymond.fr",
            ];

            if ($post->author_bio) {
                $schema["author"]["description"] = $post->author_bio;
            }
        }

        // Publisher (organisation)
        $schema["publisher"] = [
            "@type" => "Organization",
            "name" => "IPRIJ",
            "url" => "https://nicolasraymond.fr",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://nicolasraymond.fr/images/logo.svg"
            ],
            "description" => "Architecte de solutions numériques et formateur spécialisé en transformation digitale",
            "email" => "nicolasraymond@iprij.com",
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

        // Temps de lecture
        if ($post->reading_time) {
            $schema["timeRequired"] = "PT{$post->reading_time}M";
        }

        // Mots-clés (tags)
        if ($post->tags) {
            $schema["keywords"] = implode(', ', $post->tags);
        }

        // URL canonique
        $schema["mainEntityOfPage"] = [
            "@type" => "WebPage",
            "@id" => $post->canonical_url ?? route('blog.show', $post->slug)
        ];

        // Breadcrumb si disponible
        if ($post->breadcrumb_schema) {
            // Le breadcrumb sera ajouté séparément
        }

        // FAQ Schema si disponible
        if ($post->faq_schema && $post->schema_type === 'FAQPage') {
            $schema["mainEntity"] = $post->faq_schema;
        }

        // HowTo Schema si disponible
        if ($post->how_to_schema && $post->schema_type === 'HowTo') {
            $schema = array_merge($schema, $post->how_to_schema);
        }

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Génère le Breadcrumb Schema.org
     */
    public static function generateBreadcrumbSchema(Post $post): string
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
                    "name" => "Blog",
                    "item" => route('blog.index')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $post->category,
                    "item" => route('blog.index', ['category' => $post->category])
                ],
                [
                    "@type" => "ListItem",
                    "position" => 4,
                    "name" => $post->title,
                    "item" => route('blog.show', $post->slug)
                ]
            ]
        ];

        return json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Génère les balises Open Graph
     */
    public static function generateOpenGraphTags(Post $post): array
    {
        $openGraph = $post->open_graph ?? [];

        $tags = [
            'og:title' => $openGraph['og:title'] ?? $post->meta_title ?? $post->title,
            'og:description' => $openGraph['og:description'] ?? $post->meta_description ?? $post->excerpt,
            'og:type' => $openGraph['og:type'] ?? 'article',
            'og:url' => $post->canonical_url ?? route('blog.show', $post->slug),
            'og:site_name' => 'IPRIJ',
            'article:published_time' => $post->published_at?->toIso8601String(),
            'article:modified_time' => $post->updated_at->toIso8601String(),
            'article:author' => $post->author_name ?? 'Nicolas Raymond',
            'article:section' => $post->category,
            'article:tag' => $post->tags ? implode(', ', $post->tags) : null,
        ];

        // Ajouter l'image uniquement si elle est publiquement accessible
        $imageUrl = $openGraph['og:image'] ?? $post->featured_image;
        if (static::isPublicUrl($imageUrl)) {
            $tags['og:image'] = $imageUrl;
        }

        return $tags;
    }

    /**
     * Génère les balises Twitter Card
     */
    public static function generateTwitterCardTags(Post $post): array
    {
        $tags = [
            'twitter:card' => 'summary_large_image',
            'twitter:title' => $post->meta_title ?? $post->title,
            'twitter:description' => $post->meta_description ?? $post->excerpt,
            'twitter:creator' => '@nicolasraymond',
            'twitter:site' => '@IPRIJ',
        ];

        // Ajouter l'image uniquement si elle est publiquement accessible
        if (static::isPublicUrl($post->featured_image)) {
            $tags['twitter:image'] = $post->featured_image;
        }

        return $tags;
    }

    /**
     * Génère toutes les balises meta pour le <head>
     */
    public static function generateAllMetaTags(Post $post): array
    {
        return array_merge(
            [
                'title' => $post->meta_title ?? $post->title,
                'description' => $post->meta_description ?? $post->excerpt,
                'canonical' => $post->canonical_url ?? route('blog.show', $post->slug),
                'robots' => $post->is_published ? 'index, follow' : 'noindex, nofollow',
            ],
            static::generateOpenGraphTags($post),
            static::generateTwitterCardTags($post)
        );
    }

    /**
     * Vérifie si une URL est publiquement accessible (pas localhost/test)
     */
    private static function isPublicUrl(?string $url): bool
    {
        if (!$url) {
            return false;
        }

        // URLs relatives ne sont pas publiques
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return false;
        }

        // Exclure les domaines locaux
        $localDomains = ['localhost', '127.0.0.1', '.test', '.local', '.dev'];
        foreach ($localDomains as $localDomain) {
            if (str_contains($url, $localDomain)) {
                return false;
            }
        }

        return true;
    }
}
