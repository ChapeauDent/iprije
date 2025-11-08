

<?php $__env->startSection('title', 'Blog IPRIJ - Actualités et Conseils Numériques'); ?>
<?php $__env->startSection('meta_description', 'Découvrez nos articles sur Microsoft 365, Google Workspace, l\'Intelligence Artificielle et la transformation numérique des entreprises.'); ?>

<?php $__env->startSection('content'); ?>

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
            <form action="<?php echo e(route('blog.index')); ?>" method="GET" class="search-form">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Rechercher un article..." 
                    value="<?php echo e(request('search')); ?>"
                    class="search-input"
                >
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>

            <!-- Filtres par catégorie -->
            <?php if($categories->count() > 0): ?>
            <div class="category-filters">
                <a href="<?php echo e(route('blog.index')); ?>" 
                   class="category-tag <?php echo e(!request('category') ? 'active' : ''); ?>">
                    Tous
                </a>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('blog.index', ['category' => $category])); ?>" 
                   class="category-tag <?php echo e(request('category') == $category ? 'active' : ''); ?>">
                    <?php echo e($category); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Contenu principal -->
<section class="blog-content">
    <div class="container">
        <div class="blog-layout">
            <!-- Articles -->
            <div class="blog-main">
                <?php if($posts->count() > 0): ?>
                <div class="posts-grid">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="post-card">
                        <?php if($post->featured_image): ?>
                        <div class="post-image">
                            <img src="<?php echo e(asset($post->featured_image)); ?>" alt="<?php echo e($post->title); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <?php if($post->category): ?>
                            <span class="post-category"><?php echo e($post->category); ?></span>
                            <?php endif; ?>
                            <h2 class="post-title">
                                <a href="<?php echo e($post->url); ?>"><?php echo e($post->title); ?></a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3zm2 1.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    <?php echo e($post->formatted_date); ?>

                                </span>
                                <span class="post-reading-time">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom; margin-right: 4px;">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-13v5.5l4.24 2.55-.84 1.39L7 9.7V3h1.5z"/>
                                    </svg>
                                    <?php echo e($post->reading_time); ?> min
                                </span>
                            </div>
                            <?php if($post->excerpt): ?>
                            <p class="post-excerpt"><?php echo e($post->excerpt); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo e($post->url); ?>" class="read-more">Lire la suite →</a>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper">
                    <?php echo e($posts->links()); ?>

                </div>
                <?php else: ?>
                <div class="no-posts">
                    <p>Aucun article trouvé.</p>
                    <?php if(request('search') || request('category')): ?>
                    <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-primary">Voir tous les articles</a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- Articles récents -->
                <?php if($recentPosts->count() > 0): ?>
                <div class="sidebar-widget">
                    <h3>Articles récents</h3>
                    <ul class="sidebar-posts">
                        <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($recentPost->url); ?>">
                                <span class="sidebar-post-title"><?php echo e($recentPost->title); ?></span>
                                <span class="sidebar-post-meta"><?php echo e($recentPost->formatted_date); ?></span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/blog/index.blade.php ENDPATH**/ ?>