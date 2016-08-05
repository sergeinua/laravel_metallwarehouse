<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function message(Request $request)
    {

        if ($request->isMethod('post')) :
            Mail::send('order.message',
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'tel' => $request->input('tel'),
                    'msg' => $request->input('msg')
                ],
                function ($message){
                    $message->to('andrei_anishenko@mail.ru', 'Metal warehouse')->subject('Запрос с сайта');
                });
        endif;

    }


}
