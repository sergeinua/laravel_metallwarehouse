<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = Settings::all();

        return view('settings.index')->with(['model' => $model]);
    }

    public function delete($id)
    {
        $model = Settings::findOrFail($id);
        $model->delete();

        return redirect('/admin');
    }

    public function edit(Request $request, $id)
    {
        $model = Settings::findOrFail($id);

        if($request->isMethod('post')) :
            $model->value = $request->input(['value']);
            $model->update();
            return redirect('/admin');
        endif;

        return  view('settings.edit')->with(['model' => $model]);
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')) :
            $model = new Settings();
            $model->name = $request->input('name');
            $model->key = $request->input('key');
            $model->value = $request->input('value');
            $model->save();
            return redirect('/admin');
        endif;

        return  view('settings.create');
    }
}
