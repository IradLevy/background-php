<link href="{{ URL::asset('css/GalleryStyle.css') }}" rel="stylesheet" />
<div class="card gallery-card">
    <div class='gallery-title'>תמונות ווידאו שנמצאו</div>
    <div class='galley-card-container'>
        <div class='gallery'>
            @foreach (array_slice($photos['photos'], 0, 9) as $photo)
                <img src="{{ URL::asset($photo["url"]) }}" alt="Photo">
            @endforeach
        </div>
    </div>
    <div>
        <button class='gallery-button'>תמונות נוספות</button>
    </div>
</div>