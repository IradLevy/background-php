@props(['isLink' => false, 'text' => "", 'logo' => "", 'url' => false])

<link href="{{ URL::asset('css/logoInfoStyle.css') }}" rel="stylesheet" />
<div class="icons-info">
    @if($isLink && $url)
        <a href="{{ $url }}">{{ $text }}</a>
    @elseif($isLink && !$url)
        <p>{{ $text }} - לא נמצא</p>
    @else
        <p>{{ $text }}</p>
    @endif

    <img src="{{ $logo }}" alt="phone">
</div>