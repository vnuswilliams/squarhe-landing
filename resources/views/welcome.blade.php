<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        @php
            $seoTitle = 'Squarhe - Paie et RH pour PME africaines';
            $seoDescription = 'Squarhe simplifie la paie et la gestion RH des PME camerounaises et africaines avec une plateforme locale, claire et securisee.';
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
            html {
                scroll-behavior: smooth;
            }

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

            .testimonial-rail {
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
            }

            .testimonial-rail::-webkit-scrollbar {
                display: none;
            }

            .testimonial-marquee {
                animation: none;
            }

            @media (min-width: 768px) {
                .testimonial-marquee {
                    animation: testimonial-scroll 55s linear infinite;
                }

                .testimonial-rail:hover .testimonial-marquee {
                    animation-play-state: paused;
                }
            }

            @keyframes testimonial-scroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .testimonial-marquee {
                    animation: none;
                }
            }
        </style>
    </head>
    <body class="bg-[#f8fafc] font-sans text-slate-950 antialiased dark:bg-[#101827] dark:text-[#e6edf7]">
        @php
            $articles = [
                [
                    'category' => 'Paie',
                    'title' => 'Quotite saisissable vs quotite cessible : ce que chaque salarie au Cameroun doit comprendre',
                    'excerpt' => 'Une clarification simple pour eviter les confusions sur les retenues salariales et les obligations de chaque partie.',
                    'read_time' => '6 min',
                ],
                [
                    'category' => 'Droit du travail',
                    'title' => 'Faute grave vs faute lourde : la nuance qui peut couter cher',
                    'excerpt' => 'Les differences concretes, les consequences pour le salarie et les bons reflexes cote employeur.',
                    'read_time' => '5 min',
                ],
                [
                    'category' => 'Contrats',
                    'title' => 'CDD au Cameroun : reglementation, cas d usage et bonnes pratiques',
                    'excerpt' => 'Un guide pratique pour securiser vos recrutements temporaires et mieux archiver les documents RH.',
                    'read_time' => '7 min',
                ],
                [
                    'category' => 'Paie',
                    'title' => 'Indemnite de licenciement au Cameroun : calcul, conditions et droits',
                    'excerpt' => 'Les bases a connaitre pour calculer une indemnite avec methode et limiter les litiges.',
                    'read_time' => '8 min',
                ],
            ];

            $testimonials = [
                ['name' => 'Ariane M.', 'role' => 'Directrice administrative', 'quote' => 'Squarhe nous donne une vision claire de la paie avant validation. Les equipes gagnent du temps sans perdre le controle.'],
                ['name' => 'Patrick N.', 'role' => 'Fondateur PME services', 'quote' => 'La plateforme a transforme nos fins de mois. Les variables sont suivies, les oublis diminuent et les bulletins partent plus vite.'],
                ['name' => 'Nadia E.', 'role' => 'Responsable RH', 'quote' => 'J aime la simplicite de Squarhe. Les collaborateurs comprennent leurs espaces et les managers suivent les demandes sans relance.'],
                ['name' => 'Brice T.', 'role' => 'Gerant commerce', 'quote' => 'On a remplace les fichiers disperses par une base fiable. Les controles sont plus rapides et les decisions plus sereines.'],
                ['name' => 'Mireille K.', 'role' => 'Office manager', 'quote' => 'Squarhe nous aide a rester organises meme avec une petite equipe RH. Tout est lisible et accessible au bon moment.'],
                ['name' => 'Samuel F.', 'role' => 'CEO agence digitale', 'quote' => 'La vision produit est excellente : automatiser la paie tout en gardant l humain au centre des validations importantes.'],
                ['name' => 'Clarisse B.', 'role' => 'Comptable', 'quote' => 'Les impacts en temps reel sur la paie sont rassurants. Je vois tout de suite ce qui change et pourquoi.'],
                ['name' => 'Eric D.', 'role' => 'DG industrie legere', 'quote' => 'Squarhe apporte une discipline RH qui manquait a notre croissance. C est simple, structure et tres concret.'],
                ['name' => 'Joelle S.', 'role' => 'Chargee administration', 'quote' => 'Les documents RH sont enfin centralises. Nous retrouvons les contrats et bulletins sans fouiller dans plusieurs dossiers.'],
                ['name' => 'Thierry A.', 'role' => 'Dirigeant startup', 'quote' => 'Le logiciel nous evite les allers-retours inutiles. Les collaborateurs soumettent les infos et nous validons plus vite.'],
                ['name' => 'Estelle Y.', 'role' => 'Responsable operations', 'quote' => 'J apprecie la clarte des tableaux de bord. On comprend les effectifs, les absences et la masse salariale en quelques minutes.'],
                ['name' => 'Kevin O.', 'role' => 'Entrepreneur', 'quote' => 'Squarhe rend la paie moins stressante. Les processus sont guides et les erreurs deviennent beaucoup plus faciles a detecter.'],
                ['name' => 'Solange P.', 'role' => 'Assistante RH', 'quote' => 'La prise en main est rapide. Meme sans etre experte en paie, je sais quoi faire et dans quel ordre.'],
                ['name' => 'Marc L.', 'role' => 'DAF', 'quote' => 'La conformite est mieux suivie et les mises a jour rassurent la direction. C est un vrai gain de fiabilite.'],
                ['name' => 'Linda C.', 'role' => 'Manager equipe terrain', 'quote' => 'Les demandes d absences ne se perdent plus. Les validations sont plus propres et tout le monde voit le statut.'],
                ['name' => 'Oscar W.', 'role' => 'Fondateur cabinet conseil', 'quote' => 'Squarhe comprend les realites locales. Ce n est pas un outil generique plaque sur nos contraintes.'],
                ['name' => 'Grace H.', 'role' => 'RH multi-sites', 'quote' => 'La centralisation des donnees collaborateurs nous donne une base unique, plus propre et beaucoup plus exploitable.'],
                ['name' => 'Yves R.', 'role' => 'Responsable paie', 'quote' => 'Je garde le controle metier, mais Squarhe automatise les taches repetitives. C est exactement ce qu on attendait.'],
                ['name' => 'Diane V.', 'role' => 'Coordinatrice PME', 'quote' => 'Le support est disponible et les explications sont claires. On se sent accompagne, pas laisse seul face au logiciel.'],
                ['name' => 'Hermann G.', 'role' => 'Directeur general', 'quote' => 'La promesse est tenue : moins d Excel, moins de stress et plus de temps pour accompagner les equipes.'],
            ];

            $comparison = [
                'squarhe' => [
                    'title' => 'Avec Squarhe',
                    'items' => [
                        'Paie automatisee : impact en temps reel des variables.',
                        'Fiabilite : autonomie et suivi continu des donnees.',
                        'Conformite : 100% garantie via mises a jour auto.',
                        'Tarifs : abonnement sans engagement, aucun surcout.',
                        'Support : assistance 24h/24.',
                        'Espace collaborateur : inclus et securise.',
                    ],
                ],
                'expert' => [
                    'title' => 'Avec un expert RH',
                    'items' => [
                        'Paie manuelle : collecte manuelle, allers-retours.',
                        'Fiabilite : risques d erreurs, acces restreint.',
                        'Conformite : potentiels retards de mise a jour.',
                        'Tarifs : abonnement annuel eleve, moins flexible.',
                        'Support : interlocuteur souvent deborde.',
                        'Espace collaborateur : non disponible.',
                    ],
                ],
            ];

            $faqs = [
                ['question' => 'Ai-je besoin d avoir des connaissances particulieres en paie ?', 'answer' => 'Il n est pas necessaire d avoir des competences en paie. C est justement un des avantages de Squarhe : notre logiciel est simple et intuitif.'],
                ['question' => 'Combien coute Squarhe ?', 'answer' => 'Tout depend de la taille de votre entreprise. Consultez notre page tarifs pour plus de details.'],
                ['question' => 'Des frais supplementaires sont-ils a prevoir ?', 'answer' => 'Non, nous ne facturons pas de frais supplementaires pour les procedures courantes comme les bulletins, contrats et documents RH habituels.'],
                ['question' => 'Beneficierai-je d un accompagnement dedie ?', 'answer' => 'Oui, nos experts vous accompagnent tout au long de votre experience avec Squarhe.'],
                ['question' => 'Pourquoi avoir un logiciel de paie ?', 'answer' => 'Pour gagner du temps, eviter les erreurs et rester conforme a la reglementation en constante evolution.'],
                ['question' => 'Squarhe couvre-t-il tous les secteurs d activite ?', 'answer' => 'Certaines conventions comme le BTP ou l agriculture ne sont pas encore integrees, mais vous pouvez modifier et ajouter vos propres bases de calculs.'],
                ['question' => 'Comment utiliser ce logiciel ?', 'answer' => 'Squarhe est un SaaS accessible partout. Vous avez un espace administrateur et vos employes ont leur propre espace.'],
                ['question' => 'Quand changer de logiciel de paie ?', 'answer' => 'Quand vous voulez ! Idealement en fin de mois ou d exercice pour faciliter la migration.'],
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
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#avis">Avis</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#comparaison">Comparatif</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#faq">FAQ</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#articles">Blog</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#newsletter">Newsletter</a>
                    </div>

                    <flux:button href="#contact" variant="primary" icon="chat-bubble-left-right">
                        Contactez-nous
                    </flux:button>
                </nav>
            </header>

            <main id="top" data-scroll-reveal-scope>
                <section class="border-b border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-12 px-5 pb-16 pt-12 lg:grid-cols-[1fr_0.92fr] lg:px-8 lg:pb-20 lg:pt-18">
                        <div class="flex flex-col justify-center">
                            <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm font-bold text-emerald-800 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-200">
                                <flux:icon.sparkles class="size-4" />
                                SaaS RH local pour PME camerounaises
                            </div>
                            <h1 class="max-w-4xl text-4xl font-black leading-tight tracking-normal text-slate-950 dark:text-[#e6edf7] sm:text-5xl lg:text-6xl">
                                La paie et les RH enfin pensees pour les PME africaines.
                            </h1>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                                Automatisez la paie, centralisez vos employes et simplifiez vos obligations RH avec une plateforme concue pour les realites camerounaises.
                            </p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <flux:button href="#contact" variant="primary" icon="calendar-days" class="justify-center">
                                    Demander une demo
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
                                        <span class="rounded-lg bg-emerald-100 px-3 py-2 text-sm font-bold text-emerald-700">Pret</span>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-3">
                                        <div class="rounded-lg bg-slate-50 p-4">
                                            <p class="text-sm font-semibold text-slate-500">Employes</p>
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
                                            <span>Employe</span>
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
                                                @foreach (['Variables collectees', 'Calcul automatique', 'Controle CNPS', 'Bulletins generes'] as $step)
                                                    <div class="flex items-center gap-3">
                                                        <span class="grid size-6 place-items-center rounded-md bg-emerald-500 text-xs font-black text-white"><flux:icon.check class="size-4" /></span>
                                                        <span class="text-sm font-semibold text-slate-700">{{ $step }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="rounded-lg bg-slate-950 p-4 text-white">
                                            <p class="text-sm font-semibold text-slate-300">Conformite</p>
                                            <p class="mt-3 text-2xl font-black">CNPS</p>
                                            <p class="mt-2 text-sm leading-6 text-slate-300">Exports et historiques prets pour vos controles.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="grid gap-5 lg:grid-cols-4">
                        @foreach ([
                            ['Excel partout', 'Variables de paie dispersees et corrections de derniere minute.'],
                            ['WhatsApp desorganise', 'Absences, justificatifs et validations perdus dans les conversations.'],
                            ['CNPS compliquee', 'Suivi social difficile sans historique fiable et centralise.'],
                            ['Documents fragiles', 'Contrats et bulletins difficiles a retrouver au bon moment.'],
                        ] as [$title, $text])
                            <article class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#172033]">
                                <flux:icon.exclamation-triangle class="mb-4 size-6 text-amber-500" />
                                <h2 class="text-lg font-black text-slate-950 dark:text-[#e6edf7]">{{ $title }}</h2>
                                <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $text }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section id="solution" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Une solution complete</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Enfin un logiciel de paie et RH pense pour les realites camerounaises.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600">Squarhe reste simple, accessible et utile aux entreprises qui n ont pas toujours un service RH dedie.</p>
                        </div>
                        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ([
                                ['Concu pour les PME', 'Obligations sociales locales, equipes reduites, usage terrain.'],
                                ['Fini les erreurs de calcul', 'Paie automatisee avec primes, retenues, avances et absences.'],
                                ['Donnees RH centralisees', 'Contrats, conges, sanctions, documents et historique au meme endroit.'],
                                ['Tableaux de bord visuels', 'Effectifs, masse salariale et anomalies lisibles en quelques secondes.'],
                                ['Securite & confidentialite', 'Acces par role, sauvegardes, tracabilite et archivage fiable.'],
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
                        <p class="text-sm font-black uppercase text-emerald-700">Fonctionnalites cles</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Tout ce qu il faut pour reprendre le controle sans complexite.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">La plateforme couvre les processus essentiels avant d ajouter des options avancees.</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ([
                            ['Documents RH centralises', 'Contrats, bulletins, attestations et pieces employees archives proprement.'],
                            ['Automatisation de la paie', 'Calcul des salaires avec absences, primes, avances et frais.'],
                            ['Gestion des conges', 'Demandes, validations et soldes accessibles sans feuille Excel.'],
                            ['Onboarding employe', 'Informations personnelles, pieces jointes et contrat en quelques clics.'],
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
                            <p class="text-sm font-black uppercase text-emerald-300">Confiance & securite</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight sm:text-4xl">Vos donnees RH meritent une base serieuse.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-300">Squarhe est pense pour proteger les informations sensibles, organiser les acces et garder une trace claire des actions importantes.</p>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            @foreach ([
                                ['Donnees protegees', 'Acces controles et informations confidentielles separees par role.'],
                                ['Sauvegardes automatiques', 'Reduire le risque de perte de documents et d historiques.'],
                                ['Tracabilite complete', 'Savoir qui a modifie une variable ou valide une etape de paie.'],
                                ['Archivage securise', 'Bulletins, contrats et justificatifs conserves dans un espace structure.'],
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

                <section id="avis" class="border-y border-slate-200 bg-white py-12 dark:border-white/10 dark:bg-[#101827] sm:py-16">
                    <div class="mx-auto max-w-7xl px-5 lg:px-8">
                        <div class="flex flex-col justify-between gap-4 lg:flex-row lg:items-end">
                            <div class="max-w-3xl">
                                <p class="text-sm font-black uppercase text-emerald-700">Ils avancent avec Squarhe</p>
                                <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 sm:text-4xl">Une vision RH plus claire, portee par ceux qui gerent la paie au quotidien.</h2>
                            </div>
                            <p class="max-w-xl text-base leading-7 text-slate-600 dark:text-slate-300 sm:text-lg sm:leading-8">Sur mobile, faites glisser les avis. Sur ordinateur, survolez un avis pour mettre le defilement en pause, retrouver les couleurs et lire le temoignage tranquillement.</p>
                        </div>
                    </div>

                    <div class="testimonial-rail mt-8 overflow-x-auto pb-4 md:mt-10 md:overflow-hidden md:pb-0">
                        <div class="testimonial-marquee flex w-max snap-x snap-mandatory gap-4 px-5 md:gap-5 lg:px-8">
                            @foreach (array_merge($testimonials, $testimonials) as $index => $testimonial)
                                <article class="group w-[82vw] max-w-sm shrink-0 snap-center rounded-lg border border-slate-200 bg-white p-4 opacity-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl md:w-80 md:bg-slate-50/70 md:p-5 md:opacity-55 md:grayscale md:hover:bg-white md:hover:opacity-100 md:hover:grayscale-0 dark:border-white/10 dark:bg-[#172033] dark:md:bg-[#172033]/70 dark:hover:bg-[#1d2a40] @if ($index >= count($testimonials)) hidden md:block @endif">
                                    <div class="flex items-center gap-1 text-amber-300 transition group-hover:text-amber-400" aria-label="5 etoiles">
                                        @for ($star = 0; $star < 5; $star++)
                                            <flux:icon.star class="size-4 fill-current" />
                                        @endfor
                                    </div>
                                    <p class="mt-4 min-h-32 text-sm leading-7 text-slate-600 transition group-hover:text-slate-800 dark:text-slate-300 dark:group-hover:text-slate-100">“{{ $testimonial['quote'] }}”</p>
                                    <div class="mt-5 border-t border-slate-200 pt-4 dark:border-white/10">
                                        <p class="font-black text-slate-950 dark:text-[#e6edf7]">{{ $testimonial['name'] }}</p>
                                        <p class="mt-1 text-sm font-semibold text-blue-700 dark:text-blue-300">{{ $testimonial['role'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="comparaison" class="mx-auto max-w-7xl px-5 py-12 sm:py-16 lg:px-8">
                    <div class="mx-auto max-w-4xl text-left sm:text-center">
                        <p class="text-sm font-black uppercase text-blue-700">Squarhe ou expert RH</p>
                        <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 sm:text-4xl">Squarhe ou expert RH : qui fait quoi ?</h2>
                        <p class="mt-4 text-base leading-7 text-slate-600 dark:text-slate-300 sm:text-lg sm:leading-8">Un bon logiciel n est pas celui qui remplace l humain, mais celui qui lui donne le temps d en etre un.</p>
                    </div>

                    <div class="mt-8 grid gap-4 sm:mt-10 lg:grid-cols-2 lg:gap-5">
                        <article class="rounded-lg border border-emerald-200 bg-emerald-50 p-4 shadow-sm dark:border-emerald-400/20 dark:bg-emerald-400/10 sm:p-6">
                            <div class="mb-5 flex items-center gap-3 sm:mb-6">
                                <span class="grid size-9 shrink-0 place-items-center rounded-lg bg-emerald-600 text-white sm:size-10"><flux:icon.check class="size-5" /></span>
                                <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7] sm:text-2xl">{{ $comparison['squarhe']['title'] }}</h3>
                            </div>
                            <ul class="space-y-3 sm:space-y-4">
                                @foreach ($comparison['squarhe']['items'] as $item)
                                    <li class="flex gap-3 rounded-lg bg-white/80 p-3 text-sm text-slate-700 dark:bg-white/5 dark:text-slate-200 sm:p-4 sm:text-base">
                                        <span class="mt-2 size-2 shrink-0 rounded-full bg-emerald-600"></span>
                                        <span class="leading-7">{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>

                        <article class="rounded-lg border border-rose-200 bg-rose-50 p-4 shadow-sm dark:border-rose-400/20 dark:bg-rose-400/10 sm:p-6">
                            <div class="mb-5 flex items-center gap-3 sm:mb-6">
                                <span class="grid size-9 shrink-0 place-items-center rounded-lg bg-rose-600 text-white sm:size-10"><flux:icon.x-mark class="size-5" /></span>
                                <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7] sm:text-2xl">{{ $comparison['expert']['title'] }}</h3>
                            </div>
                            <ul class="space-y-3 sm:space-y-4">
                                @foreach ($comparison['expert']['items'] as $item)
                                    <li class="flex gap-3 rounded-lg bg-white/80 p-3 text-sm text-slate-700 dark:bg-white/5 dark:text-slate-200 sm:p-4 sm:text-base">
                                        <span class="mt-2 size-2 shrink-0 rounded-full bg-rose-600"></span>
                                        <span class="leading-7">{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    </div>
                </section>

                <section id="faq" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-4xl px-5 py-12 sm:py-16 lg:px-8">
                        <div class="text-left sm:text-center">
                            <p class="text-sm font-black uppercase text-emerald-700">Foire aux questions</p>
                            <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 sm:text-4xl">Les reponses aux questions avant de passer a Squarhe.</h2>
                        </div>
                        <div class="mt-8 space-y-3 sm:mt-10">
                            @foreach ($faqs as $index => $faq)
                                <details class="group rounded-lg border border-slate-200 bg-slate-50 p-4 open:bg-white open:shadow-lg dark:border-white/10 dark:bg-[#172033] dark:open:bg-[#1d2a40] sm:p-5" @if ($index === 0) open @endif>
                                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-4 font-black text-slate-950 dark:text-[#e6edf7] sm:gap-5">
                                        <span>{{ $faq['question'] }}</span>
                                        <span class="grid size-8 shrink-0 place-items-center rounded-lg bg-slate-200 text-slate-700 transition group-open:rotate-45 dark:bg-white/10 dark:text-slate-200"><flux:icon.plus class="size-4" /></span>
                                    </summary>
                                    <p class="mt-4 leading-8 text-slate-600 dark:text-slate-300">{{ $faq['answer'] }}</p>
                                </details>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="grid gap-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Pourquoi Squarhe</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Local, simple, rapide a deployer.</h2>
                        </div>
                        <div class="grid gap-4 lg:grid-cols-3">
                            @foreach ([
                                ['Concu au Cameroun', 'Le produit part des contraintes locales et des obligations sociales reelles.'],
                                ['Simplicite reelle', 'Des parcours courts, lisibles, faits pour les dirigeants et gestionnaires occupes.'],
                                ['Accessible aux PME', 'Une approche progressive, adaptee aux equipes de 5 a 150 personnes.'],
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
                                <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Conseils et actualites RH</h2>
                            </div>
                            <div class="max-w-lg">
                                <p class="leading-7 text-slate-600">Des ressources simples pour mieux gerer la paie, les contrats et la conformite sociale au Cameroun.</p>
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
                        <p class="mt-4 text-lg leading-8 text-slate-600">Parlez-nous de votre PME. Nous vous recontacterons pour comprendre vos besoins RH, paie et conformite.</p>
                        <div class="mt-8 rounded-lg border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#172033]">
                            <flux:icon.chat-bubble-left-right class="mb-3 size-6 text-blue-600" />
                            <p class="font-black text-slate-950 dark:text-[#e6edf7]">Contact direct</p>
                            <p class="mt-2 text-slate-600 dark:text-slate-300">Email : contact@squarhe.com</p>
                        </div>
                    </div>

                    <livewire:contact-form />
                </section>

                <section id="newsletter" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[1fr_1fr] lg:px-8">
                        <div>
                            <p class="text-sm font-black uppercase text-emerald-700">Newsletter</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Restez informe des nouveautes Squarhe.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600">Recevez chaque mois des conseils utiles pour mieux gerer la paie, les RH et la conformite sociale au Cameroun.</p>
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
                        <p class="mt-4 max-w-xl leading-7 text-slate-300">Pense avec passion, code avec soin, pour les PME africaines qui veulent une gestion RH plus simple et plus fiable.</p>
                    </div>
                    <div class="grid gap-6 text-sm text-slate-300 sm:grid-cols-2">
                        <div>
                            <p class="font-black text-white">Contact</p>
                            <p class="mt-3">contact@squarhe.com</p>
                        </div>
                        <div>
                            <p class="font-black text-white">Liens</p>
                            <div class="mt-3 flex flex-wrap gap-3">
                                <a href="#articles">Blog</a>
                                <a href="#contact">Contact</a>
                                <a href="#offres">Nos offres</a>
                                <a href="#securite">Securite</a>
                                <a href="#newsletter">Newsletter</a>
                                <a href="{{ route('legal.cgu') }}" wire:navigate>CGU</a>
                                <a href="{{ route('legal.cgv') }}" wire:navigate>CGV</a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <livewire:site-preferences />
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-sm text-slate-400">
                    © {{ date('Y') }} Squarhe. Tous droits reserves. Confidentialite - <a href="{{ route('legal.cgu') }}" wire:navigate>CGU</a> - <a href="{{ route('legal.cgv') }}" wire:navigate>CGV</a> - Cookies.
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
