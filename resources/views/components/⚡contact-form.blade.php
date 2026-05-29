<?php

use App\Models\ContactLead;
use Flux\Flux;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

new class extends Component
{
    public string $companyName = '';

    public string $fullName = '';

    public string $email = '';

    public string $phone = '';

    public ?int $employeesCount = null;

    public string $message = '';

    public bool $consent = false;

    public ?string $successMessage = null;

    public function storeContact(): void
    {
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
            'phone' => ['nullable', 'string', 'max:40'],
            'employeesCount' => ['nullable', 'integer', 'min:1', 'max:10000'],
            'message' => ['nullable', 'string', 'max:1200'],
            'consent' => ['accepted'],
        ])->validate();

        ContactLead::create([
            'company_name' => $validated['companyName'],
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?: null,
            'employees_count' => $validated['employeesCount'],
            'message' => $validated['message'] ?: null,
            'consent' => true,
        ]);

        $this->reset('companyName', 'fullName', 'email', 'phone', 'employeesCount', 'message', 'consent');

        $this->successMessage = 'Merci, votre demande a bien ete envoyee. Nous vous recontacterons rapidement.';

        Flux::toast(
            text: $this->successMessage,
            heading: 'Demande envoyee',
            variant: 'success',
        );
    }
};
?>

<form wire:submit="storeContact" class="rounded-lg border border-slate-200 bg-white p-5 shadow-xl shadow-slate-950/5 dark:border-white/10 dark:bg-[#172033] sm:p-6">
    <div class="grid gap-4 sm:grid-cols-2">
        <flux:field>
            <flux:label>Entreprise</flux:label>
            <flux:input wire:model="companyName" icon="building-office" required />
            <flux:error name="companyName" />
        </flux:field>

        <flux:field>
            <flux:label>Nom complet</flux:label>
            <flux:input wire:model="fullName" icon="user" required />
            <flux:error name="fullName" />
        </flux:field>

        <flux:field>
            <flux:label>Adresse email</flux:label>
            <flux:input type="email" wire:model="email" icon="envelope" required />
            <flux:error name="email" />
        </flux:field>

        <flux:field>
            <flux:label>Telephone WhatsApp</flux:label>
            <flux:input wire:model="phone" icon="phone" />
            <flux:error name="phone" />
        </flux:field>

        <flux:field class="sm:col-span-2">
            <flux:label>Nombre d employes</flux:label>
            <flux:input type="number" min="1" wire:model="employeesCount" icon="users" />
            <flux:error name="employeesCount" />
        </flux:field>

        <flux:field class="sm:col-span-2">
            <flux:label>Votre besoin</flux:label>
            <flux:textarea wire:model="message" rows="4" />
            <flux:error name="message" />
        </flux:field>
    </div>

    <flux:field class="mt-5">
        <flux:checkbox wire:model="consent" required label="J accepte que Squarhe utilise ces informations pour me recontacter au sujet de ma demande." />
        <flux:error name="consent" />
    </flux:field>

    <flux:button type="submit" variant="primary" icon="paper-airplane" wire:loading.attr="disabled" wire:target="storeContact" class="mt-6 w-full">
        <span wire:loading.remove wire:target="storeContact">Envoyer ma demande</span>
        <span wire:loading wire:target="storeContact">Envoi en cours...</span>
    </flux:button>
</form>
