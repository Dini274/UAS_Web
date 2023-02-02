<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopAction;

class DashboardShopActionController extends Controller
{
    public function index()
    {
        return view('admin.shopactionsection.shopactionsection',[
            'shop' => ShopAction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shopactionsection.postshopactionsection');
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

        ShopAction::create($validateData);

        return redirect('/dashboard/shopaction')->with('success','ShopAction has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopAction  $shopaction
     * @return \Illuminate\Http\Response
     */
    public function show(ShopAction $shopaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopAction  $shopaction
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopAction $shopaction)
    {
        return view('admin.shopactionsection.editshopactionsection',[
            'shopaction' => $shopaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShopAction  $shopaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopAction $shopaction)
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
        ShopAction::where('id',$shopaction->id)
                ->update($validateData);

        return redirect('/dashboard/shopaction')->with('success','ShopAction has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopAction  $shopaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopAction $shopaction)
    {
        // return $ShopAction;
        ShopAction::destroy($shopaction->id);

        return redirect('/dashboard/shopaction')->with('success','ShopAction has been delete');
    }
}
