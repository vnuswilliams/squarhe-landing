<?php

use Livewire\Component;

new class extends Component
{
    public int $employees = 5;

    public function updatedEmployees(mixed $value): void
    {
        $employees = max(5, min(150, (int) $value));
        $this->employees = (int) (round($employees / 5) * 5);
    }

    public function plans(): array
    {
        return [
            [
                'name' => 'Starter',
                'tagline' => 'L\'essentiel pour gérer sa paie',
                'basePrice' => 14900,
                'baseEmployees' => 5,
                'stepPrice' => 2500,
                'maxEmployees' => 20,
                'setupFee' => 'Gratuit',
                'support' => 'Email - 72h',
                'features' => ['Paie CNPS / IRPP', 'Bulletins PDF', 'Avances sur salaire', 'Congés', 'Documents RH - 3 modèles'],
            ],
            [
                'name' => 'Croissance',
                'tagline' => 'Paie + RH pour structurer son équipe',
                'popular' => true,
                'basePrice' => 34900,
                'baseEmployees' => 20,
                'stepPrice' => 3500,
                'maxEmployees' => 50,
                'setupFee' => 'Sur devis',
                'support' => 'WhatsApp - 48h',
                'features' => ['Tout Starter', 'Espace collaborateur complet', 'Documents RH illimités', 'Tableaux de bord RH', 'Exports Excel basiques'],
            ],
            [
                'name' => 'Business',
                'tagline' => 'Pilotage et intégration pour PME structurées',
                'basePrice' => 64900,
                'baseEmployees' => 50,
                'stepPrice' => 5000,
                'maxEmployees' => 150,
                'setupFee' => 'Sur devis',
                'support' => 'Prioritaire - 4h',
                'features' => ['Tout Croissance', 'Multi-sites', 'Rapports RH avancés', 'Rôles utilisateurs', 'API / intégrations', 'Gestionnaire dédié'],
            ],
        ];
    }

    public function comparisonRows(): array
    {
        return [
            ['label' => 'Popularité', 'values' => ['-', 'La plus populaire', '-']],
            ['label' => 'Prix de base / mois', 'values' => ['14 900 FCFA', '34 900 FCFA', '64 900 FCFA']],
            ['label' => 'Employés inclus', 'values' => ['5', '20', '50']],
            ['label' => 'Plafond employés', 'values' => ['20', '50', '150']],
            ['label' => 'Supplément / 5 employés', 'values' => ['+2 500 FCFA', '+3 500 FCFA', '+5 000 FCFA']],
            ['label' => 'Migration / onboarding', 'values' => ['Gratuit', 'Sur devis', 'Sur devis']],
            ['label' => 'Espace collaborateur', 'values' => ['Lecture seule', 'Complet', 'Complet']],
            ['label' => 'Documents RH', 'values' => ['3 modèles', 'Illimités', 'Illimités']],
            ['label' => 'Tableaux de bord RH', 'values' => ['Non inclus', 'Inclus', 'Inclus']],
            ['label' => 'Export Excel / rapports', 'values' => ['Non inclus', 'Basiques', 'Avancés']],
            ['label' => 'Multi-sites / API', 'values' => ['Non inclus', 'Non inclus', 'Inclus']],
            ['label' => 'Support', 'values' => ['Email - 72h', 'WhatsApp - 48h', 'Prioritaire - 4h']],
            ['label' => 'Formation', 'values' => ['Non incluse', '1h en ligne', '1 journée sur site']],
        ];
    }

    public function priceFor(array $plan): int
    {
        $extraEmployees = max(0, $this->employees - $plan['baseEmployees']);
        $steps = (int) ceil($extraEmployees / 5);
        return $plan['basePrice'] + ($steps * $plan['stepPrice']);
    }

    public function isEligible(array $plan): bool
    {
        return $this->employees <= $plan['maxEmployees'];
    }

    public function formatPrice(int $price): string
    {
        return number_format($price, 0, ',', ' ').' FCFA';
    }
};
?>

