@extends('layouts.main')
@section('title')
    Новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2>Новости по категории {{ $categoryInfo['name'] }}</h2>
    @forelse($newsList as $news)
        @if($news['category_id'] === $categoryInfo['id'])
            <h3>{{ $news['title'] }}</h3>
            @if(!$news['isPrivate'])
                <a href="{{ route('news.newsOne', ['category' => $categoryInfo['category'], 'id' => $news['id']]) }}">Подробнее...</a>
            @else
                <p>У вас нет прав для просмотра данной новости</p>
            @endif
        @endif
    @empty
        Новостей нет
    @endforelse
@endsection
