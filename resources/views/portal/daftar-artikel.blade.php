@extends('layouts.master_dashboard')
@section('content')

<div class="content">
    <span>
        DAFTAR Artikel
    </span>
    <!-- <ul class="article-list">
        @if (count($artikels) < 1)
            <span>artikel kosong</span>
        @else
            @foreach($artikels as $article)
                <li class="article-item">
                    <a href="{{ route('artikel.detail', $article->id) }}" class="article-title">
                        {{ $article->title }}
                    </a>
                    <p class="article-excerpt">{{ $article->excerpt }}</p>
                </li>
            @endforeach
        @endif

    </ul> -->
</div>
@endsection