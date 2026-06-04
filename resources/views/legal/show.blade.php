<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} - Squarhe</title>

        @fonts
        @fluxAppearance

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            html {
                scroll-behavior: smooth;
            }

            .legal-content h1 {
                font-size: 2rem;
                line-height: 1.15;
                font-weight: 900;
                margin-bottom: 1rem;
            }

            .legal-content h2 {
                font-size: 1.35rem;
                line-height: 1.25;
                font-weight: 850;
                margin-top: 2rem;
                margin-bottom: .75rem;
            }

            .legal-content h3 {
                font-size: 1.05rem;
                font-weight: 800;
                margin-top: 1.4rem;
                margin-bottom: .5rem;
            }

            .legal-content p,
            .legal-content li {
                color: rgb(71 85 105);
                line-height: 1.8;
            }

            .dark .legal-content p,
            .dark .legal-content li {
                color: rgb(203 213 225);
            }

            .legal-content ul {
                list-style: disc;
                padding-left: 1.5rem;
                margin: 1rem 0;
            }

            .legal-content table {
                width: 100%;
                border-collapse: collapse;
                margin: 1.5rem 0;
                font-size: .95rem;
            }

            .legal-content th,
            .legal-content td {
                border: 1px solid rgb(226 232 240);
                padding: .75rem;
                text-align: left;
            }

            .dark .legal-content th,
            .dark .legal-content td {
                border-color: rgba(255, 255, 255, .12);
            }

            .legal-content hr {
                border: 0;
                border-top: 1px solid rgb(226 232 240);
                margin: 2rem 0;
            }

            .dark .legal-content hr {
                border-top-color: rgba(255, 255, 255, .12);
            }
        </style>
    </head>
    <body class="bg-slate-50 text-slate-950 antialiased dark:bg-slate-950 dark:text-white">
        <flux:toast position="top right" />

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
                    ['label' => 'Solution',   'href' => '/#solution', 'icon' => 'check-badge'],
                    ['label' => 'Tarifs',     'href' => '/#offres',   'icon' => 'calculator'],
                    ['label' => 'Avis',       'href' => '/#avis',     'icon' => 'star'],
                    ['label' => 'FAQ',        'href' => '/#faq',      'icon' => 'question-mark-circle'],
                    ['label' => 'Blog',       'href' => '/#articles', 'icon' => 'document-text'],
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
                        :class="scrolled ? 'text-base hidden' : 'text-lg'"
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

        <main class="mx-auto max-w-5xl px-5 py-12 lg:px-8">
            <div class="mb-8 flex items-center gap-3 text-sm font-bold text-blue-700 dark:text-blue-300">
                <flux:icon.document-text class="size-5" />
                Document legal
            </div>

            <article class="legal-content rounded-lg border border-slate-200 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-900 sm:p-8">
                {!! $markdown !!}
            </article>
        </main>
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
                            <div class="flex items-center gap-2">
                                <span class="size-2 rounded-full bg-emerald-500"></span>
                                <span class="text-sm font-semibold text-slate-500 dark:text-slate-400">Tous les services sont opérationnels</span>
                            </div>
                        </div>

                        {{-- Ligne copyright + réseaux sociaux --}}
                        <div class="mt-5 flex flex-col gap-4 border-t border-slate-200/70 pt-5 dark:border-white/10 sm:flex-row sm:items-center sm:justify-between">

                            <p class="text-sm text-slate-400 dark:text-slate-500">
                                © {{ date('Y') }} Squarhe. Tous droits réservés. — Conçu pour les PME camerounaises.
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
        @fluxScripts
    </body>
</html>
