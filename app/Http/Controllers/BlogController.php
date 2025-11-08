<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Affiche la liste des articles du blog
     */
    public function index(Request $request)
    {
        $query = Post::published();

        // Filtrage par catégorie
        if ($request->has('category') && $request->category) {
            $query->byCategory($request->category);
        }

        // Recherche
        if ($request->has('search') && $request->search) {
            $query->search($request->search);
        }

        // Pagination
        $posts = $query->paginate(9);

        // Récupère toutes les catégories disponibles
        $categories = Post::published()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        // Articles populaires pour la sidebar
        $popularPosts = Post::popular(5);

        // Articles récents pour la sidebar
        $recentPosts = Post::latestPublished(5);

        return view('blog.index', compact('posts', 'categories', 'popularPosts', 'recentPosts'));
    }

    /**
     * Affiche un article individuel
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->where('published_at', '<=', now())
            ->firstOrFail();

        // Incrémenter le compteur de vues
        $post->incrementViews();

        // Articles similaires (même catégorie)
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->when($post->category, function($query) use ($post) {
                $query->byCategory($post->category);
            })
            ->limit(3)
            ->get();

        // Articles populaires pour la sidebar
        $popularPosts = Post::popular(5);

        return view('blog.show', compact('post', 'relatedPosts', 'popularPosts'));
    }
}