<section id="offres" class="border-y border-slate-200 bg-white dark:border-zinc-800 dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">

        {{-- ── En-tête section + simulateur ── --}}
        <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div>
                <p class="text-sm font-black uppercase text-blue-700 dark:text-blue-300">Nos offres</p>
                <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-zinc-300 sm:text-4xl">
                    Payez seulement pour ce dont vous avez besoin, sans engagement.
                </h2>

            </div>
        </div>

        {{-- ══════════════════════════════════════════════
             BANNIÈRE 1 — Essai gratuit / sans engagement
        ══════════════════════════════════════════════ --}}
        <div class="mt-10 overflow-hidden rounded-xl border border-emerald-200 bg-linear-to-r from-emerald-50 via-white to-emerald-50 dark:border-emerald-400/20 dark:from-emerald-400/10 dark:via-zinc-950 dark:to-emerald-400/10">
            <div class="flex flex-col items-center justify-between gap-4 px-6 py-5 sm:flex-row">
                <div class="flex items-center gap-4">
                    <span class="grid size-10 shrink-0 place-items-center rounded-full bg-emerald-100 dark:bg-emerald-400/20">
                        <flux:icon.gift class="size-5 text-emerald-700 dark:text-emerald-300" />
                    </span>
                    <div>
                        <p class="font-black text-slate-950 dark:text-zinc-200">
                            Commencez gratuitement, sans carte de crédit.
                        </p>
                        <p class="mt-0.5 text-sm text-slate-600 dark:text-zinc-400">
                            Période d'essai complète incluse &nbsp;·&nbsp; Accès à toutes les fonctionnalités &nbsp;·&nbsp; Aucun engagement, résiliez quand vous voulez.
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 flex-wrap items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-white px-3 py-1.5 text-xs font-bold text-emerald-700 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-300">
                        <flux:icon.check class="size-3.5" /> Aucune carte requise
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-white px-3 py-1.5 text-xs font-bold text-emerald-700 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-300">
                        <flux:icon.check class="size-3.5" /> Sans engagement
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-white px-3 py-1.5 text-xs font-bold text-emerald-700 dark:border-emerald-400/30 dark:bg-emerald-400/10 dark:text-emerald-300">
                        <flux:icon.check class="size-3.5" /> Résiliation en 1 clic
                    </span>
                </div>
            </div>
        </div>
  <div class="rounded-lg border my-6 border-slate-100 bg-slate-50 p-5 dark:border-zinc-800 dark:bg-zinc-900">
                <flux:field>
                    <flux:input label="Nombre d'employés à simuler" type="number" min="5" max="150" step="5" wire:model.live.debounce.300ms="employees" icon="users" />
                    <flux:description>La simulation s'incrémente de 5 en 5. Exemple : 25 employés rend Starter indisponible et ajuste Croissance.</flux:description>
                </flux:field>
            </div>
        {{-- ── Cards des offres ── --}}
        <div class=" grid gap-5 lg:grid-cols-3">
            @foreach ($this->plans() as $plan)
                @php($eligible = $this->isEligible($plan))
                @php($isPopular = $plan['popular'] ?? false)

                <article wire:key="plan-{{ $plan['name'] }}" class="flex min-h-[34rem] flex-col rounded-lg border p-6 transition {{ $isPopular ? 'border-emerald-400 bg-emerald-50 shadow-lg shadow-emerald-900/10 dark:border-emerald-300/50 dark:bg-emerald-400/10' : ($eligible ? 'border-slate-200 bg-slate-50 shadow-sm dark:border-zinc-800 dark:bg-zinc-900' : 'border-slate-200 bg-slate-100 opacity-60 dark:border-zinc-800 dark:bg-zinc-900/70') }}">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-2xl font-black text-slate-950 dark:text-zinc-200">{{ $plan['name'] }}</h3>
                                @if ($isPopular)
                                    <flux:badge color="emerald">La plus populaire</flux:badge>
                                @endif
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-zinc-400">{{ $plan['tagline'] }}</p>
                        </div>
                        @if ($eligible)
                            <flux:badge color="emerald">Disponible</flux:badge>
                        @else
                            <flux:badge color="zinc">Max {{ $plan['maxEmployees'] }}</flux:badge>
                        @endif
                    </div>

                    <div class="mt-6">
                        <p class="text-sm font-bold text-slate-500 dark:text-zinc-400">Prix mensuel simulé</p>
                        <p class="mt-2 text-3xl font-black text-slate-950 dark:text-zinc-200">{{ $eligible ? $this->formatPrice($this->priceFor($plan)) : 'Non disponible' }}</p>
                        <p class="mt-2 text-sm text-slate-500 dark:text-zinc-400">Base {{ $plan['baseEmployees'] }} employés, plafond {{ $plan['maxEmployees'] }}.</p>
                    </div>

                    <div class="mt-6 grid gap-3 text-sm">
                        <div class="flex items-center gap-2 text-slate-600 dark:text-zinc-400">
                            <flux:icon.plus-circle class="size-5 text-blue-600 dark:text-blue-300" />
                            + {{ $this->formatPrice($plan['stepPrice']) }} / tranche de 5 employés
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 dark:text-zinc-400">
                            <flux:icon.lifebuoy class="size-5 text-blue-600 dark:text-blue-300" />
                            Support : {{ $plan['support'] }}
                        </div>
                    </div>

                    <ul class="mt-6 flex-1 space-y-3">
                        @foreach ($plan['features'] as $feature)
                            <li class="flex gap-3 text-sm leading-6 text-slate-700 dark:text-zinc-400">
                                <flux:icon.check class="mt-1 size-4 shrink-0 text-emerald-600 dark:text-emerald-300" />
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <flux:button href="#contact" variant="{{ $eligible ? 'primary' : 'ghost' }}" class="mt-6 w-full justify-center" :disabled="! $eligible">
                        {{ $eligible ? 'Demander cette offre' : 'Choisir une offre supérieure' }}
                    </flux:button>
                </article>
            @endforeach
        </div>

        {{-- ══════════════════════════════════════════════
             BANNIÈRE 2 — Migration / Setup fee
        ══════════════════════════════════════════════ --}}
        <div class="mt-6 overflow-hidden rounded-xl border border-blue-200 bg-blue-50 dark:border-blue-400/20 dark:bg-blue-400/10">
            <div class="flex flex-col gap-5 px-6 py-6 sm:flex-row sm:items-center sm:gap-6">
                <span class="grid size-12 shrink-0 place-items-center rounded-xl bg-blue-100 dark:bg-blue-400/20">
                    <flux:icon.truck class="size-6 text-blue-700 dark:text-blue-300" />
                </span>
                <div class="flex-1">
                    <p class="font-black text-slate-950 dark:text-zinc-200">
                        Migration depuis Excel incluse, nous reprenons tout pour vous.
                    </p>
                    <p class="mt-1.5 text-sm leading-7 text-slate-600 dark:text-zinc-400">
                        Sur toutes nos offres, nous configurons Squarhe avec vos données existantes : employés, historiques, variables de paie.
                        Le tarif de migration est <strong class="text-slate-800 dark:text-zinc-400">personnalisé selon votre situation</strong>, pas de grille fixe, pas de mauvaise surprise.
                        Contactez-nous pour en discuter avant de vous engager.
                    </p>
                </div>
                <flux:button href="#contact" variant="outline" class="shrink-0">
                    Discuter de ma migration
                </flux:button>
            </div>
        </div>

        {{-- ── Tableau comparatif ── --}}
        <div class="mt-12">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-black uppercase text-emerald-700 dark:text-emerald-300">Comparatif</p>
                    <h3 class="mt-2 text-2xl font-black text-slate-950 dark:text-zinc-200">Les différences clés entre les offres</h3>
                </div>
                <p class="max-w-xl text-sm leading-6 text-slate-600 dark:text-zinc-400">
                    Basé sur la grille tarifaire : Starter pour démarrer, Croissance pour structurer, Business pour piloter plusieurs besoins RH.
                </p>
            </div>

            {{-- Wrapper avec sticky thead via CSS --}}
            <div class="relative mt-6 overflow-hidden rounded-lg border border-slate-200 bg-white dark:border-zinc-800 dark:bg-zinc-900">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[760px] text-left text-sm">
                        <thead>
                            <tr class="sticky top-[65px] z-20 bg-slate-950 text-white dark:bg-zinc-950">
                                <th scope="col" class="w-[28%] px-5 py-4 font-black">Critère</th>
                                @foreach ($this->plans() as $plan)
                                    <th scope="col" class="px-5 py-4 font-black">{{ $plan['name'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-zinc-800">
                            @foreach ($this->comparisonRows() as $rowIndex => $row)
                                <tr wire:key="comparison-{{ $rowIndex }}" class="{{ $rowIndex % 2 === 0 ? 'bg-white dark:bg-zinc-900' : 'bg-slate-50/60 dark:bg-zinc-900/50' }}">
                                    <th scope="row" class="px-5 py-4 font-black text-slate-950 dark:text-zinc-200">{{ $row['label'] }}</th>
                                    @foreach ($row['values'] as $value)
                                        @php($includedValues = ['Inclus', 'Complet', 'Illimites', 'Basiques', 'Avances', 'La plus populaire'])
                                        @php($limitedValues = ['Lecture seule', '3 modeles', 'Sur devis'])
                                        @php($isUnavailable = in_array($value, ['Non inclus', 'Non incluse', '-'], true))
                                        @php($isIncluded = in_array($value, $includedValues, true) || str_starts_with($value, '1h') || str_starts_with($value, '1 journee'))
                                        @php($isLimited = in_array($value, $limitedValues, true))

                                        <td class="px-5 py-4 text-slate-700 dark:text-zinc-400">
                                            <span class="flex items-center gap-2">
                                                @if ($isIncluded)
                                                    <flux:icon.check-circle class="size-5 shrink-0 text-emerald-600 dark:text-emerald-300" />
                                                @elseif ($isUnavailable)
                                                    <flux:icon.x-circle class="size-5 shrink-0 text-rose-500 dark:text-rose-300" />
                                                @elseif ($isLimited)
                                                    <flux:icon.information-circle class="size-5 shrink-0 text-amber-500 dark:text-amber-300" />
                                                @endif
                                                <span>{{ $value }}</span>
                                            </span>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
