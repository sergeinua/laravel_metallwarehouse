@extends('layouts.app')

@section('main-content')

    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Обновить {{ $model->name }}</div>

                    <div class="panel-body">

                        {{ Form::open(['url' => "admin/settings/edit/$model->id", 'method' => 'POST', 'id' => 'settings', 'class' => 'order clearfix']) }}
                        <p class="title">{{ $model->name }}:</p>
                        <label>
                            {{ Form::text('value', $model->value) }}
                        </label>
                        <label>
                            {{ Form::button('Сохранить', ['id' => 'sub_form', 'type' => 'submit']) }}
                        </label>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop