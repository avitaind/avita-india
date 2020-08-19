<h2>Dear {{ $name }},</h2>
<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" />

<span class="btn btn-primary">
<a href="{{ $message->embed(public_path().'/images/Declaration-by-the-Candidate.pdf') }}"  target="_blank" download="{{ public_path().'/images/Declaration-by-the-Candidate.pdf' }}"></a>
</span>