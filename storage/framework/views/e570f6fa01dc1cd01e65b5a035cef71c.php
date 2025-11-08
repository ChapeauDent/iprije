<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(isset($post) ? 'Modifier l\'article' : 'Nouvel Article'); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="<?php echo e(isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if(isset($post)): ?>
                            <?php echo method_field('PUT'); ?>
                        <?php endif; ?>

                        <!-- Section: Informations de base -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold mb-4 text-gray-700">Informations de base</h3>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                    Titre *
                                </label>
                                <input type="text" name="title" id="title" value="<?php echo e(old('title', $post->title ?? '')); ?>" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                                    Catégorie *
                                </label>
                                <select name="category" id="category" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">Sélectionnez une catégorie</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat); ?>" <?php echo e(old('category', $post->category ?? '') == $cat ? 'selected' : ''); ?>>
                                            <?php echo e($cat); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="excerpt">
                                    Extrait *
                                </label>
                                <textarea name="excerpt" id="excerpt" rows="3" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('excerpt', $post->excerpt ?? '')); ?></textarea>
                                <?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
                                    Tags (séparés par des virgules)
                                </label>
                                <input type="text" name="tags" id="tags" value="<?php echo e(old('tags', isset($post) && $post->tags ? implode(', ', $post->tags) : '')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-gray-600 text-xs italic">Exemple: Office 365, Productivité, Collaboration</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="featured_image">
                                    Image de couverture
                                </label>
                                <input type="text" name="featured_image" id="featured_image" value="<?php echo e(old('featured_image', $post->featured_image ?? '')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="/images/blog/mon-image.jpg">
                                <p class="text-gray-600 text-xs italic mt-1">Chemin relatif (/images/blog/...) ou URL complète</p>
                            </div>
                        </div>

                        <!-- Section: Contenu -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold mb-4 text-gray-700">Contenu</h3>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    Format du contenu
                                </label>
                                <div class="flex gap-4 mb-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="content_type" value="html" checked onclick="toggleContentType('html')"
                                            class="form-radio">
                                        <span class="ml-2">HTML</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="content_type" value="markdown" onclick="toggleContentType('markdown')"
                                            class="form-radio">
                                        <span class="ml-2">Markdown</span>
                                    </label>
                                </div>
                            </div>

                            <div id="html_content" class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                                    Contenu HTML *
                                </label>
                                <textarea name="content" id="content" rows="15"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-mono text-sm <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('content', $post->content ?? '')); ?></textarea>
                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div id="markdown_content" class="mb-4 hidden">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="content_markdown">
                                    Contenu Markdown
                                </label>
                                <textarea name="content_markdown" id="content_markdown" rows="15"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-mono text-sm"><?php echo e(old('content_markdown', $post->content_markdown ?? '')); ?></textarea>
                                <p class="text-gray-600 text-xs italic mt-2">Ou uploadez un fichier Markdown ci-dessous</p>
                            </div>

                            <div id="markdown_file_upload" class="mb-4 hidden">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="markdown_file">
                                    Upload fichier Markdown
                                </label>
                                <input type="file" name="markdown_file" id="markdown_file" accept=".md,.markdown"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-gray-600 text-xs italic">Le fichier sera converti automatiquement en HTML</p>
                            </div>
                        </div>

                        <!-- Section: GEO & SEO -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold mb-4 text-gray-700">Optimisation GEO & SEO</h3>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="schema_type">
                                    Type de Schema.org *
                                </label>
                                <select name="schema_type" id="schema_type" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="BlogPosting" <?php echo e(old('schema_type', $post->schema_type ?? 'BlogPosting') == 'BlogPosting' ? 'selected' : ''); ?>>BlogPosting (Article de blog)</option>
                                    <option value="Article" <?php echo e(old('schema_type', $post->schema_type ?? '') == 'Article' ? 'selected' : ''); ?>>Article (Article générique)</option>
                                    <option value="HowTo" <?php echo e(old('schema_type', $post->schema_type ?? '') == 'HowTo' ? 'selected' : ''); ?>>HowTo (Tutoriel)</option>
                                    <option value="FAQPage" <?php echo e(old('schema_type', $post->schema_type ?? '') == 'FAQPage' ? 'selected' : ''); ?>>FAQPage (Page FAQ)</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="meta_title">
                                    Meta Title (max 70 caractères)
                                </label>
                                <input type="text" name="meta_title" id="meta_title" maxlength="70" value="<?php echo e(old('meta_title', $post->meta_title ?? '')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-gray-600 text-xs italic">Laissez vide pour utiliser le titre de l'article</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="meta_description">
                                    Meta Description (max 160 caractères)
                                </label>
                                <textarea name="meta_description" id="meta_description" rows="2" maxlength="160"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo e(old('meta_description', $post->meta_description ?? '')); ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="canonical_url">
                                    URL Canonique
                                </label>
                                <input type="url" name="canonical_url" id="canonical_url" value="<?php echo e(old('canonical_url', $post->canonical_url ?? '')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-gray-600 text-xs italic">Laissez vide pour utiliser l'URL de l'article</p>
                            </div>
                        </div>

                        <!-- Section: Auteur -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold mb-4 text-gray-700">Informations Auteur</h3>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="author_name">
                                    Nom de l'auteur
                                </label>
                                <input type="text" name="author_name" id="author_name" value="<?php echo e(old('author_name', $post->author_name ?? 'Nicolas Raymond')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="author_bio">
                                    Biographie de l'auteur
                                </label>
                                <textarea name="author_bio" id="author_bio" rows="3"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo e(old('author_bio', $post->author_bio ?? '')); ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="author_url">
                                    URL de l'auteur
                                </label>
                                <input type="url" name="author_url" id="author_url" value="<?php echo e(old('author_url', $post->author_url ?? 'https://nicolasraymond.fr')); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <!-- Section: Publication -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold mb-4 text-gray-700">Publication</h3>
                            
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="is_published" value="1" <?php echo e(old('is_published', $post->is_published ?? false) ? 'checked' : ''); ?>

                                        class="form-checkbox">
                                    <span class="ml-2">Publier l'article</span>
                                </label>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="published_at">
                                    Date de publication
                                </label>
                                <input type="datetime-local" name="published_at" id="published_at" 
                                    value="<?php echo e(old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i'))); ?>"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="<?php echo e(route('admin.posts.index')); ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Annuler
                            </a>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <?php echo e(isset($post) ? 'Mettre à jour' : 'Créer'); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleContentType(type) {
            const htmlContent = document.getElementById('html_content');
            const markdownContent = document.getElementById('markdown_content');
            const markdownFileUpload = document.getElementById('markdown_file_upload');
            
            if (type === 'html') {
                htmlContent.classList.remove('hidden');
                markdownContent.classList.add('hidden');
                markdownFileUpload.classList.add('hidden');
                document.getElementById('content').required = true;
                document.getElementById('content_markdown').required = false;
            } else {
                htmlContent.classList.add('hidden');
                markdownContent.classList.remove('hidden');
                markdownFileUpload.classList.remove('hidden');
                document.getElementById('content').required = false;
                document.getElementById('content_markdown').required = false;
            }
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>