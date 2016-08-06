<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function message(Request $request)
    {
        $model = new Message();
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $tel = $request->input('tel');
        $tel = str_replace('(', '', $tel);
        $tel = str_replace(')', '', $tel);
        $tel = str_replace('-', '', $tel);
        $tel = str_replace(' ', '', $tel);
        $model->tel = $tel;
        $model->msg = $request->input('msg');
        $model->save();

        Session::flash('flash_message', 'Ваше сообщение отправлено');

        return redirect('/');
    }

    public function notification(Request $request)
    {
        Mail::send('order.message',
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'tel' => $request->input('tel'),
                'msg' => $request->input('msg')
            ],
            function ($message){
                $message->to('sergei.nikonov@yahoo.com', 'Metal warehouse')->subject('Запрос с сайта');
            });
    }


}
