<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        @php
            $seoTitle = 'Squarhe Paie automatisée pour PME camerounaises';
            $seoDescription = 'Fini Excel et WhatsApp pour gérer votre paie. Squarhe calcule, génère vos bulletins et suit la CNPS en moins de 10 minutes par mois. Conçu pour les PME au Cameroun.';
            $seoUrl = url('/');
            $seoImage = asset('apple-touch-icon.png');
        @endphp

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $seoDescription }}">
        <meta name="keywords" content="logiciel paie Cameroun, logiciel RH Cameroun, SaaS RH Afrique, gestion RH PME, paie PME Cameroun, CNPS Cameroun, bulletin de paie automatique">
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


    </head>

    <body class="bg-[#f8fafc] font-sans text-slate-950 antialiased dark:bg-[#101827] dark:text-[#e6edf7]">

        @php
            // ─── Données articles ───────────────────────────────────────
            $articles = [
                ['category' => 'Paie', 'title' => 'Quotité saisissable vs quotité cessible : ce que chaque salarié au Cameroun doit comprendre', 'excerpt' => 'Une clarification simple pour éviter les confusions sur les retenues salariales et les obligations de chaque partie.', 'read_time' => '6 min'],
                ['category' => 'Droit du travail', 'title' => 'Faute grave vs faute lourde : la nuance qui peut coûter cher', 'excerpt' => 'Les différences concrètes, les conséquences pour le salarié et les bons réflexes côté employeur.', 'read_time' => '5 min'],
                ['category' => 'Contrats', 'title' => 'CDD au Cameroun : réglementation, cas d\'usage et bonnes pratiques', 'excerpt' => 'Un guide pratique pour sécuriser vos recrutements temporaires et mieux archiver les documents RH.', 'read_time' => '7 min'],
                ['category' => 'Paie', 'title' => 'Indemnité de licenciement au Cameroun : calcul, conditions et droits', 'excerpt' => 'Les bases à connaître pour calculer une indemnité avec méthode et limiter les litiges.', 'read_time' => '8 min'],
            ];

            // ─── Témoignages enrichis ───────────────────────────────────
            $testimonials = [
                ['name' => 'Ariane M.', 'role' => 'Directrice administrative', 'location' => 'Douala', 'sector' => 'Cabinet d\'architecture', 'result' => 'La validation de paie prend maintenant 20 minutes, contre 2 jours avant.', 'quote' => 'Squarhe nous donne une vision claire de la paie avant validation. Les équipes gagnent du temps sans perdre le contrôle.'],
                ['name' => 'Patrick N.', 'role' => 'Fondateur', 'location' => 'Yaoundé', 'sector' => 'PME services', 'result' => 'Zéro oubli de variable depuis que nous utilisons Squarhe.', 'quote' => 'La plateforme a transformé nos fins de mois. Les variables sont suivies, les oublis diminuent et les bulletins partent plus vite.'],
                ['name' => 'Nadia E.', 'role' => 'Responsable RH', 'location' => 'Douala', 'sector' => 'Distribution', 'result' => 'Les demandes de congés sont traitées en 1 clic au lieu de passer par WhatsApp.', 'quote' => 'J\'aime la simplicité de Squarhe. Les collaborateurs comprennent leurs espaces et les managers suivent les demandes sans relance.'],
                ['name' => 'Brice T.', 'role' => 'Gérant', 'location' => 'Bafoussam', 'sector' => 'Commerce', 'result' => 'Un historique CNPS propre et accessible en quelques secondes.', 'quote' => 'On a remplacé les fichiers dispersés par une base fiable. Les contrôles sont plus rapides et les décisions plus sereines.'],
                ['name' => 'Mireille K.', 'role' => 'Office Manager', 'location' => 'Douala', 'sector' => 'BTP', 'result' => 'Notre équipe de 30 personnes gérée sans service RH dédié.', 'quote' => 'Squarhe nous aide à rester organisés même avec une petite équipe RH. Tout est lisible et accessible au bon moment.'],
                ['name' => 'Samuel F.', 'role' => 'CEO', 'location' => 'Yaoundé', 'sector' => 'Agence digitale', 'result' => 'La paie automatisée sans perdre la main sur les validations importantes.', 'quote' => 'La vision produit est excellente : automatiser la paie tout en gardant l\'humain au centre des validations importantes.'],
                ['name' => 'Clarisse B.', 'role' => 'Comptable', 'location' => 'Douala', 'sector' => 'Services financiers', 'result' => 'Je vois en temps réel l\'impact de chaque variable sur la masse salariale.', 'quote' => 'Les impacts en temps réel sur la paie sont rassurants. Je vois tout de suite ce qui change et pourquoi.'],
                ['name' => 'Eric D.', 'role' => 'Directeur Général', 'location' => 'Douala', 'sector' => 'Industrie légère', 'result' => 'Une discipline RH qu\'on n\'arrivait pas à installer avec Excel.', 'quote' => 'Squarhe apporte une discipline RH qui manquait à notre croissance. C\'est simple, structuré et très concret.'],
                ['name' => 'Joëlle S.', 'role' => 'Chargée d\'administration', 'location' => 'Limbé', 'sector' => 'ONG', 'result' => 'Retrouver un contrat ou un bulletin prend 10 secondes, pas 10 minutes.', 'quote' => 'Les documents RH sont enfin centralisés. Nous retrouvons les contrats et bulletins sans fouiller dans plusieurs dossiers.'],
                ['name' => 'Thierry A.', 'role' => 'Dirigeant', 'location' => 'Yaoundé', 'sector' => 'Startup tech', 'result' => 'Les allers-retours de validation réduits de 70%.', 'quote' => 'Le logiciel nous évite les allers-retours inutiles. Les collaborateurs soumettent les infos et nous validons plus vite.'],
                ['name' => 'Estelle Y.', 'role' => 'Responsable opérations', 'location' => 'Douala', 'sector' => 'Logistique', 'result' => 'Effectifs, absences et masse salariale lus en 3 minutes chaque matin.', 'quote' => 'J\'apprécie la clarté des tableaux de bord. On comprend les effectifs, les absences et la masse salariale en quelques minutes.'],
                ['name' => 'Kevin O.', 'role' => 'Entrepreneur', 'location' => 'Kribi', 'sector' => 'Hôtellerie', 'result' => 'La paie de 45 saisonniers gérée sans stress ni erreur.', 'quote' => 'Squarhe rend la paie moins stressante. Les processus sont guidés et les erreurs deviennent beaucoup plus faciles à détecter.'],
                ['name' => 'Solange P.', 'role' => 'Assistante RH', 'location' => 'Yaoundé', 'sector' => 'Consulting', 'result' => 'Opérationnelle sur la paie en moins d\'une journée de formation.', 'quote' => 'La prise en main est rapide. Même sans être experte en paie, je sais quoi faire et dans quel ordre.'],
                ['name' => 'Marc L.', 'role' => 'DAF', 'location' => 'Douala', 'sector' => 'Import-Export', 'result' => 'Zéro retard sur nos déclarations CNPS cette année.', 'quote' => 'La conformité est mieux suivie et les mises à jour rassurent la direction. C\'est un vrai gain de fiabilité.'],
                ['name' => 'Linda C.', 'role' => 'Manager terrain', 'location' => 'Bafoussam', 'sector' => 'Agriculture', 'result' => 'Les absences suivies en temps réel pour une équipe de 80 personnes.', 'quote' => 'Les demandes d\'absences ne se perdent plus. Les validations sont plus propres et tout le monde voit le statut.'],
                ['name' => 'Oscar W.', 'role' => 'Fondateur', 'location' => 'Douala', 'sector' => 'Cabinet conseil', 'result' => 'Un outil qui connaît la CNPS, le Code du travail camerounais et nos réalités.', 'quote' => 'Squarhe comprend les réalités locales. Ce n\'est pas un outil générique plaqué sur nos contraintes.'],
                ['name' => 'Grace H.', 'role' => 'RH multi-sites', 'location' => 'Douala & Yaoundé', 'sector' => 'Restauration', 'result' => 'Une seule base pour 3 établissements, sans doublon ni erreur.', 'quote' => 'La centralisation des données collaborateurs nous donne une base unique, plus propre et beaucoup plus exploitable.'],
                ['name' => 'Yves R.', 'role' => 'Responsable paie', 'location' => 'Yaoundé', 'sector' => 'Télécoms', 'result' => 'Les tâches répétitives automatisées, je me concentre sur ce qui compte vraiment.', 'quote' => 'Je garde le contrôle métier, mais Squarhe automatise les tâches répétitives. C\'est exactement ce qu\'on attendait.'],
                ['name' => 'Diane V.', 'role' => 'Coordinatrice PME', 'location' => 'Douala', 'sector' => 'Santé privée', 'result' => 'Un support qui répond en moins de 48h et comprend nos questions concrètes.', 'quote' => 'Le support est disponible et les explications sont claires. On se sent accompagné, pas laissé seul face au logiciel.'],
                ['name' => 'Hermann G.', 'role' => 'Directeur Général', 'location' => 'Douala', 'sector' => 'Formation professionnelle', 'result' => 'Moins d\'Excel, moins de stress. Plus de temps pour développer l\'entreprise.', 'quote' => 'La promesse est tenue : moins d\'Excel, moins de stress et plus de temps pour accompagner les équipes.'],
            ];

            // ─── Comparatif ─────────────────────────────────────────────
            $comparison = [
                'squarhe' => [
                    'title' => 'Avec Squarhe',
                    'items' => [
                        'Votre paie calculée automatiquement en quelques minutes, variables comprises.',
                        'Bulletins PDF générés et accessibles pour chaque collaborateur.',
                        'Conformité CNPS et IRPP garantie via mises à jour automatiques.',
                        'Abonnement mensuel sans engagement vous payez ce que vous utilisez.',
                        'Support WhatsApp réactif par une équipe qui connaît vos contraintes locales.',
                        'Espace collaborateur inclus : chaque employé voit ses bulletins et congés.',
                    ],
                ],
                'sans' => [
                    'title' => 'Sans Squarhe (aujourd\'hui)',
                    'items' => [
                        'Collecte des variables par WhatsApp la veille du virement, avec des oublis.',
                        'Bulletins saisis à la main, erreurs fréquentes, corrections en urgence.',
                        'Risque de redressement CNPS faute d\'historique fiable et centralisé.',
                        'Coût d\'un gestionnaire RH entre 150 000 et 300 000 FCFA/mois.',
                        'Interlocuteur externe surchargé, réponses lentes aux urgences.',
                        'Documents éparpillés dans des dossiers partagés introuvables.',
                    ],
                ],
            ];

            // ─── FAQ ─────────────────────────────────────────────────────
            $faqs = [
                ['question' => 'Ai-je besoin de connaissances en paie pour utiliser Squarhe ?', 'answer' => 'Non. Squarhe est conçu pour les dirigeants et gestionnaires qui ne sont pas experts en paie. L\'interface vous guide étape par étape : vous saisissez les variables, Squarhe calcule, vous validez. Notre équipe vous accompagne à la prise en main la plupart de nos clients sont opérationnels en moins d\'une journée.'],
                ['question' => 'Combien coûte Squarhe concrètement pour mon équipe ?', 'answer' => 'Squarhe démarre à 14 900 FCFA/mois pour 5 employés (offre Starter). Pour 20 employés, l\'offre Croissance revient à 34 900 FCFA/mois soit moins de 1 750 FCFA par employé. Utilisez le simulateur de tarifs sur cette page pour voir votre prix exact selon votre effectif.'],
                ['question' => 'Y a-t-il des frais cachés ou des suppléments ?', 'answer' => 'Non. Le prix affiché couvre les bulletins, les documents RH habituels et le support. Il n\'y a pas de facturation à l\'acte pour les procédures courantes. Seul le setup fee (mise en service initiale) est séparé, négociable selon votre situation.'],
                ['question' => 'Est-ce que Squarhe couvre la CNPS et l\'IRPP camerounais ?', 'answer' => 'Oui. Squarhe intègre les règles de calcul CNPS et IRPP en vigueur au Cameroun, avec des mises à jour automatiques en cas de changement réglementaire. Vous disposez également des exports nécessaires pour vos déclarations et contrôles.'],
                ['question' => 'Que se passe-t-il si mon équipe grossit ?', 'answer' => 'Squarhe s\'adapte à votre croissance. Vous pouvez passer d\'une offre à l\'autre à tout moment, sans engagement annuel. Le simulateur de tarifs sur cette page calcule automatiquement votre prix en fonction de votre effectif.'],
                ['question' => 'Squarhe couvre-t-il tous les secteurs d\'activité ?', 'answer' => 'Squarhe couvre la majorité des PME de services, commerce et industrie légère. Certaines conventions spécifiques comme le BTP et l\'agriculture ne sont pas encore entièrement intégrées, mais vous pouvez configurer vos propres bases de calcul. Contactez-nous pour évaluer votre situation.'],
                ['question' => 'Comment se passe la migration depuis Excel ?', 'answer' => 'Nous vous accompagnons pendant la migration. Notre équipe reprend vos données existantes (employés, historique, variables) et les importe dans Squarhe. La migration se fait idéalement en fin de mois ou d\'exercice pour une continuité parfaite.'],
                ['question' => 'Mes données sont-elles sécurisées ?', 'answer' => 'Oui. Les accès sont contrôlés par rôle (administrateur, gestionnaire, employé), vos données sont sauvegardées automatiquement et toutes les actions importantes sont tracées. Vos bulletins et contrats sont archivés dans un espace structuré et sécurisé.'],
            ];
        @endphp

        <div class="min-h-screen overflow-hidden">

            {{-- ═══════════════════════════════════════════════════
                 NAVIGATION
            ═══════════════════════════════════════════════════ --}}
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
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#offres">Tarifs</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#avis">Avis</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#faq">FAQ</a>
                        <a class="transition hover:text-slate-950 dark:hover:text-white" href="#articles">Blog</a>
                    </div>

                    <flux:button href="#contact" variant="primary" icon="calendar-days">
                        Demander une démo gratuite
                    </flux:button>
                </nav>
            </header>

            <main id="top" data-scroll-reveal-scope>

                {{-- ═══════════════════════════════════════════════════
                     HERO
                ═══════════════════════════════════════════════════ --}}
                <section class="border-b border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-12 px-5 pb-16 pt-12 lg:grid-cols-[1fr_0.92fr] lg:px-8 lg:pb-20 lg:pt-18">
                        <div class="flex flex-col justify-center">

                            {{-- Badge social proof --}}
                            <div class="mb-6 inline-flex w-fit items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm font-bold text-emerald-800 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-200">
                                <span class="badge-live size-2 rounded-full bg-emerald-500"></span>
                                Utilisé par des PME à Douala, Yaoundé, Bafoussam et Kribi
                            </div>

                            {{-- Titre axé sur la douleur --}}
                            <h1 class="max-w-4xl text-4xl font-black leading-tight tracking-normal text-slate-950 dark:text-[#e6edf7] sm:text-5xl lg:text-6xl">
                                Vous passez encore vos fins de mois sur Excel à corriger des erreurs de paie.
                            </h1>

                            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                                Squarhe calcule la paie, génère vos bulletins PDF et suit vos obligations CNPS automatiquement. <strong class="text-slate-950 dark:text-white">En moins de 10 minutes par mois.</strong> Conçu pour les réalités des PME camerounaises.
                            </p>

                            {{-- CTAs --}}
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <flux:button href="#contact" variant="primary" icon="calendar-days" class="justify-center text-base">
                                    Demander ma démo gratuite
                                </flux:button>
                                <flux:button href="#offres" variant="outline" icon="calculator" class="justify-center">
                                    Simuler mon tarif
                                </flux:button>
                            </div>

                            {{-- Réassurances --}}
                            <p class="mt-4 text-sm text-slate-500 dark:text-slate-400">
                                ✓ Sans engagement &nbsp;·&nbsp; ✓ Onboarding accompagné &nbsp;·&nbsp; ✓ Support WhatsApp inclus
                            </p>

                            {{-- Stats clés --}}
                            <dl class="mt-10 grid max-w-2xl grid-cols-3 gap-3">
                                <div class="stat-card rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Équipes gérées</dt>
                                    <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">5–150</dd>
                                    <dd class="mt-0.5 text-xs text-slate-500">employés</dd>
                                </div>
                                <div class="stat-card rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Paie bouclée</dt>
                                    <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">&lt; 10 min</dd>
                                    <dd class="mt-0.5 text-xs text-slate-500">par mois</dd>
                                </div>
                                <div class="stat-card rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                                    <dt class="text-xs font-bold uppercase text-slate-500">Conformité</dt>
                                    <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">CNPS</dd>
                                    <dd class="mt-0.5 text-xs text-slate-500">intégrée</dd>
                                </div>
                            </dl>
                        </div>

                        {{-- Dashboard mock --}}
                        <div class="relative">
                            <div class="rounded-lg border border-slate-200 bg-slate-950 p-3 shadow-2xl shadow-slate-950/20">
                                <div class="rounded-lg bg-white p-4">
                                    <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                                        <div>
                                            <p class="text-sm font-bold text-slate-500">Tableau de bord paie</p>
                                            <p class="text-2xl font-black text-slate-950">Mai 2026</p>
                                        </div>
                                        <span class="rounded-lg bg-emerald-100 px-3 py-2 text-sm font-bold text-emerald-700">✓ Prêt</span>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-3">
                                        <div class="rounded-lg bg-slate-50 p-4">
                                            <p class="text-sm font-semibold text-slate-500">Employés</p>
                                            <p class="mt-2 text-3xl font-black">48</p>
                                        </div>
                                        <div class="rounded-lg bg-blue-50 p-4">
                                            <p class="text-sm font-semibold text-blue-700">Masse salariale</p>
                                            <p class="mt-2 text-3xl font-black text-blue-950">18,4 M</p>
                                        </div>
                                        <div class="rounded-lg bg-emerald-50 p-4">
                                            <p class="text-sm font-semibold text-emerald-700">Anomalies</p>
                                            <p class="mt-2 text-3xl font-black text-emerald-950">0</p>
                                        </div>
                                    </div>

                                    <div class="mt-5 rounded-lg border border-slate-200">
                                        <div class="grid grid-cols-4 gap-3 border-b border-slate-200 bg-slate-50 px-4 py-3 text-xs font-bold uppercase text-slate-500">
                                            <span>Employé</span><span>Statut</span><span>Net</span><span>Bulletin</span>
                                        </div>
                                        <div class="divide-y divide-slate-100 text-sm">
                                            @foreach ([['A. Mballa', 'Validé', '420 000', 'PDF'], ['N. Etoga', 'Contrôle', '365 000', 'PDF'], ['S. Njoya', 'Validé', '510 000', 'PDF']] as $row)
                                                <div class="grid grid-cols-4 gap-3 px-4 py-4">
                                                    <span class="font-bold text-slate-900">{{ $row[0] }}</span>
                                                    <span class="{{ $row[1] === 'Validé' ? 'text-emerald-700 font-semibold' : 'text-amber-600 font-semibold' }}">{{ $row[1] }}</span>
                                                    <span class="font-bold text-slate-950">{{ $row[2] }}</span>
                                                    <span class="font-bold text-blue-700">{{ $row[3] }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-[1fr_0.75fr]">
                                        <div class="rounded-lg border border-slate-200 p-4">
                                            <div class="mb-4 flex items-center justify-between">
                                                <p class="font-black">Workflow paie</p>
                                                <p class="text-sm font-bold text-emerald-700">4/4 ✓</p>
                                            </div>
                                            <div class="space-y-3">
                                                @foreach (['Variables collectées', 'Calcul automatique', 'Contrôle CNPS', 'Bulletins générés'] as $step)
                                                    <div class="flex items-center gap-3">
                                                        <span class="grid size-6 place-items-center rounded-md bg-emerald-500 text-white"><flux:icon.check class="size-4" /></span>
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

                {{-- ═══════════════════════════════════════════════════
                     PROBLÈMES miroir de la réalité vécue
                ═══════════════════════════════════════════════════ --}}
                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="mb-10 max-w-2xl">
                        <p class="text-sm font-black uppercase text-amber-600">Vous vous reconnaissez ?</p>
                        <h2 class="mt-2 text-2xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-3xl">Ce que vivent la plupart des PME avant Squarhe.</h2>
                    </div>
                    <div class="grid gap-5 lg:grid-cols-4">
                        @foreach ([
                            ['icon' => 'exclamation-triangle', 'title' => '"Je reçois encore les variables par WhatsApp la veille du virement"', 'text' => 'Variables dispersées, corrections de dernière minute, et toujours la peur d\'avoir oublié quelqu\'un.'],
                            ['icon' => 'exclamation-triangle', 'title' => '"Je ne sais plus qui a validé quoi, ni quand"', 'text' => 'Absences, justificatifs et validations perdus dans les conversations. Aucune traçabilité.'],
                            ['icon' => 'exclamation-triangle', 'title' => '"J\'ai peur à chaque contrôle CNPS"', 'text' => 'Historique incomplet, déclarations incertaines, risque de redressement difficile à anticiper.'],
                            ['icon' => 'exclamation-triangle', 'title' => '"J\'ai perdu un contrat et un bulletin l\'an dernier"', 'text' => 'Documents éparpillés dans plusieurs dossiers, introuvables au moment où on en a besoin.'],
                        ] as $problem)
                            <article class="problem-card rounded-lg border border-slate-200 bg-white p-5 shadow-sm dark:border-white/10 dark:bg-[#172033]">
                                <flux:icon.exclamation-triangle class="mb-4 size-6 text-amber-500" />
                                <h2 class="text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">{{ $problem['title'] }}</h2>
                                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $problem['text'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     SOLUTION
                ═══════════════════════════════════════════════════ --}}
                <section id="solution" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Ce que Squarhe change</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Votre prochaine paie peut partir sans stress. Voici comment.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600">Squarhe couvre les processus essentiels paie, documents, congés, conformité sans complexité, sans service RH dédié.</p>
                        </div>
                        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ([
                                ['title' => 'Votre paie juste du premier coup', 'text' => 'Primes, retenues, avances, absences tout est calculé automatiquement selon vos règles. Vous validez, vous ne recalculez plus.', 'icon' => 'check-badge'],
                                ['title' => 'Bulletins PDF générés en un clic', 'text' => 'Chaque employé reçoit son bulletin dans son espace personnel. Fini les bulletins envoyés par WhatsApp ou perdus dans un dossier partagé.', 'icon' => 'check-badge'],
                                ['title' => 'CNPS et IRPP intégrés et à jour', 'text' => 'Les règles camerounaises sont intégrées et mises à jour automatiquement. Vos exports de déclaration sont prêts en quelques secondes.', 'icon' => 'check-badge'],
                                ['title' => 'Congés et absences sans Excel', 'text' => 'Demandes, validations, soldes tout passe par la plateforme. Les managers voient en temps réel, les employés aussi.', 'icon' => 'check-badge'],
                                ['title' => 'Tous vos documents au même endroit', 'text' => 'Contrats, bulletins, attestations, pièces jointes archivés proprement, retrouvés en 10 secondes.', 'icon' => 'check-badge'],
                                ['title' => 'Une équipe qui comprend votre quotidien', 'text' => 'Pas un support qui vous demande d\'ouvrir un ticket. Une équipe camerounaise qui connaît la CNPS, le Code du travail et vos contraintes réelles.', 'icon' => 'check-badge'],
                            ] as $feature)
                                <article class="rounded-lg border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg dark:border-white/10 dark:bg-[#172033] dark:hover:bg-[#1d2a40]">
                                    <flux:icon.check-badge class="mb-4 size-6 text-blue-600 dark:text-blue-300" />
                                    <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7]">{{ $feature['title'] }}</h3>
                                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $feature['text'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     COMMENT ÇA MARCHE section manquante ajoutée
                ═══════════════════════════════════════════════════ --}}
                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="mb-12 max-w-2xl">
                        <p class="text-sm font-black uppercase text-blue-700">En pratique</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">De votre Excel à Squarhe en 3 étapes.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">Pas de migration compliquée. Notre équipe reprend vos données et vous êtes opérationnel pour votre prochain cycle de paie.</p>
                    </div>
                    <div class="grid gap-8 lg:grid-cols-3">
                        @foreach ([
                            ['num' => '01', 'title' => 'On reprend vos données', 'text' => 'Vous nous partagez votre fichier Excel actuel. Notre équipe importe vos employés, vos historiques et vos variables. Vous ne recommencez pas de zéro.', 'color' => 'bg-blue-600'],
                            ['num' => '02', 'title' => 'On configure votre paie', 'text' => 'Nous paramétrons vos règles de calcul (primes, retenues, CNPS, IRPP) selon votre situation. Une session de validation ensemble pour s\'assurer que tout est juste.', 'color' => 'bg-emerald-600'],
                            ['num' => '03', 'title' => 'Vous lancez votre première paie', 'text' => 'Saisissez vos variables, validez en un clic, vos bulletins sont générés. Notre équipe reste disponible sur WhatsApp pour vos premières semaines.', 'color' => 'bg-slate-950 dark:bg-white'],
                        ] as $step)
                            <div class="flex gap-5">
                                <div class="flex flex-col items-center">
                                    <span class="{{ $step['color'] }} grid size-12 shrink-0 place-items-center rounded-xl text-lg font-black text-white dark:text-slate-950">{{ $step['num'] }}</span>
                                    <div class="mt-3 w-px flex-1 bg-slate-200 dark:bg-white/10"></div>
                                </div>
                                <div class="pb-8">
                                    <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7]">{{ $step['title'] }}</h3>
                                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $step['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     TARIFS
                ═══════════════════════════════════════════════════ --}}
                <livewire:pricing-section />

                {{-- ═══════════════════════════════════════════════════
                     FONCTIONNALITÉS CLÉS
                ═══════════════════════════════════════════════════ --}}
                <section class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
                    <div>
                        <p class="text-sm font-black uppercase text-emerald-700">Fonctionnalités clés</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Tout ce qu'il faut pour reprendre le contrôle, sans complexité.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">La plateforme couvre les processus essentiels. Vous commencez simple, vous évoluez à votre rythme.</p>
                        <flux:button href="#contact" variant="primary" icon="calendar-days" class="mt-8">
                            Voir une démo
                        </flux:button>
                    </div>
                   <div class="grid gap-4 sm:grid-cols-2">
    @foreach ([
        ['title' => 'Documents RH centralisés', 'text' => 'Contrats, bulletins, attestations et pièces employés archivés proprement. Retrouvés en 10 secondes.'],
        ['title' => 'Paie automatisée', 'text' => 'Calcul des salaires avec absences, primes, avances et frais. Zéro formule Excel à maintenir.'],
        ['title' => 'Gestion des congés', 'text' => 'Demandes, validations et soldes accessibles sans feuille Excel. Tout le monde voit le même état.'],
        ['title' => 'Onboarding employé', 'text' => 'Informations personnelles, pièces jointes et contrat intégrés en quelques clics. Dossier complet dès le premier jour.'],
    ] as $item)
        <div class="rounded-lg border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#172033]">
            <flux:icon.folder class="mb-3 size-5 text-emerald-600 dark:text-emerald-300" />

            <h3 class="font-black text-slate-950 dark:text-[#e6edf7]">
                {{ $item['title'] }}
            </h3>

            <p class="mt-2 leading-7 text-slate-600 dark:text-slate-300">
                {{ $item['text'] }}
            </p>
        </div>
    @endforeach
