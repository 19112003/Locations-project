@component('mail::message')
    # Nouveau message de contact

    **Nom :** {{ $emailData['name'] }}

    **E-mail :** {{ $emailData['email'] }}

    **Message :** {{ $emailData['message'] }}
@endcomponent
```