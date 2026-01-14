@isset($url)
<a href="{{ $url }}">
    <img src="{{ asset('images/euromed.png') }}" alt="{{ config('app.name') }}" style="max-height: 60px;">
</a>
@endisset

