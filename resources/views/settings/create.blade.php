@extends('layouts.app')

@section('main-content')

    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить опцию</div>

                    <div class="panel-body">

                        {{ Form::open(['url' => "admin/settings/create", 'method' => 'POST', 'id' => 'settings', 'class' => 'order clearfix']) }}
                        <b class="title">Название:</b>
                        <label>
                            {{ Form::text('name') }}
                        </label>

                        <b class="title">Ключ:</b>
                        <label>
                            {{ Form::text('key') }}
                        </label>
                        <b class="title">Значение:</b>
                        <label>
                            {{ Form::text('value') }}
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