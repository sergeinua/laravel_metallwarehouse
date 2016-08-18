@extends('layouts.app')

@section('main-content')

    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить пункт меню</div>

                    <div class="panel-body">

                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        {{ Form::open(['url' => "admin/category/create", 'method' => 'POST', 'id' => 'category', 'class' => 'clearfix']) }}

                            <div class="form-group input-group-lg">
                                {{ Form::text('name', null, ['placeholder' => 'название', 'class' => 'form-control']) }}
                            </div>

                            <div class="form-group input-group-lg">
                                {{ Form::text('slug', null, ['placeholder' => 'slug', 'class' => 'form-control']) }}
                            </div>

                            <div class="form-group input-group-lg">
                                {{ Form::select('parent_id', ['1'=>'1','2'=>'2'], null, ['placeholder' => 'Родительская категория', 'class' => 'form-control']) }}
                            </div>

                            <div class="form-group input-group-lg">
                                {{ Form::select('status', ['1' => 'Активно', '0' => 'Неактивно'], null, ['placeholder' => 'Состояние', 'class' => 'form-control']) }}
                            </div>

                            {{ Form::button('Сохранить', ['id' => 'sub_form', 'type' => 'submit', 'class' => 'btn btn-lg btn-success']) }}

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop