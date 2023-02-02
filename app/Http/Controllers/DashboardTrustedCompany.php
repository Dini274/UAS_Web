<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyTrusted;

class DashboardTrustedCompany extends Controller
{
    public function index()
    {
        return view('admin.trustedcompany.trustedcompany',[
            'trusted' => CompanyTrusted::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trustedcompany.posttrustedcompany');
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
            'images' => 'image|file|max:1024',
            'description' => 'required',
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }

        CompanyTrusted::create($validateData);

        return redirect('/dashboard/trustedcompany')->with('success','CompanyTrusted has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyTrusted  $trustedcompany
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyTrusted $trustedcompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyTrusted  $CompanyTrusted
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyTrusted $trustedcompany)
    {
        return view('admin.trustedcompany.edittrustedcompany',[
            'trustedcompany' => $trustedcompany
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyTrusted  $trustedcompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyTrusted $trustedcompany)
    {
        $validateData =  $request->validate([
            'description' => 'required',
            'images' => 'image|file|max:1024',
        ]);
        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }
        CompanyTrusted::where('id',$trustedcompany->id)
                ->update($validateData);

        return redirect('/dashboard/trustedcompany')->with('success','TrustedCompany has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyTrusted  $trustedcompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyTrusted $trustedcompany)
    {
        // return $CompanyTrusted;
        CompanyTrusted::destroy($trustedcompany->id);

        return redirect('/dashboard/trustedcompany')->with('success','TrustedCompany has been delete');
    }
}
