

<?php $__env->startSection('title', 'Test Article - Code et Pre'); ?>
<?php $__env->startSection('description', 'Page de test pour vérifier l\'affichage du code dans les articles'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <article class="max-w-4xl mx-auto">
        <header class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-4 text-primary">Test des éléments Code et Pre</h1>
            <p class="text-lg text-gray-600">Vérification de l'affichage du code dans les articles</p>
        </header>

        <div class="article-content prose max-w-none">
            <h2>Code inline</h2>
            <p>Voici un exemple de code inline : <code>const variable = "valeur";</code> qui doit s'adapter à la largeur.</p>
            
            <p>Un code plus long : <code>function calculateSomethingVeryLongAndComplicated(param1, param2, param3) { return param1 + param2 + param3; }</code></p>

            <h2>Blocs de code pré-formatés</h2>
            <p>Voici un exemple de bloc de code :</p>
            
            <pre><code>function exempleSimple() {
    console.log("Hello World");
    return true;
}</code></pre>

            <p>Un exemple plus complexe avec du code long :</p>
            
            <pre><code>class ExempleDeClasseAvecUnNomTresLongQuiPourraientPoserProbleme {
    constructor(parametreAvecUnNomTresLong, autreParametreAvecUnNomEncorePlusLong) {
        this.proprieteAvecUnNomTresLong = parametreAvecUnNomTresLong;
        this.autreProprieteAvecUnNomEncorePlusLong = autreParametreAvecUnNomEncorePlusLong;
    }
    
    methodeAvecUnNomTresLongQuiPrendPlusieursParametres(param1, param2, param3, param4) {
        return this.proprieteAvecUnNomTresLong + this.autreProprieteAvecUnNomEncorePlusLong + param1 + param2 + param3 + param4;
    }
}</code></pre>

            <p>Code JSON :</p>
            
            <pre><code>{
    "nom": "IPRIJ",
    "description": "Agence de développement web et création de sites internet",
    "services": [
        "Création de sites web",
        "Développement sur mesure",
        "Maintenance et support",
        "Stratégie digitale"
    ],
    "contact": {
        "email": "contact@iprij.com",
        "telephone": "02 XX XX XX XX",
        "adresse": "Normandie, France"
    }
}</code></pre>

            <p>Code CSS :</p>
            
            <pre><code>.exemple-de-classe-avec-un-nom-tres-long-qui-pourrait-poser-probleme {
    background-color: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 6px;
    padding: 1rem;
    margin: 1rem 0;
    overflow-x: auto;
    max-width: 100%;
    font-family: 'Courier New', Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
}</code></pre>

            <h2>Test sur mobile</h2>
            <p>Ces éléments doivent s'adapter correctement sur toutes les tailles d'écran sans dépasser la largeur de la colonne.</p>
        </div>
    </article>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ncsra\Herd\iprij\resources\views/test-article.blade.php ENDPATH**/ ?>