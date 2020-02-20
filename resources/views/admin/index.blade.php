@extends('layouts.main')
@section('title')
    Админка
@endsection

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <h3>Добро пожаловать, {{ $name }}!</h3>
    <p>Вы моожете создать новость на странице <a >Добавить новость</a></p>
@endsection
