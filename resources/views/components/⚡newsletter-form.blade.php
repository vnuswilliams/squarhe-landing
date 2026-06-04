<?php

use App\Mail\NewsletterSubscriptionSuccessful;
use App\Models\NewsletterSubscription;
use Flux\Flux;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

new class extends Component
{
    use UsesSpamProtection;

    public string $email = '';

    public bool $consent = true;

    public ?string $successMessage = null;

    public HoneypotData $extraFields;

    public function mount(): void
    {
        $this->extraFields = new HoneypotData();
    }

    public function subscribe(): void
    {
        $this->protectAgainstSpam();

        $this->successMessage = null;

        $validated = Validator::make([
            'newsletterEmail' => $this->email,
            'newsletterConsent' => $this->consent,
        ], [
            'newsletterEmail' => ['required', 'email:rfc', 'max:160'],
            'newsletterConsent' => ['accepted'],
        ])->validate();

        $subscription = NewsletterSubscription::updateOrCreate(
            ['email' => $validated['newsletterEmail']],
            [
                'consent' => true,
                'subscribed_at' => now(),
            ],
        );

        Mail::to($subscription->email)->send(new NewsletterSubscriptionSuccessful($subscription));

        $this->reset('email', 'consent');

        $this->successMessage = 'Inscription confirmée. Vous recevrez les prochaines ressources Squarhe.';

        Flux::toast(
            text: $this->successMessage,
            heading: 'Newsletter',
            variant: 'success',
        );
    }
};
?>

<form wire:submit="subscribe" class="my-auto rounded-lg border border-slate-200 bg-slate-50 p-5 dark:border-white/10 dark:bg-[#172033] sm:p-6">
    <x-honeypot livewire-model="extraFields" />

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
        <flux:checkbox wire:model="consent" required label="J'accepte de recevoir les contenus Squarhe. Aucun spam, désinscription possible à tout moment." />
        <flux:error name="newsletterConsent" />
    </flux:field>
</form>
