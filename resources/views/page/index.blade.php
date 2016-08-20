@extends('layouts.app')

@section('main-content')

    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>menu_item_id</th>
                        <th>title</th>
                        <th>content</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($model as $item)

                        <tr>
                            <td>
                                <a href="{{ URL::action('PageController@edit',
                                    ['id' => $item->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="del_btn" href="{{ URL::action('PageController@delete',
                                    ['id' => $item->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                            <td>{{ $item->menu_item_id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>

@stop