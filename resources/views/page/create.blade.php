@extends('layouts.app')

@section('main-content')

    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-8 col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить контент страницы</div>

                    <div class="panel-body">

                        {{ Form::open(['url' => "admin/page/create", 'method' => 'POST', 'id' => 'post', 'class' => 'clearfix']) }}

                        <div class="form-group input-group-lg">
                            {{ Form::select('menu_item_id', $category_list, null, ['placeholder' => 'Пункт меню', 'class' => 'form-control']) }}
                        </div>

                        <div class="form-group input-group-lg">
                            {{ Form::text('title', null, ['placeholder' => 'заголовок', 'class' => 'form-control hide']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::textarea('content', null, ['placeholder' => 'контент', 'class' => 'form-control custom-control hide']) }}
                        </div>

                        {{ Form::button('Сохранить', ['id' => 'sub_form', 'type' => 'submit', 'class' => 'btn btn-lg btn-success hide']) }}

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('select[name = "menu_item_id"]').on('change', function(){
                if( $(this).val().length > 0) {
                    $('input[name = "title"]').removeClass('hide');
                    $('textarea[name = "content"]').removeClass('hide');
                    $('#sub_form').removeClass('hide');
                } else {
                    $('input[name = "title"]').addClass('hide');
                    $('textarea[name = "content"]').addClass('hide');
                    $('#sub_form').addClass('hide');
                }
            });
        })
    </script>


@stop