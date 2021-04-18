<section class="section--blog">
    <div class="section__header">
        <h1>{{ __('Galleries') }}</h1>
    </div>
    <div class="section__content">
        @if (isset($galleries) && !$galleries->isEmpty())
            <div class="gallery-wrap">
                @foreach ($galleries as $gallery)
                    <div class="gallery-item">
                        <div class="img-wrap">
                            <a href="{{ $gallery->url }}"><img src="{{ RvMedia::getImageUrl($gallery->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $gallery->name }}"></a>
                        </div>
                        <div class="gallery-detail">
                            <div class="gallery-title"><a href="{{ $gallery->url }}">{{ $gallery->name }}</a></div>
                            <div class="gallery-author">{{ __('By') }} {{ $gallery->user->name }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
        @endif
    </div>
</section>
