@extends('layouts.app')

@section('main-content')

    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    
    @if (Session::has('error'))
        <div class="alert alert-success">{{ Session::get('error') }}</div>
    @endif



    <div class="md-6">

        @foreach($model as $item)

        {{ $item->id }}




        @endforeach

    </div>
    <div class="md-6">
        <a href="{{ action("CategoryController@create") }}">Добавить пункт</a>
    </div>

@stop