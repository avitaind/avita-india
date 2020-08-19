
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<h2>Dear {{ $name }},</h2>
<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" />

<span class="btn btn-primary">
<a href="{{ $message->embed(public_path().'/images/Declaration-by-the-Candidate.pdf') }}"  target="_blank" download="{{ public_path().'/images/Declaration-by-the-Candidate.pdf' }}">Download File</a>
</span>