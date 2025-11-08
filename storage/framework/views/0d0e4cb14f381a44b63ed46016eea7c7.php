

<?php
    use App\Helpers\GeoMetadata;
    $metaTags = GeoMetadata::generateAllMetaTags($post);
?>

<?php $__env->startSection('title', $metaTags['title'] . ' - Blog IPRIJ'); ?>
<?php $__env->startSection('meta_description', $metaTags['description']); ?>

<?php $__env->startPush('meta'); ?>
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo e($metaTags['canonical']); ?>">
    
    <!-- Meta Robots -->
    <meta name="robots" content="<?php echo e($metaTags['robots']); ?>">
    
    <!-- Open Graph -->
    <?php $__currentLoopData = $metaTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(str_starts_with($property, 'og:') && $content): ?>
            <meta property="<?php echo e($property); ?>" content="<?php echo e($content); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <!-- Twitter Card -->
    <?php $__currentLoopData = $metaTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(str_starts_with($property, 'twitter:') && $content): ?>
            <meta name="<?php echo e($property); ?>" content="<?php echo e($content); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        <?php echo GeoMetadata::generateArticleSchema($post); ?>

    </script>
    
    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
        <?php echo GeoMetadata::generateBreadcrumbSchema($post); ?>

    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- Article Header -->
<article class="blog-post">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a href="<?php echo e(route('home')); ?>">Accueil</a>
            <span class="separator">›</span>
            <a href="<?php echo e(route('blog.index')); ?>">Blog</a>
            <?php if($post->category): ?>
            <span class="separator">›</span>
            <a href="<?php echo e(route('blog.index', ['category' => $post->category])); ?>"><?php echo e($post->category); ?></a>
            <?php endif; ?>
            <span class="separator">›</span>
            <span class="current"><?php echo e($post->title); ?></span>
        </nav>

        <div class="post-layout">
            <!-- Contenu principal -->
            <div class="post-main">
                <header class="post-header">
                    <?php if($post->category): ?>
                    <span class="post-category"><?php echo e($post->category); ?></span>
                    <?php endif; ?>
                    <h1 class="post-title"><?php echo e($post->title); ?></h1>
                    
                    <div class="post-meta">
                        <span class="post-date">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3zm2 1.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            Publié le <?php echo e($post->formatted_date); ?>

                        </span>
                        <span class="post-reading-time">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-13v5.5l4.24 2.55-.84 1.39L7 9.7V3h1.5z"/>
                            </svg>
                            <?php echo e($post->reading_time); ?> min de lecture
                        </span>
                    </div>

                    <?php if($post->tags && count($post->tags) > 0): ?>
                    <div class="post-tags">
                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="tag"><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </header>

                <?php if($post->featured_image): ?>
                <div class="post-featured-image">
                    <img src="<?php echo e(asset($post->featured_image)); ?>" alt="<?php echo e($post->title); ?>">
                </div>
                <?php endif; ?>

                <?php if($post->excerpt): ?>
                <div class="post-excerpt">
                    <p><strong><?php echo e($post->excerpt); ?></strong></p>
                </div>
                <?php endif; ?>

                <div class="post-content">
                    <?php echo $post->content; ?>

                </div>

                <!-- Partage social -->
                <div class="post-share">
                    <h3>Partager cet article</h3>
                    <div class="share-buttons">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(urlencode($post->title)); ?>&url=<?php echo e(urlencode($post->url)); ?>" 
                           target="_blank" 
                           class="share-btn share-twitter">
                            Twitter
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode($post->url)); ?>" 
                           target="_blank" 
                           class="share-btn share-linkedin">
                            LinkedIn
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode($post->url)); ?>" 
                           target="_blank" 
                           class="share-btn share-facebook">
                            Facebook
                        </a>
                        <a href="mailto:?subject=<?php echo e(urlencode($post->title)); ?>&body=<?php echo e(urlencode('Découvrez cet article : ' . $post->url)); ?>" 
                           class="share-btn share-email">
                            Email
                        </a>
                    </div>
                </div>

                <!-- Articles similaires -->
                <?php if($relatedPosts->count() > 0): ?>
                <div class="related-posts">
                    <h3>Articles similaires</h3>
                    <div class="related-posts-grid">
                        <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="related-post-card">
                            <?php if($relatedPost->featured_image): ?>
                            <div class="related-post-image">
                                <img src="<?php echo e(asset($relatedPost->featured_image)); ?>" alt="<?php echo e($relatedPost->title); ?>">
                            </div>
                            <?php endif; ?>
                            <div class="related-post-content">
                                <h4><a href="<?php echo e($relatedPost->url); ?>"><?php echo e($relatedPost->title); ?></a></h4>
                                <p class="related-post-meta"><?php echo e($relatedPost->formatted_date); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Navigation précédent/suivant -->
                <nav class="post-navigation">
                    <?php
                        $prevPost = \App\Models\Post::published()
                            ->where('published_at', '<', $post->published_at)
                            ->orderBy('published_at', 'desc')
                            ->first();
                        $nextPost = \App\Models\Post::published()
                            ->where('published_at', '>', $post->published_at)
                            ->orderBy('published_at', 'asc')
                            ->first();
                    ?>

                    <?php if($prevPost): ?>
                    <a href="<?php echo e($prevPost->url); ?>" class="nav-prev">
                        ← Article précédent<br>
                        <span><?php echo e($prevPost->title); ?></span>
                    </a>
                    <?php endif; ?>

                    <?php if($nextPost): ?>
                    <a href="<?php echo e($nextPost->url); ?>" class="nav-next">
                        Article suivant →<br>
                        <span><?php echo e($nextPost->title); ?></span>
                    </a>
                    <?php endif; ?>
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
                    <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-outline">← Tous les articles</a>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/blog/show.blade.php ENDPATH**/ ?>