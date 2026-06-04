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

        <footer class="border-t border-slate-200 px-5 py-8 text-center text-sm text-slate-500 dark:border-white/10 dark:text-slate-400">
            © {{ date('Y') }} Squarhe.
        </footer>

        @fluxScripts
    </body>
</html>