</div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     SÉCURITÉ
                ═══════════════════════════════════════════════════ --}}
                <section id="securite" class="bg-slate-950 text-white">
                    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                        <div>
                            <p class="text-sm font-black uppercase text-emerald-300">Confiance & sécurité</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight sm:text-4xl">Vos données RH méritent une base sérieuse.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-300">Squarhe est pensé pour protéger les informations sensibles, organiser les accès et garder une trace claire de chaque action.</p>
                        </div>
                      <div class="grid gap-4 sm:grid-cols-2">
    @foreach ([
        ['title' => 'Accès contrôlés par rôle', 'text' => 'Administrateur, gestionnaire, employé chacun voit uniquement ce qui le concerne. Aucune donnée confidentielle exposée.'],
        ['title' => 'Sauvegardes automatiques', 'text' => 'Vos données sont sauvegardées automatiquement. Vous ne perdez jamais un document ou un historique.'],
        ['title' => 'Traçabilité complète', 'text' => 'Chaque modification de variable, chaque validation de paie est enregistrée. Vous savez qui a fait quoi et quand.'],
        ['title' => 'Archivage sécurisé', 'text' => 'Bulletins, contrats et justificatifs conservés dans un espace structuré, accessible à tout moment.'],
    ] as $item)
        <article class="rounded-lg border border-white/10 bg-white/5 p-5">
            <flux:icon.shield-check class="mb-4 size-6 text-emerald-300" />

            <h3 class="font-black">
                {{ $item['title'] }}
            </h3>

            <p class="mt-2 leading-7 text-slate-300">
                {{ $item['text'] }}
            </p>
        </article>
    @endforeach
