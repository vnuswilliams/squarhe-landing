<x-mail::message>
# Nouveau message reçu

Un nouveau message a été envoyé depuis le formulaire de contact Squarhe.

<x-mail::panel>
**Entreprise :** {{ $lead->company_name }}  
**Nom complet :** {{ $lead->full_name }}  
**Email :** {{ $lead->email }}  
**Téléphone :** {{ $lead->phone ?: 'Non renseigné' }}  
**Nombre d’employés :** {{ $lead->employees_count ?: 'Non renseigné' }}
</x-mail::panel>

## Message

{{ $lead->message ?: 'Aucun message renseigné.' }}

Merci de recontacter cette personne rapidement.
</x-mail::message>
