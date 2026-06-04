<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        @php
            $seoTitle = 'Squarhe Paie automatisée pour PME camerounaises';
            $seoDescription = 'Fini Excel et WhatsApp pour gérer votre paie. Squarhe calcule, génère vos bulletins et suit la CNPS en moins de 10 minutes par mois. Conçu pour les PME au Cameroun.';
            $seoUrl = url('/');
            $seoImage = asset('images\app-preview.png');
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
     HEADER — navbar flottante + menu mobile plein écran
═══════════════════════════════════════════════════ --}}
<div
    x-data="{ scrolled: false, menuOpen: false }"
    x-on:scroll.window="scrolled = window.scrollY > 60"
>

    {{-- ── Overlay sombre derrière le menu mobile ── --}}
    <div
        x-show="menuOpen"
        x-transition:enter="transition duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-on:click="menuOpen = false"
        class="fixed inset-0 z-40 bg-black/30 backdrop-blur-sm md:hidden"
        aria-hidden="true"
    ></div>

    {{-- ── Menu mobile plein écran (slide from top) ── --}}
    <div
        x-show="menuOpen"
        x-transition:enter="transition duration-350 ease-out"
        x-transition:enter-start="-translate-y-full opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition duration-250 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-full opacity-0"
        class="fixed inset-x-0 top-0 z-50 flex min-h-screen flex-col bg-white dark:bg-[#101827] md:hidden"
    >
        {{-- Header interne du menu --}}
        <div class="flex items-center justify-between border-b border-slate-200/80 px-5 py-4 dark:border-white/10">
            <a href="#top" x-on:click="menuOpen = false" class="flex items-center gap-2.5">
                <span class="grid size-9 place-items-center rounded-lg bg-slate-950 text-white dark:bg-white dark:text-slate-950">
                    <x-app-logo-icon class="size-4" />
                </span>
                <span class="text-lg font-black text-slate-950 dark:text-[#e6edf7]">Squarhe</span>
            </a>
            <button
                x-on:click="menuOpen = false"
                class="grid size-9 place-items-center rounded-lg border border-slate-200 bg-slate-50 text-slate-700 dark:border-white/10 dark:bg-white/5 dark:text-slate-300"
                aria-label="Fermer le menu"
            >
                <flux:icon.x-mark class="size-5" />
            </button>
        </div>

        {{-- Liens de navigation --}}
        <nav class="flex flex-1 flex-col px-5 py-8" aria-label="Navigation mobile">
            <ul class="space-y-1">
                @foreach ([
                    ['label' => 'Solution',   'href' => '#solution', 'icon' => 'check-badge'],
                    ['label' => 'Tarifs',     'href' => '#offres',   'icon' => 'calculator'],
                    ['label' => 'Avis',       'href' => '#avis',     'icon' => 'star'],
                    ['label' => 'FAQ',        'href' => '#faq',      'icon' => 'question-mark-circle'],
                    ['label' => 'Blog',       'href' => '#articles', 'icon' => 'document-text'],
                ] as $link)
                    <li>
                        <a
                            href="{{ $link['href'] }}"
                            x-on:click="
                                menuOpen = false;
                                $nextTick(() => {
                                    const el = document.querySelector('{{ $link['href'] }}');
                                    if (el) el.scrollIntoView({ behavior: 'smooth' });
                                })
                            "
                            class="group flex items-center gap-4 rounded-xl px-4 py-4 text-lg font-bold text-slate-700 transition hover:bg-slate-50 hover:text-slate-950 dark:text-slate-300 dark:hover:bg-white/5 dark:hover:text-white"
                        >
                            <span class="grid size-9 place-items-center rounded-lg bg-slate-100 text-slate-500 transition group-hover:bg-slate-200 group-hover:text-slate-950 dark:bg-white/5 dark:text-slate-400 dark:group-hover:bg-white/10 dark:group-hover:text-white">
                                <flux:icon :name="$link['icon']" class="size-5" />
                            </span>
                            {{ $link['label'] }}
                            <flux:icon.arrow-right class="ml-auto size-4 text-slate-300 transition group-hover:translate-x-1 group-hover:text-slate-500 dark:text-slate-600" />
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Séparateur --}}
            <div class="my-6 border-t border-slate-200 dark:border-white/10"></div>

            {{-- CTA principal --}}
            <a
                href="#contact"
                x-on:click="
                    menuOpen = false;
                    $nextTick(() => {
                        const el = document.querySelector('#contact');
                        if (el) el.scrollIntoView({ behavior: 'smooth' });
                    })
                "
                class="flex items-center justify-center gap-2 rounded-xl bg-slate-950 px-6 py-4 text-base font-black text-white transition hover:bg-slate-800 dark:bg-white dark:text-slate-950 dark:hover:bg-slate-100"
            >
                <flux:icon.calendar-days class="size-5" />
                Demander une démo gratuite
            </a>

            <p class="mt-4 text-center text-sm text-slate-400">
                ✓ Sans engagement &nbsp;·&nbsp; ✓ Réponse sous 24h
            </p>
        </nav>

        {{-- Pied du menu --}}
        <div class="border-t border-slate-200 px-5 py-5 dark:border-white/10">
            <p class="text-center text-sm text-slate-400">contact@squarhe.com</p>
        </div>
    </div>

    {{-- ── Header principal ── --}}
    <header
        class="fixed top-0 left-0 right-0 z-40 flex justify-center"
        :class="scrolled ? 'pt-3' : 'pt-0'"
    >
        <nav
            aria-label="Navigation principale"
            class="transition-all duration-300 ease-in-out w-full"
            :class="scrolled
                ? 'mx-4 max-w-2xl rounded-full border border-slate-200/80 bg-white/90 shadow-[0_8px_32px_-4px_rgba(0,0,0,0.12),0_0_0_1px_rgba(0,0,0,0.04)] backdrop-blur-md dark:border-white/10 dark:bg-[#101827]/90 dark:shadow-[0_8px_32px_-4px_rgba(0,0,0,0.4)] px-4 py-2'
                : 'border-b border-slate-200/80 bg-white/90 backdrop-blur dark:border-white/10 dark:bg-[#101827]/90 px-5 py-4 lg:px-8'"
        >
            <div
                class="flex items-center justify-between transition-all duration-300"
                :class="scrolled ? 'gap-2' : 'gap-4 mx-auto max-w-7xl'"
            >

                {{-- Logo --}}
                <a href="#top" class="flex items-center gap-2.5 shrink-0">
                    <span
                        class="grid place-items-center rounded-lg bg-slate-950 text-white dark:bg-white dark:text-slate-950 transition-all duration-300"
                        :class="scrolled ? 'size-7' : 'size-9'"
                    >
                        <x-app-logo-icon class="size-4" />
                    </span>
                    <span
                        class="font-black tracking-normal text-slate-950 dark:text-[#e6edf7] transition-all duration-300"
                        :class="scrolled ? 'text-base ' : 'text-lg'"
                    >Squarhe</span>
                </a>

                {{-- Liens desktop --}}
                <div
                    class="hidden items-center text-slate-600 dark:text-slate-300 md:flex transition-all duration-300"
                    :class="scrolled ? 'gap-5 text-sm font-medium' : 'gap-7 text-sm font-semibold'"
                >
                    <a class="transition hover:text-slate-950 dark:hover:text-white" href="#solution">Solution</a>
                    <a class="transition hover:text-slate-950 dark:hover:text-white" href="#offres">Tarifs</a>
                    <a class="transition hover:text-slate-950 dark:hover:text-white" href="#avis">Avis</a>
                    <a class="transition hover:text-slate-950 dark:hover:text-white" href="#faq">FAQ</a>
                    <a class="transition hover:text-slate-950 dark:hover:text-white" href="#articles">Blog</a>
                </div>

                {{-- CTA desktop + burger mobile --}}
                <div class="flex items-center gap-3 shrink-0">

                    {{-- CTA desktop uniquement --}}
                    <a
                        href="#contact"
                        class="hidden md:inline-flex items-center gap-2 font-semibold text-white bg-slate-950 transition-all duration-300 hover:bg-slate-800 dark:bg-white dark:text-slate-950 dark:hover:bg-slate-100"
                        :class="scrolled ? 'text-sm px-4 py-1.5 rounded-full' : 'text-sm px-4 py-2 rounded-lg'"
                    >
                        Demander une démo
                    </a>

                    {{-- Burger mobile uniquement --}}
                    <button
                        x-on:click="menuOpen = true"
                        class="grid size-9 place-items-center rounded-lg border border-slate-200 bg-white text-slate-700 transition hover:bg-slate-50 dark:border-white/10 dark:bg-white/5 dark:text-slate-300 md:hidden"
                        aria-label="Ouvrir le menu"
                    >
                        <flux:icon.bars-3 class="size-5" />
                    </button>

                </div>
            </div>
        </nav>
    </header>

