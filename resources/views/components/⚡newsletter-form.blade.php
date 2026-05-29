<?php

use App\Models\NewsletterSubscription;
use Flux\Flux;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

new class extends Component
{
    public string $email = '';

    public bool $consent = false;

    public ?string $successMessage = null;

    public function subscribe(): void
    {
        $this->successMessage = null;

        $validated = Validator::make([
            'newsletterEmail' => $this->email,
            'newsletterConsent' => $this->consent,
        ], [
            'newsletterEmail' => ['required', 'email:rfc', 'max:160'],
            'newsletterConsent' => ['accepted'],
        ])->validate();

        NewsletterSubscription::updateOrCreate(
            ['email' => $validated['newsletterEmail']],
            [
                'consent' => true,
                'subscribed_at' => now(),
            ],
        );

        $this->reset('email', 'consent');

        $this->successMessage = 'Inscription confirmee. Vous recevrez les prochaines ressources Squarhe.';

        Flux::toast(
            text: $this->successMessage,
            heading: 'Newsletter',
            variant: 'success',
        );
    }
};
?>

<form wire:submit="subscribe" class="rounded-lg border border-slate-200 bg-slate-50 p-5 dark:border-white/10 dark:bg-[#172033] sm:p-6">
    <flux:field>
        <flux:label>Email professionnel</flux:label>
        <div class="flex flex-col gap-3 sm:flex-row">
            <flux:input type="email" wire:model="email" icon="envelope" required class="min-w-0 flex-1" />
            <flux:button wire:loading.attr="disabled" wire:target="subscribe" variant="primary" icon="inbox-arrow-down" type="submit">
                <span wire:loading.remove wire:target="subscribe">Souscrire</span>
                <span wire:loading wire:target="subscribe">Envoi...</span>
            </flux:button>
        </div>
        <flux:error name="newsletterEmail" />
    </flux:field>

    <flux:field class="mt-5">
        <flux:checkbox wire:model="consent" required label="J accepte de recevoir les contenus Squarhe. Aucun spam, desinscription possible a tout moment." />
        <flux:error name="newsletterConsent" />
    </flux:field>
</form>
