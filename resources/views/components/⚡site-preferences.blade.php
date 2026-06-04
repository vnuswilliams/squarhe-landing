<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div
    x-data="{
        language: localStorage.getItem('squarhe.language') || 'fr',
        cookiesAccepted: localStorage.getItem('squarhe.cookies.accepted') === 'true',
        init() {
            document.documentElement.lang = this.language;
        },
        setLanguage(value) {
            this.language = value;
            localStorage.setItem('squarhe.language', value);
            document.documentElement.lang = value;
            this.$flux.toast(value === 'en' ? 'English preference saved.' : 'Préférence de langue enregistrée.', { heading: 'Langue', variant: 'info' });
        },
        acceptCookies() {
            this.cookiesAccepted = true;
            localStorage.setItem('squarhe.cookies.accepted', 'true');
            this.$flux.toast('Préférences de cookies enregistrées.', { heading: 'Cookies', variant: 'success' });
        }
    }"
>
    <div class="flex items-center gap-4">
        <flux:field>
            <flux:label>Mode sombre</flux:label>
            <flux:switch x-model="$flux.dark" />
        </flux:field>

        <flux:field>
            <flux:select x-model="language" x-on:change="setLanguage($event.target.value)" class="min-w-32">
                <flux:select.option value="fr">Français</flux:select.option>
                <flux:select.option value="en">English</flux:select.option>
            </flux:select>
        </flux:field>
    </div>

    <div
        x-cloak
        x-show="! cookiesAccepted"
        x-transition
        class="fixed inset-x-4 bottom-4 z-50 mx-auto max-w-4xl rounded-lg border border-slate-200 bg-white p-4 shadow-2xl shadow-slate-950/20 dark:border-white/10 dark:bg-[#172033]"
    >
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="font-black text-slate-950 dark:text-[#e6edf7]">Conditions générales et cookies</p>
                <p class="mt-1 text-sm leading-6 text-slate-600 dark:text-slate-300">
                    En poursuivant votre navigation, vous acceptez l'utilisation de cookies nécessaires au fonctionnement de la landing et la consultation de nos
                    <a href="{{ route('legal.cgu') }}" wire:navigate class="font-bold text-blue-700 dark:text-blue-300">CGU</a>.
                </p>
            </div>
            <div class="flex shrink-0 gap-3">
                <flux:button href="{{ route('legal.cgu') }}" wire:navigate variant="ghost" icon="document-text">Lire les CGU</flux:button>
                <flux:button type="button" variant="primary" icon="check" x-on:click="acceptCookies()">Accepter</flux:button>
            </div>
        </div>
    </div>
</div>
