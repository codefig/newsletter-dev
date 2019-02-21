@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url'), 'title' => 'Soemthing Veirficto'])
            Wee-Documents
        @endcomponent
    @endslot
{{-- Body --}}

  @slot('greeting')
    Hello {{ $user }},
  @endslot

  @slot('otherMessage')
    Please verify your Wee-Documents account by clicking the button below
  @endslot

        @slot('bodycontents')
            @component('mail::button', ['url' => $url, 'slot' => $title])
                Account Verification
            @endcomponent

            Please ignore the message, if you didn't make the request.
        @endslot

{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
               Yours, Wee-Documents Team.
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent
