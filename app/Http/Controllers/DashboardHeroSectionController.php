<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class DashboardHeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.herosection.herosection',[
            'hero' => HeroSection::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.herosection.postherosection');
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

        HeroSection::create($validateData);

        return redirect('/dashboard/herosection')->with('success','HeroSection has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroSection  $herosection
     * @return \Illuminate\Http\Response
     */
    public function show(HeroSection $herosection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroSection  $herosection
     * @return \Illuminate\Http\Response
     */
    public function edit(HeroSection $herosection)
    {
        return view('admin.herosection.editherosection',[
            'HeroSection' => $herosection
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeroSection  $herosection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeroSection $herosection)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'subtitle' => '',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);
        HeroSection::where('id',$herosection->id)
                ->update($validateData);

        return redirect('/dashboard/herosection')->with('success','HeroSection has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroSection  $HeroSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroSection $herosection)
    {
        // return $HeroSection;
        HeroSection::destroy($herosection->id);

        return redirect('/dashboard/herosection')->with('success','HeroSection has been delete');
    }
}
