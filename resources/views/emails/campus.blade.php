<h2>Dear {{ $name }},</h2>
<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" />

<a href="{{  $message->attach(public_path() . '/images/AVITA-Family-Brochure.pdf') }}" target="_blank" download="{{  $message->attach(public_path() . '/images/AVITA-Family-Brochure.pdf') }}">Download File</a>
