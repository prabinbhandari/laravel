<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\Inv_category;

class categorycontroller extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
    public function AddPost()
    {
        $name = request("name");
        $code = request("code");
        $category = new Inv_category();
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function Index()
    {
        $data = Inv_category::all();
        return view("inventory.category.index", [
            'categoryList' => $data
        ]);
    }

    public function edit()
    {
        $id = request('categoryId');
        $category = Inv_category::find($id);
        return view("inventory.category.edit", [
            'category' => $category
        ]);
    }
      public function editpost()
    {
        $id = request("categoryId");
        $name = request("name");
        $code = request("code");

        $category = inv_category::find($id);
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect('/inventory/category/');

    }
    public function delete()
    {
        $id = request("categoryId");
        $category = inv_category::find($id);
        $category->delete();
        Alert::setsucessmessage("category deleted");

        return redirect('/inventory/category/');


    }
}
