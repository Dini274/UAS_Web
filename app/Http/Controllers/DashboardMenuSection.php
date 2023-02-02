<?php

namespace App\Http\Controllers;

use App\Models\MenuSection;
use Illuminate\Http\Request;

class DashboardMenuSection extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menusection.menusection',[
            'menusection' => MenuSection::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menusection.postmenusection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'subtitle' => '',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }

        MenuSection::create($validateData);

        return redirect('/dashboard/menusection')->with('success','MenuSection has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuSection  $menusection
     * @return \Illuminate\Http\Response
     */
    public function show(MenuSection $menusection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuSection  $menusection
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuSection $menusection)
    {
        return view('admin.menusection.editmenusection',[
            'MenuSection' => $menusection
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuSection  $menusection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuSection $menusection)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'subtitle' => '',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }
        MenuSection::where('id',$menusection->id)
                ->update($validateData);

        return redirect('/dashboard/menusection')->with('success','MenuSection has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuSection  $MenuSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuSection $menusection)
    {
        // return $MenuSection;
        MenuSection::destroy($menusection->id);

        return redirect('/dashboard/menusection')->with('success','MenuSection has been delete');
    }
}
