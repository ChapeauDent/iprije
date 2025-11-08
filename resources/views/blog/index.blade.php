@extends('layouts.site')

@section('title', 'Blog IPRIJ - Actualités et Conseils Numériques')
@section('meta_description', 'Découvrez nos articles sur Microsoft 365, Google Workspace, l\'Intelligence Artificielle et la transformation numérique des entreprises.')

@section('content')

<!-- Header Blog -->
<section class="blog-header">
    <div class="container">
        <h1>Blog IPRIJ</h1>
        <p>Actualités, conseils et bonnes pratiques pour votre transformation numérique</p>
    </div>
</section>

<!-- Barre de recherche et filtres -->
<section class="blog-filters">
    <div class="container">
        <div class="filters-wrapper">
            <!-- Recherche -->
            <form action="{{ route('blog.index') }}" method="GET" class="search-form">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Rechercher un article..." 
                    value="{{ request('search') }}"
                    class="search-input"
                >
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>

            <!-- Filtres par catégorie -->
            @if($categories->count() > 0)
            <div class="category-filters">
                <a href="{{ route('blog.index') }}" 
                   class="category-tag {{ !request('category') ? 'active' : '' }}">
                    Tous
                </a>
                @foreach($categories as $category)
                <a href="{{ route('blog.index', ['category' => $category]) }}" 
                   class="category-tag {{ request('category') == $category ? 'active' : '' }}">
                    {{ $category }}
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Contenu principal -->
<section class="blog-content">
    <div class="container">
        <div class="blog-layout">
            <!-- Articles -->
            <div class="blog-main">
                @if($posts->count() > 0)
                <div class="posts-grid">
                    @foreach($posts as $post)
                    <article class="post-card">
                        @if($post->featured_image)
                        <div class="post-image">
                            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}">
                        </div>
                        @endif
                        <div class="post-content">
                            @if($post->category)
                            <span class="post-category">{{ $post->category }}</span>
                            @endif
                            <h2 class="post-title">
                                <a href="{{ $post->url }}">{{ $post->title }}</a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3zm2 1.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    {{ $post->formatted_date }}
                                </span>
                                <span class="post-reading-time">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-13v5.5l4.24 2.55-.84 1.39L7 9.7V3h1.5z"/>
                                    </svg>
                                    {{ $post->reading_time }} min
                                </span>
                            </div>
                            @if($post->excerpt)
                            <p class="post-excerpt">{{ $post->excerpt }}</p>
                            @endif
                            <a href="{{ $post->url }}" class="read-more">Lire la suite →</a>
                        </div>
                    </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper">
                    {{ $posts->links() }}
                </div>
                @else
                <div class="no-posts">
                    <p>Aucun article trouvé.</p>
                    @if(request('search') || request('category'))
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">Voir tous les articles</a>
                    @endif
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- Articles récents -->
                @if($recentPosts->count() > 0)
                <div class="sidebar-widget">
                    <h3>Articles récents</h3>
                    <ul class="sidebar-posts">
                        @foreach($recentPosts as $recentPost)
                        <li>
                            <a href="{{ $recentPost->url }}">
                                <span class="sidebar-post-title">{{ $recentPost->title }}</span>
                                <span class="sidebar-post-meta">{{ $recentPost->formatted_date }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- CTA Newsletter (optionnel) -->
                <div class="sidebar-widget sidebar-cta">
                    <h3>Restons connectés</h3>
                    <p>Recevez nos derniers articles et conseils directement par email.</p>
                    <a href="/contact" class="btn btn-primary">Nous contacter</a>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
