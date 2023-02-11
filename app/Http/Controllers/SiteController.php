<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sites = Site::get();
        // $categories = Category::get(); 
        $resultCategories = Site::join('Categories', 'Sites.Category', '=', 'Categories.id')
               ->get(['Sites.*', 'Categories.name as cname']);
        $data = [
            'site' => $resultCategories
        ];
        return view('sites.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $data = [
            'site' => new Site(),
            'categories' => $categories
        ];
        return view('sites.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'url' => ['required'],
            'imageUrl' => ['required'],
            'category' => ['required']
        ]);
        Site::create($validated);
        return to_route('sites.index')->with('status', '¡Sitio Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Site::find($id);
        $categories = Category::get();
        return view('sites.edit', ['site' => $data, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'url' => ['required'],
            'imageUrl' => ['required'],
            'category' => ['required']
        ]);
        $data = Site::find($id);
        $data->update($validated);
        return to_route('sites.index')->with('status', '¡Post Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Site::find($id);
        $data->delete();
        return to_route('sites.index')->with('status', '¡Sitio Eliminado!');
    }
}
