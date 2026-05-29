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

        <header class="border-b border-slate-200 bg-white/90 backdrop-blur dark:border-white/10 dark:bg-slate-950/90">
            <nav class="mx-auto flex max-w-5xl items-center justify-between px-5 py-4 lg:px-8">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3">
                    <span class="grid size-9 place-items-center rounded-lg bg-slate-950 text-sm font-black text-white dark:bg-white dark:text-slate-950">SQ</span>
                    <span class="text-lg font-black">Squarhe</span>
                </a>

                <flux:button href="{{ route('home') }}" wire:navigate variant="ghost" icon="arrow-left">Retour</flux:button>
            </nav>
        </header>

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
