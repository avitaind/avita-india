<h2>Dear {{ $name }},</h2>
<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" /><br/>
<span>
<a href="{{ $message->embed(public_path().'/images/AVITA-Family-Brochure.pdf') }}" target="_blank" download="{{ public_path().'/images/AVITA-Family-Brochure.pdf' }}">Download File</a>
</span>