<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = Category::all();

        return view('category.index')->with(['model' => $model]);
    }

    public function create(Request $request)
    {

        if($request->isMethod('post')) :

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required',
                'parent_id' => 'required|numeric',
                'status' => 'required|numeric'
            ]);
            if($validator->fails()) :
                Session::flash('error', 'Ошибка валидации');
                return Redirect::to('admin/category/create')
                    ->withErrors($validator);
            else :
                $model = new Category();
                $model->name = $request->input('name');
                $model->slug = $request->input('slug');
                $model->parent_id = $request->input('parent_id');
                $model->status = $request->input('status');
//                $model->save();
                Session::flash('success', 'Категория сохранена');
                return Redirect::to('admin/category');
            endif;

        endif;

        return view('category.create');
    }
}
