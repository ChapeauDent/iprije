<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'tags',
        'meta_description',
        'is_published',
        'published_at',
        'views_count',
        'reading_time',
        // Champs GEO
        'schema_type',
        'meta_title',
        'open_graph',
        'canonical_url',
        'author_name',
        'author_bio',
        'author_url',
        'breadcrumb_schema',
        'faq_schema',
        'how_to_schema',
        'content_markdown',
        'last_reviewed_date'
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'open_graph' => 'array',
        'breadcrumb_schema' => 'array',
        'faq_schema' => 'array',
        'how_to_schema' => 'array',
        'last_reviewed_date' => 'datetime',
    ];

    /**
     * Génère automatiquement le slug à partir du titre
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            
            // Conversion Markdown en HTML si nécessaire
            if (!empty($post->content_markdown) && empty($post->content)) {
                $post->content = static::markdownToHtml($post->content_markdown);
            }
            
            // Calcul automatique du temps de lecture (environ 200 mots/minute)
            if (empty($post->reading_time)) {
                $wordCount = str_word_count(strip_tags($post->content));
                $post->reading_time = max(1, ceil($wordCount / 200));
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('title') && empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            
            // Conversion Markdown en HTML si le markdown a changé
            if ($post->isDirty('content_markdown') && !empty($post->content_markdown)) {
                $post->content = static::markdownToHtml($post->content_markdown);
            }
            
            if ($post->isDirty('content')) {
                $wordCount = str_word_count(strip_tags($post->content));
                $post->reading_time = max(1, ceil($wordCount / 200));
            }
        });
    }

    /**
     * Convertit le Markdown en HTML
     */
    protected static function markdownToHtml($markdown)
    {
        $converter = new \League\CommonMark\CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        
        return $converter->convert($markdown)->getContent();
    }

    /**
     * Scope pour récupérer uniquement les articles publiés
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc');
    }

    /**
     * Scope pour filtrer par catégorie
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope pour recherche
     */
    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('excerpt', 'like', "%{$search}%")
              ->orWhere('content', 'like', "%{$search}%");
        });
    }

    /**
     * Accesseur pour l'URL de l'article
     */
    public function getUrlAttribute()
    {
        return route('blog.show', $this->slug);
    }

    /**
     * Accesseur pour la date formatée
     */
    public function getFormattedDateAttribute()
    {
        return $this->published_at?->format('d/m/Y') ?? $this->created_at->format('d/m/Y');
    }

    /**
     * Incrémente le compteur de vues
     */
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    /**
     * Récupère les articles les plus récents
     */
    public static function latestPublished($limit = 5)
    {
        return static::published()->limit($limit)->get();
    }

    /**
     * Récupère les articles populaires
     */
    public static function popular($limit = 5)
    {
        return static::published()
                    ->orderBy('views_count', 'desc')
                    ->limit($limit)
                    ->get();
    }
}
