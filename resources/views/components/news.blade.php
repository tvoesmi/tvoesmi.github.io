<div class="col my-2 pb-3 border-bottom" data-target="main.lastNewsItem">
    <div class="media v-center mb-1">
        <img src="{{ $favicon }}" class="mr-2">
        <div class="media-body">{{ $domain }}</div>
    </div>
    <h5 class="mb-1">
        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"
           class="text-dark">{{ $title }}</a>
    </h5>
    <time class="mr-1 text-muted small" datetime=" {{ $pubDate }}">
        {{ $pubDate }}
    </time>
</div>