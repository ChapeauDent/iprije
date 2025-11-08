<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ['Office 365 & Microsoft 365', 'Intelligence Artificielle', 'Développement Web', 'Stratégie Marketing', 'Sécurité', 'Collaboration', 'Pédagogie','Expérience de pensée'];
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content_markdown' => 'nullable',
            'content' => 'required_without:content_markdown',
            'featured_image' => 'nullable',
            'category' => 'required',
            'tags' => 'nullable',
            'meta_description' => 'nullable|max:160',
            'meta_title' => 'nullable|max:70',
            'schema_type' => 'required|in:Article,BlogPosting,HowTo,FAQPage',
            'canonical_url' => 'nullable|url',
            'author_name' => 'nullable',
            'author_bio' => 'nullable',
            'author_url' => 'nullable|url',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        // Traiter les tags
        if ($request->tags) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        }

        // Gérer le fichier Markdown uploadé
        if ($request->hasFile('markdown_file')) {
            $validated['content_markdown'] = file_get_contents($request->file('markdown_file')->getRealPath());
        }

        // Open Graph automatique si non fourni
        if (!$request->has('open_graph')) {
            $validated['open_graph'] = [
                'og:title' => $validated['meta_title'] ?? $validated['title'],
                'og:description' => $validated['meta_description'] ?? $validated['excerpt'],
                'og:image' => $validated['featured_image'] ?? null,
                'og:type' => 'article'
            ];
        }

        $post = Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Article créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = ['Office 365 & Microsoft 365', 'Intelligence Artificielle', 'Développement Web', 'Stratégie Marketing', 'Sécurité', 'Collaboration', 'Pédagogie', 'Expérience de pensée'];
        return view('admin.posts.create', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content_markdown' => 'nullable',
            'content' => 'required_without:content_markdown',
            'featured_image' => 'nullable',
            'category' => 'required',
            'tags' => 'nullable',
            'meta_description' => 'nullable|max:160',
            'meta_title' => 'nullable|max:70',
            'schema_type' => 'required|in:Article,BlogPosting,HowTo,FAQPage',
            'canonical_url' => 'nullable|url',
            'author_name' => 'nullable',
            'author_bio' => 'nullable',
            'author_url' => 'nullable|url',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        // Traiter les tags
        if ($request->tags) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        }

        // Gérer le fichier Markdown uploadé
        if ($request->hasFile('markdown_file')) {
            $validated['content_markdown'] = file_get_contents($request->file('markdown_file')->getRealPath());
        }

        // Open Graph automatique si non fourni
        if (!$request->has('open_graph')) {
            $validated['open_graph'] = [
                'og:title' => $validated['meta_title'] ?? $validated['title'],
                'og:description' => $validated['meta_description'] ?? $validated['excerpt'],
                'og:image' => $validated['featured_image'] ?? null,
                'og:type' => 'article'
            ];
        }

        // Mettre à jour la date de révision
        $validated['last_reviewed_date'] = now();

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Article mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Article supprimé avec succès');
    }
}
