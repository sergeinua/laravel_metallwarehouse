<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = Page::all();

        return view('page.index')->with(['model' => $model]);
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')) :

            $validator = Validator::make($request->all(), [
                'menu_item_id' => 'required|numeric',
                'title' => 'required',
                'content' => 'required'
            ]);
            if($validator->fails()) :
                Session::flash('error', 'Ошибка валидации');
                return Redirect::to('admin/page/create')
                    ->withErrors($validator);
            else :
                $model = new Page();
                $model->menu_item_id = $request->input('menu_item_id');
                $model->title = $request->input('title');
                $model->content = $request->input('content');
                $model->save();
                Session::flash('success', 'Страница сохранена');

                return Redirect::to('admin/page');
            endif;

        endif;

        $categories = Category::where('status', 1)->get();
        foreach ($categories as $category) :
            $category_list[$category['id']] = $category['name'];
        endforeach;

        return view('page.create')->with(['category_list' => $category_list]);
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}