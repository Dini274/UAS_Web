<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class DashboardAboutSectionController extends Controller
{
    public function index()
    {
        return view('admin.aboutsection.aboutsection',[
            'about' => About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutsection.postaboutsection');
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

        About::create($validateData);

        return redirect('/dashboard/aboutsection')->with('success','About Section has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $aboutsection
     * @return \Illuminate\Http\Response
     */
    public function show(About $aboutsection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $aboutsection
     * @return \Illuminate\Http\Response
     */
    public function edit(About $aboutsection)
    {
        return view('admin.aboutsection.editaboutsection',[
            'about' => $aboutsection
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $aboutsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $aboutsection)
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
        About::where('id',$aboutsection->id)
                ->update($validateData);

        return redirect('/dashboard/aboutsection')->with('success','About Section has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $aboutsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $aboutsection)
    {
        // return $About;
        About::destroy($aboutsection->id);

        return redirect('/dashboard/aboutsection')->with('success','About Section has been delete');
    }
}
