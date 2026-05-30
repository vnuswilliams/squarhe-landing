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
                'tagline' => 'L essentiel pour gerer sa paie',
                'basePrice' => 14900,
                'baseEmployees' => 5,
                'stepPrice' => 2500,
                'maxEmployees' => 20,
                'setupFee' => 'Gratuit',
                'support' => 'Email - 72h',
                'features' => ['Paie CNPS / IRPP', 'Bulletins PDF', 'Avances sur salaire', 'Conges', 'Documents RH - 3 modeles'],
            ],
            [
                'name' => 'Croissance',
                'tagline' => 'Paie + RH pour structurer son equipe',
                'popular' => true,
                'basePrice' => 34900,
                'baseEmployees' => 20,
                'stepPrice' => 3500,
                'maxEmployees' => 50,
                'setupFee' => '35 000 FCFA',
                'support' => 'WhatsApp - 48h',
                'features' => ['Tout Starter', 'Espace collaborateur complet', 'Documents RH illimites', 'Tableaux de bord RH', 'Exports Excel basiques'],
            ],
            [
                'name' => 'Business',
                'tagline' => 'Pilotage et integration pour PME structurees',
                'basePrice' => 64900,
                'baseEmployees' => 50,
                'stepPrice' => 5000,
                'maxEmployees' => 150,
                'setupFee' => '75 000 FCFA',
                'support' => 'Prioritaire - 4h',
                'features' => ['Tout Croissance', 'Multi-sites', 'Rapports RH avances', 'Roles utilisateurs', 'API / integrations', 'Gestionnaire dedie'],
            ],
        ];
    }

    public function comparisonRows(): array
    {
        return [
            ['label' => 'Popularite', 'values' => ['-', 'La plus populaire', '-']],
            ['label' => 'Prix de base / mois', 'values' => ['14 900 FCFA', '34 900 FCFA', '64 900 FCFA']],
            ['label' => 'Employes inclus', 'values' => ['5', '20', '50']],
            ['label' => 'Plafond employes', 'values' => ['20', '50', '150']],
            ['label' => 'Supplement / 5 employes', 'values' => ['+2 500 FCFA', '+3 500 FCFA', '+5 000 FCFA']],
            ['label' => 'Setup fee', 'values' => ['Gratuit', '35 000 FCFA', '75 000 FCFA']],
            ['label' => 'Espace collaborateur', 'values' => ['Lecture seule', 'Complet', 'Complet']],
            ['label' => 'Documents RH', 'values' => ['3 modeles', 'Illimites', 'Illimites']],
            ['label' => 'Tableaux de bord RH', 'values' => ['Non inclus', 'Inclus', 'Inclus']],
            ['label' => 'Export Excel / rapports', 'values' => ['Non inclus', 'Basiques', 'Avances']],
            ['label' => 'Multi-sites / API', 'values' => ['Non inclus', 'Non inclus', 'Inclus']],
            ['label' => 'Support', 'values' => ['Email - 72h', 'WhatsApp - 48h', 'Prioritaire - 4h']],
            ['label' => 'Formation', 'values' => ['Non incluse', '1h en ligne', '1 journee sur site']],
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

<section id="offres" class="border-y border-slate-200 bg-white dark:border-white/10 dark:bg-[#101827]" data-scroll-reveal-scope>
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div>
                <p class="text-sm font-black uppercase text-blue-700 dark:text-blue-300">Nos offres</p>
                <h2 class="mt-3 text-3xl font-black leading-tight text-slate-950 dark:text-[#e6edf7] sm:text-4xl">
                    Payez seulement pour ce dont vous avez besoin, sans engagement.
                </h2>
                <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    Choisissez une tranche adaptee a votre equipe. Si votre effectif grandit, la simulation ajuste le prix et masque les offres qui ne conviennent plus.
                </p>
            </div>

            <div class="rounded-lg border border-slate-200 bg-slate-50 p-5 dark:border-white/10 dark:bg-[#172033]">
                <flux:field>
                    <flux:label>Nombre d employes a simuler</flux:label>
                    <flux:input type="number" min="5" max="150" step="5" wire:model.live.debounce.300ms="employees" icon="users" />
                    <flux:description>La simulation s incremente de 5 en 5. Exemple : 25 employes rend Starter indisponible et ajuste Croissance.</flux:description>
                </flux:field>
            </div>
        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-3">
            @foreach ($this->plans() as $plan)
                @php($eligible = $this->isEligible($plan))
                @php($isPopular = $plan['popular'] ?? false)

                <article wire:key="plan-{{ $plan['name'] }}" class="flex min-h-[34rem] flex-col rounded-lg border p-6 transition {{ $isPopular ? 'border-emerald-400 bg-emerald-50 shadow-lg shadow-emerald-900/10 dark:border-emerald-300/50 dark:bg-emerald-400/10' : ($eligible ? 'border-slate-200 bg-slate-50 shadow-sm dark:border-white/10 dark:bg-[#172033]' : 'border-slate-200 bg-slate-100 opacity-60 dark:border-white/10 dark:bg-[#141d2e]') }}">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="text-2xl font-black text-slate-950 dark:text-[#f2f6fb]">{{ $plan['name'] }}</h3>
                                @if ($isPopular)
                                    <flux:badge color="emerald">La plus populaire</flux:badge>
                                @endif
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $plan['tagline'] }}</p>
                        </div>
                        @if ($eligible)
                            <flux:badge color="emerald">Disponible</flux:badge>
                        @else
                            <flux:badge color="zinc">Max {{ $plan['maxEmployees'] }}</flux:badge>
                        @endif
                    </div>

                    <div class="mt-6">
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400">Prix mensuel simule</p>
                        <p class="mt-2 text-3xl font-black text-slate-950 dark:text-[#f2f6fb]">{{ $eligible ? $this->formatPrice($this->priceFor($plan)) : 'Non disponible' }}</p>
                        <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">Base {{ $plan['baseEmployees'] }} employes, plafond {{ $plan['maxEmployees'] }}.</p>
                    </div>

                    <div class="mt-6 grid gap-3 text-sm">
                        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
                            <flux:icon.plus-circle class="size-5 text-blue-600 dark:text-blue-300" />
                            + {{ $this->formatPrice($plan['stepPrice']) }} / tranche de 5 employes
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
                            <flux:icon.wrench-screwdriver class="size-5 text-blue-600 dark:text-blue-300" />
                            Setup fee : {{ $plan['setupFee'] }}
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
                            <flux:icon.lifebuoy class="size-5 text-blue-600 dark:text-blue-300" />
                            Support : {{ $plan['support'] }}
                        </div>
                    </div>

                    <ul class="mt-6 flex-1 space-y-3">
                        @foreach ($plan['features'] as $feature)
                            <li class="flex gap-3 text-sm leading-6 text-slate-700 dark:text-slate-300">
                                <flux:icon.check class="mt-1 size-4 shrink-0 text-emerald-600 dark:text-emerald-300" />
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <flux:button href="#contact" variant="{{ $eligible ? 'primary' : 'ghost' }}" icon="chat-bubble-left-right" class="mt-6 w-full justify-center" :disabled="! $eligible">
                        {{ $eligible ? 'Demander cette offre' : 'Choisir une offre superieure' }}
                    </flux:button>
                </article>
            @endforeach
        </div>

        <div class="mt-12">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-black uppercase text-emerald-700 dark:text-emerald-300">Comparatif</p>
                    <h3 class="mt-2 text-2xl font-black text-slate-950 dark:text-[#f2f6fb]">Les differences cles entre les offres</h3>
                </div>
                <p class="max-w-xl text-sm leading-6 text-slate-600 dark:text-slate-300">
                    Base sur la grille tarifaire : Starter pour demarrer, Croissance pour structurer, Business pour piloter plusieurs besoins RH.
                </p>
            </div>

            <div class="mt-6 overflow-hidden rounded-lg border border-slate-200 bg-white dark:border-white/10 dark:bg-[#172033]">
                <div class="overflow-x-auto">
                    <table class="pricing-comparison-table w-full min-w-[760px] text-left text-sm">
                        <thead class="bg-slate-950 text-white dark:bg-white dark:text-slate-950">
                            <tr>
                                <th scope="col" class="w-[28%] px-5 py-4 font-black">Critere</th>
                                @foreach ($this->plans() as $plan)
                                    <th scope="col" class="px-5 py-4 font-black">{{ $plan['name'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-white/10">
                            @foreach ($this->comparisonRows() as $rowIndex => $row)
                                <tr wire:key="comparison-{{ $rowIndex }}" class="bg-white dark:bg-[#172033]">
                                    <th scope="row" class="px-5 py-4 font-black text-slate-950 dark:text-[#f2f6fb]">{{ $row['label'] }}</th>
                                    @foreach ($row['values'] as $value)
                                        @php($includedValues = ['Inclus', 'Complet', 'Illimites', 'Basiques', 'Avances', 'La plus populaire'])
                                        @php($limitedValues = ['Lecture seule', '3 modeles'])
                                        @php($isUnavailable = in_array($value, ['Non inclus', 'Non incluse', '-'], true))
                                        @php($isIncluded = in_array($value, $includedValues, true) || str_starts_with($value, '1h') || str_starts_with($value, '1 journee'))
                                        @php($isLimited = in_array($value, $limitedValues, true))

                                        <td class="px-5 py-4 text-slate-700 dark:text-slate-300">
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
