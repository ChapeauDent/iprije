<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'IPRIJE - Intelligence Artificielle & Programmation par le Jeu'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'IPRIJE : Intelligence Artificielle, Programmation, Robotique, Initié par le Jeu. Solutions numériques innovantes pour Entreprises et Écoles.'); ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('favicon.svg')); ?>" type="image/svg+xml">
    <link rel="icon" href="<?php echo e(asset('favicon-32x32.svg')); ?>" type="image/svg+xml" sizes="32x32">
    <link rel="icon" href="<?php echo e(asset('favicon-16x16.svg')); ?>" type="image/svg+xml" sizes="16x16">
    <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.svg')); ?>">
    <link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">
    <meta name="theme-color" content="#2B4F75">
    <meta name="msapplication-TileColor" content="#2B4F75">
    <meta name="msapplication-config" content="<?php echo e(asset('browserconfig.xml')); ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <?php echo $__env->yieldPushContent('meta'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/iprij.css', 'resources/js/app.js']); ?>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo IPRIJE" class="logo-image">
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="<?php echo e(route('home')); ?>" class="nav-link">Accueil</a></li>
                        <li class="dropdown">
                            <a href="#services" class="nav-link">Services ▾</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('services.office365')); ?>">Office 365 Business + IA</a></li>
                                <li><a href="<?php echo e(route('services.web')); ?>">Création Web & Apps GEO</a></li>
                                <li><a href="<?php echo e(route('services.marketing')); ?>">Stratégie Marketing</a></li>
                                <li><a href="<?php echo e(route('services.formation-ia')); ?>">Formation IA Génératives</a></li>
                                <li><a href="<?php echo e(route('services.formation-jeunes')); ?>">Formation des Jeunes</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('blog.index')); ?>" class="nav-link">Blog</a></li>
                        <li><a href="<?php echo e(route('contact.show')); ?>" class="btn btn-primary">
                            On prend un café ?
                            <img src="<?php echo e(asset('images/tasse_cafe.svg')); ?>" alt="Café" class="btn-icon">
                        </a></li>
                    </ul>
                    <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>IPRIJ</h3>
                    <p>Architecte de Solutions Numériques & Formateur en Intelligence Artificielle</p>
                    <p>Expertise en Office 365, développement web optimisé GEO et formation IA.</p>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo e(route('services.office365')); ?>">Office 365 Business + IA</a></li>
                        <li><a href="<?php echo e(route('services.web')); ?>">Création Web & Apps GEO</a></li>
                        <li><a href="<?php echo e(route('services.marketing')); ?>">Stratégie Marketing</a></li>
                        <li><a href="<?php echo e(route('services.formation-ia')); ?>">Formation IA Génératives</a></li>
                        <li><a href="<?php echo e(route('services.formation-jeunes')); ?>">Formation des Jeunes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Ressources</h3>
                    <ul>
                        <li><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="mailto:contact@iprije.com">contact@iprije.com</a></li>
                        <li><a href="tel:+330650649241">+33 (0)6 50 64 92 41</a></li>
                        <li>Vernon, Normandie</li>
                        <li>Île-de-France & National</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo e(date('Y')); ?> IPRIJE - Tous droits réservés</p>
                <div class="footer-links">
                    <a href="<?php echo e(route('legal.mentions')); ?>">Mentions légales</a>
                    <a href="<?php echo e(route('legal.privacy')); ?>">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Menu mobile toggle
        function toggleMobileMenu() {
            const navMenu = document.querySelector('.nav-menu');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            navMenu.classList.toggle('active');
            toggle.classList.toggle('active');
        }
    </script>
</body>
</html>
<?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/layouts/site.blade.php ENDPATH**/ ?>