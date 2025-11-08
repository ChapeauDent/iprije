<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil IPRIJ
     */
    public function index()
    {
        $services = [
            [
                'title' => 'Office 365 Business',
                'description' => 'Mise en place et optimisation avec IA : Copilot, Power Automate, formation équipes',
                'image' => '/images/Iprij_services/Service_office_365_business.webp',
                'alt' => 'Illustration vectorielle Microsoft Office 365 avec intégration IA - Écosystème cloud connecté avec Teams, Outlook, Excel, Word et Copilot',
                'link' => route('services.office365')
            ],
            [
                'title' => 'Création Web & Apps',
                'description' => 'Sites web optimisés GEO, applications sur-mesure, Design System moderne',
                'image' => '/images/Iprij_services/Service_creation_web_apps.webp',
                'alt' => 'Illustration vectorielle développement web responsive et optimisation GEO - Écrans multiples avec marqueurs de localisation',
                'link' => route('services.web')
            ],
            [
                'title' => 'Stratégie Marketing',
                'description' => 'Accompagnement création entreprise digitale, Design System, positionnement',
                'image' => '/images/Iprij_services/Service_strategie_Marketing.webp',
                'alt' => 'Illustration vectorielle stratégie marketing et Design System - Cible stratégique connectée aux éléments de marque',
                'link' => route('services.marketing')
            ],
            [
                'title' => 'Formation IA Génératives',
                'description' => 'Maîtrisez les IA : code (Copilot), images (DALL-E), textes (ChatGPT)',
                'image' => '/images/Iprij_services/Service_formation_IA_generatives.webp',
                'alt' => 'Illustration vectorielle formation IA génératives - Intelligence artificielle connectée au code, images et textes',
                'link' => route('services.formation-ia')
            ],
            [
                'title' => 'Formation des Jeunes',
                'description' => 'Ateliers IA, Programmation et Robotique pour les 8-18 ans : apprentissage ludique et créatif',
                'image' => '/images/Iprij_services/Services_formation_jeunes.webp',
                'alt' => 'Illustration vectorielle formation technologie pour jeunes - Robot éducatif avec ordinateur, code et robotique',
                'link' => route('services.formation-jeunes')
            ]
        ];

        $features = [
            [
                'title' => 'Double Expertise',
                'short_description' => 'Architecte de solutions ET Formateur',
                'detailed_description' => 'Je conçois et déploie vos infrastructures numériques (Microsoft 365, Google Workspace, sites web) puis je forme vos équipes pour une autonomie complète. Cette double casquette garantit des solutions techniques solides ET des utilisateurs compétents.',
                'image' => '/images/Iprij_feature/feature_double_expertise.webp',
                'alt' => 'Illustration double expertise architecte solutions et formateur'
            ],
            [
                'title' => 'Spécialiste IA',
                'short_description' => 'Expert Intelligence Artificielle',
                'detailed_description' => 'Formation certifiée aux IA génératives (ChatGPT, Copilot, DALL-E) et intégration concrète dans vos outils Office 365. Je vous accompagne pour automatiser vos processus avec Power Automate et exploiter pleinement le potentiel de l\'IA dans votre quotidien professionnel.',
                'image' => '/images/Iprij_feature/Feature_specialiste_IA.webp',
                'alt' => 'Illustration spécialiste intelligence artificielle et Office 365 Copilot'
            ],
            [
                'title' => 'Vision Globale',
                'short_description' => 'Accompagnement stratégique',
                'detailed_description' => 'De l\'audit initial à la mise en production, j\'interviens sur toute la chaîne : stratégie marketing, Design System, développement web optimisé GEO, formation utilisateurs. Une approche holistique qui garantit la cohérence et l\'efficacité de votre transformation digitale.',
                'image' => '/images/Iprij_feature/Feature_vision_globale.webp',
                'alt' => 'Illustration vision globale transformation digitale stratégie à production'
            ],
            [
                'title' => 'Approche Pédagogique',
                'short_description' => 'Formation pratique terrain',
                'detailed_description' => 'Pas de jargon technique inutile : je forme vos équipes avec des cas d\'usage concrets tirés de votre activité. Support documentaire personnalisé, accompagnement post-formation et disponibilité continue pour une vraie montée en compétences durable.',
                'image' => '/images/Iprij_feature/Feature_Approchee_pedagogique.webp',
                'alt' => 'Illustration approche pédagogique formation pratique accompagnement terrain'
            ]
        ];

        // Récupérer les 3 articles les plus récents publiés
        $recentPosts = Post::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('services', 'features', 'recentPosts'));
    }
}
