<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('category.index')->with('categories', $categories);
    }
    public function show($id)
    {
        return view('category.index')->with('category', Category::find($id));
    }
    public function create(){
        return view('category.create');

    }
    public function store()
    {
            $data = request()->all();

            $categories = new Category();

            $categories->name = $data['name'];
            
            $categories->save();
            session()->flash('success', 'category created successfully');
            return redirect('/category');

    }
    public function edit($id)
    {
        return view('category.edit')->with('category', $categories);
    }
    public function update($id)
    {
        $data = request()->all();

        $categories->name = $data['name'];
            
        $categories->save();
        session()->flash('success', 'category updated successfully');
        return redirect('/category');
    }
    public function destroy (
        {
            
            $categories->delete();
            return redirect('/category');
        }
    )
}
