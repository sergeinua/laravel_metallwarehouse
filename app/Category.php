<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function getCategoryName($category_id)
    {
        if($category_id == 0 ) :
            $result = '---';
        else :
            $model = Category::findOrFail($category_id);
            $result = $model->name;
        endif;

        return $result;
    }

    public function getStatus($status_id)
    {
        if($status_id == 0) :
            $result = 'Неактивно';
        else :
            $result = 'Активно';
        endif;

        return $result;
    }

    public static function getCategoryList()
    {
        $model = Category::all();
        foreach ($model as $item) :
            $result[$item->id] = $item->name;
        endforeach;

        return $result;
    }
}