</div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     TÉMOIGNAGES enrichis avec résultat + localisation
                ═══════════════════════════════════════════════════ --}}
                <section id="avis" class="border-y border-slate-200 bg-white py-12 dark:border-white/10 dark:bg-[#101827] sm:py-16">
                    <div class="mx-auto max-w-7xl px-5 lg:px-8">
                        <div class="flex flex-col justify-between gap-4 lg:flex-row lg:items-end">
                            <div class="max-w-3xl">
                                <p class="text-sm font-black uppercase text-emerald-700">Ils avancent avec Squarhe</p>
                                <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 sm:text-4xl">Des PME camerounaises qui ont remplacé Excel par une solution fiable.</h2>
                            </div>

                        </div>
                    </div>

                    <div class="testimonial-rail mt-8 overflow-x-auto pb-4 md:mt-10 md:overflow-hidden md:pb-0">
                        <div class="testimonial-marquee flex w-max snap-x snap-mandatory gap-4 px-5 md:gap-5 lg:px-8">
                            @foreach (array_merge($testimonials, $testimonials) as $index => $t)
                                <article class="group w-[82vw] max-w-sm shrink-0 snap-center rounded-lg border border-slate-200 bg-white p-4 opacity-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl md:w-80 md:bg-slate-50/70 md:p-5 md:opacity-55 md:grayscale md:hover:bg-white md:hover:opacity-100 md:hover:grayscale-0 dark:border-white/10 dark:bg-[#172033] dark:md:bg-[#172033]/70 dark:hover:bg-[#1d2a40] @if ($index >= count($testimonials)) hidden md:block @endif">
                                    <div class="flex items-center gap-1 text-amber-400" aria-label="5 étoiles">
                                        @for ($s = 0; $s < 5; $s++)<flux:icon.star class="size-4 fill-current" />@endfor
                                    </div>

                                    {{-- Résultat concret mis en avant --}}
                                    <p class="mt-3 rounded-md bg-emerald-50 px-3 py-2 text-xs font-bold text-emerald-800 dark:bg-emerald-400/10 dark:text-emerald-300">
                                        ✓ {{ $t['result'] }}
                                    </p>

                                    <p class="mt-3 min-h-24 text-sm leading-7 text-slate-600 transition group-hover:text-slate-800 dark:text-slate-300 dark:group-hover:text-slate-100">"{{ $t['quote'] }}"</p>

                                    <div class="mt-4 border-t border-slate-200 pt-4 dark:border-white/10">
                                        <p class="font-black text-slate-950 dark:text-[#e6edf7]">{{ $t['name'] }}</p>
                                        <p class="mt-0.5 text-sm font-semibold text-blue-700 dark:text-blue-300">{{ $t['role'] }} · {{ $t['sector'] }}</p>
                                        <p class="mt-0.5 text-xs text-slate-400">📍 {{ $t['location'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     COMPARATIF Avec / Sans
                ═══════════════════════════════════════════════════ --}}
                <section id="comparaison" class="mx-auto max-w-7xl px-5 py-12 sm:py-16 lg:px-8">
                    <div class="mx-auto max-w-4xl text-left sm:text-center">
                        <p class="text-sm font-black uppercase text-blue-700">Avant / Après</p>
                        <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">Ce qui change concrètement avec Squarhe.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-600 dark:text-slate-300 sm:text-lg sm:leading-8">Un bon logiciel ne remplace pas l'humain il lui redonne le temps d'en être un.</p>
                    </div>

                    <div class="mt-8 grid gap-4 sm:mt-10 lg:grid-cols-2 lg:gap-5">
                        {{-- Avec Squarhe --}}
                        <article class="rounded-lg border border-emerald-200 bg-emerald-50 p-4 shadow-sm dark:border-emerald-400/20 dark:bg-emerald-400/10 sm:p-6">
                            <div class="mb-5 flex items-center gap-3 sm:mb-6">
                                <span class="grid size-10 shrink-0 place-items-center rounded-lg bg-emerald-600 text-white"><flux:icon.check class="size-5" /></span>
                                <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7] sm:text-2xl">Avec Squarhe</h3>
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

                        {{-- Sans Squarhe --}}
                        <article class="rounded-lg border border-rose-200 bg-rose-50 p-4 shadow-sm dark:border-rose-400/20 dark:bg-rose-400/10 sm:p-6">
                            <div class="mb-5 flex items-center gap-3 sm:mb-6">
                                <span class="grid size-10 shrink-0 place-items-center rounded-lg bg-rose-600 text-white"><flux:icon.x-mark class="size-5" /></span>
                                <h3 class="text-xl font-black text-slate-950 dark:text-[#e6edf7] sm:text-2xl">Sans Squarhe (aujourd'hui)</h3>
                            </div>
                            <ul class="space-y-3 sm:space-y-4">
                                @foreach ($comparison['sans']['items'] as $item)
                                    <li class="flex gap-3 rounded-lg bg-white/80 p-3 text-sm text-slate-700 dark:bg-white/5 dark:text-slate-200 sm:p-4 sm:text-base">
                                        <span class="mt-2 size-2 shrink-0 rounded-full bg-rose-600"></span>
                                        <span class="leading-7">{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    </div>

                    {{-- Ancrage tarifaire vs gestionnaire RH --}}
                    <div class="mt-8 rounded-lg border border-blue-200 bg-blue-50 p-5 dark:border-blue-400/20 dark:bg-blue-400/10 sm:p-6">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="font-black text-slate-950 dark:text-white">💡 Un gestionnaire RH coûte entre 150 000 et 300 000 FCFA/mois.</p>
                                <p class="mt-1 text-slate-600 dark:text-slate-300">Squarhe automatise son travail répétitif à partir de <strong>14 900 FCFA/mois</strong>. Vous gardez le contrôle, il gère l'essentiel.</p>
                            </div>
                            <flux:button href="#offres" variant="primary" icon="calculator" class="shrink-0">
                                Simuler mon tarif
                            </flux:button>
                        </div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     FAQ Réponses enrichies
                ═══════════════════════════════════════════════════ --}}
                <section id="faq" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-4xl px-5 py-12 sm:py-16 lg:px-8">
                        <div class="text-left sm:text-center">
                            <p class="text-sm font-black uppercase text-emerald-700">Foire aux questions</p>
                            <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 sm:text-4xl">Tout ce que vous voulez savoir avant de nous contacter.</h2>
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

                        <div class="mt-8 rounded-lg border border-slate-200 bg-slate-50 p-5 text-center dark:border-white/10 dark:bg-[#172033]">
                            <p class="font-bold text-slate-700 dark:text-slate-300">Vous avez une question spécifique à votre situation ?</p>
                            <flux:button href="#contact" variant="primary" icon="chat-bubble-left-right" class="mt-4">
                                Parlez-nous de votre PME
                            </flux:button>
                        </div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     POURQUOI SQUARHE
                ═══════════════════════════════════════════════════ --}}
                <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                    <div class="grid gap-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Pourquoi Squarhe</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">Conçu au Cameroun, pas adapté depuis l'étranger.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">La plupart des logiciels RH vendus en Afrique sont des outils occidentaux mal adaptés. Squarhe part de vos contraintes réelles.</p>
                        </div>
                       <div class="grid gap-4 lg:grid-cols-3">
    @foreach ([
        ['title' => 'CNPS, IRPP, Code du travail camerounais', 'text' => 'Les règles locales sont intégrées nativement, pas configurées à la main par vos soins. Elles sont mises à jour automatiquement.'],
        ['title' => 'Interface pensée pour les non-experts', 'text' => 'Vous n\'avez pas besoin d\'un diplôme en RH pour utiliser Squarhe. Les parcours sont courts, clairs et guidés.'],
        ['title' => 'Tarifs accessibles aux PME de 5 à 150 personnes', 'text' => 'Pas d\'abonnement annuel imposé, pas de module caché. Vous payez pour votre effectif réel, mois par mois.'],
    ] as $item)
        <div class="rounded-lg border border-slate-200 bg-white p-5 dark:border-white/10 dark:bg-[#172033]">
            <flux:icon.map-pin class="mb-3 size-5 text-blue-600 dark:text-blue-300" />

            <h3 class="font-black text-slate-950 dark:text-[#e6edf7]">
                {{ $item['title'] }}
            </h3>

            <p class="mt-2 leading-7 text-slate-600 dark:text-slate-300">
                {{ $item['text'] }}
            </p>
        </div>
    @endforeach
