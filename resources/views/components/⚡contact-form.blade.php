<?php

use App\Mail\NewContactLeadReceived;
use App\Models\ContactLead;
use Flux\Flux;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

new class extends Component
{
    use UsesSpamProtection;

    public string $companyName = '';

    public string $fullName = '';

    public string $email = '';

    public string $phone = '';

    public ?int $employeesCount = null;

    public string $message = '';

    public bool $consent = true;

    public ?string $successMessage = null;

    public HoneypotData $extraFields;

    public function mount(): void
    {
        $this->extraFields = new HoneypotData();
    }

    public function storeContact(): void
    {
        $this->protectAgainstSpam();

        $this->successMessage = null;

        $validated = Validator::make([
            'companyName' => $this->companyName,
            'fullName' => $this->fullName,
            'email' => $this->email,
            'phone' => $this->phone,
            'employeesCount' => $this->employeesCount,
            'message' => $this->message,
            'consent' => $this->consent,
        ], [
            'companyName' => ['required', 'string', 'max:120'],
            'fullName' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:160'],
            'phone' => ['nullable', 'string', 'max:9'],
            'employeesCount' => ['nullable', 'integer', 'min:5', 'max:10000'],
            'message' => ['nullable', 'string', 'max:1200'],
            'consent' => ['accepted'],
        ])->validate();

        $lead = ContactLead::create([
            'company_name' => $validated['companyName'],
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?: null,
            'employees_count' => $validated['employeesCount'],
            'message' => $validated['message'] ?: null,
            'consent' => true,
        ]);

        Mail::to(config('mail.contact_recipient'))->send(new NewContactLeadReceived($lead));

        $this->reset('companyName', 'fullName', 'email', 'phone', 'employeesCount', 'message', 'consent');

        $this->successMessage = 'Merci, votre demande a bien été envoyée. Nous vous recontacterons rapidement.';

        Flux::toast(
            text: $this->successMessage,
            heading: 'Demande envoyée',
            variant: 'success',
        );
    }
};
?>

<form wire:submit="storeContact" class="rounded-lg border border-slate-200 bg-white p-5 shadow-xl shadow-slate-950/5 dark:border-zinc-800 dark:bg-zinc-900 sm:p-6 my-auto">
    <x-honeypot livewire-model="extraFields" />

    <div class="grid gap-4 sm:grid-cols-2">
        <flux:field>
            <flux:label>Entreprise</flux:label>
            <flux:input wire:model="companyName" icon="building-office" required placeholder="Squarhe" />
            <flux:error name="companyName" />
        </flux:field>

        <flux:field>
            <flux:label>Nom complet</flux:label>
            <flux:input wire:model="fullName" icon="user" required placeholder="Payong venus williams" />
            <flux:error name="fullName" />
        </flux:field>

        <flux:field>
            <flux:label>Adresse email</flux:label>
            <flux:input type="email" wire:model="email" icon="envelope" required placeholder="contact@squarhe.com" />
            <flux:error name="email" />
        </flux:field>

        <flux:field>
            <flux:label>Téléphone WhatsApp</flux:label>
            <flux:input wire:model="phone" icon="phone" placeholder="659005679"/>
            <flux:error name="phone" />
        </flux:field>

        <flux:field class="sm:col-span-2">
            <flux:label>Nombre d'employés</flux:label>
            <flux:input type="number" min="5" max="10000" wire:model="employeesCount" icon="users" placeholder="25" />
            <flux:error name="employeesCount" />
        </flux:field>

        <flux:field class="sm:col-span-2">
            <flux:label>Votre besoin</flux:label>
            <flux:textarea wire:model="message" rows="4" />
            <flux:error name="message" />
        </flux:field>
    </div>

    <flux:field class="mt-5">
        <flux:checkbox wire:model="consent" required label="J'accepte que Squarhe utilise ces informations pour me recontacter au sujet de ma demande." />
        <flux:error name="consent" />
    </flux:field>

    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="storeContact" class="mt-6 w-full">
        <span wire:loading.remove wire:target="storeContact">Envoyer ma demande</span>
        <span wire:loading wire:target="storeContact">Envoi en cours...</span>
    </flux:button>
</form>
