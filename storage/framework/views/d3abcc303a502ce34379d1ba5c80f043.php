

<?php $__env->startSection('title', 'Contact - On prend un café ? | IPRIJ'); ?>
<?php $__env->startSection('description', 'Contactez IPRIJ pour discuter de vos projets digitaux autour d\'un café. Accompagnement personnalisé pour TPE/PME en Normandie, Île-de-France et toute la France.'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Contact -->
<section class="hero-contact">
    <div class="container">
        <div class="hero-contact-content">
            <div class="hero-contact-text">
                <h1>
                    <img src="<?php echo e(asset('images/tasse_cafe.svg')); ?>" alt="Café" class="hero-icon">
                    On prend un café ?
                </h1>
                <p>Discutons de vos projets digitaux dans une ambiance détendue. Premier audit gratuit de 30 minutes pour analyser vos besoins et définir ensemble la meilleure stratégie.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <img src="<?php echo e(asset('images/mail.svg')); ?>" alt="Email" class="contact-icon">
                        <a href="mailto:contact@iprije.fr">contact@iprije.fr</a>
                    </div>
                    <div class="contact-item">
                        <img src="<?php echo e(asset('images/zones/normandie.svg')); ?>" alt="Zone" class="contact-icon">
                        <span>Vernon, Normandie, Île-de-France, National</span>
                    </div>
                </div>
            </div>
            <div class="hero-contact-form">
                <div class="contact-form-container">
                    <h2>Envoyez-nous un message</h2>
                    
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <strong>Merci !</strong> <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php if(session('error')): ?>
                        <div class="alert alert-error">
                            <strong>Oups !</strong> <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="contact-form">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">
                                    <img src="<?php echo e(asset('images/user.svg')); ?>" alt="Nom" class="form-icon">
                                    Nom *
                                </label>
                                <input type="text" id="nom" name="nom" value="<?php echo e(old('nom')); ?>" required>
                                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="prenom">
                                    <img src="<?php echo e(asset('images/user.svg')); ?>" alt="Prénom" class="form-icon">
                                    Prénom *
                                </label>
                                <input type="text" id="prenom" name="prenom" value="<?php echo e(old('prenom')); ?>" required>
                                <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">
                                    <img src="<?php echo e(asset('images/mail.svg')); ?>" alt="Email" class="form-icon">
                                    Email *
                                </label>
                                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="telephone">
                                    <img src="<?php echo e(asset('images/phone.svg')); ?>" alt="Téléphone" class="form-icon">
                                    Téléphone *
                                </label>
                                <input type="tel" id="telephone" name="telephone" value="<?php echo e(old('telephone')); ?>" required>
                                <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">
                                <img src="<?php echo e(asset('images/message.svg')); ?>" alt="Message" class="form-icon">
                                Votre message *
                            </label>
                            <textarea id="message" name="message" rows="6" required placeholder="Parlez-nous de votre projet, vos besoins, vos objectifs..."><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <img src="<?php echo e(asset('images/tasse_cafe.svg')); ?>" alt="Café" class="btn-icon">
                            Prenons ce café !
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi nous choisir -->
<section class="why-contact">
    <div class="container">
        <div class="section-header">
            <h2>Pourquoi choisir IPRIJ ?</h2>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <img src="<?php echo e(asset('images/Iprij_feature/audit_gratuit.webp')); ?>" alt="Audit gratuit" class="why-icon">
                <h3>Audit gratuit</h3>
                <p>Premier audit de 1h - 1h30 gratuit pour analyser vos besoins sans engagement</p>
            </div>
            <div class="why-card">
                <img src="<?php echo e(asset('images/Iprij_feature/accompagnement_personnalise.webp')); ?>" alt="Accompagnement personnalisé" class="why-icon">
                <h3>Accompagnement personnalisé</h3>
                <p>Solutions sur mesure adaptées à votre secteur d'activité et vos objectifs</p>
            </div>
            <div class="why-card">
                <img src="<?php echo e(asset('images/Iprij_feature/expertise_locale.webp')); ?>" alt="Expertise locale" class="why-icon">
                <h3>Expertise locale</h3>
                <p>Connaissance du tissu économique local et accompagnement de proximité</p>
            </div>
            <div class="why-card">
                <img src="<?php echo e(asset('images/Iprij_feature/solutions_completes.webp')); ?>" alt="Solutions complètes" class="why-icon">
                <h3>Solutions complètes</h3>
                <p>De la stratégie à la mise en œuvre : web, marketing, IA, formation...</p>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/contact.blade.php ENDPATH**/ ?>