</div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     BLOG
                ═══════════════════════════════════════════════════ --}}
                <section id="articles" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                            <div>
                                <p class="text-sm font-black uppercase text-emerald-700">Ressources RH</p>
                                <h2 class="mt-3 text-3xl font-black text-slate-950 dark:text-[#e6edf7] sm:text-4xl">Comprendre pour mieux gérer.</h2>
                                <p class="mt-2 max-w-lg leading-7 text-slate-600 dark:text-slate-300">Des guides concrets sur la paie, le droit du travail et la conformité sociale au Cameroun écrits pour les dirigeants, pas pour les juristes.</p>
                            </div>
                            <a href="https://blog.squarhe.com" target="_blank" rel="noopener noreferrer" class="inline-flex shrink-0 items-center gap-2 text-sm font-black text-blue-700 dark:text-blue-300">
                                Voir tous les articles <flux:icon.arrow-top-right-on-square class="size-4" />
                            </a>
                        </div>
                        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                            @foreach ($articles as $article)
                                <article class="flex min-h-64 flex-col rounded-lg border border-slate-200 bg-slate-50 p-5 transition hover:-translate-y-1 hover:bg-white hover:shadow-lg dark:border-white/10 dark:bg-[#172033] dark:hover:bg-[#1d2a40]">
                                    <div class="flex items-center justify-between gap-3">
                                        <span class="rounded-lg bg-blue-100 px-3 py-1 text-xs font-black text-blue-700">{{ $article['category'] }}</span>
                                        <span class="text-xs font-bold text-slate-500">{{ $article['read_time'] }}</span>
                                    </div>
                                    <h3 class="mt-5 text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">{{ $article['title'] }}</h3>
                                    <p class="mt-3 flex-1 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $article['excerpt'] }}</p>
                                    <a href="#newsletter" class="mt-5 inline-flex items-center gap-2 text-sm font-black text-blue-700 dark:text-blue-300">
                                        <flux:icon.arrow-right class="size-4" />
                                        Recevoir ce type de contenu
                                    </a>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     CONTACT avec contexte renforcé
                ═══════════════════════════════════════════════════ --}}
                <section id="contact" class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                    <div>
                        <p class="text-sm font-black uppercase text-blue-700">Parlons de votre PME</p>
                        <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">Votre prochaine paie peut partir sans stress.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">Dites-nous combien vous avez d'employés et ce qui vous prend le plus de temps. Nous vous montrons comment Squarhe résout ça en moins de 30 minutes.</p>

                      <div class="mt-8 space-y-4">
    @foreach ([
        ['icon' => 'clock', 'title' => 'Réponse sous 24h', 'text' => 'Un membre de notre équipe vous contacte directement sur WhatsApp ou par email.'],
        ['icon' => 'check', 'title' => 'Démo personnalisée gratuite', 'text' => 'On configure Squarhe avec vos vraies données, pas une démo générique.'],
        ['icon' => 'shield-check', 'title' => 'Sans engagement', 'text' => 'Vous décidez après la démo. Aucune carte de crédit requise pour commencer.'],
    ] as $item)
        <div class="flex gap-4 rounded-lg border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#172033]">

            <div class="grid size-10 shrink-0 place-items-center rounded-lg bg-blue-100 dark:bg-blue-400/10">
                <flux:icon :name="$item['icon']" class="size-5 text-blue-600 dark:text-blue-300" />
            </div>

            <div>
                <p class="font-black text-slate-950 dark:text-white">
                    {{ $item['title'] }}
                </p>

                <p class="mt-0.5 text-sm text-slate-600 dark:text-slate-300">
                    {{ $item['text'] }}
                </p>
            </div>

        </div>
    @endforeach
