@extends('layouts.site')

@section('title', 'Mentions Légales - IPRIJE')
@section('description', 'Mentions légales du site IPRIJE : éditeur, hébergement, droits d\'auteur, responsabilités et informations légales.')

@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4 text-primary">Mentions Légales</h1>
            <p class="text-lg text-gray-600">Informations légales concernant le site IPRIJE</p>
        </header>

        <div class="prose max-w-none">
            
            <!-- Éditeur du site -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Éditeur du site</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <p><strong>Raison sociale :</strong> IPRIJE</p>
                    <p><strong>Forme juridique :</strong> Micro-entreprise (Auto-entrepreneur)</p>
                    <p><strong>Siège social :</strong> Vernon, Normandie, France</p>
                    <p><strong>SIRET :</strong> [À compléter lors de l'immatriculation]</p>
                    <p><strong>Email :</strong> <a href="mailto:contact@iprije.com" class="text-primary hover:underline">contact@iprije.com</a></p>
                    <p><strong>Téléphone :</strong> <a href="tel:+330650649241" class="text-primary hover:underline">+33 (0)6 50 64 92 41</a></p>
                </div>
            </section>

            <!-- Directeur de publication -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Directeur de la publication</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <p><strong>Nicolas Raymond</strong>, gérant de IPRIJE</p>
                    <p><strong>Email :</strong> <a href="mailto:nicolasraymond@iprije.com" class="text-primary hover:underline">nicolasraymond@iprije.com</a></p>
                </div>
            </section>

            <!-- Hébergement -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Hébergement</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <p><strong>Hébergeur :</strong> Hostinger International Ltd</p>
                    <p><strong>Adresse :</strong> 61 Lordou Vironos Street, 6023 Larnaca, Chypre</p>
                    <p><strong>Site web :</strong> <a href="https://www.hostinger.fr" class="text-primary hover:underline" target="_blank" rel="noopener">www.hostinger.fr</a></p>
                </div>
            </section>

            <!-- Conception technique -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Conception technique</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <p><strong>Développement :</strong> IPRIJE - Nicolas Raymond</p>
                    <p><strong>Technologies :</strong> Laravel 11, PHP 8.3, MySQL, HTML5, CSS3, JavaScript</p>
                    <p><strong>Framework CSS :</strong> Design System IPRIJE personnalisé</p>
                </div>
            </section>

            <!-- Propriété intellectuelle -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Propriété intellectuelle</h2>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-secondary">Droits d'auteur</h3>
                    <p>L'ensemble du contenu de ce site (textes, images, logos, graphismes, vidéos, etc.) est protégé par le droit d'auteur. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de IPRIJE.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Marque et logo</h3>
                    <p>La marque « IPRIJE » ainsi que les logos associés sont la propriété exclusive de IPRIJE. Toute reproduction ou utilisation non autorisée est strictement interdite.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Contenus libres</h3>
                    <p>Certains contenus techniques (extraits de code, tutoriels) peuvent être partagés sous licence Creative Commons ou similaire, mention expresse en sera faite le cas échéant.</p>
                </div>
            </section>

            <!-- Liens hypertextes -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Liens hypertextes</h2>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-secondary">Liens sortants</h3>
                    <p>Des liens vers d'autres sites web peuvent être proposés. Leur présence ne saurait engager IPRIJE quant à leur contenu et ne vise qu'à permettre à l'internaute de trouver d'autres ressources documentaires sur les sujets consultés.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Liens entrants</h3>
                    <p>Tout site public ou privé est autorisé à établir, sans autorisation préalable, un lien vers les pages de ce site, à condition que ce lien respecte les conditions suivantes :</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Le lien ne doit pas porter atteinte à l'image de IPRIJE</li>
                        <li>Le lien doit clairement identifier la source</li>
                        <li>Le site référent ne doit pas contenir de contenu illicite</li>
                    </ul>
                </div>
            </section>

            <!-- Responsabilité -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Clause de responsabilité</h2>
                <div class="space-y-4">
                    <p>Les informations proposées sur ce site le sont à titre de service rendu au public. Malgré tout le soin apporté à la vérification des contenus et des informations, les éléments mis en ligne ne sauraient, de quelque manière que ce soit, prétendre à l'exactitude et engager la responsabilité de IPRIJE.</p>
                    
                    <p>Les informations et/ou documents disponibles sur ce site sont susceptibles d'être modifiés à tout moment, et peuvent faire l'objet de mises à jour.</p>
                    
                    <p>IPRIJE ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu'il soit résultant de l'interprétation ou de l'utilisation des informations et/ou documents disponibles sur ce site.</p>
                </div>
            </section>

            <!-- Protection des données -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Protection des données personnelles</h2>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-secondary">Responsable du traitement</h3>
                    <p>IPRIJE, représentée par Nicolas Raymond, est responsable du traitement des données personnelles collectées sur ce site.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Données collectées</h3>
                    <p>Les données personnelles collectées via le formulaire de contact sont :</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Nom et prénom</li>
                        <li>Adresse email</li>
                        <li>Numéro de téléphone</li>
                        <li>Message</li>
                    </ul>
                    
                    <h3 class="text-xl font-semibold text-secondary">Finalité du traitement</h3>
                    <p>Ces données sont collectées uniquement dans le but de répondre à vos demandes de contact et de vous proposer nos services.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Base légale</h3>
                    <p>Le traitement est basé sur votre consentement (article 6.1.a du RGPD) et/ou l'exécution de mesures précontractuelles (article 6.1.b du RGPD).</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Conservation des données</h3>
                    <p>Vos données sont conservées pendant une durée maximale de 3 ans à compter de notre dernier contact.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Vos droits</h3>
                    <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Droit d'accès à vos données</li>
                        <li>Droit de rectification</li>
                        <li>Droit à l'effacement</li>
                        <li>Droit à la limitation du traitement</li>
                        <li>Droit à la portabilité</li>
                        <li>Droit d'opposition</li>
                    </ul>
                    <p>Pour exercer ces droits, contactez-nous à : <a href="mailto:contact@iprije.com" class="text-primary hover:underline">contact@iprije.com</a></p>
                </div>
            </section>

            <!-- Cookies -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Cookies et technologies similaires</h2>
                <div class="space-y-4">
                    <p>Ce site utilise des cookies techniques nécessaires à son bon fonctionnement. Aucun cookie publicitaire ou de traçage n'est utilisé sans votre consentement.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Cookies techniques</h3>
                    <p>Ces cookies sont essentiels au fonctionnement du site et ne peuvent pas être désactivés :</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Session PHP (fonctionnement du site)</li>
                        <li>Préférences utilisateur (thème, langue)</li>
                        <li>Sécurité (protection CSRF)</li>
                    </ul>
                    
                    <h3 class="text-xl font-semibold text-secondary">Contrôle des cookies</h3>
                    <p>Vous pouvez contrôler et/ou supprimer les cookies comme vous le souhaitez via les paramètres de votre navigateur.</p>
                </div>
            </section>

            <!-- Accessibilité -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Accessibilité</h2>
                <div class="space-y-4">
                    <p>IPRIJE s'engage à rendre son site accessible au plus grand nombre, conformément aux standards d'accessibilité web.</p>
                    
                    <h3 class="text-xl font-semibold text-secondary">Standards respectés</h3>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>HTML5 sémantique</li>
                        <li>Contrastes de couleurs suffisants</li>
                        <li>Navigation au clavier</li>
                        <li>Textes alternatifs pour les images</li>
                        <li>Structure hiérarchique des titres</li>
                    </ul>
                    
                    <p>Si vous rencontrez des difficultés d'accès, n'hésitez pas à nous contacter pour que nous puissions vous assister.</p>
                </div>
            </section>

            <!-- Contact -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Nous contacter</h2>
                <div class="bg-secondary-light p-6 rounded-lg">
                    <p>Pour toute question relative à ces mentions légales ou au fonctionnement du site :</p>
                    <div class="mt-4 space-y-2">
                        <p><strong>Email :</strong> <a href="mailto:contact@iprije.com" class="text-primary hover:underline">contact@iprije.com</a></p>
                        <p><strong>Téléphone :</strong> <a href="tel:+330650649241" class="text-primary hover:underline">+33 (0)6 50 64 92 41</a></p>
                        <p><strong>Formulaire de contact :</strong> <a href="{{ route('contact.show') }}" class="text-primary hover:underline">Nous écrire</a></p>
                    </div>
                </div>
            </section>

            <!-- Médiation -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Médiation de la consommation</h2>
                <div class="space-y-4">
                    <p>Conformément à l'article L. 616-1 du Code de la consommation, nous vous informons qu'en cas de litige, vous pouvez recourir gratuitement au service de médiation :</p>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p><strong>Médiateur de la consommation :</strong> Centre de médiation et d'arbitrage de Paris (CMAP)</p>
                        <p><strong>Site web :</strong> <a href="https://www.cmap.fr" class="text-primary hover:underline" target="_blank" rel="noopener">www.cmap.fr</a></p>
                        <p><strong>Adresse :</strong> 39 avenue Franklin D. Roosevelt, 75008 Paris</p>
                    </div>
                    
                    <p>Vous pouvez également utiliser la plateforme européenne de résolution des litiges en ligne : <a href="https://ec.europa.eu/consumers/odr/" class="text-primary hover:underline" target="_blank" rel="noopener">ec.europa.eu/consumers/odr/</a></p>
                </div>
            </section>

            <!-- Droit applicable -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Droit applicable et juridiction</h2>
                <div class="space-y-4">
                    <p>Les présentes mentions légales sont régies par le droit français.</p>
                    <p>En cas de litige et à défaut de résolution amiable, les tribunaux français seront seuls compétents.</p>
                </div>
            </section>

            <!-- Mise à jour -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">Mise à jour</h2>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p><strong>Dernière mise à jour :</strong> {{ date('d/m/Y') }}</p>
                    <p>Ces mentions légales peuvent être modifiées à tout moment. Nous vous recommandons de les consulter régulièrement.</p>
                </div>
            </section>

        </div>
    </div>
</div>

@endsection