<?php

use App\Mail\NewContactLeadReceived;
use App\Mail\NewsletterSubscriptionSuccessful;
use App\Models\ContactLead;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

test('landing page is displayed', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('La paie et les RH enfin pensees pour les PME africaines')
        ->assertSee('Derniers articles');
});

test('legal pages are displayed', function (string $route, string $title) {
    $this->get(route($route))
        ->assertOk()
        ->assertSee($title);
})->with([
    ['legal.cgu', 'Conditions generales d utilisation'],
    ['legal.cgv', 'Conditions generales de vente'],
]);

test('contact lead can be stored and notified by email', function () {
    Mail::fake();

    Livewire::test('contact-form')
        ->set('companyName', 'Kmer Services')
        ->set('fullName', 'Aline Mballa')
        ->set('email', 'aline@example.com')
        ->set('phone', '+237600000000')
        ->set('employeesCount', 24)
        ->set('message', 'Nous voulons simplifier la paie.')
        ->set('consent', true)
        ->call('storeContact')
        ->assertSet('successMessage', 'Merci, votre demande a bien ete envoyee. Nous vous recontacterons rapidement.');

    $lead = ContactLead::query()->where('email', 'aline@example.com')->first();

    expect($lead)->not->toBeNull();

    Mail::assertSent(NewContactLeadReceived::class, function (NewContactLeadReceived $mail) use ($lead) {
        return $mail->hasTo(config('mail.contact_recipient'))
            && $mail->lead->is($lead);
    });
});

test('contact lead validates required fields', function () {
    Livewire::test('contact-form')
        ->set('email', 'not-an-email')
        ->call('storeContact')
        ->assertHasErrors([
            'companyName' => 'required',
            'fullName' => 'required',
            'email' => 'email',
            'consent' => 'accepted',
        ]);
});

test('newsletter subscription is stored once per email and sends a success email', function () {
    Mail::fake();

    Livewire::test('newsletter-form')
        ->set('email', 'rh@example.com')
        ->set('consent', true)
        ->call('subscribe')
        ->assertSet('successMessage', 'Inscription confirmee. Vous recevrez les prochaines ressources Squarhe.');

    Livewire::test('newsletter-form')
        ->set('email', 'rh@example.com')
        ->set('consent', true)
        ->call('subscribe');

    $subscription = NewsletterSubscription::query()->where('email', 'rh@example.com')->first();

    expect(NewsletterSubscription::query()->where('email', 'rh@example.com')->count())->toBe(1);

    Mail::assertSent(NewsletterSubscriptionSuccessful::class, 2);
    Mail::assertSent(NewsletterSubscriptionSuccessful::class, function (NewsletterSubscriptionSuccessful $mail) use ($subscription) {
        return $mail->hasTo('rh@example.com')
            && $mail->subscription->is($subscription);
    });
});

test('pricing simulator adjusts plans by employee count', function () {
    Livewire::test('pricing-section')
        ->set('employees', 25)
        ->assertSee('Non disponible')
        ->assertSee('38 400 FCFA');
});