</div>
                        <div class="mt-6 rounded-lg border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#172033]">
                            <p class="text-sm font-bold text-slate-500">Contact direct</p>
                            <p class="mt-1 font-black text-slate-950 dark:text-white">contact@squarhe.com</p>
                        </div>
                    </div>

                    <livewire:contact-form />
                </section>

                {{-- ═══════════════════════════════════════════════════
                     CTA FINAL avant newsletter
                ═══════════════════════════════════════════════════ --}}
                <section class="bg-slate-950 text-white">
                    <div class="mx-auto max-w-7xl px-5 py-16 text-center lg:px-8">
                        <h2 class="text-3xl font-black sm:text-4xl">Prêt à boucler votre paie en moins de 10 minutes ?</h2>
                        <p class="mx-auto mt-4 max-w-2xl text-lg leading-8 text-slate-300">Rejoignez les PME de Douala, Yaoundé, Bafoussam et Kribi qui ont remplacé Excel par une solution fiable et locale.</p>
                        <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                            <flux:button href="#contact" variant="primary" icon="calendar-days" class="text-base">
                                Demander ma démo gratuite
                            </flux:button>
                            <flux:button href="#offres" >
                                Voir les tarifs
                            </flux:button>
                        </div>
                        <p class="mt-4 text-sm text-slate-400">✓ Sans engagement &nbsp;·&nbsp; ✓ Réponse sous 24h &nbsp;·&nbsp; ✓ Onboarding accompagné</p>
                    </div>
                </section>

                {{-- ═══════════════════════════════════════════════════
                     NEWSLETTER
                ═══════════════════════════════════════════════════ --}}
                <section id="newsletter" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-[1fr_1fr] lg:px-8">
                        <div>
                            <p class="text-sm font-black uppercase text-emerald-700">Conseils RH gratuits</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">Un conseil RH camerounais par mois, directement dans votre boîte mail.</h2>
                            <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">Paie, congés, CNPS, contrats des ressources concrètes pour gérer votre équipe sans être expert. Sans spam, désinscription en 1 clic.</p>
                        </div>
                        <livewire:newsletter-form />
                    </div>
                </section>
            </main>

            {{-- ═══════════════════════════════════════════════════
                 FOOTER
            ═══════════════════════════════════════════════════ --}}
            <footer class="bg-slate-950 text-white">
                <div class="mx-auto grid max-w-7xl gap-8 px-5 py-10 lg:grid-cols-[1fr_1fr] lg:px-8">
                    <div>
                        <div class="flex items-center gap-3">
                            <span class="grid size-9 place-items-center rounded-lg bg-white text-slate-950">
                                <x-app-logo-icon class="size-5" />
                            </span>
                            <span class="text-lg font-black">Squarhe</span>
                        </div>
                        <p class="mt-4 max-w-xl leading-7 text-slate-300">Logiciel de paie et RH conçu pour les PME camerounaises. Simple, local, fiable.</p>
                        <p class="mt-2 text-sm text-slate-400">Utilisé à Douala, Yaoundé, Bafoussam, Kribi et partout au Cameroun.</p>
                    </div>
                    <div class="grid gap-6 text-sm text-slate-300 sm:grid-cols-2">
                        <div>
                            <p class="font-black text-white">Contact</p>
                            <p class="mt-3">contact@squarhe.com</p>
                            <p class="mt-1 text-slate-400">Réponse sous 24h</p>
                        </div>
                        <div>
                            <p class="font-black text-white">Navigation</p>
                            <div class="mt-3 flex flex-col gap-2">
                                <a href="#solution" class="hover:text-white transition">Solution</a>
                                <a href="#offres" class="hover:text-white transition">Tarifs</a>
                                <a href="#avis" class="hover:text-white transition">Témoignages</a>
                                <a href="#faq" class="hover:text-white transition">FAQ</a>
                                <a href="#articles" class="hover:text-white transition">Blog</a>
                                <a href="{{ route('legal.cgu') }}" wire:navigate class="hover:text-white transition">CGU</a>
                                <a href="{{ route('legal.cgv') }}" wire:navigate class="hover:text-white transition">CGV</a>
                                <a href="{{ route('legal.cookies') }}" wire:navigate class="hover:text-white transition">Cookies</a>
                            </div>
                        </div>
                    </div>
               
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-sm text-slate-400">
                    © {{ date('Y') }} Squarhe. Tous droits réservés. —
                    <a href="{{ route('legal.cgu') }}" wire:navigate class="hover:text-white transition">CGU</a> ·
                    <a href="{{ route('legal.cgv') }}" wire:navigate class="hover:text-white transition">CGV</a> ·
                    <a href="{{ route('legal.cookies') }}" wire:navigate class="hover:text-white transition">Politique de Cookies</a>
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
