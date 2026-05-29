<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        @php
            $seoTitle = 'Squarhe - Paie et RH pour PME africaines';
            $seoDescription = 'Squarhe simplifie la paie et la gestion RH des PME camerounaises et africaines avec une plateforme locale, claire et sécurisée.';
            $seoUrl = url('/');
            $seoImage = asset('apple-touch-icon.png');
        @endphp

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $seoDescription }}">
        <meta name="keywords" content="logiciel RH Cameroun, logiciel paie Cameroun, SaaS RH Afrique, gestion RH PME, paie PME Cameroun, outil RH africain">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ $seoUrl }}">

        <meta property="og:type" content="website">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:site_name" content="Squarhe">
        <meta property="og:title" content="{{ $seoTitle }}">
        <meta property="og:description" content="{{ $seoDescription }}">
        <meta property="og:url" content="{{ $seoUrl }}">
        <meta property="og:image" content="{{ $seoImage }}">
        <meta property="og:image:alt" content="Logo Squarhe">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $seoTitle }}">
        <meta name="twitter:description" content="{{ $seoDescription }}">
        <meta name="twitter:image" content="{{ $seoImage }}">
        <meta name="twitter:image:alt" content="Logo Squarhe">

        <title>{{ $seoTitle }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts
        @fluxAppearance

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        <style>


            [x-cloak] {
                display: none !important;
            }

            .dark main h1,
            .dark main h2,
            .dark main h3 {
                color: #e6edf7;
            }

            .dark main p {
                color: #c4cfdd;
            }
        </style>
    </head>
    <body class="bg-[#f8fafc] font-sans text-slate-950 antialiased dark:bg-[#101827] dark:text-[#e6edf7]">
        @php
            $articles = [
                [
                    'category' => 'Paie',
                    'title' => 'Quotité saisissable vs quotité cessible : ce que chaque salarié au Cameroun doit comprendre',
                    'excerpt' => 'Une clarification simple pour éviter les confusions sur les retenues salariales et les obligations de chaque partie.',
                    'read_time' => '6 min',
                ],
                [
                    'category' => 'Droit du travail',
                    'title' => 'Faute grave vs faute lourde : la nuance qui peut coûter cher',
                    'excerpt' => 'Les différences concrètes, les conséquences pour le salarié et les bons réflexes côté employeur.',
                    'read_time' => '5 min',
                ],
                [
                    'category' => 'Contrats',
                    'title' => 'CDD au Cameroun : réglementation, cas d usage et bonnes pratiques',
                    'excerpt' => 'Un guide pratique pour sécuriser vos recrutements temporaires et mieux archiver les documents RH.',
                    'read_time' => '7 min',
                ],
                [
                    'category' => 'Paie',
                    'title' => 'Indemnité de licenciement au Cameroun : calcul, conditions et droits',
                    'excerpt' => 'Les bases à connaître pour calculer une indemnité avec méthode et limiter les litiges.',
                    'read_time' => '8 min',
                ],
            ];
        @endphp

        <div class="min-h-screen overflow-hidden">
            <header class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/90 backdrop-blur dark:border-white/10 dark:bg-[#101827]/90">
                <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8" aria-label="Navigation principale">
                    <a href="#top" class="flex items-center gap-3">
                        <span class="grid size-9 place-items-center rounded-lg bg-slate-950 text-white dark:bg-white dark:text-slate-950">
                            <x-app-logo-icon class="size-5" />
                        </span>
                        <span class="text-lg font-black tracking-normal text-slate-950 dark:text-[#e6edf7]">Squarhe</span>
                    </a>

                    <div class="hidden items-center gap-7 text-sm font-semibold text-slate-600 dark:text-slate-300 md:flex">
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#solution">Solution</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#offres">Nos offres</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#securite">Sécurité</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#articles">Blog</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#newsletter">Newsletter</a>
                    </div>

                    <flux:button href="#contact" variant="primary" icon="chat-bubble-left-right" />
                </nav>
            </header>

            <main id="top">
                <section class="border-b border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-12 px-5 pb-16 pt-12 lg:grid-cols-[1fr_0.92fr] lg:px-8 lg:pb-20 lg:pt-18">
                        <div class="flex flex-col justify-center">
                            <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm font-bold text-emerald-800 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-200">
                                <flux:icon.sparkles class="size-4" />
                                SaaS RH local pour PME camerounaises
                            </div>
                            <h1 class="max-w-4xl text-4xl font-black leading-tight tracking-normal text-slate-950 dark:text-[#e6edf7] sm:text-5xl lg:text-6xl">
                                La paie et les RH enfin pensées pour les PME africaines.
                            </h1>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                                Automatisez la paie, centralisez vos employés et simplifiez vos obligations RH avec une plateforme conçue pour les réalités camerounaises.
                            </p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <flux:button href="#contact" variant="primary" icon="calendar-days" class="justify-center">
                                    Demander une démo
                                </flux:button>
                                <flux:button href="#newsletter" variant="outline" icon="newspaper" class="justify-center">
                                    Recevoir les conseils RH
                                </flux:button>
                            </div>
                            <dl class="mt-10 grid max-w-2xl grid-cols-3 gap-3">
                                <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Cible</dt>
                                    <dd class="mt-1 text-xl font-black">5-150</dd>
                                </div>
                                <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Focus</dt>
                                    <dd class="mt-1 text-xl font-black">Paie</dd>
                                </div>
                                <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Pays</dt>
                                    <dd class="mt-1 text-xl font-black">CMR</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="relative">
                            <div class="rounded-lg border border-slate-200 bg-slate-950 p-3 shadow-2xl shadow-slate-950/20">
                                <div class="rounded-lg bg-white p-4">
                                    <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                                        <div>
                                            <p class="text-sm font-bold text-slate-500">Tableau de bord paie</p>
                                            <p class="text-2xl font-black text-slate-950">Mai 2026</p>
                                        </div>
                                        <span class="rounded-lg bg-emerald-100 px-3 py-2 text-sm font-bold text-emerald-700">Prêt</span>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-3">
                                        <div class="rounded-lg bg-slate-50 p-4">
                                            <p class="text-sm font-semibold text-slate-500">Employés</p>
                                            <p class="mt-2 text-3xl font-black">48</p>
                                        </div>
                                        <div class="rounded-lg bg-blue-50 p-4">
                                            <p class="text-sm font-semibold text-blue-700">Masse salariale</p>
                                            <p class="mt-2 text-3xl font-black text-blue-950">18.4M</p>
                                        </div>
                                        <div class="rounded-lg bg-emerald-50 p-4">
                                            <p class="text-sm font-semibold text-emerald-700">Anomalies</p>
                                            <p class="mt-2 text-3xl font-black text-emerald-950">0</p>
                                        </div>
                                    </div>

                                    <div class="mt-5 rounded-lg border border-slate-200">
                                        <div class="grid grid-cols-4 gap-3 border-b border-slate-200 bg-slate-50 px-4 py-3 text-xs font-bold uppercase text-slate-500">
                                            <span>Employé</span>
                                            <span>Statut</span>
                                            <span>Net</span>
                                            <span>Bulletin</span>
                                        </div>
                                        <div class="divide-y divide-slate-100 text-sm">
                                            @foreach ([['A. Mballa', 'Valide', '420 000', 'PDF'], ['N. Etoga', 'Controle', '365 000', 'PDF'], ['S. Njoya', 'Valide', '510 000', 'PDF']] as $row)
                                                <div class="grid grid-cols-4 gap-3 px-4 py-4">
                                                    <span class="font-bold text-slate-900">{{ $row[0] }}</span>
                                                    <span class="text-slate-600">{{ $row[1] }}</span>
                                                    <span class="font-bold text-slate-950">{{ $row[2] }}</span>
                                                    <span class="text-blue-700">{{ $row[3] }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-[1fr_0.75fr]">
                                        <div class="rounded-lg border border-slate-200 p-4">
                                            <div class="mb-4 flex items-center justify-between">
                                                <p class="font-black">Workflow paie</p>
                                                <p class="text-sm font-bold text-emerald-700">4/4</p>
                                            </div>
                                            <div class="space-y-3">
                                                @foreach (['Variables collectées', 'Calcul automatique', 'Contrôle CNPS', 'Bulletins générés'] as $step)
                                                    <div class="flex items-center gap-3">
                                                        <span class="grid size-6 place-items-center rounded-md bg-emerald-500 text-xs font-black text-white"><flux:icon.check class="size-4" /></span>
                                                        <span class="text-sm font-semibold text-slate-700">{{ $step }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="rounded-lg bg-slate-950 p-4 text-white">
                                            <p class="text-sm font-semibold text-slate-300">Conformité</p>
                                            <p class="mt-3 text-2xl font-black">CNPS</p>
                                            <p class="mt-2 text-sm leading-6 text-slate-300">Exports et historiques prêts pour vos contrôles.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="mb-10 max-w-3xl">
                        <p class="text-sm font-black uppercase text-amber-600 dark:text-amber-300">Vos blocages du quotidien</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">
                            Si votre gestion RH ressemble à ça
                        </h2>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-4 mb-10">
                        @foreach ([
                            ['Excel partout', 'Variables de paie dispersées et corrections de dernière minute.'],
                            ['WhatsApp désorganisé', 'Absences, justificatifs et validations perdus dans les conversations.'],
                            ['CNPS compliquée', 'Suivi social difficile sans historique fiable et centralisé.'],
                            ['Documents fragiles', 'Contrats et bulletins difficiles à retrouver au bon moment.'],
                        ] as [$title, $text])
                            <article class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#172033]">
                                <flux:icon.exclamation-triangle class="mb-4 size-6 text-amber-500" />
                                <h2 class="text-lg font-black text-slate-950 dark:text-[#e6edf7]">{{ $title }}</h2>
                                <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $text }}</p>
                            </article>
                        @endforeach
                    </div>

                    <div class="max-w-3xl">
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">
                            Vous n'êtes pas seul.
                        </h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">
                            Beaucoup de PME avancent avec des outils éparpillés, des validations urgentes et des documents difficiles à retrouver. Squarhe part de ces problèmes concrets pour remettre de l'ordre sans ajouter de complexité.
                        </p>
                    </div>

                </section>

                <section id="solution" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Une solution complète</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Enfin un logiciel de paie et RH pensé pour les réalités camerounaises.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600">Squarhe reste simple, accessible et utile aux entreprises qui n ont pas toujours un service RH dédié.</p>
                        </div>
                        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ([
                                ['Conçu pour les PME', 'Obligations sociales locales, équipes réduites, usage terrain.'],
                                ['Fini les erreurs de calcul', 'Paie automatisée avec primes, retenues, avances et absences.'],
                                ['Données RH centralisées', 'Contrats, congés, sanctions, documents et historique au même endroit.'],
                                ['Tableaux de bord visuels', 'Effectifs, masse salariale et anomalies lisibles en quelques secondes.'],
                                ['Sécurité & confidentialité', 'Accès par rôle, sauvegardes, traçabilité et archivage fiable.'],
                                ['Equipe disponible', 'Un accompagnement local qui comprend le quotidien des PME.'],
                            ] as [$title, $text])
                                <article class="rounded-lg border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg dark:border-white/10 dark:bg-[#172033] dark:hover:bg-[#1d2a40]">
                                    <flux:icon.check-badge class="mb-4 size-6 text-blue-600 dark:text-blue-300" />
                                    <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7]">{{ $title }}</h3>
                                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $text }}</p>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                <livewire:pricing-section />

                <section class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
                    <div>
                        <p class="text-sm font-black uppercase text-emerald-700">Fonctionnalités clés</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Tout ce qu il faut pour reprendre le contrôle sans complexité.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">La plateforme couvre les processus essentiels avant d ajouter des options avancées.</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            ['Documents RH centralisés', 'Contrats, bulletins, attestations et pièces employés archivés proprement.'],
                            ['Automatisation de la paie', 'Calcul des salaires avec absences, primes, avances et frais.'],
                            ['Gestion des congés', 'Demandes, validations et soldes accessibles sans feuille Excel.'],
                            ['Onboarding employé', 'Informations personnelles, pièces jointes et contrat en quelques clics.'],
                        ] as [$title, $text])
                            <div class="rounded-lg border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#172033]">
                                <flux:icon.folder class="mb-3 size-5 text-emerald-600 dark:text-emerald-300" />
                                <h3 class="font-black text-slate-950 dark:text-[#e6edf7]">{{ $title }}</h3>
                                <p class="mt-2 leading-7 text-slate-600 dark:text-slate-300">{{ $text }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section id="securite" class="bg-slate-950 text-white">
                    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                        <div>
                            <p class="text-sm font-black uppercase text-emerald-300">Confiance & sécurité</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight sm:text-4xl">Vos données RH méritent une base sérieuse.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-300">Squarhe est pensé pour protéger les informations sensibles, organiser les accès et garder une trace claire des actions importantes.</p>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            @foreach ([
                                ['Données protégées', 'Accès contrôlés et informations confidentielles séparées par rôle.'],
                                ['Sauvegardes automatiques', 'Réduire le risque de perte de documents et d historiques.'],
                                ['Traçabilité complète', 'Savoir qui a modifié une variable ou valide une étape de paie.'],
                                ['Archivage sécurisé', 'Bulletins, contrats et justificatifs conservés dans un espace structuré.'],
                            ] as [$title, $text])
                                <article class="rounded-lg border border-white/10 bg-white/5 p-5">
                                    <flux:icon.shield-check class="mb-4 size-6 text-emerald-300" />
                                    <h3 class="font-black">{{ $title }}</h3>
                                    <p class="mt-2 leading-7 text-slate-300">{{ $text }}</p>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="grid gap-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Pourquoi Squarhe</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Local, simple, rapide à déployer.</h2>
                        </div>
                        <div class="grid gap-4 lg:grid-cols-3">
                            @foreach ([
                                ['Conçu au Cameroun', 'Le produit part des contraintes locales et des obligations sociales réelles.'],
                                ['Simplicité réelle', 'Des parcours courts, lisibles, faits pour les dirigeants et gestionnaires occupés.'],
                                ['Accessible aux PME', 'Une approche progressive, adaptée aux équipes de 5 à 150 personnes.'],
                            ] as [$title, $text])
                                <div class="rounded-lg border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#172033]">
                                    <flux:icon.map-pin class="mb-3 size-5 text-blue-600 dark:text-blue-300" />
                                    <h3 class="font-black text-slate-950 dark:text-[#e6edf7]">{{ $title }}</h3>
                                    <p class="mt-2 leading-7 text-slate-600 dark:text-slate-300">{{ $text }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="articles" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                            <div>
                                <p class="text-sm font-black uppercase text-emerald-700">Derniers articles</p>
                                <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Conseils et actualités RH</h2>
                            </div>
                            <div class="max-w-lg">
                                <p class="leading-7 text-slate-600">Des ressources simples pour mieux gérer la paie, les contrats et la conformité sociale au Cameroun.</p>
                                <a href="https://blog.squarhe.com" target="_blank" rel="noopener noreferrer" class="mt-3 inline-flex items-center gap-2 text-sm font-black text-blue-700 dark:text-blue-300">
                                    Lire plus d articles
                                    <flux:icon.arrow-top-right-on-square class="size-4" />
                                </a>
                            </div>
                        </div>
                        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                            @foreach ($articles as $article)
                                <article class="flex min-h-64 flex-col rounded-lg border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg dark:border-white/10 dark:bg-[#172033] dark:hover:bg-[#1d2a40]">
                                    <div class="flex items-center justify-between gap-3">
                                        <span class="rounded-lg bg-blue-100 px-3 py-1 text-xs font-black text-blue-700">{{ $article['category'] }}</span>
                                        <span class="text-xs font-bold text-slate-500">{{ $article['read_time'] }}</span>
                                    </div>
                                    <h3 class="mt-5 text-lg font-black leading-snug text-slate-950 dark:text-[#e6edf7]">{{ $article['title'] }}</h3>
                                    <p class="mt-3 flex-1 leading-7 text-slate-600 dark:text-slate-300">{{ $article['excerpt'] }}</p>
                                    <a href="#newsletter" class="mt-5 inline-flex items-center gap-2 text-sm font-black text-blue-700 dark:text-blue-300">
                                        <flux:icon.arrow-right class="size-4" />
                                        Recevoir ce type de contenu
                                    </a>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="contact" class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                    <div>
                        <p class="text-sm font-black uppercase text-blue-700">Contact</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Passez moins de temps sur Excel. Concentrez-vous sur votre entreprise.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">Parlez-nous de votre PME. Nous vous recontacterons pour comprendre vos besoins RH, paie et conformité.</p>

                    </div>

                    <livewire:contact-form />
                </section>

                <section id="newsletter" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[1fr_1fr] lg:px-8">
                        <div>
                            <p class="text-sm font-black uppercase text-emerald-700">Newsletter</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Restez informé des nouveautés Squarhe.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600">Recevez chaque mois des conseils utiles pour mieux gérer la paie, les RH et la conformité sociale au Cameroun.</p>
                        </div>
                        <livewire:newsletter-form />
                    </div>
                </section>
            </main>

            <footer class="bg-slate-950 text-white">
                <div class="mx-auto grid max-w-7xl gap-8 px-5 py-10 lg:grid-cols-[1fr_1fr] lg:px-8">
                    <div>
                        <div class="flex items-center gap-3">
                            <span class="grid size-9 place-items-center rounded-lg bg-white text-slate-950">
                                <x-app-logo-icon class="size-5" />
                            </span>
                            <span class="text-lg font-black">Squarhe</span>
                        </div>
                        <p class="mt-4 max-w-xl leading-7 text-slate-300">Pensé avec passion, codé avec soin, pour les PME africaines qui veulent une gestion RH plus simple et plus fiable.</p>
                    </div>
                    <div class="grid gap-6 text-sm text-slate-300 sm:grid-cols-2">
                        <div>
                            <p class="font-black text-white">Liens</p>
                            <div class="mt-3 flex flex-wrap gap-3">
                                <a href="#articles">Blog</a>
                                <a href="#contact">Contact</a>
                                <a href="#offres">Nos offres</a>
                                <a href="#securite">Sécurité</a>
                                <a href="#newsletter">Newsletter</a>
                                <a href="{{ route('legal.cgu') }}" wire:navigate>CGU</a>
                                <a href="{{ route('legal.cgv') }}" wire:navigate>CGV</a>
                                <a href="{{ route('legal.cookie') }}" wire:navigate>Cookies</a>
                            </div>
                        </div>
                        <div>
                            <p class="font-black text-white">Contact</p>
                            <p class="mt-3">contact@squarhe.com</p>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <livewire:site-preferences />
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-sm text-slate-400">
                    © {{ date('Y') }} Squarhe. Tous droits réservés. Confidentialité - <a href="{{ route('legal.cgu') }}" wire:navigate>CGU</a> - <a href="{{ route('legal.cgv') }}" wire:navigate>CGV</a> - Cookies.
                </div>
            </footer>
        </div>
        @fluxScripts
        @persist('toast')
            <flux:toast.group position="top center">
                <flux:toast />
            </flux:toast.group>
        @endpersist
    </body>
</html>
