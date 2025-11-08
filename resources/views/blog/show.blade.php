@extends('layouts.site')

@php
    use App\Helpers\GeoMetadata;
    $metaTags = GeoMetadata::generateAllMetaTags($post);
@endphp

@section('title', $metaTags['title'] . ' - Blog IPRIJ')
@section('meta_description', $metaTags['description'])

@push('meta')
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $metaTags['canonical'] }}">
    
    <!-- Meta Robots -->
    <meta name="robots" content="{{ $metaTags['robots'] }}">
    
    <!-- Open Graph -->
    @foreach($metaTags as $property => $content)
        @if(str_starts_with($property, 'og:') && $content)
            <meta property="{{ $property }}" content="{{ $content }}">
        @endif
    @endforeach
    
    <!-- Twitter Card -->
    @foreach($metaTags as $property => $content)
        @if(str_starts_with($property, 'twitter:') && $content)
            <meta name="{{ $property }}" content="{{ $content }}">
        @endif
    @endforeach
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {!! GeoMetadata::generateArticleSchema($post) !!}
    </script>
    
    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
        {!! GeoMetadata::generateBreadcrumbSchema($post) !!}
    </script>
@endpush

@section('content')

<!-- Article Header -->
<article class="blog-post">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span class="separator">›</span>
            <a href="{{ route('blog.index') }}">Blog</a>
            @if($post->category)
            <span class="separator">›</span>
            <a href="{{ route('blog.index', ['category' => $post->category]) }}">{{ $post->category }}</a>
            @endif
            <span class="separator">›</span>
            <span class="current">{{ $post->title }}</span>
        </nav>

        <div class="post-layout">
            <!-- Contenu principal -->
            <div class="post-main">
                <header class="post-header">
                    @if($post->category)
                    <span class="post-category">{{ $post->category }}</span>
                    @endif
                    <h1 class="post-title">{{ $post->title }}</h1>
                    
                    <div class="post-meta">
                        <span class="post-date">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3zm2 1.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            Publié le {{ $post->formatted_date }}
                        </span>
                        <span class="post-reading-time">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-13v5.5l4.24 2.55-.84 1.39L7 9.7V3h1.5z"/>
                            </svg>
                            {{ $post->reading_time }} min de lecture
                        </span>
                    </div>

                    @if($post->tags && count($post->tags) > 0)
                    <div class="post-tags">
                        @foreach($post->tags as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                    @endif
                </header>

                @if($post->featured_image)
                <div class="post-featured-image">
                    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}">
                </div>
                @endif

                @if($post->excerpt)
                <div class="post-excerpt">
                    <p><strong>{{ $post->excerpt }}</strong></p>
                </div>
                @endif

                <div class="post-content">
                    {!! $post->content !!}
                </div>

                <!-- Partage social -->
                <div class="post-share">
                    <h3>Partager cet article</h3>
                    <div class="share-buttons">
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode($post->url) }}" 
                           target="_blank" 
                           class="share-btn share-twitter">
                            Twitter
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($post->url) }}" 
                           target="_blank" 
                           class="share-btn share-linkedin">
                            LinkedIn
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->url) }}" 
                           target="_blank" 
                           class="share-btn share-facebook">
                            Facebook
                        </a>
                        <a href="mailto:?subject={{ urlencode($post->title) }}&body={{ urlencode('Découvrez cet article : ' . $post->url) }}" 
                           class="share-btn share-email">
                            Email
                        </a>
                    </div>
                </div>

                <!-- Articles similaires -->
                @if($relatedPosts->count() > 0)
                <div class="related-posts">
                    <h3>Articles similaires</h3>
                    <div class="related-posts-grid">
                        @foreach($relatedPosts as $relatedPost)
                        <div class="related-post-card">
                            @if($relatedPost->featured_image)
                            <div class="related-post-image">
                                <img src="{{ asset($relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}">
                            </div>
                            @endif
                            <div class="related-post-content">
                                <h4><a href="{{ $relatedPost->url }}">{{ $relatedPost->title }}</a></h4>
                                <p class="related-post-meta">{{ $relatedPost->formatted_date }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Navigation précédent/suivant -->
                <nav class="post-navigation">
                    @php
                        $prevPost = \App\Models\Post::published()
                            ->where('published_at', '<', $post->published_at)
                            ->orderBy('published_at', 'desc')
                            ->first();
                        $nextPost = \App\Models\Post::published()
                            ->where('published_at', '>', $post->published_at)
                            ->orderBy('published_at', 'asc')
                            ->first();
                    @endphp

                    @if($prevPost)
                    <a href="{{ $prevPost->url }}" class="nav-prev">
                        ← Article précédent<br>
                        <span>{{ $prevPost->title }}</span>
                    </a>
                    @endif

                    @if($nextPost)
                    <a href="{{ $nextPost->url }}" class="nav-next">
                        Article suivant →<br>
                        <span>{{ $nextPost->title }}</span>
                    </a>
                    @endif
                </nav>
            </div>

            <!-- Sidebar -->
            <aside class="post-sidebar">
                <!-- CTA Contact -->
                <div class="sidebar-widget sidebar-cta">
                    <h3>Besoin d'accompagnement ?</h3>
                    <p>Nous pouvons vous aider dans votre transformation numérique.</p>
                    <a href="/contact" class="btn btn-primary">Prendre rendez-vous</a>
                </div>

                <!-- Retour au blog -->
                <div class="sidebar-widget">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline">← Tous les articles</a>
                </div>
            </aside>
        </div>
    </div>
</article>

@endsection
