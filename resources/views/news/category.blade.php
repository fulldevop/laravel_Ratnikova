@extends('layouts.main')
@section('title')
    Новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2>Категории</h2>
    @forelse($newsCategories as $category)
        <a href="{{ route('news.category', $category['category']) }}">{{ $category['name'] }}</a>
        <br>
        @empty
        <p>Нет категорий</p>
    @endforelse
@endsection