</div>

{{-- Spacer fixed header --}}
<div class="h-[65px]"></div>

            <main id="top" data-scroll-reveal-scope>

                {{-- ═══════════════════════════════════════════════════
                     HERO
                ═══════════════════════════════════════════════════ --}}
               {{-- ═══════════════════════════════════════════════════
     HERO — layout centré + screenshot pleine largeur (style LobeHub)
═══════════════════════════════════════════════════ --}}
<section class="relative border-b border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827] overflow-hidden">

    {{-- Orbs de fond --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 h-[520px] w-[900px] rounded-full bg-gradient-to-b from-blue-50/70 via-slate-100/40 to-transparent dark:from-blue-950/20 dark:via-transparent dark:to-transparent blur-3xl"></div>
        <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-emerald-50/60 blur-3xl dark:bg-emerald-950/20"></div>
        <div class="absolute bottom-0 right-0 h-64 w-64 rounded-full bg-blue-50/60 blur-3xl dark:bg-blue-950/20"></div>
    </div>

    {{-- ── Copy centré ── --}}
    <div class="relative mx-auto max-w-4xl px-5 pt-14 pb-10 text-center lg:pt-20 lg:pb-12">

        {{-- Badge social proof --}}
        <div class="mb-6 inline-flex items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm font-bold text-emerald-800 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-200">
            <span class="badge-live size-2 rounded-full bg-emerald-500"></span>
            Utilisé par des PME à Douala, Yaoundé, Bafoussam et Kribi
        </div>

        {{-- Titre --}}
        <h1 class="text-4xl font-black leading-tight tracking-normal text-slate-950 dark:text-[#e6edf7] sm:text-5xl lg:text-5xl xl:text-5xl">
            Vous passez encore vos fins de&nbsp;mois sur&nbsp;Excel&nbsp;à corriger des erreurs de&nbsp;paie.
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
            Squarhe calcule la paie, génère vos bulletins PDF et suit vos obligations CNPS automatiquement. <strong class="text-slate-950 dark:text-white">En moins de 10 minutes par mois.</strong> Conçu pour les réalités des PME camerounaises.
        </p>

        {{-- CTAs --}}
        <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
            <flux:button href="#contact" variant="primary" icon="calendar-days" class="text-base px-6">
                Demander ma démo gratuite
            </flux:button>
            <flux:button href="#offres" variant="outline" icon="calculator" class="px-6">
                Simuler mon tarif
            </flux:button>
        </div>

        {{-- Réassurances
        <p class="mt-4 text-sm text-slate-500 dark:text-slate-400">
            ✓ Sans engagement &nbsp;·&nbsp; ✓ Onboarding accompagné &nbsp;·&nbsp; ✓ Support WhatsApp inclus
        </p>


        <dl class="mx-auto mt-10 grid max-w-lg grid-cols-3 gap-3">
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                <dt class="text-xs font-bold uppercase text-slate-500">Équipes gérées</dt>
                <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">5–150</dd>
                <dd class="mt-0.5 text-xs text-slate-500">employés</dd>
            </div>
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                <dt class="text-xs font-bold uppercase text-slate-500">Paie bouclée</dt>
                <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">&lt; 10 min</dd>
                <dd class="mt-0.5 text-xs text-slate-500">par mois</dd>
            </div>
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-4 dark:border-white/10 dark:bg-[#172033]">
                <dt class="text-xs font-bold uppercase text-slate-500">Conformité</dt>
                <dd class="mt-1 text-2xl font-black text-slate-950 dark:text-white">CNPS</dd>
                <dd class="mt-0.5 text-xs text-slate-500">intégrée</dd>
            </div>
        </dl> --}}
    </div>

    {{-- ── Screenshot pleine largeur en bas du hero ── --}}
    {{--
        Desktop : le frame déborde en bas de la section (pb-0, margin-bottom négatif),
        ce qui donne l'effet LobeHub "l'app sort du hero".
        Mobile  : max-height + fade gradient en bas pour tronquer proprement.
    --}}
    <div class="relative mx-auto max-w-6xl px-5 lg:px-10">

        {{-- Halo derrière le frame --}}
        <div class="pointer-events-none absolute inset-x-16 top-4 h-2/3 rounded-3xl bg-blue-100/50 blur-3xl dark:bg-blue-900/20" aria-hidden="true"></div>

        {{-- Window frame --}}
        <div class="relative overflow-hidden rounded-t-2xl border border-b-0 border-slate-200/90 bg-white shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.04),0_24px_60px_-8px_rgba(0,0,0,0.18),0_0_0_1px_rgba(0,0,0,0.03)] dark:border-white/10 dark:bg-[#172033] dark:shadow-[0_24px_60px_-8px_rgba(0,0,0,0.55)]">

            {{-- Title bar --}}
            <div class="flex h-9 shrink-0 items-center gap-2 border-b border-slate-200/80 bg-slate-50/90 px-4 backdrop-blur dark:border-white/10 dark:bg-[#1d2a40]/90">
                <span class="size-3 rounded-full bg-[#ff5f57]"></span>
                <span class="size-3 rounded-full bg-[#febc2e]"></span>
                <span class="size-3 rounded-full bg-[#28c840]"></span>
                <div class="mx-auto flex h-5 w-52 items-center justify-center rounded-md bg-slate-200/80 px-3 dark:bg-white/10">
                    <span class="truncate text-[11px] font-medium text-slate-500 dark:text-slate-400">app.squarhe.com/employes</span>
                </div>
            </div>

            {{-- Screenshot --}}
            <div class="relative">
                {{-- Mobile : tronque à ~55vw de haut avec fade-out --}}
                <div class="max-h-[55vw] overflow-hidden lg:max-h-none">
                    <img
                        src="{{ asset('images/app-preview.png') }}"
                        alt="Interface Squarhe — liste des employés avec KPIs, filtres et statuts de contrat"
                        class="w-full object-cover object-top"
                        loading="eager"
                        decoding="async"
                        width="1280"
                        height="768"
                    />
                </div>
                {{-- Fade-out bas sur mobile uniquement --}}
                <div class="pointer-events-none absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-white to-transparent lg:hidden dark:from-[#101827]" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</section>

                {{-- ═══════════════════════════════════════════════════
                     PROBLÈMES miroir de la réalité vécue
                ═══════════════════════════════════════════════════ --}}
              <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8">

    <div class="mb-10 max-w-2xl">
        <span class="inline-block rounded-full bg-amber-100 px-3 py-1 text-sm font-semibold text-amber-700 dark:bg-amber-400/20 dark:text-amber-300">
            Vous vous reconnaissez ?
        </span>
        <h2 class="mt-4 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">
            Ce que vivent la plupart des PME.
        </h2>
    </div>

    <div class="grid gap-4 sm:grid-cols-2">

        {{-- Card 1 — Variables WhatsApp --}}
        <article class="flex flex-col gap-4 overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:gap-5 dark:border-white/10 dark:bg-[#172033]">
            <div class="min-w-0 flex-1">
                <p class="text-[11px] font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">Collecte des variables</p>
                <h3 class="mt-2 text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">
                    Variables reçues par WhatsApp la veille du virement.
                </h3>
                <p class="mt-2 text-xs leading-6 text-slate-500 dark:text-slate-400">
                    Corrections de dernière minute, oublis fréquents, aucune source de vérité.
                </p>
            </div>

            {{-- Mock WhatsApp --}}
            <div class="w-full space-y-1.5 rounded-xl border border-slate-200/80 bg-slate-50 p-2.5 sm:w-44 sm:shrink-0 dark:border-white/10 dark:bg-[#1d2a40]">
                <div class="flex justify-end">
                    <span class="rounded-lg rounded-tr-none bg-emerald-500 px-2 py-1 text-[10px] font-medium text-white">Mballa = 420 000</span>
                </div>
                <div class="flex justify-end">
                    <span class="rounded-lg rounded-tr-none bg-emerald-500 px-2 py-1 text-[10px] font-medium text-white">Etoga prime 25k</span>
                </div>
                <div class="flex justify-start">
                    <span class="rounded-lg rounded-tl-none bg-white px-2 py-1 text-[10px] text-slate-600 shadow-sm dark:bg-slate-700 dark:text-slate-300">Et Njoya ?</span>
                </div>
                <div class="flex justify-end">
                    <span class="rounded-lg rounded-tr-none bg-emerald-500 px-2 py-1 text-[10px] font-medium text-white">Je cherche... 🤔</span>
                </div>
                <p class="text-right text-[9px] text-slate-400">22h47</p>
            </div>
        </article>

        {{-- Card 2 — Traçabilité --}}
        <article class="flex flex-col gap-4 overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:gap-5 dark:border-white/10 dark:bg-[#172033]">
            <div class="min-w-0 flex-1">
                <p class="text-[11px] font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">Traçabilité</p>
                <h3 class="mt-2 text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">
                    Impossible de savoir qui a validé quoi, ni quand.
                </h3>
                <p class="mt-2 text-xs leading-6 text-slate-500 dark:text-slate-400">
                    Validations perdues dans les conversations, aucun historique fiable.
                </p>
            </div>

            {{-- Mock tableau --}}
            <div class="w-full overflow-hidden rounded-xl border border-slate-200/80 sm:w-44 sm:shrink-0 dark:border-white/10">
                <div class="grid grid-cols-2 bg-slate-100 px-2 py-1.5 text-[9px] font-bold text-slate-500 dark:bg-white/10">
                    <span>Employé</span><span>Statut</span>
                </div>
                @foreach ([
                    ['A. Mballa', '✓ OK', 'text-emerald-600'],
                    ['N. Etoga', '?', 'text-amber-500'],
                    ['S. Njoya', '?', 'text-amber-500'],
                    ['C. Biya', '???', 'text-rose-500'],
                ] as $row)
                <div class="grid grid-cols-2 border-t border-slate-100 px-2 py-1.5 text-[9px] dark:border-white/5">
                    <span class="text-slate-600 dark:text-slate-300">{{ $row[0] }}</span>
                    <span class="font-black {{ $row[2] }}">{{ $row[1] }}</span>
                </div>
                @endforeach
            </div>
        </article>

        {{-- Card 3 — CNPS --}}
        <article class="flex flex-col gap-4 overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:gap-5 dark:border-white/10 dark:bg-[#172033]">
            <div class="min-w-0 flex-1">
                <p class="text-[11px] font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">Conformité CNPS</p>
                <h3 class="mt-2 text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">
                    Angoisse à chaque contrôle CNPS.
                </h3>
                <p class="mt-2 text-xs leading-6 text-slate-500 dark:text-slate-400">
                    Historique incomplet, risque de redressement difficile à anticiper.
                </p>
            </div>

            {{-- Mock alertes --}}
            <div class="w-full space-y-1.5 sm:w-44 sm:shrink-0">
                <div class="rounded-lg border border-rose-200 bg-rose-50 px-2.5 py-2 dark:border-rose-400/20 dark:bg-rose-400/10">
                    <p class="text-[10px] font-black text-rose-700 dark:text-rose-300">⚠️ Déclaration avril</p>
                    <p class="text-[9px] text-rose-500 dark:text-rose-400">4 salariés manquants</p>
                </div>
                <div class="rounded-lg border border-amber-200 bg-amber-50 px-2.5 py-2 dark:border-amber-400/20 dark:bg-amber-400/10">
                    <p class="text-[10px] font-black text-amber-700 dark:text-amber-300">📋 Contrôle — 12 juin</p>
                    <p class="text-[9px] text-amber-500 dark:text-amber-400">Documents introuvables</p>
                </div>
                <div class="rounded-lg border border-slate-200 bg-slate-50 px-2.5 py-2 dark:border-white/10 dark:bg-white/5">
                    <p class="text-[10px] font-black text-slate-700 dark:text-slate-200">💸 Redressement</p>
                    <p class="text-[9px] text-slate-400">Pénalités non calculées</p>
                </div>
            </div>
        </article>

        {{-- Card 4 — Documents perdus --}}
        <article class="flex flex-col gap-4 overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:gap-5 dark:border-white/10 dark:bg-[#172033]">
            <div class="min-w-0 flex-1">
                <p class="text-[11px] font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">Gestion documentaire</p>
                <h3 class="mt-2 text-base font-black leading-snug text-slate-950 dark:text-[#e6edf7]">
                    Un contrat et un bulletin perdus l'an dernier.
                </h3>
                <p class="mt-2 text-xs leading-6 text-slate-500 dark:text-slate-400">
                    Fichiers éparpillés, noms incohérents, introuvables au moment critique.
                </p>
            </div>

            {{-- Mock explorateur --}}
            <div class="w-full space-y-1 rounded-xl border border-slate-200/80 bg-slate-50 p-2.5 sm:w-44 sm:shrink-0 dark:border-white/10 dark:bg-[#1d2a40]">
                @foreach ([
                    ['📁', 'RH 2023 ancien', ''],
                    ['📁', 'RH FINAL v2 copie', 'text-rose-500 font-bold'],
                    ['📄', 'contrat_???.pdf', 'text-rose-500 font-bold'],
                    ['📄', 'bulletin_VRAI.xlsx', 'text-amber-500 font-bold'],
                    ['📁', 'À trier...', ''],
                ] as $file)
                <div class="flex items-center gap-1.5 rounded px-1 py-1">
                    <span class="text-xs">{{ $file[0] }}</span>
                    <span class="truncate text-[10px] {{ $file[2] ?: 'text-slate-600 dark:text-slate-300' }}">{{ $file[1] }}</span>
                </div>
                @endforeach
                <p class="mt-0.5 text-[9px] italic text-rose-400">2 fichiers introuvables</p>
            </div>
        </article>

    </div>
</section>
                {{-- ═══════════════════════════════════════════════════
                     SOLUTION
                ═══════════════════════════════════════════════════ --}}
                <section id="solution" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                        <div class="max-w-3xl">
                            <p class="text-sm font-black uppercase text-blue-700">Ce que Squarhe change</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Votre prochaine paie sans stress. Voici comment.</h2>
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
                     TARIFS
                ═══════════════════════════════════════════════════ --}}
                <livewire:pricing-section />


                {{-- ═══════════════════════════════════════════════════
                     COMMENT ÇA MARCHE section manquante ajoutée
                ═══════════════════════════════════════════════════ --}}
                <section class="bg-white">
                    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 ">
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
                    </div>
                </section>
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

                    <div class="mx-auto max-w-3xl text-left sm:text-center">
                        <p class="text-sm font-black uppercase text-blue-700 dark:text-blue-300">Pourquoi pas un logiciel générique ?</p>
                        <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">
                            Ce qui change quand le logiciel est conçu pour vous.
                        </h2>
                        <p class="mt-4 text-base leading-7 text-slate-600 dark:text-slate-300 sm:text-lg sm:leading-8">
                            Les logiciels RH occidentaux existent depuis des décennies. Mais ils n'ont pas été pensés pour la CNPS, le Code du travail camerounais, ni pour les PME de 5 à 150 personnes.
                        </p>
                    </div>

                    {{-- ── Tableau comparatif ── --}}
                    <div class="mt-10 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm dark:border-white/10 dark:bg-[#172033]">

                        {{-- Header colonnes --}}
                        <div class="grid grid-cols-[1fr_1fr_1fr] border-b border-slate-200 dark:border-white/10">
                            <div class="border-r border-slate-200 px-5 py-4 dark:border-white/10">
                                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Critère</p>
                            </div>
                            <div class="border-r border-slate-200 bg-rose-50 px-5 py-4 dark:border-white/10 dark:bg-rose-400/10">
                                <p class="text-xs font-bold uppercase tracking-wider text-rose-600 dark:text-rose-400">Logiciel générique</p>
                                <p class="mt-0.5 text-[11px] text-rose-500/70 dark:text-rose-400/60">SAP, Sage, Odoo, Paie+…</p>
                            </div>
                            <div class="bg-emerald-50 px-5 py-4 dark:bg-emerald-400/10">
                                <div class="flex items-center gap-2">
                                    <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 dark:text-emerald-300">Squarhe</p>
                                    <span class="rounded-full bg-emerald-600 px-2 py-0.5 text-[10px] font-black text-white">Cameroun</span>
                                </div>
                                <p class="mt-0.5 text-[11px] text-emerald-600/70 dark:text-emerald-400/60">Conçu pour vous, dès le premier jour</p>
                            </div>
                        </div>

                        {{-- Lignes --}}
                        @php
                        $rows = [
                            [
                                'label' => 'Calculs CNPS & IRPP',
                                'generic' => ['text' => 'À configurer manuellement — taux, tranches, plafonds à saisir soi-même. Risque d\'erreur à chaque mise à jour réglementaire.', 'bad' => true],
                                'squarhe' => ['text' => 'Intégrés nativement. Mis à jour automatiquement à chaque changement réglementaire.', 'bad' => false],
                            ],
                            [
                                'label' => 'Conformité droit du travail',
                                'generic' => ['text' => 'Basé sur le droit français ou américain. Nécessite des paramétrages longs pour approcher le Code du travail camerounais — sans garantie.', 'bad' => true],
                                'squarhe' => ['text' => 'Construit sur le Code du travail camerounais : ancienneté, préavis, indemnités, congés légaux.', 'bad' => false],
                            ],
                            [
                                'label' => 'Heures supp & congés',
                                'generic' => ['text' => 'Module souvent absent ou mal adapté. La majorité des PME gèrent ça en parallèle sur Excel — deux outils, deux sources d\'erreurs.', 'bad' => true],
                                'squarhe' => ['text' => 'Suivi des congés et absences intégré dans le même outil. Les validations alimentent directement le calcul de paie.', 'bad' => false],
                            ],
                            [
                                'label' => 'Coût & maintenance',
                                'generic' => ['text' => 'Licences annuelles, modules payants séparément, consultants nécessaires pour les mises à jour. Factures imprévisibles.', 'bad' => true],
                                'squarhe' => ['text' => 'Abonnement mensuel transparent, sans engagement. Mises à jour incluses, aucun coût caché.', 'bad' => false],
                            ],
                            [
                                'label' => 'Devise & format',
                                'generic' => ['text' => 'Affichage en euros ou dollars, formats de dates et de nombres non adaptés. Exports difficiles à lire pour vos équipes.', 'bad' => true],
                                'squarhe' => ['text' => 'Tout en FCFA, formats camerounais, bulletins conformes aux usages locaux.', 'bad' => false],
                            ],
                            [
                                'label' => 'Prise en main',
                                'generic' => ['text' => 'Formations payantes de plusieurs jours. Interface pensée pour des experts RH ou des consultants. Non adapté aux petites équipes.', 'bad' => true],
                                'squarhe' => ['text' => 'Opérationnel en moins d\'une journée. Interface guidée, aucune expertise RH requise.', 'bad' => false],
                            ],
                            [
                                'label' => 'Support local',
                                'generic' => ['text' => 'Support basé en Europe ou en Asie. Décalage horaire, incompréhension des contraintes locales, tickets qui traînent.', 'bad' => true],
                                'squarhe' => ['text' => 'Équipe camerounaise, disponible sur WhatsApp. Réponse sous 48h par des gens qui connaissent votre contexte.', 'bad' => false],
                            ],
                            [
                                'label' => 'Espace collaborateur',
                                'generic' => ['text' => 'Module optionnel, souvent payant. Rarement adapté aux usages mobiles des employés camerounais.', 'bad' => true],
                                'squarhe' => ['text' => 'Inclus dans chaque offre. Chaque employé accède à ses bulletins, soldes de congés et documents depuis son téléphone.', 'bad' => false],
                            ],
                        ];
                        @endphp

                        @foreach ($rows as $i => $row)
                            <div class="grid grid-cols-[1fr_1fr_1fr] border-b border-slate-100 last:border-0 dark:border-white/5 {{ $i % 2 !== 0 ? 'bg-slate-50/50 dark:bg-white/[0.015]' : '' }}">

                                {{-- Critère --}}
                                <div class="border-r border-slate-100 px-5 py-4 dark:border-white/5">
                                    <p class="text-sm font-black text-slate-950 dark:text-[#e6edf7]">{{ $row['label'] }}</p>
                                </div>

                                {{-- Logiciel générique --}}
                                <div class="border-r border-slate-100 px-5 py-4 dark:border-white/5">
                                    <div class="flex items-start gap-2">
                                        <span class="mt-0.5 shrink-0">
                                            <svg class="size-4 text-rose-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                        <p class="text-xs leading-6 text-slate-500 dark:text-slate-400">{{ $row['generic']['text'] }}</p>
                                    </div>
                                </div>

                                {{-- Squarhe --}}
                                <div class="px-5 py-4">
                                    <div class="flex items-start gap-2">
                                        <span class="mt-0.5 shrink-0">
                                            <svg class="size-4 text-emerald-600 dark:text-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                        <p class="text-xs leading-6 text-slate-700 dark:text-slate-200">{{ $row['squarhe']['text'] }}</p>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    {{-- ── Ancrage tarifaire ── --}}
                    <div class="mt-6 rounded-xl border border-blue-200 bg-blue-50 p-5 dark:border-blue-400/20 dark:bg-blue-400/10 sm:p-6">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="font-black text-slate-950 dark:text-white">
                                    💡 Un redressement CNPS ou fiscale peut coûter entre 150 000 et des millions de Francs CFA.
                                </p>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                    Squarhe vous évite d'en arriver là à partir de <strong class="text-slate-900 dark:text-white">14 900 FCFA/mois</strong>. Vous gardez le contrôle, il gère l'essentiel.
                                </p>
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
                        <h2 class="mt-3 text-2xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-2xl">
                            Dites-nous ce qui vous prend le plus de temps. Nous vous montrons comment Squarhe résout ça.
                        </h2>

                      <div class="mt-8 space-y-4">
                            @foreach ([
                                ['icon' => 'clock', 'title' => 'Réponse sous 24h', 'text' => 'Un membre de notre équipe vous contacte directement sur WhatsApp ou par email.'],
                                ['icon' => 'check', 'title' => 'Démo personnalisée gratuite', 'text' => 'On configure Squarhe avec vos vraies données, pas une démo générique.'],
                                ['icon' => 'shield-check', 'title' => 'Sans engagement', 'text' => 'Vous décidez après la démo. Aucune carte de crédit requise pour commencer.'],
                                ['icon' => 'envelope', 'title' => 'contact@squarhe.com', 'text' => 'Contact direct.'],
                            ] as $item)
                                <div class="flex items-center gap-4 rounded-lg border border-slate-200 bg-white p-4 dark:border-white/10 dark:bg-[#172033]">

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
                    </div>

                    <livewire:contact-form />
                </section>

                {{-- ═══════════════════════════════════════════════════
                     CTA FINAL avant newsletter
                ═══════════════════════════════════════════════════ --}}
                <section class="bg-slate-100">
                    <div class="mx-auto max-w-7xl px-5 py-16 text-center lg:px-8">
                        <h2 class="text-3xl font-black sm:text-4xl">Prêt à boucler votre paie en moins de 10 minutes ?</h2>
                        <p class="mx-auto mt-4 max-w-2xl text-lg leading-8 text-slate-800">Rejoignez les PME de Douala, Yaoundé, Bafoussam et Kribi qui ont remplacé Excel par une solution fiable et locale.</p>
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
                        <div class="flex flex-col items-center justify-center text-left md:text-right">
                            <p class="text-sm font-black uppercase text-emerald-700 self-start md:self-end">Conseils RH gratuits</p>
                            <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-3xl">Un conseil RH camerounais par mois, directement dans votre boîte mail.</h2>
                        </div>
                        <livewire:newsletter-form />
                    </div>
                </section>
            </main>

            {{-- ═══════════════════════════════════════════════════
                 FOOTER
            ═══════════════════════════════════════════════════ --}}
           {{-- ═══════════════════════════════════════════════════
                FOOTER — style LobeHub
            ═══════════════════════════════════════════════════ --}}
            <footer class="border-t border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]">
                <div class="mx-auto max-w-7xl px-5 lg:px-8">

                    {{-- ── Colonnes de liens ── --}}
                    <div class="grid grid-cols-2 gap-8 py-12 sm:grid-cols-2 lg:grid-cols-4">

                        {{-- Produit --}}
                        <div>
                            <p class="text-sm font-black text-slate-950 dark:text-white">Produit</p>
                            <ul class="mt-4 space-y-3">
                                @foreach ([
                                    ['label' => 'Tarifs',        'href' => '#offres'],
                                    ['label' => 'Solution',      'href' => '#solution'],
                                    ['label' => 'Fonctionnalités','href' => '#solution'],
                                    ['label' => 'Sécurité',      'href' => '#securite'],
                                ] as $link)
                                    <li>
                                        <a href="{{ $link['href'] }}" class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                            {{ $link['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Ressources --}}
                        <div>
                            <p class="text-sm font-black text-slate-950 dark:text-white">Ressources</p>
                            <ul class="mt-4 space-y-3">
                                @foreach ([
                                    ['label' => 'Blog RH',       'href' => '#articles'],
                                    ['label' => 'FAQ',            'href' => '#faq'],
                                    ['label' => 'Témoignages',    'href' => '#avis'],
                                    ['label' => 'Guide migration','href' => '#contact'],
                                ] as $link)
                                    <li>
                                        <a href="{{ $link['href'] }}" class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                            {{ $link['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Légal --}}
                        <div>
                            <p class="text-sm font-black text-slate-950 dark:text-white">Légal</p>
                            <ul class="mt-4 space-y-3">
                                @foreach ([
                                    ['label' => 'CGU',               'route' => 'legal.cgu'],
                                    ['label' => 'CGV',               'route' => 'legal.cgv'],
                                    ['label' => 'Code du travail','route' => 'legal.travail'],
                                    ['label' => 'Politique de cookies','route' => 'legal.cookies'],
                                ] as $link)
                                    <li>
                                        <a href="{{ route($link['route']) }}" wire:navigate class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                            {{ $link['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Contact --}}
                        <div>
                            <p class="text-sm font-black text-slate-950 dark:text-white">Contact</p>
                            <ul class="mt-4 space-y-3">
                                <li>
                                    <a href="#contact" class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                        Demander une démo
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contact@squarhe.com" class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                        contact@squarhe.com
                                    </a>
                                </li>
                                <li>
                                    <a href="#newsletter" class="text-sm text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white">
                                        Newsletter RH
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- ── Barre inférieure : logo + copyright + réseaux ── --}}
                    <div class="border-t border-slate-200 py-6 dark:border-white/10">

                        {{-- Ligne logo + statut --}}
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                            {{-- Logo --}}
                            <a href="#top" class="flex items-center gap-3">
                                <span class="grid size-8 place-items-center rounded-lg bg-slate-950 text-white dark:bg-white dark:text-slate-950">
                                    <x-app-logo-icon class="size-4" />
                                </span>
                                <span class="text-base font-black text-slate-950 dark:text-white">Squarhe</span>
                            </a>

                            {{-- Statut opérationnel --}}
                            <div class="">
                            <div class="flex items-center gap-2">
                                <span class="size-2 rounded-full bg-emerald-500"></span>
                                <span class="text-sm font-semibold text-slate-500 dark:text-slate-400">Tous les services sont opérationnels</span>
                                <livewire:site-preferences />
                            </div>
                            </div>

                        </div>

                        {{-- Ligne copyright + réseaux sociaux --}}
                        <div class="mt-5 flex flex-col gap-4 border-t border-slate-200/70 pt-5 dark:border-white/10 sm:flex-row sm:items-center sm:justify-between">

                            <p class="text-sm text-slate-400 dark:text-slate-500">
                                © {{ date('Y') }} Squarhe. Tous droits réservés. Conçu pour les PME camerounaises.
                            </p>

                            {{-- Icônes réseaux sociaux --}}
                            <div class="flex items-center gap-4">
                                {{-- LinkedIn --}}
                                <a href="https://www.linkedin.com/company/squarhe" aria-label="Squarhe sur LinkedIn" class="text-slate-400 transition hover:text-slate-950 dark:hover:text-white">
                                    <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57A1.46 1.46 0 0 1 14.38 12.11A1.46 1.46 0 0 1 15.84 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88A1.68 1.68 0 0 0 6.88 5.2A1.68 1.68 0 0 0 5.2 6.88A1.68 1.68 0 0 0 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z"/>
                                    </svg>
                                </a>
                                {{-- X / Twitter--}}
                                <a href="https://youtube.com/@squarhe?si=1l9db4ZVM2HCUPxT" aria-label="Squarhe sur X" class="text-slate-400 transition hover:text-slate-950 dark:hover:text-white">
                                <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                </a>
                                {{-- WhatsApp --}}
                                <a href="https://wa.me/237659005679" aria-label="Squarhe sur WhatsApp" class="text-slate-400 transition hover:text-slate-950 dark:hover:text-white">
                                    <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

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
