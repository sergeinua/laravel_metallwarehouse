@extends('layouts.app')

@section('main-content')

    <?php $i = 0; ?>

    @foreach($model as $item)

        <?php $i++; ?>

        <div class="msg-<?= ($i%2 == 0) ? 'f' : 's'; ?>">
            <p>Создано: {{ $item->created_at }}</p>
            <p>
                Имя: {{ $item->name }}
                email: {{ $item->email }}
            </p>
            <p>Сообщение:</p>
            <p>{{ $item->msg }}</p>
            <hr>
        </div>

    @endforeach

@stop