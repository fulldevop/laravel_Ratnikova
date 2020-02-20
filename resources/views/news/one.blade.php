@extends('layouts.main')
@section('title')
    Новости
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    @if(!$news['isPrivate'])
        <h3>{{ $news['title'] }}</h3>
        <p>{{ $news['description'] }}</p>
    @else
        Нет прав!
    @endif
@endsection
