<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public static function get_sites()
    {
        return Site::get();
    }

    public static function get_sites_categories(){
        $result = Site::join('categories', 'cites.Category', '=', 'categories.id')->get(['cites.*', 'categories.name as cname']);
        return ['sites_and_gategories' => $result];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sites.index', SiteController::get_sites_categories());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryController::get_categories();
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
        $categories = CategoryController::get_categories();
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
        return to_route('sites.index')->with('status', '¡Sitio Actualizado!');
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
