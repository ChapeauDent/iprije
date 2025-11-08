<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Champs GEO pour le référencement
            $table->string('schema_type')->default('BlogPosting')->after('content'); // Article, BlogPosting, HowTo, FAQPage
            $table->string('meta_title')->nullable()->after('schema_type');
            $table->json('open_graph')->nullable()->after('meta_title'); // og:title, og:description, og:image, og:type
            $table->string('canonical_url')->nullable()->after('open_graph');
            
            // Informations auteur pour Schema.org
            $table->string('author_name')->nullable()->after('canonical_url');
            $table->text('author_bio')->nullable()->after('author_name');
            $table->string('author_url')->nullable()->after('author_bio');
            
            // Structured Data
            $table->json('breadcrumb_schema')->nullable()->after('author_url');
            $table->json('faq_schema')->nullable()->after('breadcrumb_schema');
            $table->json('how_to_schema')->nullable()->after('faq_schema');
            
            // Contenu Markdown original
            $table->longText('content_markdown')->nullable()->after('how_to_schema');
            
            // Date de révision
            $table->timestamp('last_reviewed_date')->nullable()->after('content_markdown');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
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
            ]);
        });
    }
};
