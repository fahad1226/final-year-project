<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::get();
        return response($categories);
    }
    public function store(CategoryRequest $request)
    {
        $input=$request->validated();
        $input['slug']=Str::slug($request->category_name,"-");
        Category::create($input);
       return response("Inserted Successfully");
        
    }
    public function show($slug)
    {
        $category=Category::where('slug',$slug)->firstorfail();
        return response()->json($category);
    }
    public function update(Request $request,Category $category)
    {
        
        $category->update($request->all());
        return response("Updated");
    }
    public function delete(Category $category)
    {
        $category->delete();
        return response("Deleted");
    }

}
