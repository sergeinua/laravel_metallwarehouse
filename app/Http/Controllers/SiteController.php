<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    /**
     * Home page
     */
    public function index()
    {
        return view('site.index')
            ->with(['home_page' => true]);
    }

    /**
     * Category page
     * @param $cat
     */
    public function category($cat)
    {
        return view("site.{$cat}")
            ->with(['cat_page' => true])
            ->with(['cat' => $cat]);
    }

    /**
     * Subcategory page
     * @param $cat
     * @param $subcat
     */
    public function subcategory($cat, $subcat)
    {
        return view("site.{$cat}.{$subcat}")
            ->with(['sub_cat_page' => true])
            ->with(['cat' => $cat])
            ->with(['subcat' => $subcat]);
    }

    /**
     * Page having slug
     * @param $cat
     * @param $subcat
     * @param $slug
     */
    public function slug($cat, $subcat, $slug)
    {
        return view("site.{$cat}.{$subcat}.{$slug}")
            ->with(['slug_page' => true])
            ->with(['cat' => $cat])
            ->with(['subcat' => $subcat])
            ->with(['slug' => $slug]);
    }
}
