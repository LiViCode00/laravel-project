<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function add()
    {
        return view("pages.backend.categories.add");
    }
    public function postAdd(Request $request)
    {
        $request->validate(
            [
                "name" => "required|string|unique:categories",
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'unique' => ':attribute đã tồn tại'
            ],
            [
                'name' => 'Tên danh mục',
            ]
        );
        $category = new Category();
        $category->name = $request->name;
        $category->admin_id= Auth::guard('admin')->user()->id;
        $category->save();
        return redirect()->route('admin.category.list')->with('success', 'Thêm mới danh mục thành công');
    }

    public function listCategory()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(6);

        return view("pages.backend.categories.list", compact("categories"));
    }

    public function profile(Category $category)
    {
        return view("pages.backend.categories.profile");
    }


    public function edit(Category $category)
    {
        return view("pages.backend.categories.edit", compact("category"));
    }
    public function postEdit(Request $request, Category $category)
    {
        $request->validate(
            [
                "name" => "required|string|",
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.'
            ],
            [
                'name' => 'Tên danh mục',
            ]
        );
        $category->name = $request->name;
        $category->admin_id= Auth::guard('admin')->user()->id;
        $category->save();
        return redirect()->route('admin.category.list')->with('success', 'Cập nhật danh mục thành công');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.list')->with('success', 'Xóa danh mục thành công');
    }


    public function findcategory(Request $request)
    {
    }
}
