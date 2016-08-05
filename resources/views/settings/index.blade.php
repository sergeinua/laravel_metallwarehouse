<?php
use Illuminate\Support\Facades\URL;
?>

@extends('layouts.app')

@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Настройки</div>

                <div class="panel-body">

                    <a href="{{ URL::action('SettingsController@create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Добавить опцию</a>

                    <table style="min-width: 500px;text-align: center;">

                        @foreach($model as $item)
                            <tr>
                                <td style="float: left;">{{ $item->name }}</td>
                                <td>{{ $item->value }}</td>
                                <td>
                                    <a href="{{ URL::action('SettingsController@edit',
                                    ['id' => $item->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                </td>
                                <td>
                                    <a class="del_btn" href="{{ URL::action('SettingsController@delete',
                                    ['id' => $item->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop