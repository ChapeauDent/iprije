<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Comment migrer vers Microsoft 365 en toute sérénité',
                'slug' => 'comment-migrer-vers-microsoft-365',
                'excerpt' => 'La migration vers Microsoft 365 est une étape cruciale pour moderniser votre infrastructure. Découvrez notre méthodologie éprouvée pour une transition sans accroc.',
                'content' => "La migration vers Microsoft 365 représente une opportunité majeure pour transformer votre façon de travailler. Cependant, cette transition nécessite une préparation minutieuse.\n\nÉtape 1 : Audit de l'existant\nAvant toute migration, il est essentiel d'analyser votre infrastructure actuelle, vos outils, vos processus et vos besoins spécifiques.\n\nÉtape 2 : Planification\nNous élaborons un plan détaillé incluant le calendrier, les ressources nécessaires, et les points de validation.\n\nÉtape 3 : Migration des données\nLe transfert sécurisé de vos données vers Microsoft 365 s'effectue par phases pour minimiser les perturbations.\n\nÉtape 4 : Formation des équipes\nL'adoption par vos collaborateurs est la clé du succès. Nous proposons des formations adaptées à chaque niveau.\n\nÉtape 5 : Support post-migration\nUn accompagnement continu garantit la résolution rapide des problèmes et l'optimisation progressive de votre environnement.\n\nContactez IPRIJ pour un audit gratuit de votre projet de migration.",
                'category' => 'Microsoft 365',
                'tags' => ['Migration', 'Cloud', 'Productivité'],
                'meta_description' => 'Guide complet pour réussir votre migration vers Microsoft 365 : audit, planification, migration, formation et support.',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(15),
                'views_count' => 127
            ],
            [
                'title' => "L'Intelligence Artificielle au service des TPE/PME",
                'slug' => 'intelligence-artificielle-tpe-pme',
                'excerpt' => "L'IA n'est plus réservée aux grandes entreprises. Découvrez comment les TPE/PME peuvent tirer parti de l'intelligence artificielle pour optimiser leurs processus.",
                'content' => "L'intelligence artificielle se démocratise et devient accessible aux petites et moyennes entreprises. Voici comment en profiter.\n\nAutomatisation des tâches répétitives\nLes outils d'IA peuvent automatiser la saisie de données, la gestion des emails, la planification de rendez-vous et bien plus.\n\nAmélioration du service client\nLes chatbots intelligents peuvent répondre aux questions courantes 24/7, libérant du temps pour votre équipe.\n\nAnalyse de données\nL'IA peut analyser vos données commerciales pour identifier des tendances et des opportunités que vous pourriez manquer.\n\nGénération de contenu\nDes outils comme ChatGPT peuvent vous aider à créer du contenu marketing, des emails, des rapports plus rapidement.\n\nFormation et accompagnement\nChez IPRIJ, nous proposons des formations personnalisées pour intégrer l'IA dans vos processus quotidiens sans investissement massif.\n\nL'IA n'est pas une menace mais un outil puissant pour booster votre productivité et votre compétitivité.",
                'category' => 'Intelligence Artificielle',
                'tags' => ['IA', 'Automation', 'Productivité', 'Innovation'],
                'meta_description' => "Comment les TPE/PME peuvent utiliser l'IA pour automatiser, améliorer et optimiser leurs processus métiers.",
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(10),
                'views_count' => 89
            ],
            [
                'title' => 'Google Workspace vs Microsoft 365 : Quel choix pour votre entreprise ?',
                'slug' => 'google-workspace-vs-microsoft-365',
                'excerpt' => 'Hésitation entre Google Workspace et Microsoft 365 ? Nous comparons les deux solutions pour vous aider à faire le meilleur choix selon vos besoins.',
                'content' => "Le choix entre Google Workspace et Microsoft 365 est une décision stratégique importante. Voici notre comparaison objective.\n\nFacilité d'utilisation\nGoogle Workspace brille par sa simplicité et son interface intuitive. Microsoft 365 offre plus de fonctionnalités mais nécessite une courbe d'apprentissage.\n\nCollaboration en temps réel\nLes deux plateformes excellent dans ce domaine, avec une légère avance à Google pour l'édition simultanée.\n\nIntégration et écosystème\nMicrosoft 365 s'intègre parfaitement avec Windows et offre plus d'applications professionnelles. Google Workspace s'intègre mieux avec les services Google.\n\nSécurité et conformité\nLes deux offrent d'excellentes garanties de sécurité, avec Microsoft ayant une longueur d'avance sur les certifications entreprise.\n\nTarification\nGoogle Workspace est généralement plus abordable pour les petites équipes. Microsoft 365 offre un meilleur rapport qualité-prix pour les fonctionnalités avancées.\n\nNotre recommandation\n- Choisissez Google Workspace si : simplicité, mobilité, budget limité\n- Choisissez Microsoft 365 si : fonctionnalités avancées, intégration Windows, besoins complexes\n\nIPRIJ vous accompagne dans les deux écosystèmes. Contactez-nous pour un audit personnalisé.",
                'category' => 'Comparatif',
                'tags' => ['Google Workspace', 'Microsoft 365', 'Cloud', 'Productivité'],
                'meta_description' => 'Comparatif détaillé Google Workspace vs Microsoft 365 : fonctionnalités, prix, sécurité. Quel choix pour votre entreprise ?',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(5),
                'views_count' => 203
            ],
            [
                'title' => '5 astuces pour optimiser votre utilisation de Microsoft Teams',
                'slug' => '5-astuces-microsoft-teams',
                'excerpt' => 'Microsoft Teams est devenu incontournable pour la collaboration. Découvrez 5 astuces méconnues pour exploiter tout son potentiel.',
                'content' => "Microsoft Teams regorge de fonctionnalités cachées qui peuvent transformer votre productivité.\n\n1. Utilisez les raccourcis clavier\nCtrl+1/2/3 pour naviguer entre Activité/Chat/Équipes. Ctrl+Shift+M pour couper le micro rapidement. Gagnez un temps précieux !\n\n2. Créez des canaux privés\nPour des discussions sensibles ou des projets confidentiels, les canaux privés permettent de limiter l'accès tout en restant dans l'équipe.\n\n3. Intégrez vos applications\nConnectez Trello, Asana, GitHub... directement dans Teams. Tout au même endroit !\n\n4. Utilisez les balises\nCréez des groupes personnalisés (@Marketing, @Direction) pour notifier plusieurs personnes sans créer un nouveau canal.\n\n5. Automatisez avec Power Automate\nCréez des flux automatiques : notification Teams quand un email arrive, création de tâche depuis un message, etc.\n\nBonus : Mode Ensemble dans les réunions\nActivez le mode Ensemble pour voir tous les participants dans le même environnement virtuel. Plus immersif et engageant !\n\nBesoin d'une formation Teams personnalisée pour votre équipe ? IPRIJ propose des ateliers pratiques et sur-mesure.",
                'category' => 'Microsoft 365',
                'tags' => ['Teams', 'Productivité', 'Astuces', 'Collaboration'],
                'meta_description' => '5 astuces avancées pour optimiser votre utilisation de Microsoft Teams et booster la collaboration en équipe.',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(3),
                'views_count' => 156
            ],
            [
                'title' => 'Pourquoi former vos équipes au numérique est un investissement rentable',
                'slug' => 'formation-equipes-numerique-investissement',
                'excerpt' => 'Former vos collaborateurs aux outils numériques n\'est pas une dépense mais un investissement stratégique. Explications chiffrées.',
                'content' => "La formation numérique de vos équipes génère un ROI mesurable et rapide.\n\nGain de productivité immédiat\nUne étude Microsoft montre que les utilisateurs formés sont 30% plus productifs. Sur une équipe de 10 personnes, cela représente 3 ETP gagnés !\n\nRéduction des erreurs\nLa maîtrise des outils diminue les erreurs coûteuses : données perdues, mauvaises manipulations, problèmes de sécurité.\n\nAutonomie et satisfaction\nDes collaborateurs formés sont plus autonomes, confiants et satisfaits. La formation réduit le turnover et l'absentéisme.\n\nAdoption réussie des nouveaux outils\n70% des projets de transformation numérique échouent par manque de formation. Investir dans la formation multiplie vos chances de succès.\n\nCalcul du ROI\nFormation : 500€ par personne\nGain de productivité : 2h/semaine par personne\nSur un an : 100h gagnées = 3000€ économisés (au SMIC)\nROI : 500% dès la première année !\n\nNotre approche chez IPRIJ\nNous proposons des formations adaptées à chaque niveau, des ateliers pratiques basés sur vos cas d'usage réels, et un suivi post-formation pour garantir l'adoption.\n\nInvestissez dans vos équipes, c'est investir dans votre réussite.",
                'category' => 'Formation',
                'tags' => ['Formation', 'ROI', 'Productivité', 'Management'],
                'meta_description' => 'Pourquoi et comment la formation numérique de vos équipes génère un ROI rapide. Calculs et exemples concrets.',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(1),
                'views_count' => 67
            ],
            [
                'title' => 'Sécurité dans le cloud : Les 10 bonnes pratiques essentielles',
                'slug' => 'securite-cloud-bonnes-pratiques',
                'excerpt' => 'La sécurité cloud est primordiale pour protéger vos données professionnelles. Voici les 10 règles d\'or à appliquer immédiatement.',
                'content' => "La sécurité de vos données dans le cloud nécessite une approche structurée.\n\n1. Authentification multifacteur (MFA)\nActivez systématiquement l'authentification à deux facteurs sur tous les comptes. Non négociable !\n\n2. Mots de passe robustes\nUtilisez un gestionnaire de mots de passe et des mots de passe uniques de 12+ caractères.\n\n3. Principe du moindre privilège\nNe donnez que les permissions strictement nécessaires à chaque utilisateur.\n\n4. Chiffrement des données\nAssurez-vous que vos données sont chiffrées au repos et en transit.\n\n5. Sauvegardes régulières\nAutomatisez les sauvegardes et testez régulièrement la restauration.\n\n6. Formation des utilisateurs\nLa faille de sécurité n°1 reste l'humain. Formez vos équipes aux bonnes pratiques.\n\n7. Gestion des appareils\nUtilisez les outils MDM (Mobile Device Management) pour contrôler l'accès depuis les appareils mobiles.\n\n8. Surveillance et alertes\nConfigurez des alertes pour les activités suspectes : connexions inhabituelles, téléchargements massifs, etc.\n\n9. Politique de partage\nÉtablissez des règles claires pour le partage de fichiers en interne et en externe.\n\n10. Audits réguliers\nRéalisez des audits de sécurité trimestriels pour identifier les vulnérabilités.\n\nIPRIJ peut auditer votre sécurité cloud et vous accompagner dans la mise en place de ces bonnes pratiques. Premier audit offert !",
                'category' => 'Sécurité',
                'tags' => ['Sécurité', 'Cloud', 'Bonnes pratiques', 'Cyber sécurité'],
                'meta_description' => '10 bonnes pratiques essentielles pour sécuriser vos données dans le cloud : authentification, chiffrement, sauvegardes...',
                'is_published' => true,
                'published_at' => Carbon::now()->subHours(12),
                'views_count' => 45
            ]
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}

