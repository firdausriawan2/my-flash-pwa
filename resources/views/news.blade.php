<x-app-layout>
    <x-slot name="header">
        {{ __('Berita') }}
    </x-slot>
    <div class="section mt-2">
        <div class="card">
            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" class="card-img-top">
            <div class="card-body">
                <h1 class="card-title">{{ $article['title'] }}</h1>
                <div class="text-muted mb-3">
                    <small>{{ $article['date'] }} | {{ $article['author'] }}</small>
                </div>
                <p class="card-text">{!! $article['content'] !!}</p>
            </div>
        </div>
    </div>
</x-app-layout>