<?php

namespace App\Controllers\Web;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home', [
            'title'         => 'Accueil',
            'card_projects' =>  [
                [
                    'title' =>  "Dashboard Analytics - Startup FinTech",
                    'desc'  =>  "Objectif : centraliser les KPIs en temps réel. Résultat : +40% d'efficacité opérationnelle.",
                    'link'  =>  "#",
                    'img'   =>  "images/projects/1.avif"
                ],
                [
                    'title' =>  "Application Mobile - Secteur Santé",
                    'desc'  =>  "Objectif : faciliter le suivi patient. Résultat : 5000+ utilisateurs en 3 mois.",
                    'link'  =>  "#",
                    'img'   =>  "images/projects/2.avif"
                ],
                [
                    'title' =>  "Plateforme SaaS - Gestion de Projets",
                    'desc'  =>  "Objectif : simplifier la gestion d'équipe. Résultat : adoption par 12 entreprises clientes.",
                    'link'  =>  "#",
                    'img'   =>  "images/projects/3.avif"
                ],
                [
                    'title' =>  "E-commerce - Marque de Mode",
                    'desc'  =>  "Objectif : augmenter les ventes en ligne. Résultat : +65% de conversions en 6 mois.",
                    'link'  =>  "#",
                    'img'   =>  "images/projects/4.avif"
                ]
            ],
            'primary_skills'    =>  [
                [
                    'name'  =>  "Laravel / Php",
                    'desc'  =>  "Développement d'applications web robustes avec Laravel, adaptées aux besoins métier : APIs sécurisées, gestion de données complexe et architectures évolutives."
                ],
                [
                    'name'  =>  "Vue.js / JavaScript",
                    'desc'  =>  "Création d'interfaces modernes et réactives avec Vue.js, centrées sur l'expérience utilisateur, la fluidité et la performance."
                ],
                [
                    'name'  =>  "Html / Css",
                    'desc'  =>  "Intégration soignée et responsive d'interfaces web, avec une attention particulière aux détails, à l'accessibilité et à la compatibilité multi-supports."
                ],
                [
                    'name'  =>  "Bootstrap",
                    'desc'  =>  "Intégration rapide et efficace d'interfaces modernes grâce à Bootstrap, avec une attention particulière à la cohérence visuelle et au responsive design."
                ]
            ],
            'secondary_skills'  =>  [
                [
                    'name'  =>  "React / JavaScript",
                    'desc'  =>  "Réalisation d'interfaces dynamiques avec React, en appliquant les principes de composants, de gestion d'état et de structuration d'applications front-end modernes."
                ],
                [
                    'name'  =>  "Node.js",
                    'desc'  =>  "Développement de services backend avec Node.js : création d'APIs, gestion des routes et échanges de données côté serveur."
                ],
                [
                    'name'  =>  "MongoDB / Atlas",
                    'desc'  =>  "Utilisation de bases de données NoSQL avec MongoDB et Atlas pour concevoir des structures de données flexibles et adaptées aux applications web."
                ]
            ]
        ]);
    }
}
